<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>dwes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="..">dwes</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="..">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Bikes</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main">
            <div class="jumbotron">
                <div class="container">
                    <h4 class="display-4">bikes</h4>
                </div>
            </div>
            <div class="container">
                                <div class="row">
                    <h3>Listado de Bikes</h3>
                </div>
                <table class="table table-striped table-hover" id="tablaProducto">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Precio</th>
                                                            <th>Borrar</th>
                                <th>Editar</th>
                                                            <th>Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                                                        <tr >
                                    <td>1</td>
                                    <td>Bicicleta 1</td>
                                    <td>180<td
                                                                            <td><a href="{{ url('bike/1') }}" class = "borrar">Borrar</a></td>
                                        <td><a href="{{ url('bike/1/edit') }}">Editar</a></td>
                                                                            <td><a href="{{ url('bike/1') }}">Ver</a></td>
                                </tr>
                                                                <tr >
                                    <td>2</td>
                                    <td>Bicicleta 2 </td>
                                    <td>120</td>
                                                                            <td><a href="{{ url('bike/2') }}" class = "borrar">Borrar</a></td>
                                        <td><a href="{{ url('bike/2/edit') }}">Editar</a></td>
                                                                            <td><a href="{{ url('bike/2') }}">Ver</a></td>
                                </tr>
                                                    </tbody>
                </table>
                <div class="row">
                                            <a href="{{ url('bike/create') }}" class="btn btn-success">agregar bike</a>
                                        </div>
                <hr>
            </div>
        </main>
        <footer class="container">
        </footer>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
    </body>
</html>