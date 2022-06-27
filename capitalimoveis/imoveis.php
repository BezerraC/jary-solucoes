<?php
    header("Content-type: text/xml; charset=utf-8");
    header("Expires: Fri, 01 Jan 2010 05:00:00 GMT");
    header("Cache-Control: no-cache");
    header("Pragma: no-cache");
    
    $file = fopen("http://www.sicadi.com.br/i_mostra_imoveis_xml.php?&codigo_imobiliaria=0346", 'r');

    $dict = ["iso-8859-1" => "utf-8",
		"&oacute;" => "ó",
		"<![cdata[" => "<![CDATA["];

    while(!feof($file)) {
        $string = fgets($file);
        #$string = iconv("ISO-8859-1", "UTF-8", $string);
        $string = strtolower($string);
        $string = html_entity_decode($string, ENT_QUOTES);
        #$string = stripslashes($string);

        #$string = utf8_encode($string);

	foreach ($dict as $key => $value) {
        	$string = str_replace($key, $value, $string);
	}

        echo($string);
    }
    
    fclose($file);
?>

