<?php

// Replace this with your own email address
$to = 'cbezerraneto@gmail.com';

function url(){
  return sprintf(
    "%s://%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME']
  );
}

if($_POST) {

   $name = trim(stripslashes($_POST['nome']));
   $email = trim(stripslashes($_POST['email']));
   $subject = trim(stripslashes($_POST['phone']));
   $contact_message = trim(stripslashes($_POST['message']));

   
	if ($subject == '') { $subject = "Contato | Jary Soluções"; }

   // Set Message
   $message .= "Email de: " . $name . "<br />";
	 $message .= "Email: " . $email . "<br />";
   $message .= "Mensagem: <br />";
   $message .= nl2br($contact_message);
   $message .= "<br /> ----- <br /> Este email foi enviado do site " . url() . ". <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
	$headers = "From: " . $from . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
 	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   ini_set("sendmail_from", $to); // for windows server
   $mail = mail($to, $subject, $message, $headers);

	if ($mail) { echo "Email enviado com sucesso! Obrigado."; }
   else { echo "Algo não saiu como o esperado, tente novamente."; }

}

?>