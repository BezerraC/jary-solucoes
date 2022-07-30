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
<!DOCTYPE html>
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
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> -->

  <title><?php print $page_title; ?> Owera</title>
  <meta name="description" content="">

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

	<link rel="shortcut icon" href="/favicon.ico">
  
  <link type="text/css" rel="stylesheet" href="/css/style.css" />
  <!-- <link type="text/css" rel="stylesheet" href="/css/owera.css" /> -->
  <style type="text/css">
      /* @override 
        http://zee.com.br/extranet/owera/css/owera.css
        http://owera.com.br/css/owera.css
      */

      /* FONTS
      ************/
      @import url(https://fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700);
      /* CLEARFIX
      ************/
      body{
        font-family: 'Helvetica Neue', Arial;
        font-size: 14px;
      }
      .clearfix:after {
        content: ".";
        display: block;
        height: 0;
        clear: both;
        visibility: hidden;
      }
      .clearfix {
        display: inline;
      }
      * html .clearfix {
        height: 1%;
      }
      .clearfix {
        display: block;
      }
      a:link, a:visited{
        text-decoration: none;
      }
      /* BOTÕES
      ************/
      .button,
      .button:visited {
        float: left;
        display: block;
        width: 171px;
        height: 46px;
        line-height: 46px;
        text-align: center;
        background: url(../img/button-sprite.png) no-repeat;
        font-size: 1.1em;
        color: #fff;
        font-weight: bold;
        text-shadow: 0 1px 2px #333;
        border: 0;
        outline: none;
        /*display: inline-block;
        line-height: 19px;
        color: #FFF !important;
        text-align: center;
        text-shadow: 0 1px 0 rgba(0, 0, 0, 0.50);
        background-color: #fafafa;
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#70B15F), to(##507E44));
        background-image: -webkit-linear-gradient(#70B15F, #507E44);
        background-image: -moz-linear-gradient(top, #70B15F, #507E44);
        background-image: -ms-linear-gradient(#70B15F, #507E44);
        background-image: -o-linear-gradient(#70B15F, #507E44);
        background-image: linear-gradient(#70B15F, #507E44);
        background-repeat: no-repeat;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#507E44', GradientType=0);
        border: 1px solid #659C54;
        border-bottom-color: #2E4A28;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
        cursor: pointer;
        font-size: 16px;
        *margin-left: .3em;
        padding: 14px 20px;
        text-decoration: none;*/
      }
      .button:hover {
        /*color: #222 !important;
        text-decoration: none;
        background-color: #70B15F;
        text-shadow: 0 1px 0 rgba(255,255,255, 0.30);*/
        background: url(../img/button-sprite.png) no-repeat 0 -46px;
        color: #fff;
      }
      /* .button:focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
      } */
      .button:active {
        background: url(../img/button-sprite.png) no-repeat 0 -92px;
        line-height: 48px;
        /*background-image: none;
        -webkit-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        -moz-box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.15), 0 1px 2px rgba(0, 0, 0, 0.05);
        background-color: #507E44;
        background-color: #d9d9d9 \9;
        color: rgba(0, 0, 0, 0.5);
        outline: 0;*/
      }
      /* SHADOWS
      ************/
      .shadow-white {
        text-shadow: 0 1px 0 #FFF;
      }
      /* GENERAL
      ***********/
      html {
        background: #F0F0F0 url(../img/bg-main.png);
      }
      body {
        background: url(../img/bg-main-top.jpg) repeat-x top fixed;
        color: #666;
        font-size: 14px;
        padding-top: 6px;
        outline: none
      }
      .center {
        text-align: center;
      }
      .content {
        background-color: #FFF;
      }
      .owera_footer_note{
        background: url('../img/bg-line.png') top center no-repeat;
        font: 20px 'Cabin Condensed';
        color: #333;
        margin-top: 30px;
        padding: 0 80px;
        padding-top: 35px;
          padding-bottom: 30px;
      }

      .footer-note {
        background: url('../img/bg-line.png') top center no-repeat;
        font: 20px 'Cabin Condensed';
        color: #333;
        margin-top: 30px;
        padding: 0 80px;
        height: 115px;
        line-height: 115px;
      }
      .page-ishowroom .footer-note{
        padding: 0 50px;	
      }
      .page-ishowroom .footer-note p{
        line-height: 20px;
        width: auto;
        margin: 45px 0 0;
      }
      .page-ishowroom .footer-note p span{
      color: #FF7E13	
      }
      .footer-note p{
        float: left;
        margin: 0;
        width: 680px;
        clear: none;
        text-align: left;
      }
      .footer-note .button {
        font-size: 16px;
        font-family: 'Helvetica Neue', Arial;
        margin: 35px 0 0;
        float: right !important;
      }
      /* STRUCTURE
      *************/
      .main-container,
      footer {
        background-color: rgba(0,0,40,.05);
        margin: 0 auto;
        padding: 6px;
      }
      /* HEADER
      **********/

      .link-style {
        border-radius: 3px;
        margin: 5px;
        background-color: #FF7E14;
        color: #FFF !important;
        }

        .link-style-h {
        margin: 5px;
        color: #666 !important;
        }

        .link-style-h:hover {
        border-radius: 3px;
        background-color: #FF7E14;
        color: #FFF !important;
        transition: 0.1s;
        }

        .nav-title {
        display: inline-block;
        padding: 5px 6px 4px 6px;
        color: #666;
        font: 14px 'Cabin Condensed';
        }

        .icon:hover{
        color: #FF7E14 !important;
        }

        .nav-bg{
        background: #F0F0F0 url(../img/bg-main.png);
        }

      #google_translate_element {
        position: absolute;
        right: 30px;
        top: 5px;
      }
      #google_translate_element div.goog-te-gadget-simple {
        border: 1px solid #e8e8e8 !important;
      }
      #google_translate_element img.goog-te-gadget-icon {
        display: none;
      }

      #google_translate_element a.goog-te-menu-value {
        color: #999;
        font-size: 11px;
      }
      #google_translate_element a.goog-te-menu-value span {
        border: none !important;
      }

      .nav-item .row .col .a,
      .nav-item .row .col .a:link,
      .nav-item .row .col .a:visited{
          color: #666;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        display: inline-block;
        font: 13px 'Cabin Condensed' !important;
        height: 26px;
        line-height: 29px;
        padding: 0 7px;
        text-decoration: none;
        text-transform: uppercase;
        -moz-transition: all 0.1s ease-out;  /* FF4+ */
      -o-transition: all 0.1s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.1s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.1s ease-out;  /* IE10? */
      transition: all 0.1s ease-out; 
      }


      body.page-home li .menu-home,
      body.page-about li .menu-sobre-nos,
      body.page-services li .menu-servicos,
      body.page-products li .menu-produtos,
      body.page-product li .menu-produtos,
      body.page-ishowroom li .menu-produtos,
      body.page-faq li .menu-faq,
      body.page-contact li .menu-contato,
      header .main-menu li a:hover {
        background-color: #FF7E14;
        color: #FFF !important;
        border-radius: 3px;
        padding: 5px;
        display: inline-block;
      }

      /* FOOTER
      **********/
      .f-final{
        color: #666;
          font-size: 14px ;
        font-weight: 600;
        text-shadow: 0 1px 0 #fff;
        font-family:'Helvetica Neue', Arial ;
      }
      .f-final a{
        color: #666;
      }

      .f-final a:hover{
        color: #EE7414;
      }





      footer {
        background-color: transparent;
        margin-top: 24px;
        padding: 0 5px 40px;
      }
      footer .address {
        float: left;
        line-height: 1.55;
        margin-right: 4px;
      }
      footer .ways-to-contact {
        float: left;
        margin: 0 0 0 20px;
        padding: 0;
      }
      footer .ways-to-contact li {
        list-style: none;
        margin-bottom: 3px;
      }
      footer .ways-to-contact li a:link,
      footer .ways-to-contact li a:visited,
      .page-contact .contact-section .map .ways-to-contact li a:link,
      .page-contact .contact-section .map .ways-to-contact li a:visited {
        background: url("../img/sprite.png") no-repeat scroll 0 0;
        color: #666;
        padding-left: 30px;
        text-decoration: none;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      footer .ways-to-contact li a:hover,
      .page-contact .contact-section .map .ways-to-contact li a:hover{
        color: #000;
      }
      footer .ways-to-contact li a.email,
      .page-contact .contact-section .map .ways-to-contact li .email {
        background-position: 0 -101px !important;
      }
      footer .ways-to-contact li a.skype,
      .page-contact .contact-section .map .ways-to-contact li .skype {
        background-position: 0 -123px !important;
        padding: 3px 0 2px 30px
      }
      footer .download-presentation:link,
      footer .download-presentation:visited,
      .page-contact .contact-section .download-presentation:link,
      .page-contact .contact-section .download-presentation:visited {
        background: url("../img/sprite.png") no-repeat scroll 0 -148px;
        color: #666;
        display: block;
        float: left;
        margin-left: 16px;
        padding-left: 36px;
        text-decoration: none;
        /* width: 140px; */
        -moz-transition: all 0.2s ease-out !important;  /* FF4+ */
        -o-transition: all 0.2s ease-out !important;  /* Opera 10.5+ */
        -webkit-transition: all 0.2s ease-out !important;  /* Saf3.2+, Chrome */
        -ms-transition: all 0.2s ease-out !important;  /* IE10? */
        transition: all 0.2s ease-out !important; 
      }
      footer .download-presentation:hover,
      .page-contact .contact-section .download-presentation:hover{
        color: #000 !important;
      }
      footer .download-presentation span {
        color: #999;
      }
      .phone-number {
        background: url("../img/sprite.png") no-repeat scroll 0 -308px;
        color: #333;
        float: right;
        font: 34px 'Cabin Condensed';
        padding-left: 35px;
      }
      /* HOME PAGE
      *************/
      .page-home,.page-about .page-headline p{
        font-size: 15px;
        line-height: 24px;
        font-weight: 600;
        color: #666;
        font-family: 'Helvetica Neue', Arial;
      }

      .page-home .resp-sec{
        /* flex-wrap: wrap; */
        display: flex;
      }

      .page-home .members ul li {
        float: left;
        height: 80px;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        /* width: 250px; */
        
      }

      .page-home li .member-history{
        background-color: #FF7E14;
        bottom: 90px;
        z-index: 2;
        color: #FFF;
        font-weight: 600;
        display: none;
        font-size: 13px;
        /* left: -30px; */
        padding: 15px 15px;
        position:absolute;
        width: 250px;
        cursor: pointer !important;
      }
      .page-home li .member-history .arrow {
        background: url('../img/sprite.png') no-repeat 0 -352px;
        color: #727272ed ;
          bottom: -14px;
          display: block;
          left: 60px;
          font-size: 1.25rem;
          height: 14px;
          position: absolute;
        width: 14px;
      }

      .page-home .linkc{
        color: #000000ed;
        font-weight: 600;
      }

      .page-home li:hover .member-history {
        display:block;
      }

      .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23666' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
        }
        
        .carousel-control-next-icon {
        background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23666' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important;
        }

      .page-home .ps-md-5{
        padding-left: 4rem!important;
      }
      .page-home .content {
        background-color: #FFF;
        position: relative;
      }
      .page-home .content h2 {
        color: #000;
        font: 600 40px 'Cabin Condensed';
        margin: 0 auto;
        padding-top: 50px;
        text-align: center;
      }
      .page-home .content p {
        font-size: 17px;
        margin: 5px auto 10px auto;
        text-align: center;
      }
      .page-home .content .slider-controller-bar {
        background-color: rgba(0,0,0,0.19);
        bottom: 0;
        height: 70px;
        left: 0;
        position: absolute;
        width: 100%;
        z-index: 1;
      }
      .page-home .content .slider-controller-bar .slider-controller-prev,
        .page-home .content .slider-controller-bar .slider-controller-next {
        background: url('../img/sprite.png') no-repeat 0 -272px;
        display: block;
        height: 36px;
        text-indent: -5000px;
        width: 36px;
        float: left;
        margin: 17px 0 0 30px;
        outline: none
      }
      .page-home .content .slider-controller-bar .slider-controller-prev:hover {
        background-position: -40px -272px;
      }
      .page-home .content .slider-controller-bar .slider-controller-next {
        background-position: 0 -226px;
        float: right;
        margin: 17px 30px 0 0;
      }
      .page-home .content .slider-controller-bar .slider-controller-next:hover {
        background-position: -40px -226px;
      }
      .page-home .content .slider-controller-bar .slider-items {
        left: 50%;
        margin: 0 0 0 -45px;
        padding: 0;
        position: absolute;
        top: 26px;
        z-index: 10;
      }
      .page-home .content .slider-controller-bar .slider-items li {
        float: left;
        list-style: none;
        margin: 0 7px 0 0;
        padding: 0;
      }
      .page-home .content .slider-controller-bar .slider-items li.last {
        margin-right: 0;
      }
      .page-home .content .slider-controller-bar .slider-items li a {
        background: url('../img/sprite.png') no-repeat -1px -204px;
        display: block;
        height: 17px;
        text-indent: -5000px;
        width: 17px;
      }
      .page-home .content .slider-controller-bar .slider-items li a:hover,
            .page-home .content .slider-controller-bar .slider-items li a.active {
        background-position: -21px -204px
      }
      .page-home .content #home-slider {
        margin-top: 2px;
        overflow: hidden;
      }
      .page-home .content #home-slider dt {
        display: none;
      }
      .page-home .content #home-slider dd .slide-image,
          .page-home .content #home-slider dd h4,
          .page-home .content #home-slider dd p {
        float: left;
      }

      .page-home .content #home-slider dd h4 {
        color: #000;
        font: normal 30px 'Cabin Condensed';
        margin: 90px 0 0 0;
      }

      #home-slider dd h4.title-ishowroom {
        background:url(../img/logo-parceria-vista.png) no-repeat 145px 10px;
      }

      .page-home .content #home-slider dd p {
        font-size: 16px;
        line-height: 24px;
        margin: 10px 0 0 0;
        text-align: left;
      }
      .page-home .content #home-slider dd a {
        float: left;
        display: block;
      }
      .page-home .content #home-slider dd .slide-image {
        margin: 0 40px 0 60px;
      }


      .carousel-indicators button{
        height: 15px !important;
        width: 15px !important;
        border-radius: 50%;
        color: #fff !important;
      }

      .carousel-dark .carousel-indicators [data-bs-target] {
          background-color: transparent !important;
      }


      .carousel-item .row .px-5{
        padding-left: 5rem;
        padding-right: 5rem;
      }


      .page-home .post-content {
        margin-top: 70px;
      }


      .bg_main{
        background: url("../img/bg-main.png")
        
      }

      .owera_txt{
        color: #818181;
        font: 28px 'Cabin Condensed';
        line-height: 36px;
        margin: 0 0 0 30px;
        padding: 0;
      }

      .owera_txt span{
        color: #000;
      }

      .main_bg{
        background: url("../img/bg-main.png");
      }

      .owera_txt a,
      .owera_txt a:link,
      .owera_txt a:visited{
        color: #FF7E14;
        display: block;
        font-size: 20px;
        margin-top: 20px;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }

      .owera_txt a:hover{
        color: #333;
      }

      .owera_txt a{
        background: url("../img/icon-orange-arrow.png") no-repeat scroll right 1px transparent;
        letter-spacing: 0;
        line-height: 15px;
        height: 17px;
        display: inline-block !important;
        *display: inline;
        margin-bottom: 70px;
        padding-right: 20px;
        text-decoration: none
      }

      .owera_list{
        list-style: none;
      }

      .tooltipz {
        position: relative;
        display: inline-block;
        }
        
        .tooltiptext {
        /* visibility: hidden; */
        width: 250px;
        background-color: #fff;
        color: #000;
        text-align: center;
        border-radius: 6px;
        padding: 10px ;
        display: flex;
        align-items: center;
        font: 15px 'Cabin Condensed';

        margin: 10px;
        
        /* Position the tooltip */
        /* position: absolute; */
        z-index: 1;
        }
        
        .col:hover .tooltiptext {
        visibility: visible;
        }
        .size_of_img{
        box-shadow: 0px 0px 3px #666;
        width:120px}

      .page-home li img{
        box-shadow: 0px 0px 3px #666;
      }

      .page-home .post-content .col-1,
        .page-home .post-content .col-2 {
        float: left;
      }
      .page-home .container .row .column-1 {
        color: #818181;
        font: 28px 'Cabin Condensed';
        line-height: 36px;
        padding: 0;
        text-align: initial;
      }
      .page-home .container .row .column-1 span {
        color: #000;
      }
      .page-home .container .row .col-1column a,
      .page-home .container .row .column-1 a:link,
      .page-home .container .row .column-1 a:visited {
        color: #FF7E14;
        display: block;
        font-size: 20px;
        margin-top: 20px;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-home .container .row .column-1 a:hover{
        color: #333;
      }
      .page-home .container .row .column-1 a {
        background: url("../img/icon-orange-arrow.png") no-repeat scroll right 1px transparent;
        letter-spacing: 0;
        line-height: 15px;
        height: 17px;
        display: inline-block !important;
        *display: inline;
        margin-bottom: 70px;
        padding-right: 20px;
        text-decoration: none
      }
      .page-home .post-content .col-2 {
        margin: 0 0 0 60px;
        padding: 0;
      }
      .page-home .post-content .col-2 li {
        box-shadow: 0px 0px 3px #666;
        float: left;
        list-style: none;
        margin: 0 20px 0 0;
        padding: 0;
        position: relative;
      }
      .page-home .post-content .col-2 li.last {
        margin-right: 0;
      }
      .page-home .post-content .col-2 li .testimonial {
        background: url('../img/bg-box-client.png') repeat;
        color: #333;
        display: none;
        font: 14px 'Cabin Condensed';
        margin-top: 24px;
        padding: 16px;
        position: absolute;
        width: 400px;
      }
      /* centralizado*/
      .page-home .post-content .col-2 li .testimonial.center {
        left: -168px;
      }
      .page-home .post-content .col-2 li .testimonial.center .arrow {
        left: 48%;
      }
      /* a direita */
      .page-home .post-content .col-2 li .testimonial.right {
        right: 0;
      }
      .page-home .post-content .col-2 li .testimonial.right .arrow {
        right: 31px;
        left: auto
      }
      .page-home .post-content .col-2 li:hover .testimonial {
        display: block
      }
      .page-home .post-content .col-2 li .testimonial .arrow {
        background: url('../img/sprite.png') repeat 0 -372px;
        display: block;
        height: 10px;
        left: 31px;
        position: absolute;
        top: -10px;
        width: 23px;
      }
      .page-home .post-content .col-2 li .testimonial big {
        display: block;
        line-height: 22px;
        margin-bottom: 4px;
      }
      .page-home .post-content .col-2 li .testimonial small {
        color: #999;
        font-family: Arial, Helvetica, sans-serif;
      }
      .page-home .post-content .col-2 li .testimonial small span {
        color: #333
      }
      /* PAGE ABOUT
      **************/
      .page-about .content {
        background: url('../img/bg-about.png') no-repeat scroll right 70px #FFFFFF;
      }
      .content-404 {
        padding-bottom: 100px;
      }
      .content-404 a {
        color: #333;
        font-size: 16px;
      }
      .content-404 a:hover {
        color: #FF7E14;
      }
      .content-404 .page-headline,
      .page-about .page-headline {
        padding: 70px 70px 0 70px;
      }
      .content-404 h1,
      .page-about .page-headline h1 {
        color: #000;
        font: 600 52px 'Cabin Condensed';
        margin: 0 0 20px 0;
      }
      .page-about .page-headline .page-desc {
        color: #999;
        line-height: 37px !important;
        margin: 16px 0;
        font: 28px 'Cabin Condensed';
      }
      .page-about .page-headline .about {
        font-size: 15px;
        line-height: 24px;
        margin: 0;
      }
      .page-about .members {
        background: url('../img/bg-line.png') top center no-repeat;
        margin-top: 45px;
      }
      .page-about .members h3 {
        color: #000;
        font: 26px 'Cabin Condensed';
        margin: 0;
        text-align: center;
      }
      .page-about .members ul {
        margin: 50px 0 0 0;
        padding: 0;
      }
      .page-about .members ul li {
        float: left;
        height: 80px;
        list-style: none;
        margin: 0;
        padding: 0;
        position: relative;
        width: 250px;
        
      }

      .page-about .members ul li .member-history {
        background-color: #FF7E14;
        bottom: 96px;
        color: #FFF;
        display: none;
        font-size: 13px;
        left: -30px;
        padding: 20px 15px;
        position: absolute;
        width: 250px;
        cursor: pointer !important;
      }
      .page-about .members ul li .member-history .arrow {
        background: url('../img/sprite.png') no-repeat 0 -352px;
        bottom: -7px;
        display: block;
        left: 60px;
        height: 7px;
        position: absolute;
        width: 14px;
      }
      .page-about .members ul li:hover .member-history {
        display: block;
      }
      .page-about .members ul li img {
        float: left;
        margin-right: 10px;
        -moz-border-radius: 100px;
        -webkit-border-radius: 100px;
        border-radius: 100px;
        -moz-transition: all 0.3s ease-out;  /* FF4+ */
      -o-transition: all 0.3s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.3s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.3s ease-out;  /* IE10? */
      transition: all 0.3s ease-out; 
      cursor: default;
      }
      .page-about .members ul li:hover img {
        box-shadow: 0 0 10px #FF7E14;
      }
      .page-about .members ul li h6 {
        color: #000;
        display: block;
        font: 20px 'Cabin Condensed';
        float: left;
        margin: 6px 0 2px;
        width: 150px;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-about .members ul li h6 span {
        font-size: 15px;
        margin-bottom: 2px;
        color: #999;
        display: block;
      }
      .page-about .members ul li:hover h6 {
        color: #FF7E14
      }

      .page-about .partners h4 {
        display: block;
        font: 16px 'Cabin Condensed';
        text-align: center;
        text-transform: capitalize;
      }
      .page-about .partners p {
        background: url('../img/bg-line.png') top center no-repeat;
        margin: 35px 0 0 0;
      }

      .resp-sec{
        justify-content: center;
        display: flex;
      }


      /*team section responsive*/
      @media (max-width: 545px) {
        .resp-sec{
          display: flex;
          flex-direction: column;
          align-items: center;
        }
        .page-home .resp-sec{
          display: contents;
        }

        .page-products .page-headline {
          margin-bottom: 60px !important;
          padding: 25px 25px 0 25px !important;
        }
      }
      @media (max-width: 1199px) {
        .pt-cath{
          margin-top: 4rem;
        }
        .pt-t{
          padding-top: 2rem;
        }
      }
      /* PAGE SERVICES
      *****************/
      .page-services .page-headline {
        padding: 70px 0px 0px 0px;
      }
      .page-services .page-headline h1 {
        color: #000;
        font: 600 52px 'Cabin Condensed';
        margin: 0 0 20px 0;
      }
      .page-services .page-headline .page-desc {
        color: #999;
        font: 28px 'Cabin Condensed';
        line-height: 37px;
        margin: 16px 0 40px;
      }
      .page-services ul.services-list {
        margin: 0 30px;
        padding: 0;
      }
      .page-services ul.services-list li {
        background: url('../img/bg-line.png') top center no-repeat;
        list-style: none;
        margin: 0;
        padding: 40px 0;
      }
      .page-services ul.services-list li.first {
        background: none
      }
      .page-services ul.services-list li .service-name {
        background: url('/img/sprite-services.png') no-repeat 0 20px;
        color: #333;
        float: left;
        height: 100px;
        font: 26px 'Cabin Condensed';
        line-height: 100px;
        padding-left: 80px;
        width: 300px;
      }
      .page-services ul.services-list li.b .service-name {
        background-position: 0 -120px;
        line-height: 40px;
      }
      .page-services ul.services-list li.c .service-name {
        background-position: 0 -260px
      }
      .page-services ul.services-list li.d .service-name {
        background-position: 0 -429px;
        line-height: 40px;
      }
      .page-services ul.services-list li .service-description {
        float: left;
        line-height: 23px;
      }
      /* PAGE PRODUCTS
      *****************/
      .page-products .page-headline {
        margin-bottom: 60px;
        padding: 70px 70px 0 70px;
      }
      .page-products .page-headline img,
        .page-products .page-headline .product-desc {
        float: left;
      }
      .page-products .page-headline .product-desc {
        margin-left: 70px;
        width: 400px;
      }
      .page-products .page-headline .product-desc h2 {
        color: #000;
        font: 30px 'Cabin Condensed';
        margin: 40px 0 20px 0;
      }
      .page-products .page-headline .product-desc h2 span {
        color: #FF7F24;
      }
      .page-products .page-headline .product-desc p {
        font-size: 16px;
        line-height: 24px;
        margin: 0 0 20px 0;
      }
      .page-products .products-section {
        background: url('../img/bg-line.png') top center no-repeat;
        padding: 60px 30px;
      }
      .page-products .products-section h2 {
        color: #333;
        font: 40px 'Cabin Condensed';
        margin: 0;
        text-align: center;
      }
      .page-products .products-section ul {
        margin: 75px 0 0 0;
        padding: 0;
      }
      .page-products .products-section ul li {
        float: left;
        list-style: none;
        margin: 0 0 110px 0;
        padding: 0;
        width: 468px;
      }
      .page-products .products-section ul li.odd {
        margin-right: 70px;
      }
      .page-products .products-section ul li.last-but-one,
          .page-products .products-section ul li.last {
        margin-bottom: 0;
      }

      .page-products .products-section ul li h5 {
        color: #333;
        float: left;
        font: 20px 'Cabin Condensed';
        margin: 0;
        width: 180px;
      }
      .page-products .products-section ul li p {
        color: #666;
        float: left;
        font-size: 13px;
        line-height: 22px;
        margin: 10px 0;
        text-align: left;
        font-family: 'Helvetica Neue', Arial;
        width: 180px;
      }
      .page-products .products-section ul li a.see-on-app-store {
        background: url("../img/icon-orange-arrow.png") no-repeat scroll right 1px transparent;
        color: #FF7F24;
        display: inline-block;
        font-size: 14px;
        height: 17px;
        padding-right: 20px;
        text-decoration: none;
        font-family: 'Helvetica Neue', Arial;
        margin: 0;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-products .products-section ul li a.see-on-app-store:hover {
        color: #333;
        
      }

      .p-subtitle-product{
        color: #FF7F24;
        font-weight: 600;
        font-family: 'Helvetica Neue', Arial;
          font-size: 16px;
          line-height: 27px;
          margin: 10px auto 0 auto;
          text-align: center;
        }

        .p-info-product{
        color: #666;
          float: left;
          font-size: 13px;
          line-height: 22px;
          font-family: 'Helvetica Neue', Arial;
        }
        .p-product-title{
        font-size: 16px;
        font-weight: 600;
          color: #666;
          font-family: 'Helvetica Neue', Arial;
        }

        .h2-products{
        color: #000;
          font: 30px 'Cabin Condensed';
          margin: 40px 0 20px 0;
        }
        .owera-btn {
        cursor:pointer;
        color:#ff7f24;
        font-family: 'Helvetica Neue', Arial;
        font-size:15px;
        text-decoration:none;
        transition: 0.3s;
      }
      .owera-btn:hover {
        color:#666;
        transition: 0.3s;
      }
      .owera-btn:active {
        position:relative;
        top:1px;
      }
      .owera-btn:visited{
        color: #ff7f24;
      }
      /* PAGE FAQ
      ***********/
      .page-faq .page-headline {
        margin-bottom: 70px;
        padding: 70px 70px 0 70px;
      }
      .page-faq .page-headline h2 {
        color: #000;
        font: 600 42px 'Cabin Condensed';
        margin: 0;
      }
      .page-faq .page-headline p {
        color: #999;
        font: 24px 'Cabin Condensed';
        line-height: 37px;
        margin: 16px 0 40px;
      }
      .page-faq .faq-section {
        padding: 30px;
      }
      .page-faq .faq-section .sidebar {
        margin-right: 40px;
        width: 275px;
      }
      .page-faq .faq-section .sidebar ul {
        margin: 0;
        padding: 0;
      }

      .g-recaptcha {
          transform:scale(0.77);
          transform-origin:0 0;
      }
      .google-form-new{
        display: inline;
        margin: 30px 0 0 0;
          padding: -1px 10px;
      }
      .google-form-new p{
        font-size: 13px;
          margin: 5px 7px 10px 7px;
        color: #666;
        font-family: 'Helvetica Neue', Arial;
      }
      .footer-form{
        font-size: 16px;
        color: #666;
        font-family: 'Helvetica Neue', Arial;
      }
      .footer-form a{
        font-size: 14px;
        color: #666;
        font-family: 'Helvetica Neue', Arial;
      }
      .footer-form a:hover{
        color: #FF7E13;
      }
      .page-faq .faq-section .sidebar ul li {
        list-style: none;
        margin: 0;
        padding: 0 13px 0 0;
      }
      .page-faq .faq-section .sidebar ul li.active,
      .page-faq .faq-section .sidebar ul li:hover {
        clip-path: polygon(0% 0%, 95% 0%, 100% 50%, 95% 100%, 0 100%);
        background:  #FF7E14;
        cursor: pointer;
      }

      .page-faq .faq-section .sidebar ul li a,
            .page-faq .faq-section .sidebar ul li a:link,
            .page-faq .faq-section .sidebar ul li a:visited {
        border-bottom: 1px solid #CCC;
        color: #666;
        display: block;
        font: 26px 'Cabin Condensed';
        padding: 15px 0 15px 20px;
        text-decoration: none;
      }
      .page-faq .faq-section .sidebar ul li.active a,
            .page-faq .faq-section .sidebar ul li.active a:link,
            .page-faq .faq-section .sidebar ul li.active a:visited,
            .page-faq .faq-section .sidebar ul li a:hover,
            .page-faq .faq-section .sidebar ul li:hover a {
        border: none;
        border-bottom: 1px solid #FF7E14;
        color: #FFF;
        cursor: pointer;
      }
      .page-faq .faq-section .sidebar ul li:hover{
        margin: 0;
      }
      .page-faq .faq-section .sidebar ul li a img {
        display: inline-block;
        margin: -2px 4px 0 0;
      }
      .page-faq .faq-section .sidebar form {
        background-color: #EDEDED;
        margin: 30px 0 0 0;
        padding: 10px 7px;
        width: 240px;
      }
      .page-faq .faq-section .sidebar form p {
        font-size: 13px;
        margin: 5px 0 10px 0;
      }
      .page-faq .faq-section .sidebar form input,
            .page-faq .faq-section .sidebar form textarea {
        color: #999999;
        border: 1px solid #CCC;
        margin-top: 10px;
        padding: 7px 5px;
        width: 228px;
        -moz-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
        box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-faq .faq-section .sidebar form textarea{
        height: 100px
      }
      .page-faq .faq-section .sidebar form input:focus,
      .page-faq .faq-section .sidebar form textarea:focus {
        border-color: #FF7E14;
        box-shadow: 1px 1px 2px rgba(255,126,20,0.3) inset;
        -moz-box-shadow: 1px 1px 2px rgba(255,126,20,0.3) inset;
        -webkit-box-shadow: 1px 1px 2px rgba(255,126,20,0.3) inset;
        outline: none;
      }
      .page-faq .faq-section .sidebar form .submit {
        background: #FF7F24;
        border: none;
        color: #FFF;
        padding: 0 14px;
        height: 36px;
        line-height: 36px;
        width: auto;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-box-shadow: 0 0 0;
        -webkit-box-shadow: 0 0 0;
        box-shadow: 0 0 0;
        -moz-transition: none;  /* FF4+ */
        -o-transition: none;  /* Opera 10.5+ */
        -webkit-transition: none;  /* Saf3.2+, Chrome */
        -ms-transition: none;  /* IE10? */
        transition: none; 
      }
      .page-faq .faq-section .sidebar form .submit:hover{
        background: #EE7414;
      }
      .page-faq .faq-section .sidebar form .submit:active{
        background: #EE7414;
        height: 35px;
        margin-top: 11px;
        -moz-box-shadow: inset 0 1px 1px #98490D;
        -webkit-box-shadow: inset 0 1px 1px #98490D;
        box-shadow: inset 0 1px 1px #98490D;
      }
      .page-faq .faq-section .sidebar form input.form-error,
      .page-faq .faq-section .sidebar form textarea.form-error,
      .page-contact .contact-section form input.form-error,
      .page-contact .contact-section form textarea.form-error,
      .page-contact .contact-section form input.form-error:focus,
      .page-contact .contact-section form textarea.form-error:focus{
        border: 1px solid red;
        -moz-box-shadow: inset 0 1px 1px #FFBFBD;
        -webkit-box-shadow: inset 0 1px 1px #FFBFBD;
        box-shadow: inset 0 1px 1px #FFBFBD;
      }
      .page-faq .faq-section .sidebar form .submit.disabled,
      .page-faq .faq-section .sidebar form .submit.disabled:hover,
      .page-faq .faq-section .sidebar form .submit.disabled:active{
        background: #666;
        color: #999;
      }

      .page-faq .faq-section .sidebar form span.form-success{
        color: green;
        width: 100%;
        float: left;
        text-align: center;
        font-weight: bold;
      }
      .page-faq .faq-section .sidebar form span.error-desc,
      .page-contact .contact-section form span.error-desc{
        color: red;
        font-size: .9em;
        float: left;
        margin: 9px 0 0;
      }
      .page-faq .faq-section .sidebar p a,
          .page-faq .faq-section .sidebar p a:link,
          .page-faq .faq-section .sidebar p a:visited {
        color: #FF7F24;
        text-decoration: none;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-faq .faq-section .sidebar p a:hover {
        color: #333;
      }
      .page-faq .faq-section .faq-body {
        display: none;
      }
      .page-faq .faq-section .faq-body.active {
        display: block;
      }
      .page-faq .faq-section .faq-body ul {
        margin: 0;
        padding: 0;
      }
      .page-faq .faq-section .faq-body ul li {
        margin-bottom: 20px;
        list-style-type: none
      }
      .page-faq .faq-section .faq-body ul li a:link,
      .page-faq .faq-section .faq-body ul li a:visited{
        color: #FF7F24;
        font: 18px 'Cabin Condensed';
        margin-bottom: 30px;
        text-decoration: none;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-faq .faq-section .faq-body ul li a:hover {
        color: #333;
      }
      .page-faq .faq-section .faq-body ul li a span {
        background: url(../img/sprite.png) no-repeat -37px -68px;
        color: #FFF;
        display: inline-block;
        line-height: 30px;
        font-family: 'Helvetica Neue', Arial, sans-serif;
        height: 30px;
        margin-right: 10px;
        width: 30px;
        text-align: center;
      }
      .page-faq .faq-section .faq-body ul li.last {
        margin-bottom: 0;
      }
      .page-faq .faq-section .faq-body dl dt a {
        color: #333;
        font: 18px 'Cabin Condensed';
        margin-top: 40px;
        display: block;
        cursor: text;
      }
      .page-faq .faq-section .faq-body dl dd {
        font-size: 13px;
        line-height: 20px;
        margin: 10px 0 0 0;
      }
      .page-faq .faq-section .faq-body dl dd a {
        color: #FF7F24;
        text-decoration: none
      }
      /* PAGE CONTACT
      ***************/
      .phone-number-new{
        color: #333;
        font: 26px 'Cabin Condensed';
      }
      .phone-number-new i{
        transform: scaleX(-1);
        margin-right: 8px;
      }
      .page-contact .content {
        padding-bottom: 40px;
      }
      .page-contact .page-headline {
        margin-bottom: 50px;
        padding: 50px 55px 0 55px;
        position: relative;
      }
      .page-contact .page-headline h1 {
        color: #000;
        font: 600 42px 'Cabin Condensed';
        margin: 0;
      }
      .page-contact .page-headline p {
        color: #999;
        font: 24px 'Cabin Condensed';
        line-height: 34px;
      }
      .page-contact .page-headline .phone-number {
        position: absolute;
        right: 70px;
        top: 70px;
      }

      .page-contact .contact-section form {
        width: 100%;
      }
      .page-contact .contact-section form span.form-success{
        font-size: 1.4em;
        color: green;
        font-weight: bold;
      }
      .page-contact .contact-section form input,
      .page-contact .contact-section form textarea {
        color: #999999;
        border: 1px solid #CCC;
        margin-top: 10px;
        padding: 7px 5px;
        width: 100%;
        -moz-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
        -webkit-box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
        box-shadow: inset 1px 1px 1px rgba(0,0,0,0.1);
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-contact .contact-section form textarea {
        height: 200px
      }
      .page-contact .contact-section form input:focus,
      .page-contact .contact-section form textarea:focus {
        border-color: #FF7E14;
        box-shadow: 1px 1px 2px rgba(255,126,20,0.3) inset;
        -moz-box-shadow: 1px 1px 2px rgba(255,126,20,0.3) inset;
        -webkit-box-shadow: 1px 1px 2px rgba(255,126,20,0.3) inset;
        outline: none;
      }
      .page-contact .contact-section form .submit {
        background: #FF7F24;
        border: none;
        color: #FFF;
        float: right;
        padding: 0 14px;
        height: 36px;
        line-height: 36px;
        width: auto;
        border-radius: 3px;
        -moz-border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-box-shadow: 0 0 0;
        -webkit-box-shadow: 0 0 0;
        box-shadow: 0 0 0;
        -moz-transition: none;  /* FF4+ */
        -o-transition: none;  /* Opera 10.5+ */
        -webkit-transition: none;  /* Saf3.2+, Chrome */
        -ms-transition: none;  /* IE10? */
        transition: none; 
      }
      .page-contact .contact-section form .submit:hover{
        background: #EE7414;
      }
      .page-contact .contact-section form .submit:active{
        background: #EE7414;
        height: 35px;
        margin-top: 11px;
        -moz-box-shadow: inset 0 1px 1px #98490D;
        -webkit-box-shadow: inset 0 1px 1px #98490D;
        box-shadow: inset 0 1px 1px #98490D;
      }
      .page-contact .contact-section form .submit.disabled,
      .page-contact .contact-section form .submit.disabled:hover,
      .page-contact .contact-section form .submit.disabled:active{
        background: #666;
        color: #999;
      }

      .map-complement{
        display: flex;
          flex-direction: column;
          align-content: center;
          justify-content: center;
      }

      .map {
        width: 460px;
      }
      .map-complement small {
        display: none;
      }
      .map-complement .address {
        font-weight: bold;
        color: #333;
        float: left;
        margin-top: 10px;
      }
      .map-complement .ways-to-contact {
        float: left;
        margin: 5px 0 0 0;
        padding: 0;
        width: 190px;
      }
      .map-complement .ways-to-contact li {
        list-style: none;
      }
      .map-complement .ways-to-contact li a {
        color: #666;
        font-family: 'Helvetica Neue', Arial;
        transition: 0.3s;
      }
      .map-complement .ways-to-contact li a:hover{
        color: #FF7E14;
        transition: 0.3s;
      }
      .map-complement .ways-to-contact li a i{
        margin-right: 8px;
      }
      .map-complement .download-presentation {
        float: left;
        margin-top: 25px;
        padding-left: 40px;
        width: 140px;
      }
      .map-complement .download-presentation span {
        color: #999;
      }


      @media (max-width: 575.98px) {
        .mb-map{
          margin-bottom: 8rem;
        }
      }
      /* PAGE ISHOWROOM
      ******************/
      .page-ishowroom .content {
        padding: 0 30px;
      }
      .page-ishowroom .page-headline {
        padding: 60px 0;
      }

      .page-ishowroom .page-headline .product-headline h1 {
        color: #000;
        font: 60px 'Cabin Condensed';
        margin: 0;
        text-align: center;
      }
      .page-ishowroom .page-headline .product-headline p.product-description {
        font: 22px 'Cabin Condensed';
        text-align: center;
        margin: 0;
        color: #666;
      }
      .page-ishowroom .page-headline .product-headline .product-arguments .column {
        padding-top: 60px;
      }
      .page-ishowroom .page-headline .product-headline .product-arguments .col-2 {
        margin-left: 50px;
      }
      .page-ishowroom .page-headline .product-headline .product-arguments h6 {
        background: url('/img/sprite-products.png') no-repeat center -1px;
        color: #333;
        font: 20px 'Cabin Condensed';
        margin: 0;
        padding-top: 61px;
        text-align: center;
      }
      .page-ishowroom .page-headline .product-headline .product-arguments .colunm-2 h6 {
        background-position: center -92px
      }
      .page-ishowroom .page-headline .product-headline .product-arguments p {
        font-size: 13px;
        margin-top: 10px;
        text-align: center;
        color: #666;
      }
      .page-ishowroom .product-get-in-touch {
        border-bottom: 1px solid #EBECED;
        border-top: 1px solid #EBECED;
        color: #333;
        font: 21px 'Cabin Condensed';
        padding: 0 50px;
      }
      .page-ishowroom .product-get-in-touch p{
        margin: 0;
      }
      .page-ishowroom .product-get-in-touch span {
        color: #FF7E13;
        margin: 0px 5px;
      }
      .page-ishowroom .product-get-in-touch .button {
        font-size: 16px;
        font-family: 'Helvetica Neue', Arial;
      }
      @media (max-width: 575.98px) {
        .mt-button-git{
          margin-top: 1.5rem !important; 
        }
      }
      .page-ishowroom .product-info {
        margin-top: 60px;
        position: relative;
        justify-content: space-around
      }
      .page-ishowroom .product-info ul.product-features {
        background-color: #F0F0F0;
        float: left;
        margin: 0;
        padding: 30px 50px 0 36px;
      }
      .page-ishowroom .product-info ul.product-features li {
        background: url('/img/icon-ok.png') no-repeat left center;
        color: #333;
        line-height: 20px;
        list-style: none;
        margin-bottom: 30px;
        padding-left: 34px;
      }
      .page-ishowroom .product-info .featured-info {
        color: #999;
        float: right;
        font: 28px 'Cabin Condensed';
        line-height: 36px;
        margin-top: 15px;
        text-align: right;
        width: 400px;
      }
      .page-ishowroom .product-info img {
        bottom: -7px;
        position: absolute;
        right: -19px;
      }

      @media (max-width: 991px) {
        .mb-prod-info{
          margin-bottom: 2rem !important; 
        }
        .mb-img{
          display: none !important;
        }
        .title-info-section{
          justify-content: center !important;
          text-align: center !important;
        }
        .w-col-info{
          width: 100% !important;
        }
        .prod-info-title{
          justify-content: center !important;
        }
      }

      /* ============ /product-info ============ */

      .page-ishowroom .products-section {
        margin-top: 100px;
      }
      .page-ishowroom .products-section h2 {
        color: #000;
        font: 30px 'Cabin Condensed';
        margin: 0;
        text-align: center;
      }
      .page-ishowroom .products-section h2 span {
        color: #FF7F24;
      }
      .page-ishowroom .products-section p {
        font-size: 16px;
        font-weight: 600;
        color: #666;
        margin: 12px auto 0 auto;
        text-align: center;
        margin-bottom: 75px;
      }
      .page-ishowroom .products-section ul {
        margin: 75px 0 0 0;
        padding: 0;
      }
      .page-ishowroom .products-section ul li {
        list-style: none;
        margin: 0 0 100px 0;
        padding: 0;
      }

      .page-ishowroom .products-section ul li.last-but-one,
            .page-ishowroom .products-section ul li.last {
        margin-bottom: 0;
      }
      .page-ishowroom .products-section ul li img {
        margin-bottom: 30px;
      }
      .page-ishowroom .products-section ul li h5 {
        color: #333;
        font: 20px 'Cabin Condensed';
        margin: 0;
      }
      .page-ishowroom .products-section ul li p {
        color: #666;
        float: left;
        font-size: 13px;
        margin: 10px 0;
        text-align: left;
      }
      .flex-prod-desc{
          flex-direction: column;
          align-items: flex-start;
      }
      .page-ishowroom .products-section ul li a,
      .page-ishowroom .products-section ul li a:link,
      .page-ishowroom .products-section ul li a:visited {
        background: url('/img/icon-orange-arrow.png') no-repeat right 0;
        color: #FF7F24;
        display: inline-block;
        *display: inline;
        height: 16px;
        font-size: 14px;
        padding-right: 20px;
        text-decoration: none;
        -moz-transition: all 0.2s ease-out;  /* FF4+ */
      -o-transition: all 0.2s ease-out;  /* Opera 10.5+ */
      -webkit-transition: all 0.2s ease-out;  /* Saf3.2+, Chrome */
      -ms-transition: all 0.2s ease-out;  /* IE10? */
      transition: all 0.2s ease-out; 
      }
      .page-ishowroom .products-section ul li a:hover{
        color: #333;
      }
      /* PAGE PRODUCT
      ****************/
      .bg-color{
        background-color: #FFF;
      }
      .pd-3r{
        padding: 3rem;
      }
      .colunm-1-complementation{
        display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
      }


      .page-product .content {
        background-color: #FFF;
      }
      .page-product .content .column {
        float: left;
      }
      .page-product .content .column-1 {
        background: url('../img/bg-iphone.png') no-repeat center 0;
        position: relative;
        width: 340px;
      }
      .page-product .content .column-1 dt {
        display: none;
      }
      .page-product .content .column-1 dl {
        height: 435px;
        margin: 23px 0 0px -1px;
        overflow: hidden;
        width: 211px;
      }
      /*slidedeck elements positions PAPO DE BAR*/
      .margin-slddk-ppbar{
        margin: -37px 0 0px -1px !important;
      }

      /*slidedeck elements positions BABYNOTES*/
      .margin-slddk-bbnotes{
        margin: -261px 0 0px -1px !important;
      }
      .cotrollers-bbnotes{
        margin-top: -217px !important;
      }
      .icon-bbnotes{
        bottom: 355px !important;
      }
      .slider-item-bbnotes{
        bottom: 320px !important;
      }
      /*slidedeck elements positions IMENGO*/
      .margin-slddk-imengo{
        margin: -97px 0 0px -1px !important;
      }
      .cotrollers-imengo{
        margin-top: -128px !important;
      }
      .icon-imengo{
        bottom: 165px !important;
      }
      .slider-item-imengo{
        bottom: 130px !important;
      }
      /*slidedeck elements positions AMAPA30*/
      .margin-slddk-amapa30{
        margin: -96px 0 0px -1px !important;
      }
      .icon-amapa30{
        bottom: 188px !important;
      }
      .cotrollers-amapa30{
        margin-top: -128px !important;
      }
      .slider-item-amapa30{
        bottom: 139px !important;
      }
      .page-product .content .column-1 .icon {
        bottom: 70px;
        position: absolute;
        padding-right: 12rem;
      }
      .page-product .content .column-1 dl .glow {
        background: url('/img/glow-screen.png') no-repeat 1px 0;
        display: block;
        height: 173px;
        position: absolute;
        right: -1px;
        top: 0;
        width: 86px;
        z-index: 999
      }
      .page-product .content .column-1 .slider-controller-next,
          .page-product .content .column-1 .slider-controller-prev {
        background: url('../img/sprite.png') no-repeat 0 -272px;
        display: block;
        height: 36px;
        left: -4px;
        margin-top: -18px;
        position: absolute;
        text-indent: -5000px;
        top: 50%;
        width: 36px;
        z-index: 999;
        outline: none
      }
      .page-product .content .column-1 .slider-controller-next {
        background-position: 0 -226px;
        left: auto;
        right: -4px;
      }
      .page-product .content .column-1 ul.slider-items {
        bottom: 0;
        padding-right: 50px;
        position: absolute;
        z-index: 1;
      }
      .page-product .content .column-1 ul.slider-items li {
        float: left;
        list-style: none;
        margin: 0;
        padding: 0 5px;
        text-align: center;
        width: 14px;
      }
      .page-product .content .column-1 ul.slider-items li a {
        background: url('../img/sprite.png') no-repeat -1px -204px;
        display: block;
        height: 17px;
        text-indent: -5000px;
        width: 17px;
        outline: none;
      }
      .page-product .content .column-1 ul.slider-items li a:hover,
            .page-product .content .column-1 ul.slider-items li a.active {
        background-position: -21px -188px
      }
      .page-product .content .column-2 {
        margin-left: 110px;
      }
      .page-product .content .column-2 a.go-back,
      .page-product .content .column-2 a.go-back:link,
      .page-product .content .column-2 a.go-back:visited {
        background: url("../img/icon-orange-arrow.png") no-repeat 0 -32px;
        color: #999;
        display: block;
        font-size: 12px;
        height: 16px;
        line-height: 18px;
        padding-left: 20px;
        text-decoration: none;
      }
      .page-product .content .column-2 a.go-back:hover {
        background-position: 0 -16px;
        color: #FF7F24;
      }
      .page-product .content .column-2 h1 {
        color: #000;
        font: 600 42px 'Cabin Condensed';
        margin: 20px 0;
      }
      .page-product .content .column-2 p.product-headline {
        color: #FF7F24;
        font: 20px 'Cabin Condensed';
        line-height: 30px;
        margin: 0;
      }
      .page-product .content .column-2 p.product-description {
        color: #000;
        font-size: 14px;
        line-height: 20px;
        margin: 20px 0 25px;
      }
      .page-product .content .column-2 h6 {
        border-top: 1px solid #CCC;
        color: #666;
        font: 16px 'Cabin Condensed';
        margin-bottom: 30px;
        padding-top: 30px;
        text-transform: uppercase;
      }
      .page-product .content .column-2 ul.product-features {
        padding: 0;
      }
      .page-product .content .column-2 ul.product-features  li {
        background: url("../img/icon-ok.png") no-repeat scroll left center;
        color: #000;
        font-size: 14px;
        list-style: none;
        margin-bottom: 10px;
        padding: 5px 0 5px 34px;
      }
      .page-contact{
        margin: 0 0 50px;
      }
      .page-contact footer{
        display: none;
      }
      @media (max-width: 991px) {
        .carousel-indicators{
          margin-bottom: -3rem !important;
        }
        .mrg-left{
          margin-left: 0 !important;
        }
        .content-column-2{
          width: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
        }
        .margin-slddk-amapa30{
          margin: -276px 0 0px -1px !important;
        }
        .icon-amapa30{
          bottom: 370px !important;
        }
        .cotrollers-amapa30{
          margin-top: -205px !important;
        }
        .slider-item-amapa30{
          bottom: 336px !important;
        }
        .margin-slddk-imengo{
          margin: -157px 0 0px -2px !important;
        }
        .icon-imengo{
          bottom: 250px !important;
        }
        .slider-item-imengo{
          bottom: 220px !important;
        }
        .margin-slddk-bbnotes{
          margin: -477px 0 0px -1px !important;
        }
        .icon-bbnotes{
          bottom: 570px !important;
        }
        .slider-item-bbnotes{
          bottom: 530px !important;
        }
        .cotrollers-bbnotes{
          margin-top: -330px !important;
        }
        .margin-slddk-adfair{
          margin: -86px 0 0px -1px !important;
        }
        .icon-adfair{
          bottom: 175px !important;
        }
        .cotrollers-adfair{
          margin-top: -128px !important;
        }
        .slider-item-adfair{
          bottom: 159px !important;
        }
        .margin-slddk-ppbar{
          margin: -118px 0 0px -1px !important;
        }
        .icon-ppbar{
          bottom: 215px !important;
        }
        .slider-item-ppbar{
          bottom: 183px !important;
        }
        
      }
      @media (min-width: 545px) {
        .p-edit{
          padding: 0px 100px 0px 100px;
        }
      }


      @media (max-width: 545px) {
        
        .mrg-slddk{
          margin: 87px 0 0px -1px !important;
        }
        .position-icon{
          padding-right: 14rem !important;
          bottom: -3px !important;
        }
        .mrg-top{
          margin-top: 3rem !important;
        }
        .cotrollers-amapa30{
          margin-top: -30px !important;
        }
        .slider-item-amapa30{
          bottom: -15px !important;
        }
        .slider-item-imengo{
          bottom: -20px !important;
        }
        .cotrollers-imengo{
          margin-top: -25px !important;
        }
        .margin-slddk-imengo{
          margin: 87px 0 0px -2px !important;
        }
        .cotrollers-bbnotes{
          margin-top: -30px !important;
        }
        .slider-item-bbnotes{
          bottom: -20px !important;
        }
        .cotrollers-adfair{
          margin-top: -20px !important;
        }
        .slider-item-adfair{
          bottom: -15px !important;
        }
        .slider-item-ppbar{
          bottom: -20px !important;
        }
      }

      @media (min-width: 1440px) {
        .margin-slddk-imengo{
          margin: -67px 0 0px -1px !important;
        }
      }

      @media (min-width: 1400px) {
        .margin-slddk-ppbar {
          margin: 35px 0 0px -1px !important;
        }
      }

      @media (min-width: 1200px) and (max-width: 1399px) {
        .margin-slddk-ppbar {
          margin: 5px 0 0px -1px !important;
        }
      }

  </style>
  

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
