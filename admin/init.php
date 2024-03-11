<?php

include 'connect.php';

// Routes

$tpl = "includes/templates/"; // Template Directory
$lang = "includes/languages/"; // Language Directory
$func = "includes/functions/";
$css = "layout/css/"; // CSS Directory
$js = "layout/js/"; // JS Directory

// Include the Important Files
include $lang . 'english.php';
include $func . 'functions.php';
include $tpl . 'header.php';


// Include Navbar on all pages except the one with $noNavbar Variable
if (!isset($noNavbar)) {include $tpl . 'navbar.php';}
