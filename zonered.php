<?php

require_once('page.php');

$pagered = new Page();

// crear contenido html aparte
$pagered->content = file_get_contents('html/zonered.html');

$dinamics = array(
    'area dinamica' => date('d') > 15 ? 'Estamos en la 2da mitad del mes' : 'Estamos en la 1ra mitad del mes'
);

// si se utiliza más de un valor dinamico se recorre el array con foreach key-value
$pagered->content = str_replace('{area dinamica}', $dinamics['area dinamica'], $pagered->content); // funca :)

$pagered->Display();

?>