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
		  <?php 
			 include ('uses/Administracion/slide-bar.php'); 
		  ?>
		  <div class="col-md-10">
            <!-- Search form -->

    <form>
            <div class="col-md-6">
                <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
            </div>
            <div class="col-md-3">
                <button type="button" class="btn btn-primary">Buscar</button>
                
            </div>
            <div class="col-md-3">
                
                <a href="RegistrarProfesores.php" class="btn btn-primary">Registrar un profesor</a>
            </div>

    </form>

		<table class="table table-hover">
			 	 <thead>
			    	<tr>
				      	<th scope="col"><a onclick="AcomodarporPaterno();">Apellido Paterno </a></th>
				      	<th scope="col">Apellido Materno</th>
			      		<th scope="col">Nombre</th>
			      		<th scope="col">Celular</th>
			      		<th scope="col">Casa</th>			
                        <th scope="col">Grupo</th>
			      		<th scope="col">Opciones</th>      		
			    	</tr>
			  	</thead>
			  	<tbody>
			  		<?php  
                        include 'uses/bd.php';
                        $alumnos = getProf('all');
                    
                    if($alumnos!= null){
                        foreach($alumnos as $alumno){
                        ?>
						<tr>
							<td><?php echo $alumno['apep']; ?></td>
							<td><?php echo $alumno['apem']; ?></td>
							<td><?php echo $alumno['nombre']; ?></td>
							<td><?php echo $alumno['apep']; ?></td>
							<td><?php echo $alumno['apep']; ?></td>
                            <td><?php echo $alumno['apep']; ?></td>
							<td><a href="Profesor.php"><img src="images/Actualizar.png" width="20"></a><img src="images/basura.png" width="20"><img src="images/informe.png" width="20"></td>


						</tr>
						<?php  
                        }
                    }
                    ?>
				</tbody>
		</table>





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
    <script>
    	function Showselected(){
    		var Asunto=document.getElementById('Asunto');
    		var selected = Asunto.options[Asunto.selectedIndex].text;
    		if (selected=='Interno') {
    			document.getElementById('clave').value='853';
    		}else if(selected=='Externo'){
    			document.getElementById('clave').value='731';
    		}else if(selected=='Examen'){
    			document.getElementById('clave').value='1704';
    		}
    	}
    </script>
   
  </body>
</html>