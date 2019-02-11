<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
$titulo = "Blog Py";
include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
?>    
    <div class='container'>
            <div class='jumbotron'>
                <h1>Blog de Paraguay</h1>
                <p>
                    Blog dedicado a la programacion y al desarrollo.
                </p>
            </div>
        </div>    
        
            <div class='container'>
                <div class='row'>
                    <div class='col-md-4'>
                        <div class='row'>
                            <div class='col-md-12'>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Busqueda
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <input type="search" class="form-control" placeholder="¿Que buscas?">
                                        </div>
                                        <button class="form-control">Buscar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-filter" aria-hidden="true"></span> Filtro
                                    </div>
                                    <div class="panel-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Archivo
                                    </div>
                                    <div class="panel-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class='col-md-8'>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <span class="glyphicon glyphicon-time" aria-hidden="true"></span> Ultimas entradas
                        </div>
                        <div class="panel-body">
                            <p>Todavia no hay entradas que mostrar</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include_once 'plantillas/documento-cierre.inc.php';
?>

        