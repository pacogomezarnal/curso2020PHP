<?php
//Definiriamos nuestros arrays
$curso=[];
$grupos=[];
$alumnos=[];
//Definimos el curso
$curso=[
    "titulo"=>"curso PHP",
    "fecha_ini"=>"19/05/2020",
    "fecha_fin"=>"03/06/2020",
    "grupos"=>[]
];
//Definimos dos grupos
$grupo1=[
    "numero"=>10,
    "alumnos"=>[]
];
$grupo2=[
    "numero"=>5,
    "alumnos"=>[]
];
//Definimos alumnos
$alumno1=[
    "nombre"=>"Paco",
    "apellidos"=>"Gomez Arnal",
    "email"=>"paco.gomez.arnal@gmail.com"
];
$alumno2=[
    "nombre"=>"Luis",
    "apellidos"=>"Piedraita",
    "email"=>"luis.piedra@gmail.com"
];
$alumno3=[
    "nombre"=>"Marta",
    "apellidos"=>"Gonzalez",
    "email"=>"marta.gonz@gmail.com"
];
//Anyadimos todos los elementos
$curso["grupos"][]=$grupo1;
$curso["grupos"][]=$grupo2;
$curso["grupos"][0]["alumnos"][]=$alumno1;
$curso["grupos"][0]["alumnos"][]=$alumno2;
$curso["grupos"][1]["alumnos"][]=$alumno3;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <title>Document</title>
</head>
<body>
    <h2>Listado de cursos</h2>
    <!-- Listado de cursos -->
    <div class="container">
        echo '<div class=\"row\">';   
        <?php
        foreach($curso as $cursoClave => $cursoItem){
            if($cursoClave==="grupos"){
                echo "<br>";
                echo "------------------";
                foreach($cursoItem as $grupoArray){
                    //Notice: Array to string conversion in C:\xampp\htdocs\phpCurso\proyectoEjemplo\index.php on line 63
                    //var_dump($cursoItem);
                    //die;
                    foreach($grupoArray as $grupoClave => $grupoItem){
                        if($grupoClave==="alumnos"){
                        }else{
                            echo $grupoItem;
                            echo "<br>";
                            // die nos permitiria parar el código en un determinado punto de ejecución.
                        }
                    }
                }
            }else{
                echo $cursoItem;
                echo "<br>";
                // die nos permitiria parar el código en un determinado punto de ejecución.
            }
            echo '</div>';
        }
        ?>
        </div>
    </div>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>