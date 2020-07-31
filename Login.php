<!DOCTYPE html>
<center>
<html>
<header>
	<nav>
		<table style="background-color: #497df5"width="500">
			<tr>
				<td style="text-align: center;">
					<a href="" style="color: white">Inicio</a>
				</td>
				<td style="text-align: center;">
					<a href="" style="color: white">Productos</a>
				</td>
				<td style="text-align: center;">
					<a href="" style="color: white">Contacto</a>
				</td>
			</tr>
		</table>
	</nav>
</header>
<br>

<head>
	<h1 style="color: blue">PAGOS EN LINEA</h1>
	<h3 >INICIO DE SESIÓN</h3>
</head>
<body bgcolor="dde1e6">
	<form method="POST" action="Login2.php">
		<table>
			
			<tr>
				<td> Nombre: </td>
				<td>
					<input type="text" name="nom" required="">
				</td>
			</tr>
			<tr>
				<td> Contraseña:</td>
				<td>
					<input type="password" name="pass" required=" ">
				</td>
			</tr>
			<tr>
				<td>Perfil:</td>
				<td> <select required="" name="lista">
						<option value="">Seleccione uno</option>
						<option value="vendedor">Vendedor</option>
						<option value="Comprador">Comprador</option>
					</select>
				</td>
			</tr>
		</table>
		<table><br>
			<tr>
				<td><input type="submit" name="boton" value="Ingresar"></td>
			
	</form>
	<form method="POST" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">

			<td><input type="submit" name="registro" value="Registrarse"></td>

	</form>
			</tr>
		</table>
		<br>

	<?php 
		if (isset($_POST['registro'])) {
			echo "<html>";

				echo "<body>";

				echo "<form method='post' action=Formulario.php>";

					echo "<select name='register'required >";

						echo "<option value=>Seleccionar</option>";
						echo "<option value=Vendedor>Vendedor</option>";
						echo "<option value=Cliente>Cliente</option>";

					echo "</select>";
					echo "<input type='submit' value='Cargar formulario de registro'></input>";

				echo "</form>";

				echo "</body>";

			echo "</html>";
		}
	 ?>
</body>
</html>
</center>