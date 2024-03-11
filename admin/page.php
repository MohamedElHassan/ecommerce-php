<?php
$do = isset($_GET['do']) ? $_GET['do'] :  'Manage';
// if(isset($_GET['do'])){
//   $do = $_GET['do'];
// }else {
//   $do = 'Manage';
// }

// If the page is the Main page

if ($do == 'Manage') {
  echo "Welcome in Manage page";
} elseif ($do == 'Add') {
  echo "Welcome in Add page";
} elseif ($do == 'Insert') {
  echo "Welcome in Insert page";
} else {
  echo "Error There\'s No Page With This Name";
}
