<?php
  $con = mysql_connect("localhost","root","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("connectsql", $con);

$sql="INSERT INTO user (username, password, sex,birth,email) VALUES ('$_POST[username]','$_POST[key]','$_POST[sex]','$_POST[date]','$_POST[mail]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  echo "<SCRIPT LANGUAGE=\"JavaScript\">location.href='account_insert.php'</SCRIPT>";
  }
else{
	echo "1 record added";
	echo "<SCRIPT LANGUAGE=\"JavaScript\">window.alert(location.href='index.php')</SCRIPT>";
}

mysql_close($con)
?>