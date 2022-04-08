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
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Cedula</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->nombres }}</td>
                    <td>{{ $alumno->apellidos }}</td>
                    <td>{{ $alumno->correo }}</td>
                    <td>{{ $alumno->cedula }}</td>
                    <td>{{ $alumno->estado }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
