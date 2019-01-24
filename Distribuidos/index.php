<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                    "http://www.w3.org/TR/html4/loose.dtd">


<html>
<head>
	<title>Sistemas Distribuidos</title>
</head>
<body>
	
	<form method="post" action="crear.php">
	<b>CREAR CUENTA</b>
	<br></br>
	<b>Nombre</b> <input type="text" name="d1">
	<br></br>
	<b>Usuario</b> <input type="text" name="d2">
	<br></br>
	<b>Contraseña</b> <input type="text" name="d3">
	<br></br>
	<input type="submit">
	</form>	

	<br></br>

	<form method="post" action="crear1.php">
	<b>VENUES</b>
	<br></br>
	<b>Nombre del Local</b> <input type="text" name="v1">
	<br></br>
	<b>Dirección</b> <input type="text" name="v2">
	<br></br>
	<b>Tipo</b> <input type="text" name="v3">
	<br></br>
	<b>Capacidad</b> <input type="text" name="v4">
	<br></br>
	<b>Nombre de la Localidad-Capacidad de la Locaclidad</b>
	<br></br>
	<b>Ejemplo: Premium-50</b>
	<br></br>
	<input type="text" name="v5">
	<br></br>
	<input type="text" name="v6">
	<br></br>
	<input type="text" name="v7">
	<br></br>
    <input type="submit">
	</form>

		<br></br>

	<form method="post" action="crear2.php">
	<b>EVENTO</b>
	<br></br>
	<b>Nombre del Evento</b> <input type="text" name="r1">
	<br></br>
	<b>Id del Lugar</b> <input type="text" name="r2">
	<br></br>
	<b>Fecha dd/mm/aa</b> <input type="text" name="r3">
	<br></br>
	<b>Hora hh:mm</b> <input type="text" name="r4">
	<br></br>
	<b>Costo Localidad 1</b> <input type="text" name="r5">
	<br></br>
	<b>Costo Localidad 2</b> <input type="text" name="r6">
	<br></br>
	<b>Costo Localidad 3</b> <input type="text" name="r7">
    <input type="submit">
	</form>

	<br></br>

	<form method="post" action="crear3.php">
	<b>LOGING</b>
	<br></br>
	<b>Usuario</b> <input type="text" name="s1">
	<br></br>
	<b>Contraseña</b> <input type="text" name="s2">
	<br></br>
    <input type="submit">
	</form>

	<form method="post" action="crear4.php">
	<b>Consulta</b>
    <input type="submit">
	</form>
</body>
</html>