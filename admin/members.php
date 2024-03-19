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
  if ($do == 'Manage') { // Manage Page
    $pageTitle = 'Members | Manage';

    echo 'Welcome to Members Manage ' . $_SESSION['Username'];
  } elseif ($do == 'Edit') { // Edit Page 
?>

    <h1 class="text-center">Edit Member</h1>
    <div class="conainter">
      <form class="form-horizontal">
        <!-- Start Username Field -->
        <div class="form-group form-group-lg">
          <label for="name" class="col-sm-2 control-label"><?php echo lang('USERNAME') ?></label>
          <div class="col-sm-10 col-md-7">
            <input type="text" name="username" class="form-control" autocomplete="off">
          </div>
        </div>
        <!-- End Username Field -->
        <!-- Start Email Field -->
        <div class="form-group form-group-lg">
          <label for="email" class="col-sm-2 control-label"><?php echo lang('EMAIL') ?></label>
          <div class="col-sm-10 col-md-7">
            <input type="email" name="email" class="form-control">
          </div>
        </div>
        <!-- End Email Field -->
        <!-- Start Password Field -->
        <div class="form-group form-group-lg">
          <label for="password" class="col-sm-2 control-label"><?php echo lang('PASSWORD') ?></label>
          <div class="col-sm-10 col-md-7">
            <input type="password" name="password" class="form-control" autocomplete="new-password">
          </div>
        </div>
        <!-- End Password Field -->
        <!-- Start Full Name Field -->
        <div class="form-group form-group-lg">
          <label for="fullname" class="col-sm-2 control-label"><?php echo lang('FULLNAME') ?></label>
          <div class="col-sm-10 col-md-7">
            <input type="text" name="fullname" class="form-control">
          </div>
        </div>
        <!-- End Full Name Field -->
        <!-- Start Submit Button -->
        <div class="form-group form-group-lg">
          <!-- <label for="name" class="col-sm-2 control-label">Username</label> -->
          <div class="col-sm-offset-2 col-sm-10 col-md-7">
            <input type="submit" value="<?php echo lang('SUBMIT_BTN') ?>" class="btn btn-primary btn-lg">
          </div>
        </div>
        <!-- End Submit Button -->
      </form>
    </div>
<?php }

  include $tpl . 'footer.php';
} else {

  header('Location: dashboard.php');
  exit();
}
