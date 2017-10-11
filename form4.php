<html>
<head><title>Recibe Datos</title></head>
<body>
<?php
$_conexion=mysqli_connect("localhost", "root","","tienditadoñanicole") or
die("problema de conexion");
mysqli_query($_conexion, "insert into producto(nombre, apellido, numempleado, telefono) values
('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[numempleado]','$_REQUEST[telefono]')")
or die("Problema con select". mysqli_error($_conexion));
mysqli_close($_conexion);
echo ("producto registrado");
?>
</body>