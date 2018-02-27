<html>
<head>
<title> ejemplo de uso for</title>
</head>
<body>

<h1>iniciando el manejo de formularios</h1>
<?php echo $_POST ['nombre'];
introduzca su nombre:
<FORM ACTION="FrmDEFINITIVA.php" METHOD="POST">
introduzca su nombre:
<INPUT TYPE="text" NAME="nombre"><br>
introduzca la nota 1
<INPUT TYPE="text" NAME="nota1"><br>
$nota1 = $_POST ['nota1'];
introduzca la nota 2
<INPUT TYPE="text" NAME="nota2"><br>
introduzca la nota 3
<INPUT TYPE="text" NAME="nota3"><br>
introduzca la nota 4
<INPUT TYPE="text" NAME="nota4"><br>
<INPUT TYPE="submit" VALUE="enviar"  >



$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];
$nota4 = $_POST ['nota4'];
$def= ($nota1+$nota2+$nota3+$nota4)/4;
?>
su definitiva es:<?php echo $def ?>
</FORM>
</body>
</html>