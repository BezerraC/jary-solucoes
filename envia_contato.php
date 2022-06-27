<?php
if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}

if (!$captcha_data) {
    echo "Por favor, confirme o captcha.";
    exit;
}

$resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6Lc7kmUUAAAAAB8bvGfeG1QUyya0dWuISJaGYgdf&response=".$captcha_data."&remoteip=".$_SERVER['REMOTE_ADDR']);

if ($resposta.success) {
	$EmailFrom = "Owera";
	$EmailTo = "contato@owera.com.br";
	$Subject = "Contato Site";
	$name = Trim(stripslashes($_POST['name'])); 
	$email = Trim(stripslashes($_POST['email'])); 
	$telephone = Trim(stripslashes($_POST['telephone'])); 
	$mensagem = Trim(stripslashes($_POST['mensagem'])); 

	$Body = "Contato pelo site.\n\n";
	$Body .= "Nome: ";
	$Body .= $name;
	$Body .= "\n";

	$Body .= "E-mail: ";
	$Body .= $email;
	$Body .= "\n";

	$Body .= "Telefone: ";
	$Body .= $telephone;
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