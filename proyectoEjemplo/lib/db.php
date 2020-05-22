<?php
function conexion(){
        $conector = new mysqli("localhost", "root", "", "cursos");
        return $conector;
}
/*
Funcion que devuelve un mysqli_result con todos los cursos
Si existe error devuelve FALSE
*/
function getCursos($conector){
    $resultado = $conector->query("SELECT id,titulo FROM curso");
    return $resultado;
}
function getCurso($conector,$id){
    $resultadoObj = $conector->query("SELECT * FROM curso WHERE id=$id");
    if($resultadoObj ==false){
        header('Location: index.php?msg=noId');
    }
    $resultado=$resultadoObj->fetch_assoc();
    return $resultado;
}
/*
Funcion que devuelve un mysqli_result con titulo de curso y nombre de especialidad
Si existe error devuelve FALSE
*/
function getCursosConEspecialidad($conector){
    $resultado = $conector->query("SELECT curso.titulo, especialidad.nombre 
    FROM curso INNER JOIN 
    especialidad ON curso.id_especialidad = especialidad.id;");
    return $resultado;
}