<!DOCTYPE html>
<html lang = "es"> <!-- p/ que un robot reconozca la pagina como español-->
    <head>
        <meta charset="UTF-8"> <!--p/ reconocer todo tipo de caracteres-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- p/ cargar en internet explorer-->
        <meta name="viewport" content="width=device-width, initial-scale=1"> <!--p/ cargar c/ cualquier tamaño de pantalla-->
        
        <?php
        if (!isset($titulo) || empty($titulo)){
            $titulo = 'Blog Py';
        }
        echo "<title>$titulo</title>";
        
        
        ?>
        <link href="css/bootstrap.min.css" rel="stylesheet"> <!-- p/ buscar libreria bootstrap "señalar tipo de archivo" "stylesheet"-->
        <link href="css/estilos.css" rel="stylesheet"> <!-- llama a la carpeta estilos-->

    </head>

    <body>