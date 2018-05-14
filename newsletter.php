// Database Structure 
<?php
$host="localhost";
$username="root";
$password="";
$databasename="sample";

$connect=mysql_connect($host,$username,$password);
$db=mysql_select_db($databasename);

if(isset($_POST['submit_form']))
{
 $name=$_POST["name"];
 $email=$_POST["email"];
 
 mysql_query("insert into short_urls values('','$name','$email')");
 echo "Gracias por suscribirte a nuestro Newsletter";
}
?>