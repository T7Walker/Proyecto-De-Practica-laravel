<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos del proveedor</title>
</head>
<body>

<form action="{{ route('providersPage.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="name">
    <br>
    <label>Empresa:</label>
    <input type="text" name="Company">
    <br><br>
    <button type="submit">Enviar Formulario</button>
    
</form>

</body>
</html>