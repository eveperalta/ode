<?php
$name =  $_POST['nombre'];
$email = $_POST['mail'];

if($name and $email){
	$conexion = mysql_connect("localhost","kurewenc_news","Malf0805");
	$db = mysql_select_db("kurewenc_newsletter",$conexion);
	$consulta = "INSERT INTO newsletter(name,email) VALUES('$name','$email')";
	$res = mysql_query($consulta);
	mysql_close($conexion);

	header("Location:https://www.oficinadelaestetica.cl");
}
else{
echo "Los datos enviados estan vacios";
}
?>
