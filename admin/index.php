<?php
session_start();
$noNavbar = '';
$pageTitle = 'Login';
if (isset($_SESSION['Username'])) {
  header('Location: dashboard.php'); // Redirect to Dashboard page
}
include 'init.php';


// Check if the request is coming from POST Request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['user'];
  $password = $_POST['pass'];
  $hashedPassword = sha1($password);

  // Check If The User Exist In Database

  $stmt = $con->prepare("SELECT UserID, Username, Password FROM users WHERE Username = ? AND Password = ? AND GroupID = 1 LIMIT 1");
  $stmt->execute(array($username, $hashedPassword));
  $row = $stmt->fetch();
  $count = $stmt->rowCount();

  // IF Count > 0 This Mean The Database Contain Record About This Username

  if ($count > 0) {
    // print_r($row);
    // print_r($row['UserID']);
    $_SESSION['ID'] = $row['UserID']; // Register Session ID
    $_SESSION['Username'] = $username; // Register Session name
    header('Location: dashboard.php'); // Redirect to Dashboard page
    exit();
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