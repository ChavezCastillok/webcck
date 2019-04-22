<?php

require_once('page.php');

$contactpage = new Page();

$contactpage->content = file_get_contents('html/form-contact.html');

$contactpage->Display();

?>