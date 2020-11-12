<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
      </nav>
    <div class="container"> <div>
        <button id="elimina_pieza" class="right btn-floating btn-large waves-effect waves-light red">
            <i class="material-icons">delete</i>
                      </button>
        <h2 class="center-align">Pieza - {{$piezas->nombre}}</h2>
    </div>
<form action="{{route('editar')}}" method="GET">
    <input type="hidden" name="id" value="{{$piezas->id}}">
            <label for="">Nombre</label>
            <input type="text" name="nombre" value="{{$piezas->nombre}}" id="">
            
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" value="{{$piezas->descripcion}}" id="">
            
            <label for="">Cantidad</label>
            <input type="text" name="cantidad" value="{{$piezas->cantidad}}" id="">
            
            <label for="">Costo</label>
            <input type="text" name="costo" value="{{$piezas->costo}}" id="">
            
            <div class="center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Editar
                  </button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $("#elimina_pieza").click(function () {
        var txt;
        if (confirm("¿Estas seguro de que quieres Eliminar?")) {
            window.location.replace("{{route('elimina',$piezas->id)}}");
        }
    });
</script>
</html>