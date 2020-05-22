<?php
    require_once "./lib/db.php";
    $conn=conexion();
    $cursos=getCursos($conn);
?>
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
    <h1>Listado de cursos</h1>
    <ul>
    <?php
        foreach ($cursos as $curso){
            ?>
                <a href="detalle.php?id=<?=$curso["id"]?>"><li><?=$curso["titulo"]?></li></a>
            <?php
        } 
    ?>
    </ul>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>