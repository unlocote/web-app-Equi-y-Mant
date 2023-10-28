<?php
require 'conexion.php';

$COD_ACT = $_GET['COD_ACT'];

$sql1 = "SELECT * FROM act_asc01 WHERE  COD_ACT= '$COD_ACT'";
$resultado1 = $mysqli->query($sql1);
$row1 = $resultado1->fetch_array(MYSQLI_ASSOC);


$sql = "SELECT * FROM medact_asc01 WHERE  COD_ACT= '$COD_ACT'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);

$sql2 = "SELECT * FROM clasetptc_asc01 WHERE  COD_ACT= '$COD_ACT'";
$resultado2 = $mysqli->query($sql2);
$row2 = $resultado2->fetch_array(MYSQLI_ASSOC);

$sql3 = "SELECT * FROM img_asc01 WHERE COD_ACT= '$COD_ACT' ORDER BY 'ID' ASC";// WHERE  COD_SIC= '$COD_SIC' ";
$resultado3 = $mysqli->query($sql3);
//$row3 = $resultado3->fetch_array(MYSQLI_ASSOC);
//
$sql4 = "SELECT * FROM img_asc01 WHERE COD_ACT= '$COD_ACT' ";// WHERE  COD_SIC= '$COD_SIC' ";
$resultado4 = $mysqli->query($sql4);
$row4 = $resultado4->fetch_array(MYSQLI_ASSOC);






?>
<html lang="es">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>


	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700&amp;subset=all' rel='stylesheet' type='text/css'>
	<link href="assets/plugins/socicon/socicon.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap-social/bootstrap-social.css" rel="stylesheet" type="text/css"/>		
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/animate/animate.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->

			<!-- BEGIN: BASE PLUGINS  -->
			<link href="assets/plugins/revo-slider/css/settings.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/revo-slider/css/layers.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/revo-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/owl-carousel/assets/owl.carousel.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
			<link href="assets/plugins/slider-for-bootstrap/css/slider.css" rel="stylesheet" type="text/css"/>
				<!-- END: BASE PLUGINS -->
	
	
    <!-- BEGIN THEME STYLES -->
	<link href="assets/demos/default/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="assets/demos/default/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
	<link href="assets/demos/default/css/themes/default.css" rel="stylesheet" id="style_theme" type="text/css"/>
	<link href="assets/demos/default/css/custom.css" rel="stylesheet" type="text/css"/>




	<style type="text/css">

		.col{
  margin: 1px;
  padding: 10px;
  width:20%;
  
}


	</style>

</head>

<body>

	<div class="row">

		<h3 style="text-align:center"><?php echo $row['COD_SIC'],"__", $row['COD_ACT']; ?></h3>
		
		<h3 style="text-align:center"><?php echo $row['NOMBRE']; ?></h3>			

		<h3 style="text-align:center">MODIFICAR MEDIDOR<a class="btn btn-small" href="#" id="show" title="Cerrar">Mostrar1</a></h3>

	</div>
	<!--	<div class="container" id="medidor1" style="display: none"> style="display: none"-->
		<!--	<div class="row">
				<h3 style="text-align:center">MODIFICAR MEDIDOR</h3>
			</div> -->
			
			<form id="form1" class="form-horizontal" method="POST" action="updateAct.php" autocomplete="off">

				<div class="container" id="medidor1" style="display: none">	

					<div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">COD_ACT</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="COD_ACT" name="COD_ACT" placeholder="COD_ACT" value="<?php echo $row['COD_ACT']; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">COD_SIC</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="COD_SIC" name="COD_SIC" placeholder="COD_SIC" value="<?php echo $row['COD_SIC']; ?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="nombre" class="col-sm-2 control-label">NOMBRE</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="NOMBRE" name="NOMBRE" placeholder="Nombre" value="<?php echo $row['NOMBRE']; ?>" required>
						</div>
					</div>

					<!--	<input type="hidden" id="COD_PROPIO" name="COD_PROPIO" value="<?php //echo $row['COD_PROPIO']; ?>" /> -->



					<div class="form-group">
						<label for="telefono" class="col-sm-2 control-label">DIRECCION</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="DIRECCION" name="DIRECCION" placeholder="DIRECCION" value="<?php echo $row['DIRECCION']; ?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="telefono" class="col-sm-2 control-label">MARCA</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="MARCA" name="MARCA" placeholder="MARCA" value="<?php echo $row['MARCA']; ?>" >
						</div>
					</div>


					<div class="form-group">
						<label for="telefono" class="col-sm-2 control-label">MODELO</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="MODELO" name="MODELO" placeholder="MODELO" value="<?php echo $row['MODELO']; ?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="telefono" class="col-sm-2 control-label">SERIE</label>
						<div class="col-sm-10">
							<input type="int" class="form-control" id="NUM_SERIE" name="NUM_SERIE" placeholder="NUM_SERIE" value="<?php echo $row['NUM_SERIE']; ?>" >
						</div>
					</div>


					<div class="form-group">
						<label for="telefono" class="col-sm-2 control-label">CONEXION</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="CONEXION" name="CONEXION" placeholder="CONEXION" value="<?php echo $row['CONEXION']; ?>" >
						</div>
					</div>

					<div class="form-group">
						<label for="telefono" class="col-sm-2 control-label">CLASE</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="CLASE" name="CLASE" placeholder="CLASE" value="<?php echo $row['CLASE']; ?>" >
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">

							<button id="hide" class="btn btn-primary">Ocultar</button>

						</div>
					</div>







				<!--	
				<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" <?php //if($row['hijos']=='1') echo 'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0" <?php //if($row['hijos']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros" <?php //if(strpos($row['intereses'], "Libros")!== false) echo 'checked'; ?>> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica" <?php //if(strpos($row['intereses'], "Musica")!== false) echo 'checked'; ?>> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes" <?php //if(strpos($row['intereses'], "Deportes")!== false) echo 'checked'; ?>> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros" <?php //if(strpos($row['intereses'], "Otros")!== false) echo 'checked'; ?>> Otros
						</label>
					</div>
				</div>-->			


			</div>

			
			<div class="row">
				<h3 style="text-align:center">MODIFICAR TC<a class="btn btn-small" href="#" id="show2" title="Cerrar">Mostrar2</a></h3>
				
			</div>

			<div class="container" id="medidor2" style="display: none">	




				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CLASE_PT</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="CLASE_PT" name="CLASE_PT" placeholder="CLASE_PT" value="<?php echo $row2['CLASE_PT']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CLASE_CT</label>
					<div class="col-sm-10">
						<input type="int" class="form-control" id="CLASE_CT" name="CLASE_CT" placeholder="CLASE_CT" value="<?php echo $row2['CLASE_CT']; ?>" >
					</div>
				</div>	

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						
						<button id="hide2" class="btn btn-primary">Ocultar</button>
						
					</div>
				</div>


			</div>	


			



			<!--  BOTONES DE GUARDAR EL FORMULARIO -->
			<div class="form-group" style="text-align:center">
				<div class="col-sm-offset-2 col-sm-10">
					<a href="index5.php" class="btn btn-default">Inicio</a>
					<button type="submit" class="btn btn-primary">Guardar</button>

					 <a href="tblAct.php?COD_SIC=<?php echo $row1['COD_SIC']; ?>" class="btn btn-primary">Regresar</a>


				</div>
			</div>






		</form>







		<!--	<p><a class="btn btn-small" href="#"  title="Cerrar"><i class="fa fa-close"></i>Mostrar2</a></p>-->

		<!--  CARGAR IMAGEN -->

		<form name="MiForm" id="MiForm" class="form-horizontal" method="post" action="cargarImg.php" enctype="multipart/form-data">

			<div class="container"  >	

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">COD_ACT</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_ACT" name="COD_ACT" placeholder="COD_ACT" value="<?php echo $row1['COD_ACT']; ?>" required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">COD_SIC</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="COD_SIC" name="COD_SIC" placeholder="COD_SIC" value="<?php echo $row1['COD_SIC']; ?>" required>
					</div>
				</div>
				<!--
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">ID</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="ID" name="ID" placeholder="ID" value="<?php echo $row4['ID']; ?>" required>
					</div>
				</div>  -->



				<h4 class="text-center">Seleccione imagen a cargar</h4>
				<div class="form-group">
					<label class="col-sm-2 control-label">Archivos</label>
					<div class="col-sm-8">
						<input type="file" class="form-control" id="image" name="image" multiple>
					</div>
					<button name="cargarImg" class="btn btn-primary">Cargar Imagen</button>
				</div>
			</div>
		</form>  


		<!--  MOSTRAR IMAGEN -->

		<div class="row">
				<h3 style="text-align:center">IMAGENES<a class="btn btn-small" href="#" id="show3" title="Cerrar">Mostrar3</a></h3>
				
			</div>


		<div class="container" id="imagenes1" style="text-align:center;display: none" >

			
			
				            <?php //while($row4 = $resultado3->fetch_array(MYSQLI_ASSOC)) { 

				            		//echo '<div class="col">';


						 while($row4 = $resultado3->fetch_array()) { 
				           //while(($row4 = $resultado3->mysql_fetch_array())!=NULL) { 	
						 	?>
								 
							<div class="panel panel-primary">
							<?php
								 echo $row4['ID']."   "; 
								 echo $row4['COD_ACT']."   ";
								 echo $row4['CREACION'];
								 echo "<br>";
								 //echo "<br>"; 
								 //echo $d."<br />";

								
					 echo "<img width='300' height='300' alt='' src='data:image/jpeg; base64,".base64_encode($row4['IMAGES'])."'>";

					 echo "<br>";  

					//echo "<img src='data:image/jpeg; base64,".base64_encode($row4['IMAGES'])."'>";
								 //echo '</div>'; 
					 echo "<a href='data:image/jpeg; base64,".base64_encode($row4['IMAGES'])."' download='Image.jpg'>Descargar Archivo</a>";
					 ?>

					 <a href="#" data-href="deleteimg.php?ID=<?php echo $row4['ID'] ; ?>&COD_ACT=<?php echo $row4['COD_ACT'] ; ?>&COD_SIC=<?php echo $row4['COD_SIC'] ; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a>
					  <?php
					  //COD_SIC $row4['COD_SIC']

					 echo "<br>";echo "<br>"; 
					 ?>
					        </div>
				       <?php
					         } ?>

					<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						
						<button id="hide3" class="btn btn-primary">Ocultar</button>
						
					</div>
				</div>         

		  					
		</div>



		

		<!-- funciono vien llamando al metodo vistaImg.php
		<div class="container">
			
			
				<div class="container" align="center">

					
					<?php
						
						//foreach($row3 as $v){
						  //  echo $v . '<br />';
						//}
					?>  
				      -->

					

					<!--<img src='vistaImg.php?COD_SIC=COD_SIC&&ID=2'alt="" width="300px" height="300px" />
					--> 
					<!--
					<img src='vistaImg.php?COD_SIC=COD_SIC&&ID=7'alt="" width="300px" height="300px" />
					<img src='vistaImg.php?COD_SIC=COD_SIC&&ID=8'alt="" width="300px" height="300px" />     
					<a href='vistaImg.php?COD_SIC=COD_SIC' download='Image.jpg'>Descargar Archivo</a><BR>
					<a href='vistaImg.php?COD_SIC=COD_SIC' download='Image.jpg'>Descargar Archivo</a>
				</div> 
				<a href='vistaImg.php?COD_SIC=COD_SIC' download='Image.jpg'>Descargar Archivo</a>

				<div class="panel panel-primary">
					<div class="panel">
			    				<?php
			    				$seed// = md5( microtime() );
			    				//echo <image src='vistaImg.php?COD_SIC=COD_SIC' . $seed . >;
			    				//<img src='vistaImg.php?COD_SIC=COD_SIC'<?$seed?alt="" width="300px" height="300px" />
			    				?> -->
			    				<!--
			    				<img src='vistaImg.php?COD_SIC=COD_SIC&&ID=1'  alt="" width="300px" height="300px" />

			    			</div> 
			    			<a href='vistaImg.php?COD_SIC=COD_SIC' download='Image.jpg'>Descargar Archivo</a>
			    		</div>
			    		<a href='vistaImg.php?COD_SIC=COD_SIC' download='Image.jpg'>Descargar Archivo</a>
			    		<a href='vistaImg.php?COD_SIC=COD_SIC' download='Image.jpg'>Descargar Archivo</a>	
			    	

			    </div>  

			-->

			<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>






			    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>


			    <script type="text/javascript">
			    	$(document).ready(function(){
			    		$("#hide").on('click', function() {
			    			$("#medidor1").hide();
			    			$("#show").show();
			    			return false;
			    		});

			    		$("#show").on('click', function() {
			    			$("#medidor1").show();
			    			$("#show").hide();
			    			return false;
			    		});

			    		$("#hide2").on('click', function() {
			    			$("#medidor2").hide();
			    			$("#show2").show();
			    			return false;
			    		});

			    		$("#show2").on('click', function() {
			    			$("#medidor2").show();
			    			$("#show2").hide();
			    			return false;
			    		});

			    		$("#hide3").on('click', function() {
			    			$("#imagenes1").hide();
			    			$("#show3").show();
			    			return false;
			    		});

			    		$("#show3").on('click', function() {
			    			$("#imagenes1").show();
			    			$("#show3").hide();
			    			return false;
			    		});





			    	});
			    </script> 






			</body>
			</html>