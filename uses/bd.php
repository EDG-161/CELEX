<?php 

$host = "localhost";

$puerto = "3306";

$usuario = "root";

$contrasena = "n0m3l0";

$baseDeDatos ="celex";

 
function Conn(){

    global $host, $puerto, $usuario, $contrasena, $baseDeDatos;

    if (!($link = mysqli_connect($host.":".$puerto, $usuario, $contrasena))) { 
        exit(); 
    }
     else{
     }
     if (!mysqli_select_db($link, $baseDeDatos)) {  
        exit(); 
     }
     else{
        
     }
    return $link; 
    mysql_close($link);
} 

function agregarAlumno($user,$contacto,$direccion,$Examen,$infoAc,$Emergencia){
    $conn = Conn();
    
    $dirSQL = "INSERT INTO mdirecciones (cod_pos, col, cal1, cal2, numi, nume, id_del, estate,boleta) values('".$direccion[0]."','".$direccion[1]."','".$direccion[4]."','".$direccion[5]."','".$direccion[7]."','".$direccion[6]."','".$direccion[2]."','".$direccion[3]."','".$user[5]."')";
     
    
    $sql = "INSERT INTO malumno (bol_alu, Nombre, apep, apem, fech_na, id_sex, email, id_grupo, tipo_alu, id_grado, esc_pr)
    VALUES ('".$user[5]."','".$user[0]."', '".$user[1]."', '".$user[2]."','".$user[3]."', ".$user[4].", '".$contacto[4]."', '1','".$infoAc[0]."','".$infoAc[1]."','".$infoAc[2]."')";
    
    $consql = "INSERT INTO ccontacto (boleta, celular, telefonoCasa, telefonoTrabajo, extencion) values ('".$user[5]."','".$contacto[0]."','".$contacto[1]."','".$contacto[2]."','".$contacto[3]."')";
    
    $emrsql = "INSERT INTO mcontactoemergencia (boleta, nombre, appat, apmat, paren, celularemer) values('".$user[5]."','".$Emergencia[0]."','".$Emergencia[1]."','".$Emergencia[2]."','".$Emergencia[3]."','".$Emergencia[4]."')";
    
    if ($conn->query($dirSQL) === TRUE && $conn->query($sql) === TRUE && $conn->query($consql) === TRUE && $conn->query($emrsql) === TRUE) {
        header('Location: /CELEX/Alumnos.php');
    } else {
        echo "ha habido un error";
    }
    
}

function editarUsuario($user){
    $conn = Conn();
    
    $sql = "UPDATE musuario SET nom_usr ='".$user[1]."', ape_usr='".$user[2]."', fec_usr='".$user[3]."', id_pais=".$user[4]." ,id_sex=".$user[5].", pas_usr='".$user[6]."', ema_usr='".$user[7]."', id_per=".$user[8]."  where id_usr=".$user[0];

    if ($conn->query($sql) === TRUE) {
        echo "Usuario Actualizado";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 

}

function eliminarUsuario($id){
    $conn = Conn();
    
    $sql = "DELETE FROM musuario WHERE id_usr=".$id;

    if ($conn->query($sql) === TRUE) {
        echo "Usuario Eliminado";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

function getGrupo($grupo){
    $conn = Conn();
    
    $sql = "SELECT * FROM `mgrupos` where id_grupo=".$grupo;
    
    return $conn->query($sql)->fetch_assoc();
}

function getAllAlumnos($order){
    $conn = Conn();
    
    $sql = "SELECT * FROM `malumno`";
    return $conn->query($sql);
}

function getAllPaises($order){
    $conn = Conn();
    
    $sql = "SELECT * FROM `cpaises`";
    return $conn->query($sql)->fetch_assoc();
}

function getAlumno($order){
    $conn = Conn();
    
    $sql = "SELECT * FROM `malumno` where bol_alu=".$order;
    return $conn->query($sql);
}

function getContacto($order){
    $conn = Conn();
    
    $sql = "SELECT * FROM `ccontacto`";
    echo $sql;
    return $conn->query($sql);
}

function getDir(){
    $conn = Conn();
    
    $sql = "SELECT * FROM `mdirecciones`";
    echo $sql;
    return $conn->query($sql);
}

function getInf(){
    $conn = Conn();
    
    $sql = "SELECT * FROM `mdirecciones`";
    return $conn->query($sql);
}

function getConE(){
    $conn = Conn();
    
    $sql = "SELECT * FROM `mcontactoemergencia`";
    return $conn->query($sql);
}

function getProf(){
    $conn = Conn();
    
    $sql = "SELECT * FROM `mmaestros`";

    return $conn->query($sql);
}

function getNiv(){
    $conn = Conn();
    
    $sql = "SELECT * FROM `niveles`";
    return $conn->query($sql);
}

function vefUser($user){
    $conn = Conn();
    
    $sql = "SELECT * FROM `musuario` where ema_usr='".$user[0]."' and pas_usr='".$user[1]."'";
    $us = $conn->query($sql)->fetch_assoc();
    if($us!=null){
        return [$us["id_usr"],$us["nom_usr"],$us["id_per"]];
    }
}

function agregarGrupo($nivel,$nombre){
    $conn = Conn();
    $sql = "INSERT INTO mgrupos(nivel,plantel)
    VALUES ('".$nivel."','".$nombre."')";

    echo $sql;
    if ($conn->query($sql) === TRUE) {
        echo "Registrado";
    } else {
        echo "ha habido un error";
    }
}

function getGrupos(){
    $conn = Conn();
    
    $sql = "SELECT * FROM `mgrupos`";
    return $conn->query($sql);
}

function agregarMaestro($user, $contacto, $direccion){
    $conn = Conn();
    $sql = "INSERT INTO mmaestros(nombre, apep, apem, fec_nac, id_sex, RFC, CURP, email, id_grupo)
    VALUES ('".$user[0]."','".$user[1]."', '".$user[2]."', '".$user[3]."','".$user[4]."','".$user[5]."','".$user[6]."','".$contacto[2]."', ".$user[7].")";

    $dirSQL = "INSERT INTO mdirecciones (cod_pos, col, cal1, cal2, numi, nume, id_del, estate,boleta) values('".$direccion[0]."','".$direccion[1]."','".$direccion[4]."','".$direccion[5]."','".$direccion[7]."','".$direccion[6]."','".$direccion[2]."','".$direccion[3]."','".$user[5]."')";
    

    
    $consql = "INSERT INTO ccontacto (boleta, celular, telefonoCasa, telefonoTrabajo, extencion) values ('".$user[5]."','".$contacto[0]."','".$contacto[1]."','".$contacto[2]."','".$contacto[3]."')";

    echo $sql."<br>";    
    echo $dirSQL."<br>";
    echo $consql."<br>";


    if ($conn->query($dirSQL) === TRUE && $conn->query($sql) === TRUE && $conn->query($consql) === TRUE) {
        echo "Registrado";
    } else {
        echo "ha habido un error";
    }
}

function agregarpago($pagos, $movimiento){
    $conn = Conn();
    $sql = "INSERT INTO Mpagos(tipo_pago, des_pago)
    VALUES ('".$pagos[0]."','".$pagos[1]."')";

    $dirSQL = "INSERT INTO mdirecciones (cod_pos, col, cal1, cal2, numi, nume, id_del, estate,boleta) values('".$direccion[0]."','".$direccion[1]."','".$direccion[4]."','".$direccion[5]."','".$direccion[7]."','".$direccion[6]."','".$direccion[2]."','".$direccion[3]."','".$user[5]."')";

    echo $sql."<br>";    
    echo $dirSQL."<br>";



    if ($conn->query($dirSQL) === TRUE && $conn->query($sql) === TRUE ) {
        echo "Registrado";
    } else {
        echo "ha habido un error";
    }
}

?>