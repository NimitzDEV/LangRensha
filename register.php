<?php
     $con = mysql_connect("localhost","root","123456");
  if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
   mysql_select_db("connectsql", $con);
  $result = mysql_query("SELECT * FROM user"); 
  while($row = mysql_fetch_array($result))
   {
     if(($_POST['username']==$row['username'])&&($_POST['password']==$row['password'])){
	  setcookie('loginuser',$_POST['username']);
      setcookie('last',time());
      session_start();
	    echo "<SCRIPT LANGUAGE=\"JavaScript\">location.href='gamemain.php'</SCRIPT>"; 
	    }
}
	    echo "<SCRIPT LANGUAGE=\"JavaScript\">location.href='index.php'</SCRIPT>";
mysql_close($con);

?>
