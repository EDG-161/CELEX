<!DOCTYPE html>
<html>
  <head>
    <title>Inicio</title>
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
	<script src="https://kit.fontawesome.com/781be9b94b.js" crossorigin="anonymous"></script>
    <link href="css/forms.css" rel="stylesheet">
  </head>
  <style>
	.img-ctn{
		align-content: center;
	}
	.img-responsive{
		width: 100%;
		max-width: 300px;
	}
	.img-responsive:hover{
		opacity: 0.8;
	}
  </style>
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
			 include ('uses/Administracion/menu-inicio.php'); 
		  ?>
		  
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               CELEX Escuela Nacional de Ciencias Biologícas
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>