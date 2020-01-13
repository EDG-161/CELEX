<!DOCTYPE html>
<html>
  <head>
    <title>Registrar Grupo</title>
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
		  
		  <?php
            include 'uses/bd.php';
            $grupos = getNiv();
            $prf = getProf();
            ?>
		  <div class="col-md-10">

	  			<div class="row">
	  				<div class="col-md-10">
	  					<div class="content-box-large">
			  				<div class="panel-heading">
					            <div class="panel-title">Registrar grupo</div>
					        </div>
			  				<div class="panel-body">
			  					<form class="form-horizontal" role="form" method="POST" action="uses/Add/Grupos.php">
								  <div class="form-group">
								    <label for="ApPat" class="col-sm-2 control-label">Nombre del Grupo</label>
								    <div class="col-sm-10">
								      <input type="text" class="form-control" name="name" placeholder="Nombre del Grupo" required>
								    </div>
								  </div>
								  <div class="form-group">
								    <label for="ApPat" class="col-sm-2 control-label">Nivel del grupo</label>
								    <div class="col-sm-10">
                                  
                                        <select type="text" class="form-control" name="level" required>
                                           <?php
                                            foreach($grupos as $niv){
                                                ?>
                                                <option value="<?php echo $niv['id_niv'];?>"><?php echo $niv['des_niv'];?></option>
                                                <?php
                                            }
                                            ?>
                                            
                                        </select>
								    </div>
								  </div>
								  
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								      <button type="submit" class="btn btn-primary">Registrar</button>
								    </div>
								  </div>
								</form>
			  				</div>
			  			</div>
	  				</div>


	  			</div>




	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

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