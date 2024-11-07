<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Proveedores</title>
    <style>
        /* Estilos básicos */
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .actions {
            display: flex;
            gap: 10px;
        }
        .actions a, .actions form button {
            text-decoration: none;
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 4px;
            border: none;
        }
        .actions form button {
            background-color: red;
        }
        .actions a:hover, .actions form button:hover {
            background-color: darkblue;
        }
    </style>
</head>
<body>

    <h1>Lista de Proveedores</h1>

    <!-- Tabla para mostrar los proveedores -->
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Compañía</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($providers as $provider)
            <tr>
                <td>{{ $provider->id }}</td>
                <td>{{ $provider->Name }}</td>
                <td>{{ $provider->Company }}</td>
                <td class="actions">
                    <!-- Enlace para mostrar detalles del proveedor -->
                    <a href="{{ route('providersPage.show', $provider->id) }}">Mostrar</a>

                    <!-- Enlace para editar el proveedor -->
                    <a href="{{ route('providersPage.edit', $provider->id) }}">Editar</a>

                    <!-- Formulario para eliminar el proveedor -->
                    <form action="{{ route('providersPage.delete', $provider->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este proveedor?');">
                        @csrf
                        @method('delete')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
