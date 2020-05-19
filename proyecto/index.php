<?php
//Definicion de ingredientes
$ingredientes1=[
    "nombre"=>"lechuga",
    "cantidad"=>"100gr"
];
$ingredientes2=[
    "nombre"=>"tomate",
    "cantidad"=>4
];
$ingredientes3=[
    "nombre"=>"arroz",
    "cantidad"=>"500gr"
];
//Definicion de los platos
$platos=[];
$plato1=[
    "titulo"=>"Ensalada tomate",
    "numero"=>4,
    "tipo"=>"entrante",
    "ingredientes"=>[]
];
$plato1["ingredientes"][]=$ingredientes1;
$plato1["ingredientes"][]=$ingredientes2;
$plato2=[
    "titulo"=>"Paella Valenciana",
    "numero"=>4,
    "tipo"=>"primero"
];
$plato2["ingredientes"][]=$ingredientes3;
//Añado los platos
$platos[]=$plato1;
$platos[]=$plato2;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bar Paco</title>
</head>
<body>
    <?php
    foreach($platos as $plato){
        foreach($plato as $clave => $valor){
            if($clave==="ingredientes"){
                foreach($ingredientes as $ingrediente){
            }
        }
    }
    ?>
</body>
</html>