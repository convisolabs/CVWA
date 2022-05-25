<?php
    $page = $_GET['page'];
    
    if (isset($page)) {
        include  '/var/www/html/'. $page. ".php";
    }

    else {
        include 'index.php';
    }
?>