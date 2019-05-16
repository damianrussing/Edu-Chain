<?php
    session_start();

    if (!isset($_SESSION['lang']))
        $_SESSION['lang'] = "nl";
    else if (isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])) {
        if ($_GET['lang'] == "nl")
            $_SESSION['lang'] = "nl";
        else if ($_GET['lang'] == "en")
            $_SESSION['lang'] = "en";
    }

    require_once "assets/language/" . $_SESSION['lang'] . ".php";