<html>
<head><title>Ingresa datos del cliente</title>
<style type="text/css">
  body {
padding-left: 11em;
    color: purple;
    background-color: #d8da3d }
 ul.navbar {
list-style-type: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 2em;
    left: 1em;
    width: 9em }
ul.navbar li {
    background: white;
    margin: 0.5em 0;
    padding: 0.3em;
    border-right: 1em solid black }
  ul.navbar a {
    text-decoration: none }
  a:link {
    color: blue }
  a:visited {
    color: purple }
  </style>
</head>
<body>
<form action="form2.php" method="post">
Ingresa su nombre
<input type="text" name="nombre"><br>
Ingresa su apellido:
<input type="text" name="apellido"><br>
Ingresa su edad:
<input type="number" name="edad"><br>
Ingresa su correo:
<input type="text" name="correo"><br>
<input type="submit" value="enviar">
</form>
</body>