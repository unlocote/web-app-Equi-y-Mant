<?php
	require 'conexion.php';

	//$v1="barras/(415)7709998726789(8020)0000081324(3900)0000131225(96)20200401.JPG";
	//$v1=$_SESSION['$barras'];
	
	/*$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE NOMBRE LIKE '%$valor%'";
		}
	}
	$sql = "SELECT * FROM act_asc01 where COD_SIC='$COD_SIC'";//ORDER BY No_Factura $where LIMIT 30
	$resultado = $mysqli->query($sql);*/


	$COD_SIC = $_GET['COD_SIC'];
	
	$sql = "SELECT * FROM act_asc01 WHERE  COD_SIC= '$COD_SIC'";
	$resultado = $mysqli->query($sql);
	//$row = $resultado->fetch_array(MYSQLI_ASSOC);
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
				<h2 style="text-align:center">TABLA ACTUALIZACION FRONTERAS ASC Beta </h2>
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
							<th>COD_ACT</th>
							<th>Nombre</th>
							<th>Tipo Frontera</th>							
							<th>Direccion</th>
							<th>Ciudad</th>														
							<th>Departamento</th>
						<!--	<th>medidor</th>
							<th>numero</th>
							<th>constante</th>
							<th>nivel_tension</th>							
							<th>tarifa</th>
							<th>estrato</th>
							<th>contribucion</th>
							<th>ordenFac</th>-->
							<th>modificar</th> 
							
							
						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>								
								<td><?php echo $row['COD_SIC']; ?></td>
								<td><?php echo $row['COD_ACT']; ?></td>
								<td><?php echo $row['NOMBRE']; ?></td>
								<td><?php echo $row['TIPO_FRON']; ?></td>
								<td><?php echo $row['DIRECCION']; ?></td>
								<td><?php echo $row['CIUDAD']; ?></td>
								<td><?php echo $row['DEPARTAMENTO']; ?></td>
							<!--	<td><?php //echo $row['NUMERO']; ?></td>
								<td><?php //echo $row['CONSTANTE']; ?></td>
								<td><?php //echo $row['NIVEL']; ?></td>								
								<td><?php //echo $row['TARIFA']; ?></td>
								<td><?php //echo $row['ESTRATO']; ?></td>
								<td><?php //echo $row['CONTRIBUCION']; ?></td>
								<td><?php //echo $row['ORDEN_FAC']; ?></td> -->
								
								<td><a href="modificarHv1.php?COD_ACT=<?php echo $row['COD_ACT']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

								
								<!--
								<td><img src="barcode-php1/generar.php/?variable=<?php //echo $row['telefono'];?>"/></span></a></td>-->
									
								
								<!--
								<<?php	
								 $barras //= "barras/(415)7709998726789(8020)0000081324(3900)0000131225(96)20200401.JPG";
								 ?>-->

								 <!--../../pdf/   barras/-->
								 <!--<?php //"update 'imagenes' SET 'serial'='1','imagen' =LOAD_DATA('barras/$v1.jpg')";?>-->
								 <?php			
								 // $sql3 = "INSERT INTO 'personas'('codigobarras') values ('barras/(415)7709998726789(8020)0000081324(3900)0000131225(96)20200401.jpg')";
								  //$mysqli->query($sql3);

								  //$sql4 = "UPDATE 'personas' SET 'codigobarras'=" .['barras/$v1.jpg']."";
								  //$mysqli->query($sql4);

								  //$sql4 = "UPDATE 'personas' SET codigobarras=(xxd -p['/barras/$v1.jpg'])";
								  //$mysqli->query($sql4);

								 // INSERT INTO `personas`(`id`, `nombre`, `correo`, `telefono`, `codigobarras`, `estado_civil`, `hijos`, `intereses`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

								  //$id = $mysqli->update_id;

								 //echo "Imagen agregada con el id".$id."";


								  ?>	

								<!--
								<td><img src="barcode-php1/generar.php/?variable=<?php //echo $row['codigobarras']; ?>"/></span></a></td>
								-->


								<td><!-- <a href="#" data-href="eliminar.php?id=<?php  //echo $row['COD_PROPIO']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a>--></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>

<!--
		<?
		//include("conectar.php");

			//aqui van las imagenes (Carpeta o ruta que usaras)
	/*	$path = "/barras/";

			//Hacemos un poco de código verificando que se recibieron las imagenes
		if(isset($_FILES['file_array'])){

			    //almacenamos las propiedades de las imagenes
			$name_array = $_FILES['file_array']['name'];
			$tmp_name_array = $_FILES['file_array']['tmp_name'];
			$type_array = $_FILES['file_array']['type'];
			$size_array = $_FILES['file_array']['size'];
			$error_array = $_FILES['file_array']['error'];
			$id_usuarios    = $_POST["codigobarras"]

			 //recorremos el array de imagenes para subirlas al simultaneo
			for($i = 0; $i < count($tmp_name_array); $i++){
				if(move_uploaded_file($tmp_name_array[$i], "barras/".$name_array[$i])){

            //guardamos en la base de datos el nombre
					$act = "INSERT INTO personas (codigobarras) values ('$path.$name_array[$i]')";
					if(mysqli_query($act)){echo "Se ha subido exitosamente.<br>";

				}
				else
				{
            //si ocurre algún problema 
					echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
				}
	*/		}
		}}
		?>

		<form action="" method="post" enctype="multipart/form-data">

			<p align="center">Fotos:</p>

			<input name="file_array[]" type="file" multiple>

			<input name="enviar" type="submit" value="Guardar" />

		</form>
-->

		
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