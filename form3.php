<html>
<head><title>Recibe Datos</title></head>
<body>
<?php
$_conexion=mysqli_connect("localhost", "root","","tienditadoñanicole") or
die("problema de conexion");
mysqli_query($_conexion, "insert into producto(nombre, precio, codigo, peso) values
('$_REQUEST[nombre]','$_REQUEST[precio]','$_REQUEST[codigo]','$_REQUEST[peso]')")
or die("Problema con select". mysqli_error($_conexion));
mysqli_close($_conexion);
echo ("producto registrado");
?>
</body>
</html>
