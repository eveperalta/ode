
<?php
 if(!empty($_POST['client_name']) AND !empty($_POST['client_email']) AND !empty($_POST['booking-msg'])AND !empty($_POST['datetimepicker1'])AND !empty($_POST['phone_number'])AND !empty($_POST['beauty-service'])){
  $to ="info@oficinadelaestetica.cl";
  $headers = "Content-Type: text/html; charset=iso-8859-1\n";
  $headers .= "From:".$_POST['nombre']."\r\n";
  $tema="Contacto desde el Sitio Web oficinadelaestetica.cl";
  $mensaje="
  <table border='0' cellspacing='2' cellpadding='2'>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
      <td width='80%' align='left'>$_POST[client_name]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
      <td align='left'>$_POST[phone_number]</td>
    </tr>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>telefono</strong></td>
      <td width='80%' align='left'>$_POST[client_email]</td>
    </tr>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Fecha</strong></td>
      <td width='80%' align='left'>$_POST[datetimepicker1]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
      <td align='left'>$_POST[beauty-service]</td>
    </tr>
     <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>Comentario:</strong></td>
      <td align='left'>$_POST[booking-msg]</td>
    </tr>
  </table>
  ";
  @mail($to,$tema,$mensaje,$headers);
}
if(isset($_POST['Submit']))
    {
    header("Location: http://oficinadelaestetica.cl");
    }
?>