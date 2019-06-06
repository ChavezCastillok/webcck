<?php

require_once('page.php');

$miblog = new Page();

$miblog->content = file_get_contents('html/enblog.html');

// Conectar con DB para sustituir las marcas con los registros... 
// antes debo crear una interfaz para crear una entrada y modificarla

$miblog->Display();

?>