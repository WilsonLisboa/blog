<?php
Conexion :: abrir_conexion();
$total_usuarios = RepositorioUsuario :: obtener_numero_usuarios(Conexion::obtener_conexion()); //contador de numeros*/
Conexion::cerrar_conexion();
?>
<nav class="navbar navbar-default navbar-static-top"> <!-- clase navbar (barra de naviegacion) navbar-defauld (diseño estandard) static top (estatico arriba)-->
            <div class="container">
                <div class="navbar-header"> <!-- titular de la barra de navegacion -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <!-- atributos de la barra de navegacion javascript -->
                        <span class="sr-only">Este boton despliega la barra de navegacion</span> <!-- menu para ciegos -->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="navbar-brand" href="#"> Blog.py </a> <!-- cabeza de la barra de navegacion -->                   
                </div>

                <div id="navbar" class="navbar-collapse collapse"> <!-- sirve para las pantallas chicas despliega un boton p/ desplegar el menu de barra de navegacion-->
                    <ul class= "nav navbar-nav"> <!-- crea una lista desordenada especial para barra buscadora-->

                        <li><a href="#"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>Entradas</a></li> <!-- Menu de barra de navegacion -->
                        <li><a href="#"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>Favoritos</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-education" aria-hidden="true"></span>Autores</a></li>    

                    </ul> <!-- ul = unordered list es decir lista desordenada-->
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>                                
                                <?php
                                echo $total_usuarios;
                                ?>
                            </a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Iniciar Sesion</a></li>
                        <li><a href="registro.php"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Registro</a></li>
                    </ul>
                </div>
            </div> <!-- etiqueta de bloque de contenido -->
        </nav>
