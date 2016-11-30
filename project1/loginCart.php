<?php
 session_start();
 include("php/connect.php");
 $account = $_POST["account"];
 $password = $_POST["password"];

 $sql = "SELECT * FROM member WHERE account='$account' AND password='$password'";

 $res = mysql_query($sql) or die(mysql_error());
 $row = mysql_fetch_row($res);  //儲存陣列
 if($row == true){
      $_SESSION['account'] = $account;
      $_SESSION['password'] = $password;
      echo $row[1];
      /*header("location:coupon.php"); */
 }else{
      echo "登入失敗";
      echo'<meta http-equiv="refresh" content="2; url=login.php">';
 }
?>
