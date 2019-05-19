<?php

require_once('page.php');

$pagered = new Page();

// crear contenido html aparte
$pagered->content = file_get_contents('html/zonered.html');

$dinamics = array(
    'parte del mes' => date('d') > 15 ? 'Estamos en la 2da mitad del mes' : 'Estamos en la 1ra mitad del mes',
    'parte del año' => date('n') > 6  ? 'Y en los ultimos 6 meses del año' : 'Y en los primeros 6 meses del año'
);

// si se utiliza más de un valor dinamico se recorre el array con foreach key-value
foreach ($dinamics as $key=>$value){
    $pagered->content = str_replace('{'.$key.'}', $value, $pagered->content);
}

 // funca :)

$pagered->Display();

?>