<!DOCTYPE html>
<html>
  <head>
    <title>Registrar Profesores</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="vendors/form-helpers/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="vendors/select/bootstrap-select.min.css" rel="stylesheet">
    <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet">

    <link href="css/forms.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="header">
       <div class="container">
          <div class="row">
             <div class="col-md-5">
                <!-- Logo -->
                <div class="logo">
                   <h1><a href="inicio.php">CELEX ENCB</a></h1>
                </div>
             </div>
             <div class="col-md-5">
                <div class="row">
                  <div class="col-lg-12">

                  </div>
                </div>
             </div>
             
          </div>
       </div>
  </div>

    <div class="page-content">
      <div class="row">
      <div class="col-md-2">
        <div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="inicio.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a></li>
                    <li><a href="calendar.php"><i class="glyphicon glyphicon-calendar"></i> Calendar</a></li>
                    <li><a href="stats.php"><i class="glyphicon glyphicon-stats"></i> Statistics (Charts)</a></li>
                    <li><a href="tables.php"><i class="glyphicon glyphicon-list"></i> Tables</a></li>
                    <li><a href="buttons.php"><i class="glyphicon glyphicon-record"></i> Buttons</a></li>
                    <li><a href="editors.php"><i class="glyphicon glyphicon-pencil"></i> Editors</a></li>
 
                    <li class="current"><a href="Pagos.php"><i class="glyphicon glyphicon-tasks"></i> Consultar Pagos</a></li>

                    <li class="current"><a href="RegistrarProfesores.php"><i class="glyphicon glyphicon-tasks"></i> Registrar Profesores</a></li>   
                    <li class="current"><a href="Profesores.php"><i class="glyphicon glyphicon-tasks"></i> Consultar Profesores</a></li>                                  
                    <li class="current"><a href="Alumnos.php"><i class="glyphicon glyphicon-tasks"></i>Alumnos</a></li>
                    <li class="current"><a href="Encabezados.php"><i class="glyphicon glyphicon-tasks"></i>Encabezados</a></li>                      
                    <li class="current"><a href="Grupos.php"><i class="glyphicon glyphicon-tasks"></i>Grupos</a></li>                      

                </ul>
             </div>
      </div>
          <div class="col-md-10">
               
                                <form action="EditarUsuario" method="POST" class="form-horizontal"> 
                <div class="row">
                    <div class="col-md-10">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Modificar datos del Profesor</div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form">
                                  <div class="form-group">
                                    <label for="ApellidoPaterno" class="col-sm-2 control-label">Apellido Paterno</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="ApellidoPaterno" placeholder="Apellido Paterno" required>
                                    </div>
                                  </div>

                                  <div class="form-group">
                                    <label for="ApellidoMaterno" class="col-sm-2 control-label">Apellido Materno</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputPassword3" placeholder="Apellido Materno" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="Nombre" class="col-sm-2 control-label">Nombre</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="Nombre" placeholder="Nombre" required>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="Fecha" class="col-sm-2 control-label">Fecha de Nacimiento</label>
                                    <div class="col-sm-10">
                                      <input type="date" class="form-control" id="Fecha" required>
                                    </div>
                                  </div>                                  
                                  <div class="form-group">
                                    <label class="col-sm-2 control-label">RFC</label>
                                    <div class="col-sm-10">
                                      <input type="number" class="form-control" id="clave" required >
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="CURP" class="col-sm-2 control-label">CURP</label>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" id="CURP" required>
                                    </div>                                  
                                  </div>

                                <div class="form-group">
                                    <label for="cel" class="col-sm-2 control-label">Celular</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="Celular" id="Cel" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="casa" class="col-sm-2 control-label">Telefono de Casa</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="Telefono Casa" id="casa" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cor" class="col-sm-2 control-label">Correo Electrónico</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" placeholder="Correo Electronico" id="Cor" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="CP" class="col-sm-2 control-label">Código Postal</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="Código Postal" id="CP" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Col" class="col-sm-2 control-label">Colonia</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Colonia" id="Col" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Del" class="col-sm-2 control-label">Delegación o ciudad</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Delegación/Ciudad" id="Del" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Edo" class="col-sm-2 control-label">Estado</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Estado" name="Edo" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="Cal1" class="col-sm-2 control-label">Calle 1</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Calle 1" id="Cal1" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Cal2" class="col-sm-2 control-label">Calle 2</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Calle 2" id="Cal2">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NumExt" class="col-sm-2 control-label">Numero Exterior</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="Numero exterior" id="NumExt" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="NumInt" class="col-sm-2 control-label">Numero Interior</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" placeholder="Numero Interior" id="NumInt" required>
                                    </div>
                                </div>

                                  <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                      <button type="submit" class="btn btn-primary">Modificar</button>
                                    </div>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
                           </form>
                                    <div class="row">
<h2>Cursos Impartidos</h2>
    <table class="table table-hover">
         <thead>
            <tr>
              <th scope="col"><a onclick="AcomodarporFecha();">Fecha</a></th>
                <th scope="col"><a onclick="AcomodarporPaterno();">Niveldel curso</a></th>
                <th scope="col">Opciones</th>
              
            </tr>
          </thead>
          <tbody>
            <?php  ?>
            <tr>
              <td></td>
              <td></td>
              <td><img src="images/Actualizar.png" width="20"><img src="images/basura.png" width="20"></td>


            </tr>
        </tbody>
    </table>                                      
                                    </div>
                                    <div class="row">
                                      <h2>Capacitación</h2>
    <table class="table table-hover">
         <thead>
            <tr>
              <th scope="col"><a onclick="AcomodarporFecha();">Fecha</a></th>
                <th scope="col"><a onclick="AcomodarporPaterno();">Nombre del curso </a></th>
                <th scope="col">Opciones</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
                <td><a onclick="agregar();" id="etiqueta" style="display: ">+Agregar curso de capacitación </a>  
                    <input type="date" id="FechaNuevo" style="display:none" class="form-control"></td>
                <td><input type="text" id="NombreNuevo" style="display:none" class="form-control"></td>
                <td><a onclick="Cancelar()"><img src="images/cancelar.png" width="20" id="Cancelar" style="display:none"></a> <a id="Agregar" style="display:none">Agregar</a></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td><img src="images/Actualizar.png" width="20"><img src="images/basura.png" width="20"></td>


            </tr>
        </tbody>
    </table>
                                    </div>                               
                                    
                            </div>      
            
          </div>
    </div>



 
    <script>
        function agregar(){
            document.getElementById('FechaNuevo').style.display='';
            document.getElementById('NombreNuevo').style.display='';
            document.getElementById('Cancelar').style.display='';
            document.getElementById('Agregar').style.display='';
            document.getElementById('etiqueta').style.display='none';
        }
        function Cancelar(){
            document.getElementById('FechaNuevo').style.display='none';
            document.getElementById('NombreNuevo').style.display='none';
            document.getElementById('Cancelar').style.display='none';
            document.getElementById('Agregar').style.display='none';
            document.getElementById('etiqueta').style.display='';            
        }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script src="vendors/form-helpers/js/bootstrap-formhelpers.min.js"></script>

    <script src="vendors/select/bootstrap-select.min.js"></script>

    <script src="vendors/tags/js/bootstrap-tags.min.js"></script>

    <script src="vendors/mask/jquery.maskedinput.min.js"></script>

    <script src="vendors/moment/moment.min.js"></script>

    <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

     <!-- bootstrap-datetimepicker -->
     <link href="vendors/bootstrap-datetimepicker/datetimepicker.css" rel="stylesheet">
     <script src="vendors/bootstrap-datetimepicker/bootstrap-datetimepicker.js"></script> 


    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="js/forms.js"></script>
    
  </body>
</html>