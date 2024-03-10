<?php
include 'init.php';
include $tpl . 'header.php';
include 'includes/languages/english.php';

// Check if the request is coming from POST Request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $hashedPassword = sha1($password);

  // Check If The User Exist In Database

  $stmt = $con->prepare("SELECT Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1");
  $stmt->execute(array($username, $hashedPassword));
  $count = $stmt->rowCount();

  // IF Count > 0 This Mean The Database Contain Record About This Username

  if ($count > 0) {
    echo 'Welcome ' . $username;
  }
}

?>

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
  <h4 class="text-center">Admin Login</h4>
  <input type="text" name="user" placeholder="Username" class="form-control" autocomplete="off">
  <input type="password" name="pass" placeholder="Password" class="form-control" autocomplete="new-password">
  <input class="btn btn-primary btn-block" type="submit" value="Login">
</form>
<?php include $tpl . "footer.php" ?>