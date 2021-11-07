<?php
require_once('include/functions.php');
include('include/Sessions.php');
if(isset($_POST['save']))
{
$uname = mysqli_real_escape_string($con,$_POST['uname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = mysqli_real_escape_string($con,$_POST['pass']);
$sql = "SELECT * FROM users where email='$email'";
$exec = Query($sql);
if (mysqli_num_rows($exec)>0)
{
      header("Location: login.php?RError");
}
else{
      date_default_timezone_set("Asia/Calcutta");
      $time = time();
      $dateTime = strftime('%Y-%m-%d %H:%M:%S ',$time);
      $sql = "INSERT INTO users (date, username,email,password) VALUES('$dateTime', '$uname','$email','$password')";
      $exec = Query($sql);
      if ($exec) {
            $foundAccount = LoginAttempt($uname, $password);
            if ($foundAccount) {
                  $_SESSION['user_id'] = $foundAccount['id'];
                  $_SESSION['user_name'] = $foundAccount['username'];
            }
            mysqli_close($con);
            Redirect_To("admin/index.php?success");
      }else {
            Redirect_To("login.php?fail");
      }
}
}
if(isset($_POST['login'])){
      $username = mysqli_real_escape_string($con,$_POST['mail']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $foundAccount = LoginAttempt($username, $password);
      if ($foundAccount) {
            $_SESSION['user_id'] = $foundAccount['id'];
            $_SESSION['user_name'] = $foundAccount['username'];
            mysqli_close($con);
            Redirect_To('./admin/index.php');
      }
      else{
            Redirect_To('login.php?invalid');
      }
}
?>
