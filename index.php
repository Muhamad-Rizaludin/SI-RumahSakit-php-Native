<?php
require_once "_config/config.php";
if(isset($_SESSION['user'])) {
   echo "hello world. <a href=\"auth/logout.php\">Logout</a>";
} else {
  echo "<script>window.location='".base_url('auth/login.php')."';</script>";
}
?>

