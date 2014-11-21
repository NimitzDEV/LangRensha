<? php
   $con = mysql_connect("localhost","root","123456");
  if (!$con)
    {
      die('Could not connect: ' . mysql_error());
    }
   mysql_select_db("connectsql", $con);
  $result = mysql_query("SELECT * FROM user"); 
  while($row = mysql_fetch_array($result))
   {
     if($_POST[username]==$row['username'])
      xmlHttp.status=401;
     else
      xmlHttp.status=200;
     return xmlhttp.status;
}
mysql_close($con);
?>
     
     
     
     
   