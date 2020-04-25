<?php
include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel de usuario</title>
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="icon" href="icono.jpg">


	<?php
	include("cabecera.php");
	?>


</head>
<body >

<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-lg-12">

			 <center>

			 	
			 	<form action="panel.php" method="POST">
			 		

			 		<?php

			 			$consulta = "SELECT MAX(id) AS 'id' from tunos ORDER by id  ASC";
						$ejecutar = $conexion->query($consulta); 
						while ($fila=$ejecutar->fetch_array()){

			 			?>


			 		<div>

			 			<div class="jumbotron jumbotron-fluid">
 						<div class="container">
 						<div class="row">
 							<div class="col-md-6 col-lg-6">
 							 <h1 class="display-4"><span ><i class="fas fa-exclamation-circle"></i></span> TURNO</h1>
    						<h1><span><?php echo $_POST['caracter']; ?></span><?php echo $fila['id']; ?></h1>

 							</div>
 							<div class="col-md-6 col-lg-6">
 							  	
								<h1 class="display-4"><span><i class="fas fa-user-clock"></i></span> Modulo</h1>
    							<h2><span></span><?php echo $_POST['modulo']; ?></h2>
 							</div>


 						
 						</div>
    				
    			
 						</div>
						</div>

			 		<?php
			 			}

			 		?>

			 		</div>

			 	

			 		

			 </center>
				
			</div>



				 <div class="col-md-12">
    						<div class="card mb">
              				
              				<div class="card-body mb">
                			
                			<form action="panel.php" method="post">
                				<div>
			 			
			 			<select name="modulo" id=""class="browser-default custom-select custom-select-lg mb-3">
			
			 				<option value="">MODULO 1</option>
			 				<option>MODULO 2</option>
			 				<option>MODULO 3</option>
			 				<option>MODULO 4</option>

			 			</select>

			 		</div>
			 			<div>
			 			
			 			<select name="caracter" id=""class="browser-default custom-select custom-select-lg mb-3" pla >
			 				
			 				<option>A</option>
			 				<option>B</option>
			 				<option>C</option>
			 				<option>D</option>

			 			</select>

			 		</div>

			 		<div>
			 			<br>
			 			<input type="submit" class="btn btn-primary btn-lg btn-blockbtn btn-success btn-lg btn-block" value="Siguiente turno" name="subir">
			 		</div>
			 		<div>
			 			<br>
			 			<input type="button" class="btn btn-primary btn-lg btn-blockbtn btn-danger btn-lg btn-block" value="Regresar al turno anterior" name="bajar" onclick="javascript:history.back()">
			 		</div>
			 		<div>
			 			<br>
			 			<input type="submit" class="btn btn-primary btn-lg btn-blockbtn btn-info btn-lg btn-block" value="Reiniciar cuenta" name="reiniciar_cuenta">
			 		</div>

			 		<div>
			 			<br>
			 			<a class="btn btn-primary btn-lg btn-blockbtn btn-secondary btn-lg btn-block " href="tel:950321413" target="" ><i class="fas fa-phone-square-alt"></i> AYUDA</a>
			 		</div>
			 		


			 	</form>


			 		<?php
					if (isset($_POST['subir'])) {
				
							
							$modulo = $_POST['modulo'];
							$caracter=$_POST['caracter'];


							$consulta = "INSERT INTO tunos (modulo,caracter) VALUES ('$modulo','$caracter')";

							$ejecutar = $conexion->query($consulta);
							echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
							
					}

					?>

					<?php
					if (isset($_POST['bajar'])) {
					
							
					}

					?>


                			
              				</div>
            				</div>
        		</div>
			
		</div>
	</div>
	
	
</body>
</html>