<?php
    $page= $_GET['page'];
    
    if (isset($page)) {
        include  '/var/www/html/'. $page. ".php";
    }

    else {
        include 'abouts.php'; /*AJustar o include na hora de subir para prod */
    }
?>
