<div id="body">

<?php
if(isset($_POST["nombre"]) && isset($_POST["usuario"]) && isset($_POST["email"]) && isset($_POST["comentario"]) ){
$to = "guillerduarte@hotmail.com";
$subject = "Mensaje Enviado";
$contenido .= "usuario con el que quiero permutar: ".$_POST["usuario"]."\n";
$contenido .= "Nombre: ".$_POST["nombre"]."\n";
$contenido .= "Email: ".$_POST["email"]."\n\n";
$contenido .= "Comentario: ".$_POST["comentario"]."\n\n";
$header = "From: documentacion2917@juandanielestevez.com.ar\nReply-To:".$_POST["email"]."\n";
$header .= "Mime-Version: 1.0\n";
$header .= "Content-Type: text/plain";
if(mail($to, $subject, $contenido ,$header)){
echo "Mail Enviado.";

}
}
?>
</div>