<?php
  $con=mysql_connect("localhost","root","a4x4l1e2");
  if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
  mysql_query("set names utf8");//設定成中文
  mysql_select_db("coupon", $con);

?>
