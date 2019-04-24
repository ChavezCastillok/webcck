<?php 

require_once('page.php');

$homepage = new Page();

$homepage->content = file_get_contents('html/profile.html');

$homepage -> Display();

?>