<?php
// PHP code sample, could be accomplished with any language that can set cookies
// set the default language translation to Portugese
setcookie('googtrans', '/pt');
/**
 * @file index.php
 * index file
 *
 * It gets the current request from the URL and delivers the proper page
 */
    if (isset($_SERVER['REQUEST_URI']))
        $request = $_SERVER['REQUEST_URI'];
    else
        $request = '/home';

    $page_file = NULL;
    $product_class = '';

    switch($request) {
        case '/home':
        case '/':
        case NULL:
            $page_file = 'home.php';
            $page_title = '';
        break;
        case '/sobre-nos':
            $page_file = 'about.php';
	        $page_title = 'Sobre nós |';
        break;
        case '/servicos':
            $page_file = 'services.php';
	        $page_title = 'Serviços |';
        break;
        case '/produtos':
            $page_file = 'products.php';
    	    $page_title = 'Produtos |';
        break;
        case '/produtos/babynotes':
            $page_file = 'babynotes.php';
            $product_class = ' page-product';
        	$page_title = 'BabyNotes |';
        break;
        case '/contato':
            $page_file = 'contact.php';
        	$page_title = 'Contato |';
        break;
        default:
            $page_file = '404.html';
	        $page_title = 'Página não encontrada |';
        break;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jary Soluções Sustentáveis</title>
    <link href="/css/style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Favicon-->
</head>
<body>
    <div class="container">
        <header>
            <?php include('header.php'); ?>
        </header>
        <div role="main" id="main">
            <?php include($page_file); ?>
        </div>
        <footer class="clearfix shadow-white">
            <?php include('footer.php'); ?>
        </footer>
    </div>
</body>
</html>