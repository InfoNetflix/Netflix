<?php
    /*******
    Main Author: Z0N51
    Contact me on telegram : https://t.me/ELP4SSW0RD
    ********************************************************/
    
    require_once 'app/config.php';
    $red = $_SESSION['last_page'];
    header("Location: ../index.php?redirection=$red");
    exit();
?>