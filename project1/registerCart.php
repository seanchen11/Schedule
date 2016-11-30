<?php
  session_start();
  include("php/connect.php");
  include("php/function.php");

  $name = $_POST['name'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $school = $_POST['school'];
  $account = $_POST['account'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
  $password_md5 = md5($password1); //密碼加密
  reg($name,$gender,$email,$school,$account,$password1,$password2,$password_md5);

 ?>
