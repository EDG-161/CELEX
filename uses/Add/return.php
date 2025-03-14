<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" type="text/css" href="">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-bg">
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-12">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">CELEX ENCB</a></h1>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>
	
	<?php
      if($_GET['r']==1){
      ?>

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Se ha registrado con exito</h6>
			                <div class="social">
	                        </div>
			                <input class="form-control" type="text" placeholder="Dirección E-mail">
			                <input class="form-control" type="password" placeholder="Contraseña">
			                <div class="action">
			                    <a class="btn btn-primary signup" href="../../inicio.php">Regresar</a>
			                </div>                
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
    <?php
      }else{
          ?>
          <div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			                <h6>Ha ocurrido un error</h6>
			                <div class="social">
	                        </div>
			                <input class="form-control" type="text" placeholder="Dirección E-mail">
			                <input class="form-control" type="password" placeholder="Contraseña">
			                <div class="action">
			                    <a class="btn btn-primary signup" href="../../inicio.php">Regresar</a>
			                </div>                
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
          <?php
      }
      ?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>