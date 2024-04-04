<?php

namespace App\Http\Controllers;

use App\Models\Estadistica;
use App\Models\Ganancia;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\RegistroHistorico; // Asegúrate de usar el modelo correcto para tus registros
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class PDFController extends Controller
{
    public function generatePDF()
    {
        // Obtén los registros de este mes
        $registros = RegistroHistorico::whereMonth('created_at', date('m'))->get();
        $ganancias = Estadistica::whereMonth('created_at', date('m'))->get();

        // Carga la vista 'pdf_view' con los registros y conviértela en un PDF
        $pdf = FacadePdf::loadView('pdf_view', compact('registros'));

        // Descarga el PDF con el nombre 'reporte-{fecha_actual}.pdf'
        return $pdf->download('reporte-' . date('Y-m-d') . '.pdf');
    }
}
