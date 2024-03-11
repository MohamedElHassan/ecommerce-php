<?php

/*
=============================================
== Manage Members Page.
== You Can Add | Edit | Delete Members from here.
=============================================
*/

session_start();
$pageTitle = 'Members';

if (isset($_SESSION['Username'])) {

  include 'init.php';
  $do = isset($_GET['do']) ? $_GET['do'] :  'Manage';

  // Start Manage Page
  if ($do == 'Manage') {
    // Manage Page
    $pageTitle = 'Members | Manage';
    echo 'Welcome to Members Manage ' . $_SESSION['Username'];
  } elseif ($do == 'Edit') {
    // Edit Page
    $pageTitle = 'Members | Edit';
    echo 'Welcome to Members Edit ' . $_SESSION['Username'] . ' Your Id is : ' . $_GET['userid'];
  }

  include $tpl . 'footer.php';
} else {

  header('Location: dashboard.php');
  exit();
}
