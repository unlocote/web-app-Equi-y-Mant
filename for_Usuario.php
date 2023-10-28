
<!DOCTYPE html>
<html>





<?php



	require 'conexion.php';

	require 'config/validate_session.php';
    require 'config/validate_roles.php';
     include 'session_paragraph.php';

	
	//$COD_PROPIO = $_GET['COD_PROPIO'];

    /*
	$sql1 = "SELECT MAX(COD_PROPIO) FROM tbl_instalacion";
	$resultado1 = $mysqli->query($sql1);
	$row1 = $resultado1->fetch_array()[0] ?? '';
	echo $row1; echo '<br>';

	$sql2 = "SELECT MAX(ORDEN) FROM tbl_instalacion";
	$resultado2 = $mysqli->query($sql2);
	$row2 = $resultado2->fetch_array()[0] ?? '';
	echo 'MAX ORDEN  '.$row2; echo '<br>';

	$sql3 = "SELECT MAX(ORDEN_FAC) FROM tbl_instalacion";
	$resultado3 = $mysqli->query($sql3);
	$row3 = $resultado3->fetch_array()[0] ?? '';
	//echo $row3;
	echo '<br>';
	echo '<br>';

	$sql4 = "SELECT * FROM tbl_instalacion ORDER BY COD_PROPIO DESC LIMIT 5";
	$resultado4 = $mysqli->query($sql4); */
	

	?>




	

	<head>



		
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.js"></script>

		<script src="https://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/0.8.2/lodash.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.0.6/require.js"></script>
		<link rel="stylesheet" href="https://www.artofliving.org/sites/all/libraries/jquery.nyroModal/styles/nyroModal.css" type="text/css" media="screen" />
		<script  src="https://www.artofliving.org/sites/all/libraries/jquery.nyroModal/js/jquery.nyroModal.custom.min.js"></script>

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>

		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>



		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>	
		 <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>







	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO USUARIO</h3>
			</div>

			<div class="btn pull-center">
					<a href="indexAdmin.php" class="btn btn-info" style="color: green;">VOLVER</a>
					
				</div>
			
			<br>
			
			

				<form class="form-horizontal" method="POST" action="act_Usuario.php" autocomplete="off">	


				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">CORREO</label>
					<div class="col-sm-10" id="resultado11">
						<input type="text" class="form-control" id="correo"  name="correo" onchange="validateFor()" placeholder="correo" required><p id="log"></p>
					</div>
				</div>	

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">NOMBRE</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="Nom_Us" name="Nom_Us" placeholder="Nombre" required>
					</div>

				</div>


				

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">TIPO USUARIO</label>
					<div class="col-sm-10">
						<select id='rol_id' name="rol_id" class="form-control" onchange='cambioOpciones();' required>
							<option value=''>Seleccione Rol</option>
	      					<option value='1'>Administrador</option>
	    					<option value='2'>AuxAdmin</option>
	    					<option value='3'>Tecnico</option>
	    					<option value='4'>Vendedor</option>
	    					<option value='5'>AgenteControl</option>	
	    					<option value='6'>Cliente</option>			    				
	   					</select>
					</div>
				</div>


				

				<div class="form-group">

					<label for="nombre" class="col-sm-2 control-label">DIRECCION</label>
					<div class="col-sm-10">

						<input type="text" class="form-control" id="Dir_Us" name="Dir_Us" placeholder="Direccion" required>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">FECHA INSCRIPCION</label>
					<div id="respuesta" class="col-sm-10">
						<input type="date" class="form-control" id="FechaUsIni" name="FechaUsIni" placeholder="FECHA" required>
					</div>
				</div>

				

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">ESTATUS</label>
					<div class="col-sm-10">
						<select id='estatus' name="estatus" class="form-control" onchange='cambioOpciones();' required>
							<option value=''>Seleccione Estatus</option>
	      					<option value='0'>0</option>
	    					<option value='1'>1</option>
	    					<option value='2'>2</option>	    				
	   					</select>
					</div>
				</div>

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">PASSWORD</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="password" name="password"  required>
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">CELULAR</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="telefono" name="telefono" placeholder="TELEFONO O CELULAR" required>
					</div>
				</div>
				
			<!--	<input type="hidden" id="COD_PROPIO" name="COD_PROPIO" value="<?php //echo $row['COD_PROPIO']; ?>" /> -->

				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">NOMBRE EMPRESA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombreEmp" name="nombreEmp" placeholder="NOMBRE DE LA EMPRESA">
					</div>
				</div>

					<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">NIT EMPRESA</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nitEmp" name="nitEmp" placeholder="TELEFONO" required>
					</div>
				</div>

			
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="indexAdmin.php" class="btn btn-default">Regresar</a>
						<button  type="submit" class="btn btn-primary" value="Validate" onclick="return validateFor()">Guardar</button>
					</div>
				</div>
			</form>
		</div>

		


			

          

           


	 		 <script type="text/javascript"> 

		//var correo = document.getElementById("#correo");
				//var correo=3;
	 function verificarDocumento(){
	// event.preventDefault();

	 	var correo = document.getElementById("correo").value;	

	 		//console.log("no existe");

	 		//document.cookie = "variable = " + correo;
	 		log.textContent = correo;
	 		 //document.cookie = "correop = " + correo; //Este es el que estás ya obteniendo vía JS

	 		  var jsVar1 = "Hello1";
   			  var jsVar2 = "World";
  			  window.for_Usuario.php = window.for_Usuario.php + "?w1=" + jsVar1 + "&w2=" + jsVar2;
  			  //window.location.href = window.location.href + "?w1=" + correo + "&w2=" + jsVar2;



	 }
	 </script>	


     
<!--
	 //cadena="correo=" + $('#correo').val();// +
	 var correo=3;
	 cadena=correo;
			//"&password=" + $('#password').val();

			$.ajax({

				type:"POST",
				url:"verificarCorreo2.php",
				data:cadena,
				success:function(r){

					if(r==1){
						//window.location="../graficas/index.php";
						window.location="verificarCorreo2.php";
					}else{
						window.location="verificarCorreo2.php";
					}	

				}
			});	*/

	/*		
	var correo = document.getElementById("#correo").val();			
    //var correo = $("#correo").val();
    // var correo3="3";
     var data = {
      correo : correo // se tiene una variable json y se agrega lo que le vas a mandar, el nombre y el valor
     };
     //console.log(correo3);	
     $.ajax({
      type: "post",	
      url:"verificarCorreo2.php", //colocas la ruta de donde está el archivo php
      //data: correo3, //Los datos que se van a enviar por el post en este caso correo
      //data:'correo=' + $("#correo3"),
      data: data,
      //dataType: 'json',
      success: function(response){
         if(response.trim() == "1"){
         	log.textContent = " existe";
             console.log(correo);
             //window.location="verificarCorreo2.php";
          }else{
          	log.textContent = "no existe";
          	 //window.location="verificarCorreo2.php";
          	  console.log(correo);	
          	//console.log("no existe");
          }
       }
});*/










		/*
	$(document).ready(function(){
		$('#entrarSistema').click(function(){

			

			cadena ="correo=" + $('#correo').val();
			//"&password=" + $('#password').val();

			$.ajax({

				type:"POST",
				url:"verificarCorreo.php",
				data:cadena,
				success:function(r){


					//cadena="usuario=" + $('#usuario').val() +	

					if(r==1){
						//window.location="../graficas/index.php";
						log.textContent = "existe";
					}else{
						log.textContent = "no existe";
						//window.location="verificarCorreo.php";
					}	

				}
			});

		});


	}); */

-->







		<script type="text/javascript">
           function validateFor(){
                
                // Define our regular expression.
                var validEmail =  /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/;

                // Using test we can check if the text match the pattern
                if(!validEmail.test( jQuery('#correo').val() ) ){
                    alert('Correo es invalido, por favor corregir');
                    return false;
                }else{
                    //alert('Correo es invalido, por favor corregir');
                    return true;
                }

                if( validEmail.test( jQuery('#correo').val() ) ){
                    alert('Correo valido, continue con el formulario');
                    return true;
                }else{
                    alert('Correo es invalido, por favor corregir');
                    return false;
                }

                //Validando si existe la correo en BD antes de enviar el Form





            }
        </script>


	</body>
</html>