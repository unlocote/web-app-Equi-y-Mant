<?php
	require 'conexion.php';
	require 'config/validate_session.php';
	//require '..\config\login.php';

	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE NOMBRE LIKE '%$valor%'";
		}
	}
	$sql = "SELECT * FROM users_asc01 $where LIMIT 3000";//ORDER BY No_Factura $where LIMIT 30
	$resultado = $mysqli->query($sql);
	//$sql2="SELECT * FROM personas";

    /* $sql2 = "INSERT INTO personas(codigobarras) values ('barras/'$v1'.jpg')";
     $resultado2 = $mysqli->query($sql2);

       $sql3 = "INSERT INTO 'personas'('codigobarras') values ('barras/(415)7709998726789(8020)0000081324(3900)0000131225(96)20200401.jpg') where id=5";
								  $mysqli->query($sql3);  */
?>
<html lang="es">
	<head>
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
	<!-- END THEME STYLES -->



		

		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[1, "asc"]],
					"language":{
						"lengthMenu": "Mostrar _MENU_ registros por pagina",
						"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					}

				});

			});


		</script>

	</head>
	
	<body>
		
		<div class="container">
			<div class="row">
				<h2 style="text-align:center">TABLA FRONTERAS ASC Beta </h2>
			</div>
			
			<div class="row">
				<a href="../pdf/index.php" target="_blank"  class="btn btn-primary">PDF FACTURAS COMPLETAS</a>
				<a href="../pdf/index3.php" target="_blank" class="btn btn-primary">PDF FACTURAS INDIVIDUALES</a>
				<a href="tbl_reemplazos.php" class="btn btn-primary">TABLA REEMPLAZOS</a>
				<a href="inportarFecha.php" target="_blank" class="btn btn-primary">CARGAR TBL</a>
				<a href="chargerini.php" target="_blank" class="btn btn-primary">CARGAR TB_FECHA</a>
				
				<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
					<b>Nombre: </b><input type="text" id="campo" name="campo" />
					<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
				</form>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>							
							<th>COD_SIC</th>
							<th>Nombre</th>
							<th>Tipo Frontera</th>							
							<th>Direccion</th>
							<th>Ciudad</th>														
							<th>Departamento</th>
					
							<th>modificar</th> 
							
							
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>								
								<td><?php echo $row['COD_SIC']; ?></td>
								<td><?php echo $row['NOMBRE']; ?></td>
								<td><?php echo $row['TIPO_FRON']; ?></td>
								<td><?php echo $row['DIRECCION']; ?></td>
								<td><?php echo $row['CIUDAD']; ?></td>
								<td><?php echo $row['DEPARTAMENTO']; ?></td>
													
								<td><a href="tblAct.php?COD_SIC=<?php echo $row['COD_SIC']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

								
						

								<td> <a href="#" data-href="eliminar.php?id=<?php  //echo $row['COD_PROPIO']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>



		
		<!-- Modal -->
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
		
	</body>
</html>