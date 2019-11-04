<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contacto</title>
</head>
<body>
<div class="container">
    <h1 class="text-center">Pagina de contacto</h1>
    <div class="row">
        <div class="col-4">
        <form method="POST" action="{{route('guardarContacto')}}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre"  placeholder="Ingrese el nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido"  placeholder="Ingrese el apellido" name="apellido">
            </div>
            <div class="form-group">
                <label for="nacionalidad">Nacionalidad</label>
                <input type="text" class="form-control" id="nacionalidad"  placeholder="Ingrese la nacionalidad" name="nacionalidad">
            </div>
            <div class="form-group">
                <label for="genero">Genero</label>
                <select class="form-control" id="genero" name="sexo">
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>

                </select>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" id="telefono"  placeholder="Ingrese el telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion</label>
                <input type="text" class="form-control" id="direccion"  placeholder="Ingrese la direccion" name="direccion">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
        </div>
        <div class="col-8">
            <table class="table table-dark">
                <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Nacionalidad</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Accion</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contactos as $contacto)
                <tr>
                    <th>{{$contacto->nombre}}</th>
                    <th>{{$contacto->apellido}}</th>
                    <th>{{$contacto->nacionalidad}}</th>
                    <th>{{$contacto->sexo}}</th>
                    <th>{{$contacto->telefono}}</th>
                    <th>{{$contacto->direccion}}</th>
                    <th><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarproducto{{$contacto->id}}">
                            <i class="material-icons">close</i>
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="eliminarproducto{{$contacto->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que deseas eliminar esta categoria?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" class="btn btn-danger"><a href="{{url('/eliminar-categoria/'.$contacto->id)}}">Eliminar</a></button>
                                    </div>
                                </div>
                            </div>
                        </div></th>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
