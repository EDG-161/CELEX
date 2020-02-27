<!DOCTYPE html>
<html>
  <head>
    <title>Registro de alumnos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.png">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/canvas.css">
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

	<div class="page-content container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-wrapper">
			        <div class="box">
			            <div class="content-wrap">
			               <h6>Registro</h6>
			                <form action="uses/Add/Alumno.php" method="POST">

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Apellido Paterno" name="ApPat" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Apellido Materno" name="ApMat" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Nombre(s)" name="Nom" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="date" class="form-control"  name="Nac" required>
							  	</div>


				            	<div class="form-group">
										  <select class="form-control" name="sex" required>
										    <option value="1">Masculino</option>
										     <option value="2">Femenino</option>
										  </select>
							  	</div>

							  	<h3>Contacto</h3>

				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Celular" name="Cel" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Telefono Casa" name="Casa" >
							  	</div>

				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Telefono de Trabajo" name="TelTra" >
							  	</div>


				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Extensión" name="ext" >
							  	</div>

				            	<div class="form-group">
							    	<input type="email" class="form-control" placeholder="Correo Electronico" name="Cor" required>
							  	</div>

							  	<h3>Dirección</h3>

				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Código Postal" name="CP" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Colonia" name="Col" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Alcaldia/Municipio" name="Del" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Estado/Coudad" name="Edo" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Calle 1" name="Cal1" required>
							  	</div>
								<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Calle 2" name="Cal2">
							  	</div>
				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Numero exterior" name="NumExt" required>
							  	</div>

				            	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Numero Interior" name="NumInt" required>
							  	</div>

								
								<h3>Examen de colocación</h3>
				            	
				            	<div class="form-group">
                                    <select class="form-control" placeholder="Nivel asignado" name="Nivel" required>
                                        <option value="1">Basico I</option>
                                        <option value="2">Basico II</option>
                                        <option value="3">Basico III</option>
                                        <option value="4">Basico IV</option>
                                        <option value="5">Basico V</option>
                                        <option value="6">Intermedio I</option>
                                        <option value="7">Intermedio II</option>
                                        <option value="8">Intermedio III</option>
                                        <option value="9">Intermedio IV</option>
                                        <option value="10">Intermedio V</option>
                                        <option value="11">Avanzado I</option>
                                        <option value="12">Avanzado II</option>
                                        <option value="13">Avanzado III</option>
                                        <option value="14">Avanzado IV</option>
                                        <option value="15">Avanzado V</option>
                                    </select>
							  	</div>

				            	<div class="form-group">
							    	<input type="date" class="form-control"  name="Aplicacion" required>
							  	</div>

							  	<h3>Información Académica</h3> 
				            	<div class="form-group">
				            	    <select name="tipoAlu" id="TPA" class="form-control">
				            	        <option value=1> Comunidad IPN
				            	        </option>
				            	        <option value=2>Externo</option>
				            	    </select>
							  	</div>

				            	<div class="form-group" id="Comunidad" style="display:none">
				            	<select class="form-control" name="escIpn" id="ecsIpn">
				            	    <option value="1">Estudiante medio superior</option>
				            	    <option value="2">Estudiante superior</option>
				            	    <option value="3">Egresado medio superior</option>
				            	    <option value="4">Egresado superior</option>
				            	    <option value="5">
				            	        PAAE
				            	    </option>
				            	    <option value="6">Docente</option>
				            	    <option value="7">Posgrado</option>
				            	</select>
							  	</div>
							  	<div class="form-group" id="Nombre_carrera" style="display:none">
							  	    <input type="text" class="form-control" placeholder="Carrera" name="Nombre_carrera">
							  	</div>
							  	<div class="form-group">
										  <select class="form-control" name="UltimoGrado" id="UltimoGrado" style="display:none">
										    <option>Ultimo grado de estudios</option>
										    <option value="1">Primaria</option>
										    <option value="2">Secundaria</option>
										    <option value="3">Bachillerato</option>
										    <option value="4">Superior</option>
										    <option value="5">Posgrado</option>
										  </select>
							  	</div>							  	
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Escuela" name="Escuela" required>
							  	</div>
							  	<h3>Contacto de Emergencia</h3>
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Nombre" name="NomsCon" required>
							  	</div>
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Apellido Paterno" name="ApPatCon" required>
							  	</div>
							  	<div class="form-group">
							    	<input type="text" class="form-control" placeholder="Apellido Materno" name="ApMatCon" required>
							  	</div>
							  	<div class="form-group">
										  <select class="form-control" name="pariente">
										    <option>Parentezco</option>
										    <option>Madre</option>
										    <option>Padre</option>
										    <option>Hermano(a)</option>
										    <option>Abuelo(a)</option>
										    <option>Tío(a)</option>
										    <option>Tutor</option>
										    <option>Otro</option>

										  </select>
							  	</div>
							  	<div class="form-group">
							    	<input type="number" class="form-control" placeholder="Celular" name="CelularContacto" required>
							  	</div>
							  	
				            	<h3 id="limpiar">Repetir Firma</h3>
				            	<br>
				                <div class="action">
				                    <input type="submit" class="btn btn-primary signup" value="Registrar">
				                </div>
				            
			                </form>                
			            </div>
			        </div>

			        
			</div>
		</div>
	</div>
  </body>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>  
  <script>
    $('#TPA').change(function(){
        if($(this).children("option:selected").val() == 1){
        document.getElementById('Comunidad').style.display = 'block';  
		document.getElementById('UltimoGrado').style.display='none';
		document.getElementById('UltimoGrado').value='Ultimo grado de estudios';
        }else{
            document.getElementById('Comunidad').style.display = 'none'; 
            document.getElementById('Nombre_carrera').style.display='none';
            document.getElementById('Nombre_carrera').value='';
            document.getElementById('UltimoGrado').style.display='';
        }
    });
    $('#TPA').ready(function(){
      document.getElementById('Comunidad').style.display = 'block';  
		document.getElementById('UltimoGrado').style.display='none';
		document.getElementById('UltimoGrado').value='Ultimo grado de estudios';
    });
    $('#ecsIpn').change(function(){
       if($(this).children("option:selected").val() == 1||$(this).children("option:selected").val() == 2||$(this).children("option:selected").val() == 7){
           carrera();
       } else{
           ocultarcarrera();
       }
    });
      
  	function ocultarcarrera(){
	  	document.getElementById('Nombre_carrera').value="";
	  	document.getElementById('Nombre_carrera').style.display='none';
  	}

  	function carrera(){
  		document.getElementById('Nombre_carrera').style.display='';
  	}

  </script>
<script>
	var limpiar = document.getElementById("limpiar");
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var cw = canvas.width = 300,
  cx = cw / 2;
var ch = canvas.height = 300,
  cy = ch / 2;

var dibujar = false;
var factorDeAlisamiento = 5;
var Trazados = [];
var puntos = [];
ctx.lineJoin = "round";

limpiar.addEventListener('click', function(evt) {
  dibujar = false;
  ctx.clearRect(0, 0, cw, ch);
  Trazados.length = 0;
  puntos.length = 0;
}, false);


canvas.addEventListener('mousedown', function(evt) {
  dibujar = true;
  //ctx.clearRect(0, 0, cw, ch);
  puntos.length = 0;
  ctx.beginPath();

}, false);

canvas.addEventListener('mouseup', function(evt) {
  redibujarTrazados();
}, false);

canvas.addEventListener("mouseout", function(evt) {
  redibujarTrazados();
}, false);

canvas.addEventListener("mousemove", function(evt) {
  if (dibujar) {
    var m = oMousePos(canvas, evt);
    puntos.push(m);
    ctx.lineTo(m.x, m.y);
    ctx.stroke();
  }
}, false);
function reducirArray(n,elArray) {
  var nuevoArray = [];
  nuevoArray[0] = elArray[0];
  for (var i = 0; i < elArray.length; i++) {
    if (i % n == 0) {
      nuevoArray[nuevoArray.length] = elArray[i];
    }
  }
  nuevoArray[nuevoArray.length - 1] = elArray[elArray.length - 1];
  Trazados.push(nuevoArray);
}

function calcularPuntoDeControl(ry, a, b) {
  var pc = {}
  pc.x = (ry[a].x + ry[b].x) / 2;
  pc.y = (ry[a].y + ry[b].y) / 2;
  return pc;
}

function alisarTrazado(ry) {
  if (ry.length > 1) {
    var ultimoPunto = ry.length - 1;
    ctx.beginPath();
    ctx.moveTo(ry[0].x, ry[0].y);
    for (i = 1; i < ry.length - 2; i++) {
      var pc = calcularPuntoDeControl(ry, i, i + 1);
      ctx.quadraticCurveTo(ry[i].x, ry[i].y, pc.x, pc.y);
    }
    ctx.quadraticCurveTo(ry[ultimoPunto - 1].x, ry[ultimoPunto - 1].y, ry[ultimoPunto].x, ry[ultimoPunto].y);
    ctx.stroke();
  }
}


function redibujarTrazados(){
  dibujar = false;
  ctx.clearRect(0, 0, cw, ch);
  reducirArray(factorDeAlisamiento,puntos);
  for(var i = 0; i < Trazados.length; i++)
  alisarTrazado(Trazados[i]);
}

function oMousePos(canvas, evt) {
  var ClientRect = canvas.getBoundingClientRect();
  return { //objeto
    x: Math.round(evt.clientX - ClientRect.left),
    y: Math.round(evt.clientY - ClientRect.top)
  }
}


//https://blog.openalfa.com/como-dibujar-con-el-raton-en-un-canvas-html5 guardar firma
</script>

</html>

