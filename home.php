<?php 

require ('page.php');

$homepage = new Page();

$homepage -> content = '<p>Welcome to the home of Soluciones CCK.
            Please take some time to get to know us.</p>
            <p>We specialize in serving your business needs 
            and hope to hear from your soon.</p>';

$homepage -> Display();

?>