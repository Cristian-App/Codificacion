<!DOCTYPE html>
<CENTER>
<html>
<head>
	<h1>HOLA MUNDO 2</h1>
</head>
<body>
	<?php 
		$nombre = $_POST['nom'];
		$contra = $_POST['pass'];

		include("Conexion.php");

		$query = "SELECT * FROM Usuario WHERE Nombre = '$nombre' AND Contraseña = '$contra'";
		$consulta = mysqli_query($Conexion,$query);

		if (mysqli_num_rows($consulta)==1) {
			echo "BIENVENIDO";
		}else{
			header("location : Login.php");
		}
	 ?>
</body>
</html>
</CENTER>