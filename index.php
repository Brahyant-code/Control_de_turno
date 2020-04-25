<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Santo Tomas</title>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo_letras.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="icon" href="icono.jpg">


<?php
include("cabecera.php");
?>


</head>
<body style="background-color:#2D5338;">



<script language="javascript" type="text/javascript">
  var RequestObject = false;
   //directorio donde tenemos el archivo ajax.php
  var Archivo = 'ajax.php';
  // el tiempo X que tardará en actualizarse 
  window.setInterval("actualizacion_reloj()", 2000);
  if (window.XMLHttpRequest) RequestObject = new XMLHttpRequest();
  if (window.ActiveXObject) RequestObject = new ActiveXObject("Microsoft.XMLHTTP");
  function ReqChange() { 
  // Si se ha recibido la información correctamente
    if (RequestObject.readyState==4) {
     // si la información es válida 
     if (RequestObject.responseText.indexOf('invalid') == -1) {
     // Buscamos la div con id online 
       document.getElementById("todo").innerHTML = RequestObject.responseText;
     } else { 
      // Por si hay algun error document.getElementById("online").innerHTML = "Error llamando"; 
     }
    } 
  }
  function llamadaAjax() {
        // Mensaje a mostrar mientras se obtiene la información remota...
    document.getElementById("todo").innerHTML = ""; 
    // Preparamos la obtención de datos
    RequestObject.open("GET", Archivo+"?"+Math.random() , true);
    RequestObject.onreadystatechange = ReqChange; 
    // Enviamos
    RequestObject.send(null);
  }
  function actualizacion_reloj() {
   llamadaAjax();
 }
</script>




	<div class="container" id="">

<div id="todo">
		<div class="row">
			

			 		<?php

			 			$consulta = "SELECT id FROM tunos ORDER BY id  DESC LIMIT 1,1 ";
						$ejecutar = $conexion->query($consulta); 
						while ($fila=$ejecutar->fetch_array()){

			 			?>

			<div class="col-md-6 col-xs-12 col-lg-6">


				<form action="index.php" method="post">
						  <div class="card text-center">
						  <div class="card-header">
						   UNIVERSIDAD-SANTO TOMAS
						  </div>
						  <div class="card-body" id="datos">
						    <h5 class="card-title">TURNO</h5>
						    <h1><?php echo $fila['id']; ?></h1>
						   
						  </div>
						  
						</div>
						<br>

 					  

 				<?php
			 			}

			 		?>

			 </div>


			 <div class=" col-md-6 col-xs-12 col-lg-6">

	<?php

			 			$consulta2 = "SELECT modulo FROM tunos ORDER by id desc LIMIT 1 ";
						$ejecutar = $conexion->query($consulta2); 
						while ($fila2=$ejecutar->fetch_array()){

			 			?>

						<div class="card text-center">
						  <div class="card-header">
						   UNIVERSIDAD-SANTO TOMAS
						  </div >
						  <div class="card-body" id="datos">
						    <h5 class="card-title">MODULO</h5>
						    <h1 id="todo"><?php echo $fila2['modulo']; ?></h1>
						   
						  </div>
						  
						</div>

				


 				<?php
			 			}

			 		?>

				</form>
				
			
		</div>

		
		</div>

	</div>


		
	</div>




</body>
<footer>
</footer>
</html>