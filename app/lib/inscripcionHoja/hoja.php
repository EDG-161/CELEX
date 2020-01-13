<?php
    require_once('../pdf/mpdf.php');
    include ('../../../uses/bd.php');

    if(isset($_GET['a'])){
        $alu = getAlumno($_GET['a']);
        $alumnos = getAllAlumnos('all');
        if($alumnos!= null){
            foreach($alumnos as $alumno){
                if($alumno['bol_alu']==$_GET['a']){
                    $alu = $alumno;
                }
            }
        }
        $con = getContacto($alu['bol_alu']);
        $conE = [];
        $dir = [];
        if(getContacto($alu['bol_alu'])!=null){
            foreach(getContacto($alu['bol_alu']) as $alumno){
                if($alumno['boleta']==$alu['bol_alu']){
                    $con = $alumno;
                }
            }
        }
        
        if(getDir()!=null){
            foreach(getDir() as $alumno){
                if($alumno['boleta']==$alu['bol_alu']){
                    $dir = $alumno;
                }
            }
        }
        
        if(getConE()!=null){
            foreach(getConE() as $alumno){
                if($alumno['boleta']==$alu['bol_alu']){
                    $conE = $alumno;
                }
            }
        }
        
        $com = "";
        $grado = "";
        $genero = "";
        $tp = "";
        if($alu['tipo_alu']==1){
            $com = "Si";
            if($alu['id_grado']==5){
                $grado = "PAAE";
                $tp = "Empleado PAAE";
            }else if($alu['id_grado']==1){
                $grado = "Medio superior";
                $tp = "Alumno Medio superior";
            }else if($alu['id_grado']==2){
                $grado = "Superior";
                $tp = "Alumno Superior";
            }else if($alu['id_grado']==3){
                $tp = "Egresado Medio Superior";
                $grado = "Egresado Medio Superior";
            }else if($alu['id_grado']==4){
                $tp = "Egresado Superior";
                $grado = "Egresado Superior";
            }else if($alu['id_grado']==6){
                $tp = "Empleado Docente";
                $grado = "Docente";
            }else if($alu['id_grado']==7){
                $tp = "Posgrado";
                $grado = "Posgrado";
            }
            
        }else{
            $com = "No";
            if($alu['id_grado']==5){
                $tp = "Alumno: Posgrado";
                $grado = "Posgrado";
            }else if($alu['id_grado']==1){
                $grado = "Primaria";
                $tp = "Alumno: Primaria";
            }else if($alu['id_grado']==2){
                $grado = "Secundaria";
                $tp = "Alumno: Secundaria";
            }else if($alu['id_grado']==3){
                $grado = "Bachillerato";
                $tp = "Alumno: Bachillerato";
            }else if($alu['id_grado']==4){
                $grado = "Superior";
                $tp = "Alumno: Superior";
            }
        }
        if ($alu['id_sex']==1){
            $genero = "Hombre";
        }else{
            $genero = "Mujer";
        }
        $date1 = date("d-m-Y", strtotime($alu['fech_na']));
        $d2 = date('d-m-Y');
        echo "<br>".$con;
        echo "<br>".gettype($con);
    $html = '<body style="background-color: white; font-size: 16px;">
    <div class="container" style="display: flex;justify-content: center">
        <div class="row">
            <div class="col-md-12" ><img src="img/header.png" alt="" class="img-responsive"></div>
        </div>
      
    </div>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
          </div>
          <div class="col-md-4" >
             
               <h3 style="width: 100%; text-align: center">HOJA DE INSCRIPCIÓN<br>
                <img src="img/fo.png" alt="center" align="center" class="img-responsive">
                </h3>
                 
                    
          </div>
          <div class="col-md-4">
          </div>
      </div>
      <div class="row" style="padding: 0px">
          <div class="col-md-2">
          </div>
          <div class="col-md-8">
           <table border="1" class="table table-bordered">
               <tr>
                   <td style="width: 30%">Usuario</td>
                   <td colspan="2">'.$alu['apep'].' '.$alu['apem'].' '.$alu['Nombre'].'</td>
                   <td>Matricula</td>
                   <td style="width: 25%">'.$alu['bol_alu'].'</td>
               </tr>
               <tr>
                   <td>Correo electrónico</td>
                   <td colspan="2">'.$alu['email'].'</td>
                   <td>Telefono</td>
                   <td>'.$con['celular'].'</td>
               </tr>
               <tr>
                   <td>Fecha de nacimiento</td>
                   <td colspan="2">'.$alu['fech_na'].'</td>
                   <td>Edad</td>
                   <td>'.floor(abs(strtotime($d2) - strtotime($date1)) / (365*60*60*24)).'</td>
               </tr>
               <tr>
                   <td>Genero</td>
                   <td colspan="4">'.$genero.'</td>
               </tr>
               <tr>
                   <td colspan="5" style="text-align: center">Dirección</td>
                   
               </tr>
               <tr>
                   <td>Calle y número</td>
                   <td colspan="4">'.$dir['cal1'].' '.$dir['nume'].'</td>
               </tr>
               <tr>
                   <td>Código Postal:</td>
                   <td style="width: 20%">'.$dir['cod_pos'].'</td>
                   <td colspan="2">Colonia</td>
                   <td >'.$dir['col'].'</td>
               </tr>
               <tr>
                   <td>Delegación o ciudad:</td>
                   <td colspan="2">'.$dir['id_del'].'</td>
                   <td>Estado: </td>
                   <td>'.$dir['estate'].'</td>
               </tr>
               <tr>
                   <td>Examen de colocación:</td>
                   <td></td>
                   <td style="width: 20%">Nivel asignado:</td>
                   <td colspan="2"></td>
               </tr>
               <tr>
                   <td colspan="5">Fecha de aplicación:</td>
                   
               </tr>
               <tr>
                   <td colspan="5">Grado máximo de estudios:</td>
                   
               </tr>
               <tr>
                   <td>Comunidad politécnica: </td>
                   <td colspan="4">'.$com.'</td>
               </tr>
               <tr>
                   <td colspan="5" style="text-align: center">Tipo de Alumno</td>
               </tr>
               <tr>
                   <td colspan="5">'.$tp.'</td>
                   
               </tr>
               
               <tr>
                   <td colspan="2">Escuela de procedencia:  </td>
                   <td colspan="3">'.$alu['esc_pr'].'</td>
               </tr>
               <tr>
                   <td colspan="5" style="text-align: center">Contacto de emergencia</td>
                   
               </tr>
               <tr>
                   <td>Nombre:</td>
                   <td colspan="4">'.$conE['nombre'].' '.$conE['appat'].' '.$conE['apmat'].'</td>
               </tr>
               <tr>
                   <td>Parentesco:</td>
                   <td colspan="2">'.$conE['paren'].'</td>
                   <td>Teléfono:</td>
                   <td>'.$conE['celularemer'].'</td>
               </tr>
           </table>
           
           </div>
          <div class="col-md-2">
          </div>
      </div>
    <div class="row" style="padding-top: 100px">
          <div class="col-md-4">
          </div>
          <div class="col-md-4" style="display: block; justify-content: center">
             
               <h4 style="width: 100%; text-align: center">
               <hr style="border: 2px solid black " width="40%">
               <b>Nombre y firma del alumno</b>
               </h4>
          </div>
          <div class="col-md-4">
          </div>
      </div>
      </div>
       <div class="container" style="font-size: 10px;padding:0px;">
        AVISO DE PRIVACIDAD. 
Todos los datos serán tratados y almacenados bajo los protocolos de confidencialidad que marca el Instituto Politécnico Nacional y la Escuela Nacional de Ciencias Biológicas.

        </div>
    
    
</body>';
    
$cs = file_get_contents('https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css');
    $css1 = file_get_contents('../../../bootstrap/css/bootstrap.min.css');
    $css2 = file_get_contents('../../../css/styles.css');
    $css3 = file_get_contents('../../../vendors/form-helpers/css/bootstrap-formhelpers.min.css');
    $css4 = file_get_contents('../../../vendors/select/bootstrap-select.min.css');
    $css5 = file_get_contents('../../../vendors/tags/css/bootstrap-tags.css');
    $css6 = file_get_contents('../../../css/forms.css');

    

    $mpdf = new mPDF('c','A4');
    $mpdf->writeHTML($css1, 1);
    $mpdf->writeHTML($html);
    $mpdf->Output('HojaDeInscripcion.pdf','I');
    }
?>