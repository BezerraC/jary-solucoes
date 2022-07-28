<?php

// PHP code sample, could be accomplished with any language that can set cookies
// set the default language translation to Portugese
setcookie('googtrans', '/pt/en');

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
	    case '/produtos/imengo':
            $page_file = 'imengo.php';
            $product_class = ' page-product';
        	$page_title = 'iMengo |';
        break;
        case '/produtos/adventurefair':
            $page_file = 'adventure-fair.php';
            $product_class = ' page-product';
        	$page_title = 'AdventureFair |';
        break;
    	case '/produtos/papo-de-bar':
            $page_file = 'papo-de-bar.php';
            $product_class = ' page-product';
        	$page_title = 'Papo de Bar |';
        break;
        case '/produtos/ishowroom':
            $page_file = 'ishowroom.php';
        	$page_title = 'iShowroom |';
        break;
        case '/produtos/amapa30':
            $page_file = 'amapa30.php';
            $product_class = ' page-product';
            $page_title = 'Amapá 30+ |';
        break;
        case '/produtos/fuelzee':
            $page_file = 'fuelzee.php';
            $product_class = ' page-product';
            $page_title = 'Fuelzee |';
        break;
        case '/produtos/jornaldiarioap':
            $page_file = 'jornaldiarioap.php';
            $product_class = ' page-product';
            $page_title = 'Jornal diário do AP |';
        break;
        case '/produtos/radiodiariofm':
            $page_file = 'radiodiariofm.php';
            $product_class = ' page-product';
            $page_title = 'Rádio diário FM |';
        break;
        case '/faq':
            $page_file = 'faq-page.php';
	        $page_title = 'Suporte |';
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

$body_class = ($page_file != NULL) ? ('page-' . str_replace('.php', '', $page_file)) : 'page-undefined';
$body_class = ($body_class == 'page-faq-page') ? 'page-faq' : $body_class; // Corrige a classe da página FAQ
$body_class = $body_class . $product_class;
?>
<!-- doctype html -->
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php print $page_title; ?> Owera</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<link rel="shortcut icon" href="/favicon.ico">
  
  <link type="text/css" rel="stylesheet" href="/css/style.css" />
  <link type="text/css" rel="stylesheet" href="/css/owera.css" />
  

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5da89791c5.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="/js/libs/modernizr-2.5.3.min.js"></script>
	<script src="/js/selectivizr.js"></script>
  
	<meta name="google-translate-customization" content="b5c46b033f41c2ec-ca19d4db5e4c4015-g35e74bd70b416c20-10"></meta>
</head>
<body class="<?php print $body_class; ?>">
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div class="main-container container-md container-sm">
    <header class="">
      <?php include('header.php'); ?>
    </header>
    <div role="main" id="main">
      <?php include($page_file); ?>
    </div>
    <footer class="clearfix shadow-white">
      <?php include('footer.php'); ?>
    </footer>
  </div>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="/js/jquery.form.js"></script>
  <script src="/js/slidedeck.jquery.js"></script>
  <script src="/js/plugins.js"></script>
  <script src="/js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

<script type="text/javascript">

                  var _gaq = _gaq || [];
                  _gaq.push(['_setAccount', 'UA-13003701-1']);
                  _gaq.push(['_trackPageview']);

                  (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                  })();

                </script>

  <!-- end scripts -->
</body>
</html>
