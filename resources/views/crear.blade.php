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
        <h2 class="center-align">Agregar Pieza</h2>
    <form action="{{route('create')}}" method="GET">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="">
            
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" id="">
            
            <label for="">Cantidad</label>
            <input type="text" name="cantidad" id="">
            
            <label for="">Costo</label>
            <input type="text" name="costo" id="">
            
            <div class="center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Guardar
                  </button>
            </div>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>