<?php
    header("Content-type: text/xml; charset=utf-8");
    header("Expires: Fri, 01 Jan 2010 05:00:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    
    $id = $_GET['id'];
    $file = fopen("http://www.sicadi.com.br/i_detalhe_xml.php?imobiliaria_id=918&imovel_id=$id", 'r');

    $dict = ["iso-8859-1" => "utf-8",
                "&oacute;" => "ó",
		"]]>" => "",
                "<![cdata[" => ""];

    while(!feof($file)) {
        $string = fgets($file);
        #$string = iconv("ISO-8859-1", "UTF-8", $string);
        $string = strtolower($string);
        #$string = stripslashes($string);

	if (substr_count($string, '<foto') == 0) {
        	$string = html_entity_decode($string, ENT_QUOTES);
	}

	if (substr_count($string, '<caracteristicas') > 0 && mb_detect_encoding($string, 'UTF-8', true) === false) {
        	$string = utf8_encode($string);
		#$string = html_entity_decode($string, ENT_QUOTES);
		#$string = iconv("ISO-8859-1", "UTF-8", $string);
	}

        #if (substr_count($string, '<cidade>') > 0) {
            #$string = html_entity_decode($string);
            #$string = utf8_encode($string);
        #}

        foreach ($dict as $key => $value) {
                $string = str_replace($key, $value, $string);
        }

        echo($string);
    }
    
    fclose($file);
?>

