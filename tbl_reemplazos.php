<?php
	require 'conexion.php';

	//$v1="barras/(415)7709998726789(8020)0000081324(3900)0000131225(96)20200401.JPG";
	//$v1=$_SESSION['$barras'];
	
	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor%'";
		}
	}
	$sql = "SELECT * FROM tbl_facturacion3 $where LIMIT 3000";//ORDER BY No_Factura $where LIMIT 30
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
				<h2 style="text-align:center">Reemplazos Facturación Beta </h2>
			</div>
			
			<div class="row">
				<a href="index.php" class="btn btn-primary">TABLA FACTURAS</a>
				<a href="nuevo.php" class="btn btn-primary">TABLA FECHA PERIODO</a>
				<a href="..\pdf\index4.php" target="_blank" class="btn btn-primary">PDF FACTURAS REEMPLAZOS</a>
				

				
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
							<th>factura</th>
							<th>nombre</th>
							<th>codigo</th>
							<th>nit</th>							
							<th>direccion</th>							
							<th>municipio</th>
							<th>medidor</th>
							<th>numero</th>
							<th>constante</th>
							<th>periodo_fac</th>
							<th>fecha_exp</th>
							<th>fecha_ven</th>
							<th>fecha_lim</th>
							<th>nivel_tension</th>							
							<th>tarifa</th>
							<th>G</th>
							<th>D</th>
							<th>Cv</th>
							<th>PR</th>							
							<th>CU</th>
							<th>DT1_DT3</th>

							<th>lectant</th>
							<th>lectact</th>
							<th>consumo_act</th>
							<th>cod_100</th>
							<th>des_100</th>
							<th>tot_act</th>

							<th>consumo_react</th>
							<th>cod_101</th>
							<th>des_101</th>
							<th>tot_react</th>

							<th>cod_200</th>
							<th>des_200</th>
							<th>tot_alpu</th>

							<th>cod_102</th>
							<th>des_102</th>
							<th>tot_fac_ant</th>

							<th>cod_103</th>
							<th>des_103</th>
							<th>tot_intfac_ant</th>

							<th>cod_500</th>
							<th>des_500</th>
							<th>tot_sobret</th>

							<th>cod_400</th>
							<th>des_400</th>
							<th>tot_subsid</th>

							<th>cod_110</th>
							<th>des_110</th>
							<th>tot_desUni</th>
	
							<th>cod_300</th>
							<th>des_300</th>
							<th>tot_contrib</th>
	
							<th>cod_104</th>
							<th>des_104</th>
							<th>tot_alqEqui</th>
	
							<th>cod_105</th>
							<th>des_105</th>
							<th>tot_comuni</th>
	
							<th>cod_106</th>
							<th>des_106</th>
							<th>tot_tot106</th>
	
							<th>cod_107</th>
							<th>des_107</th>
							<th>tot_acupag</th>
	
							<th>cod_108</th>
							<th>des_108</th>
							<th>tot_otrosDes</th>
	
							<th>totAL FAC</th>
	

							<th>codigobarras</th>
							<th>modificar</th>
							<th>Prueb</th>
							<th>Barras</th>

							<th>BORRAR</th>

						</tr>
					</thead>
					
					<tbody>
						<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
							<tr>
								<td><?php echo $row['NO_FACTURA']; ?></td>
								<td><?php echo $row['NOMBRE']; ?></td>
								<td><?php echo $row['COD_PROPIO']; ?></td>
								<td><?php echo $row['NIT']; ?></td>
								<td><?php echo $row['DIRECCION']; ?></td>
								<td><?php echo $row['MUNICIPIO']; ?></td>
								<td><?php echo $row['MEDIDOR']; ?></td>
								<td><?php echo $row['NUMERO']; ?></td>
								<td><?php echo $row['CONSTANTE']; ?></td>
								<td><?php echo $row['PERIODO_FAC']; ?></td>
								<td><?php echo $row['FECHA_EXP']; ?></td>
								<td><?php echo $row['FECHA_VEN']; ?></td>
								<td><?php echo $row['FECHA_LIM']; ?></td>
								<td><?php echo $row['NIVEL']; ?></td>								
								<td><?php echo $row['TARIFA']; ?></td>
								<td><?php echo $row['G']; ?></td>
								<td><?php echo $row['D']; ?></td>
								<td><?php echo $row['Cv']; ?></td>
								<td><?php echo $row['PR']; ?></td>
								<td><?php echo $row['CU']; ?></td>
								<td><?php echo $row['DT1_DT3']; ?></td>
	

								<td><?php echo $row['LEC_ANT']; ?></td>
								<td><?php echo $row['LEC_ACT']; ?></td>
								<td><?php echo $row['KWHMON']; ?></td>
								<td><?php echo $row['COD_100']; ?></td>
								<td><?php echo $row['DES_100']; ?></td>
								<td><?php echo $row['TOT_ACTIVA']; ?></td>

								
								<td><?php echo $row['KVARHMON']; ?></td>
								<td><?php echo $row['COD_101']; ?></td>
								<td><?php echo $row['DES_101']; ?></td>
								<td><?php echo $row['TOT_REACTIVA']; ?></td>
								
								<td><?php echo $row['COD_200']; ?></td>
								<td><?php echo $row['DES_200']; ?></td>
								<td><?php echo $row['TOTAL_ALUMBRADO_PUBLICO']; ?></td>


								<td><?php echo $row['COD_102']; ?></td>
								<td><?php echo $row['DES_102']; ?></td>
								<td><?php echo $row['FACTURAS_ANTERIORES']; ?></td>
								
								<td><?php echo $row['COD_103']; ?></td>
								<td><?php echo $row['DES_103']; ?></td>
								<td><?php echo $row['INTERESES_FAC_ANT']; ?></td>
								
								<td><?php echo $row['COD_500']; ?></td>
								<td><?php echo $row['DES_500']; ?></td>
								<td><?php echo $row['TOTAL_SOBRETASA']; ?></td>
								
								<td><?php echo $row['COD_400']; ?></td>
								<td><?php echo $row['DES_400']; ?></td>
								<td><?php echo $row['TOTAL_SUBSIDIO']; ?></td>
								
								<td><?php echo $row['COD_110']; ?></td>
								<td><?php echo $row['DES_110']; ?></td>
								<td><?php echo $row['TOTAL_DESCUENTO_TUNI']; ?></td>
								
								<td><?php echo $row['COD_300']; ?></td>
								<td><?php echo $row['DES_300']; ?></td>
								<td><?php echo $row['TOTAL_CONTRIBUCION']; ?></td>
								
								<td><?php echo $row['COD_104']; ?></td>
								<td><?php echo $row['DES_104']; ?></td>
								<td><?php echo $row['TOT_ALQ_EQUI']; ?></td>
								
								<td><?php echo $row['COD_105']; ?></td>
								<td><?php echo $row['DES_105']; ?></td>
								<td><?php echo $row['TOT_COMUN']; ?></td>
								
								<td><?php echo $row['COD_106']; ?></td>
								<td><?php echo $row['DES_106']; ?></td>
								<td><?php echo $row['TOTAL_106']; ?></td>
									
								<td><?php echo $row['COD_107']; ?></td>
								<td><?php echo $row['DES_107']; ?></td>
								<td><?php echo $row['TOT_AC_PAGO']; ?></td>

								<td><?php echo $row['COD_108']; ?></td>
								<td><?php echo $row['DES_108']; ?></td>
								<td><?php echo $row['TOT_OTROS1']; ?></td>
								
								<td><?php echo $row['TOTAL_FAC']; ?></td>
								
								<!--<td><?php //echo $row['valor']; ?></td>`-->
								
								<td><?php echo $row['COD_BAR']; ?></td>

								<td><a href="modificar.php?COD_PROPIO=<?php echo $row['COD_PROPIO']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>


								<!--
								<td><img src="barcode-php1/generar.php/?variable=<?php //echo $row['telefono'];?>"/></span></a></td>-->
									
								<td><img src="barcode-php1/generar3.php/?variable=<?php echo $row['COD_BAR'];?>"/></span></a></td>	

								<!--
								<<?php	
								 $barras //= "barras/(415)7709998726789(8020)0000081324(3900)0000131225(96)20200401.JPG";
								 ?>-->

								<td><img src="barrasReem/<?php echo $row['COD_BAR'];?>"/></span></a></td>  
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


								<td><a href="#" data-href="eliminar.php?NO_FACTURA=<?php  echo $row['NO_FACTURA']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
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