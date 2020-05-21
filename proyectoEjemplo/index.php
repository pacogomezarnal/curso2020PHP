<?php
    require_once "./lib/datosArray.php";
?>
<?php
    include_once "./template/head.php";
?>
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
<?php
    include_once "./template/foot.php";
?>