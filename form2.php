<html>
<head><title>Recibe Datos</title></head>
<body>
<?php
$_conexion=mysqli_connect("localhost", "root","","tienditadoņanicole") or
die("problema de conexion");
mysqli_query($_conexion, "insert into tienditadoņanicole(nombre, apellido, edad, correo) values
('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[edad]','$_REQUEST[correo]')")
or die("Problema con select". mysqli_error($_conexion));
mysqli_close($_conexion);
echo ("cliente registrado");
?>
</body>
</html>
