<?php
include_once 'app/Conexion.inc.php';
include_once 'app/RepositorioUsuario.inc.php';
include_once 'app/ValidadorRegistro.inc.php';

if (isset($_POST['enviar'])){
    $validador = new ValidadorRegistro($_POST['nombre'], 
            $_POST['email'], $_POST['clave1'], $_POST['clave2']); /*guarda el nombre al apretar el boton enviar*/

    if ($validador -> registro_valido()){
        echo "!TODO CORRECTO!";
    }
}
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
                        <?php
                        if (isset($_POST['enviar'])){
                            include_once 'plantillas/registro_validado.inc.php';
                        }else {
                            include_once 'plantillas/registro_vacio.inc.php';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include_once 'plantillas/documento-cierre.inc.php';
?>
