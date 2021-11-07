<?php require_once('../include/Sessions.php') ?>
<?php require_once('../include/functions.php') ?>
<?php
$_SESSION['user_id'] = null;
$_SESSION['user_name'] = null;
session_destroy();
Redirect_To('../login.php');

?>