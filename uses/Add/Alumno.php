<?php
include '../bd.php';
if(isset($_POST['ApPat'])){
    //Datos
    
    $apellidoPaterno = $_POST['ApPat'];
    $apellidoMaterno = $_POST['ApMat'];
    $nombre = $_POST['Nom'];
    $fecha = date('d-m-Y', strtotime($_POST['Nac']));
    $sexo = $_POST['sex'];
    
    // Contacto 
    
    $celular = $_POST['Cel'];
    $telefonoCasa = $_POST['Casa'];
    $telefonoTrabajo =$_POST['TelTra'];
    $extencion = $_POST['ext'];
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
    
    // Examen de Colocación 
    
    $nivelAsignado = $_POST['Nivel'];
    $fechaExamen = date('d-m-Y',strtotime($_POST['Aplicacion']));
    
    //Informacion academica
    
    $tipoAlumno = $_POST['tipoAlu'];
    
    $escuelaProcedencia = $_POST['Escuela'];
    
    // Contacto de Emergencia
    
    $nombreEmer = $_POST['NomsCon'];
    $apPatEmer = $_POST['ApPatCon'];
    $apMatEmer = $_POST['ApMatCon'];
    $parentezco = $_POST['pariente'];
    $celularEmer = $_POST['CelularContacto'];
    
    $boleta = GenerarBoleta();
    
    $user = [$nombre,$apellidoPaterno,$apellidoMaterno,$fecha,$sexo,$boleta];
    $contacto = [$celular,$telefonoCasa,$telefonoTrabajo,$extencion,$email];
    
    $direccion= [$codigoPostal,$colonia,$alcaldia,$estado,$calle,$calle2,$numeroEx,$numeroIn];
    
    $Examen = [$nivelAsignado,$fechaExamen];
    
    $infoAc = [];
    
    //|Clasificacion Del alumno
        
    if($tipoAlumno == "1"){
        $nivelIpn = $_POST['escIpn'];
        $carrera = $_POST['Nombre_carrera'];
        $infoAc = [$tipoAlumno,$nivelIpn,$escuelaProcedencia,$carrera];
    }else{
        $ultimo = $_POST['UltimoGrado'];
        $infoAc = [$tipoAlumno,$ultimo,$escuelaProcedencia];
    }
    
    $Emergencia = [$nombreEmer,$apPatEmer,$apMatEmer,$parentezco,$celularEmer];
    

    if (validarNombreAlumno($nombre,$apellidoPaterno,$apellidoMaterno)) {
        //$registro = agregarAlumno($user,$contacto,$direccion,$Examen,$infoAc,$Emergencia);    
    }else{
        header('Location: /CELEX/Alumnos.php?e=1&m=El alumno esta registrado');
    }
    
    
}

function AsignarGrupo(){
    //Esto estará cuando haga el registro de grupos.
}

function validarNombreAlumno($nombre, $apellidoPaterno, $apellidoMaterno){
    $alumnos = getAllAlumnos($nombre);
    if($alumnos != null){
        foreach ($alumnos as $alu) {
            echo strcmp($alu['Nombre'],$nombre). strcmp($alu['apep'],$apellidoPaterno) . strcmp($alu['apem'],$apellidoMaterno);
            echo $alu['Nombre']. $alu['apep'].$alu['apem'];
            if (strcmp($alu['Nombre'],$nombre)==0 && strcmp($alu['apep'],$apellidoPaterno)==0 && strcmp($alu['apem'],$apellidoMaterno)==0) {
                
                return false;
                break;
            }
        }
        return true;
    }else{
        return false;
    }

}

function vefAlumnos($boleta){//Verifica que la boleta generada no exista
    $alumnos = getAllAlumnos($boleta);
    if($alumnos!= null){
        foreach ($alumnos as $alumno){
            if($alumno["boleta"]== $boleta){
                return true;
                break;
            }
        }
    }else if($alumnos == null){
        return null;
    }
    return false;
}

function GenerarBoleta(){ //Genera el numero de Boleta
    $verif = false;
    while(!$verif){
        $numero = (int)rand (0,9999);
        $boleta = "";
        if ($numero < 1000){
            if($numero < 100){
                if($numero < 10){
                    $boleta = "CLENCB000".$numero."2019";
                }else{
                    $boleta = "CLENCB00".$numero."2019";
                }
            }else{
                $boleta = "CLENCB0".$numero."2019";
            }    
        }else{
            $boleta = "CLENCB".$numero."2019";
        }
        
        $valido = vefAlumnos($boleta);
        
        if($valido){
            return $boleta;
            $verif = true;
            break;
        }else if($valido ==null){
            return $boleta;
            $verif = true;
            break;
        }
    }
}



?>