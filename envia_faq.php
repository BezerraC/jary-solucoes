<?php

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

if (!$captcha_data) {
    echo "Por favor, confirme o captcha.";
    exit;
}

if ($resposta.success) {
	$EmailFrom = "Owera";
	$EmailTo = "contato@owera.com.br";
	$Subject = "FAQ Site";
	$name = Trim(stripslashes($_POST['name'])); 
	$email = Trim(stripslashes($_POST['email'])); 
	$mensagem = Trim(stripslashes($_POST['mensagem'])); 

	$Body = "Contato pela página de suporte.\n\n";
	$Body .= "Nome: ";
	$Body .= $name;
	$Body .= "\n";

	$Body .= "E-mail: ";
	$Body .= $email;
	$Body .= "\n";

	$Body .= "Mensagem: ";
	$Body .= $mensagem;
	$Body .= "\n";

	mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
    echo "Obrigado por deixar sua mensagem!";
} else {
    echo "Usuário mal intencionado detectado. A mensagem não foi enviada.";
    exit;
}
?>