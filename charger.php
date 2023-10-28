
<?php 

	require_once "scripts.php";
	require 'conexion.php';
	require 'config/validate_session.php';
	//require_once "../validate_session.php";

			?>



<!DOCTYPE html>
<html>
<head>
	<title>Charger</title>

	
		<link rel="shortcut icon" type="image/png" href="../imgVarias/icono3.png"/>	

	
</head>
<body style="background-color: #5499C7">
	<br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<div class="panel panel-primary">
					<div class="panel panel-heading">LoginSup usuario ASC</div>
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

<!--<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>-->
<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

			if($('#usuario').val()=="") {
				alertify.alert("Debea agregar usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Debea agregar password");
				return false;	

			}

			cadena="usuario=" + $('#usuario').val() +
			"&password=" + $('#password').val();

			$.ajax({

				type:"POST",
				url:"php/chargerlogin.php",
				data:cadena,
				success:function(r){

					if(r==1){
						//window.location="../graficas/index.php";
						window.location="chargerini.php";
					}else{
						alertify.alert("fallo al entrar :(");
					}	

				}
			});

		});


	});
</script>

