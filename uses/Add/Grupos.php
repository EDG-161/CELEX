<?php

if(isset($_POST)){
    include '../bd.php';
    $name=$_POST['name'];
    $level = $_POST['level'];
    agregarGrupo($level,$name);
    
}

?>