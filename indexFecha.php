<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



<div class="container">
<div class="panel panel-default">
<div class="panel-body">
<br>
<div class="row">
<form action="importarFecha2.php" method="post" enctype="multipart/form-data" id="import_form" >
<div class="col-md-3">
<input type="file" name="file" />
</div>
<br>
<div class="col-md-5">
<input type="submit" class="btn btn-primary" name="import_data" value="IMPORT">
</div>
</form>
</div>
<br>
<div class="row">
<table class="table table-bordered">
<thead>
<tr>
<th>Id</th>
<th>Periodo</th>
<th>Año</th>
<th>Fecha Exp</th>
<th>Fecha Ven</th>
<th>Fecha Lim</th>
<th>Dias Fac</th>
<th>IPP</th>
<th>Periodo Fac</th>


</tr>
</thead>
<tbody>
<?php

$con=mysqli_connect('localhost','root','23032003','ascfac');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
    



$sql = "SELECT id, periodo, ano, fechaExp, fechaVen, fechaLim, DIAS_FAC, IPP, periodoFac FROM tbl_fecha ORDER BY id DESC LIMIT 10";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
if(mysqli_num_rows($resultset)) {
while( $row = mysqli_fetch_assoc($resultset) ) {
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['periodo']; ?></td>
<td><?php echo $row['ano']; ?></td>
<td><?php echo $row['fechaExp']; ?></td>
<td><?php echo $row['fechaVen']; ?></td>
<td><?php echo $row['fechaLim']; ?></td>
<td><?php echo $row['DIAS_FAC']; ?></td>
<td><?php echo $row['IPP']; ?></td>
<td><?php echo $row['periodoFac']; ?></td>
<td><a href="#" data-href="eliminarFecha.php?id=<?php  echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>

</tr>
<?php } } else { ?>
<tr><td colspan="5">No records to display.....</td></tr>
<?php } ?>

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



</tbody>
</table>
</div>
</div>
</div>
</div>