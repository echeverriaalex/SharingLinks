<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php require_once("nav.php"); ?>
        <h1> Bienvenido a Sharing links </h1>
        <p> Donde puedes guardar links en la nube y ver todos los links guardados por usuarios </p>
        <form method="get" action="<?php echo FRONT_ROOT ?>Link/Add">
            <input name="link" type="text" placeholder="Pega tu link aqui">
           
            <input name="fecha" value="<?php echo date("d/m/Y");?>">
            <button type="submit"> Guardar enlace </button>
        </form>    
    </body>
</html>