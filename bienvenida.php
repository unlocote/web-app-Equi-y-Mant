

<!DOCTYPE html>

<?php

require 'config/validate_session.php';
require 'config/validate_roles.php';

?>

<html lang="en" >
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>


	<title>Documentttt</title>
</head>
<body class="text-center">

	<div class="content">
		<div class="row">
			<div class="col-12">
				<?php include 'session_paragraph.php'?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p>Bienvenido al sistema</p>
			</div>
		</div>
	</div>

</body>
</html>