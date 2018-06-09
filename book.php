<?php

 if(!empty($_POST['nombre'])  AND !empty($_POST['telefono'])  AND !empty($_POST['service']) AND !empty($_POST['mail'])  AND !empty($_POST['datetime']) )
 {

  $to ="info@oficinadelaestetica.cl";
  $headers = "Content-Type: text/html; charset=iso-8859-1\n";
  $headers .= "From:".$_POST['nombre']."\r\n";
  $tema="Contacto oficinadelaestetica!!!";
  $mensaje="
  <table border='0' cellspacing='2' cellpadding='2'>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Nombre:</strong></td>
      <td width='80%' align='left'>$_POST[nombre]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>E-mail:</strong></td>
      <td align='left'>$_POST[mail]</td>
    </tr>
    <tr>
      <td width='20%' align='center' bgcolor='#FFFFCC'><strong>Telefono:</strong></td>
      <td width='80%' align='left'>$_POST[telefono]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>Tipo Servicio:</strong></td>
      <td align='left'>$_POST[service]</td>
    </tr>
    <tr>
      <td align='center' bgcolor='#FFFFCC'><strong>Fecha Sujerida:</strong></td>
      <td align='left'>$_POST[datetime]</td>
    </tr>
    
  </table>
  ";
  
  @mail($to,$tema,$mensaje,$headers);
  header("Location:https://www.oficinadelaestetica.cl");

} else {
   echo "no se pudo enviar el mensaje";
}

?>