<?php

include("conexion.php");
?>
<div class="row">
			

			 		<?php

			 			$consulta = "SELECT id , caracter FROM tunos ORDER BY id  DESC LIMIT 1,1 ";
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
						    <h1>
						<?php

			 			$consulta4 = "SELECT caracter FROM tunos ORDER by id desc LIMIT 1 ";
						$ejecutar = $conexion->query($consulta4); 
						while ($fila4=$ejecutar->fetch_array()){

			 			?>
						    	<span><?php echo $fila4['caracter']; ?></span><?php
			 			}

			 			?>
			 			<?php echo $fila['id']; ?></h1>
						   
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