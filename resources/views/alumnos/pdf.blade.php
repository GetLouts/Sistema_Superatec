<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alumnos registrados PDF</title>
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ public_path('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <table class="table table-striped mt-2">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pago</th>
                <th>Fecha de Pago</th>
                <th>Numero de Referencia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($metodohasalumnos as $metodohasalumno)
                <tr>
                    <td>{{ $metodohasalumno->id }}</td>
                    <td>{{ $metodohasalumno->pago }}</td>
                    <td>{{ $metodohasalumno->fecha_pago }}</td>
                    <td>{{ $metodohasalumno->numero_referencia }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>