<?php

session_start();
if (isset($_SESSION['Username'])) {
  $pageTitle = 'Dashboard';
  include 'init.php';
  echo 'Welcome to Dashboard ' . $_SESSION['Username'];
  include $tpl . 'footer.php';
} else {

  header('Location: dashboard.php');
  exit();
}

