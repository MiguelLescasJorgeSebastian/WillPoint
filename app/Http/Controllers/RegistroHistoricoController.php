<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use App\Models\Ganancia;
use App\Models\RegistroHistorico;
use Illuminate\Http\Request;

class RegistroHistoricoController extends Controller
{
    public function index()
    {
        $re_ganancia = Estadistica::all();
        $ganancias= $re_ganancia->pluck('ganancia')->toArray();
        $dias = $re_ganancia->pluck('dia')->toArray();
        $registrosHistoricos = RegistroHistorico::all();
        $montosIniciales = $registrosHistoricos->pluck('monto_inicial')->toArray();
        $montosFinales = $registrosHistoricos->pluck('monto_final')->toArray();


        $diasDeLaSemana = $registrosHistoricos->map(function ($registro) {
            $dia = date('N', strtotime($registro->created_at));
            $nombresDeDias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
            return $nombresDeDias[$dia - 1];
        })->toArray();

        // Calcular el total y las ganancias
        $total = array_sum($montosFinales);
        $ganancias = $total - array_sum($montosIniciales);

        return view('asistente.index', compact('montosIniciales', 'montosFinales', 'total','ganancias','dias', 'diasDeLaSemana'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'monto_inicial' => 'required|numeric',
            'monto_final' => 'required|numeric',
            'user_id' => 'required|exists:users,id',
        ]);



                // Calcular la ganancia
            $ganancia = $request->monto_final - $request->monto_inicial;

            // Obtener el día actual en formato de cadena
            $dia = date('N');
            $nombresDeDias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
            $nombreDia = $nombresDeDias[$dia - 1];

            // Guardar la ganancia en el modelo Ganancia
            Estadistica::create([
                'dia' => $nombreDia,
                'ganancia' => $ganancia,
            ]);

        return response()->json(['message' => 'Registro exitoso'], 200);

    }

}
