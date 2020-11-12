<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <nav>
        <div class="nav-wrapper">
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{route('crear_vista')}}">Crear Pieza</a></li>
            <li><a href="{{route('listado')}}">Listado</a></li>
          </ul>
        </div>
      </nav>
    <div class="container">
        <h2 class="center-align">Listado de Relaciones</h2>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>descripcion</th>
                        <th>cantidad</th>
                        <th>costo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($piezas as $p)
                    <tr>
                    <td><a href="{{route('vista_editar',$p->id)}}">{{$p->nombre}}</a></td>
                        <td>{{$p->descripcion}}</td>
                        <td>{{$p->cantidad}}</td>
                        <td>{{$p->costo}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>