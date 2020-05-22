<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Proyecto ejemplo</title>
</head>
<body>
<?php include "./template/head.php"?>
    <div class="container">
    <div class="row">
        <form class="col s12" method="post" action="insertarCurso.php">
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="Titulo" id="titulo" name="titulo" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
            <input placeholder="Descripcion" id="descripcion" name="descripcion" type="text" class="validate">
            </div>
        </div>
        <div class="row">
            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
            </button>
        </div>
        </form>
    </div>
    </div>
            
</body>
</html>