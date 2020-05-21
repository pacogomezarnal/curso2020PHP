<?php
function conexion(){
    $conector = new mysqli("localhost", "root", "", "cursos");
    return $conector;
}
function getCursos(){
    $conector->query("SELECT * FROM curso");
}