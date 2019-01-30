<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';

$titulo = "Registro";

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

?>
<div class="container">
    <div class="jumbotron">
        <h1 class="text-center">Formulario de Registro</h1>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Instrucciones
                    </h3>
                </div>
                <div class="panel-body">
                    <br>
                    <p class="text-justify">
                        Para unirte al Blog de Paraguay
                        Indroduce un nombre de usuario,
                        tu email y una contraseña. El email
                        que escribas debe de ser real ya que
                        la necesitaras para gestionar tu
                        cuenta.
                        Te recomendamos que uses contraseñas
                        que contengan letras minusculas,
                        mayusculas, numeros y simbolos
                    </p>
                    <br>
                    <a href="#">¿Ya tienes cuenta?</a>
                    <br>
                    <br>
                    <a href="#">¿Olvidaste tu Contraseña?</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Introduce tus datos
                    </h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                        <div class="form-group">
                            <label>Nombre de Usuario</label>
                            <input type="text"class="form-control" name="nombre" placeholder="Usuario">
                        </div>


                        <div class="form-group">
                            <label>Email</label>
                            <input type="email"class="form-control" name="email" placeholder="usuario@mail.com">
                        </div>


                        <div class="form-group">
                            <label>Contraseña</label>
                            <input type="password"class="form-control" name="clave1">
                        </div>


                        <div class="form-group">
                            <label>Repite la contraseña</label>
                            <input type="password"class="form-control" name="clave2">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-default btn-primary" name="enviar">Enviar Datos</button>
                        <button type="reset" class="btn btn-default btn-primary" name="limpiar">Limpiar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
