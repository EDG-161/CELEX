<?php
include '../bd.php';
if(isset($_POST['ApPat'])){
    //Datos
    
    $apellidoPaterno = $_POST['ApPat'];
    $apellidoMaterno = $_POST['ApMat'];
    $sexo = $_POST['sex'];
    $nombre = $_POST['Nom'];
    $fecha = date('d-m-Y', strtotime($_POST['Nac']));
    $RFC = $_POST['RFC'];
    $CURP= $_POST['CURP'];
    $grupo = $_POST['grupo'];

    // Contacto 
    
    $celular = $_POST['Cel'];
    $telefonoCasa = $_POST['Casa'];
    $email = $_POST['Cor'];
    
    //Direccion
    
    $codigoPostal = $_POST['CP'];
    $colonia = $_POST['Col'];
    $alcaldia = $_POST['Del'];
    $estado = $_POST['Edo'];
    $calle = $_POST['Cal1'];
    $calle2 = $_POST['Cal2'];
    $numeroEx = $_POST['NumExt'];
    $numeroIn = $_POST['NumInt'];
    

    
    $user = [$nombre,$apellidoPaterno,$apellidoMaterno,$fecha,$sexo, $RFC, $CURP, $grupo];

    $contacto = [$celular,$telefonoCasa,$email];
    
    $direccion= [$codigoPostal,$colonia,$alcaldia,$estado,$calle,$calle2,$numeroEx,$numeroIn];
    
    
    
    $registro = agregarMaestro($user,$contacto,$direccion);
}