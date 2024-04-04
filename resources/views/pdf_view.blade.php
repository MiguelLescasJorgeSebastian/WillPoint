<!DOCTYPE html>
<html>
<head>
    <title>Reporte Mensual</title>
</head>
<body>
    <h1>Reporte Mensual</h1>

    @foreach ($registros as $registro)
        <p>{{ $registro->monto_inicial }} - {{ $registro->monto_final }}</p>
    @endforeach
</body>
</html>
