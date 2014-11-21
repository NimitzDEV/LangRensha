<?php
  require_once 'massagelink.php';
  
  $sender=$_POST['sender'];
  $content=$_POST['content'];
  
  //file_put_contents("E:/mylog.log",$sender."-".$content."\r\n",FILE_APPEND);
  $massagelink=new messagelink();
  
  $massagelink->addMessage($sender,$content);

?>