<?php 

foreach($_POST as $k=>$v){ 
$$k=$v; 
} 

if (!ini_get('register_globals')) { 
   $superglobales = array($_SERVER, $_ENV, 
       $_FILES, $_COOKIE, $_POST, $_GET); 
   if (isset($_SESSION)) { 
       array_unshift($superglobales, $_SESSION); 
   } 
   foreach ($superglobales as $superglobal) { 
       extract($superglobal, EXTR_SKIP); 
   } 
} 

?>

<?
$fecha=date("d-m-Y");
$hora=date("H:i:s");
$mail="gerardott@live.com";"contacto@escuelalibredehomeopatia.com.mx";"elhmiap@prodigy.net.mx";//mail a quien le va a llegar los correos
$origen="Escuela Libre de Homeopatia en Mexico";//Como quieres q diga en el nombre de quien envia el correo
$correo_from="contacto@escuelalibredehomeopatia.com.mx";//como quieres q sea el mail de quien envia el mail
$subject="Respuesta de Escuela Libre de Homeopatia en Mexico";//Como quieres que diga en el titulo del mail
$myname="Contacto";

//aqui es donde puedo agregar mas variables...
$contenido="Nombre: $nombre<br><br>
Teléfono: $phone<br><br>
E-mail: $correo<br><br>
Comentarios: $comments<br><br>
Enviado: $fecha a las $hora<br><br>";

//aqui no toco nada...
$headers .= "MIME-Version: 1.0 \n";
$headers .= "Content-type: text/html; charset=utf-8\n";
$headers .= "From: \"".$origen."\" <$correo_from>\n";

//aqui es donde se envia todo...
mail($mail, "$subject", $contenido,$headers);
//
?>
<script>
alert('Gracias por enviar tus comentarios');
document.location.href="contacto.html";
</script>