
<!DOCTYPE html>
<html>

<head>
		
<?php require_once "scripts.php";	?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



	</head>

<body>	


<div class="control-group">
  
  <br>	

<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">Login Usuario Facturacion ASC</div>
					<div class="panel panel-body">
						<div style="text-align: center;">
							<img src="img/logo.png" height="230">
						</div>
						<p></p>
						<label>UsuarioSup ASC</label>
						<input type="text" id="usuario" class="form-control input-sm" name="">
						<label>Password</label>
						<input type="password" id="password" class="form-control input-sm" name="">
						<p></p>
						<span  class="btn btn-primary" id="entrarSistema">Entrar</span>
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
		
	</div>


  
</div>

<!--

<label class="control-label" for="basicinput">Extensión</label>
  <div class="col-sm-10">
    <input type="number" onchange="verificarDocumento()"  pattern="[0-9]{4,4}" name="extension" id="extension" placeholder="" class="form-control span8 tip" maxlength="2" minlength="2" title="Solo numeros. las extensiones son de minimo y maximo 4 numeros"
      required />
  </div><p id="log"></p>  -->



</body>
</html>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>

<script src="https://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.8.2/lodash.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.0.6/require.js"></script>
<link rel="stylesheet" href="https://www.artofliving.org/sites/all/libraries/jquery.nyroModal/styles/nyroModal.css" type="text/css" media="screen" />
<script  src="https://www.artofliving.org/sites/all/libraries/jquery.nyroModal/js/jquery.nyroModal.custom.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){


			cadena="usuario=" + $('#usuario').val() +
			"&password=" + $('#password').val();

			$.ajax({

				type:"POST",
				url:"validar1.php",
				data:cadena,
				success:function(r){

					if(r==1){
						//window.location="../graficas/index.php";
						window.location="validar1.php";
					}else{
						window.location="validar1.php";
						//alertify.alert("fallo al entrar :(");
					}	

				}
			});

		});


	});
</script>


