<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Productos</title>
</head>
<body>

    <table id="idPqrsd" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Compañia</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($providers as $provider)
              <tr>
                  <td>{{$provider->id}}</td>
                  <td>{{$provider->Name}}</td>
                  <td>{{$provider->Company}}</td>

                  <td><a href="{{route('provider.show',$product->id)}}">Mostrar</a></td>

                  <td><a href="{{route('provider.edit',$product->id)}}">Editar</a></td>
                  <td>
                  <form action="{{route('provider.destroy',$product->id)}}" method="POST">
                      @csrf
                      @method('delete')
                    <button type="submit">Eliminar</button>
                  </form>
                  <br>
                 </td>

              </tr>
          @endforeach
        </tbody>

    </table>


</body>
</html>