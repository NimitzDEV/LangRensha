<?php
   require_once 'sqltool_class.php';
   
   class messagelink{
	   function addMessage($sender,$content){
	   	 $lasttime=time();
		   $sql="insert into message (sender,content,time) values('$sender','$content','$lasttime')";
		   $sqlHelper=new SqlHelper();
		   $sqlHelper->execute_dml($sql);
		   $sqlHelper->close_connect();
	   }
	   function getMessage($sender,$lasttime){
	   	 $lasttime =(int)$last ;
       $sql="select * from message where sender != \"$sender\" and time > $lasttime and isget=0";
       $sqlHelper=new SqlHelper();
		   $array=$sqlHelper->execute_dpl2($sql);
		   
		   $messageInfo="<message>";
		   $mytime=date("H:i:s",mktime($row['time']));
		   for($i=0;$i<count($array);$i++){
			   $row=$array[$i];
			   $messageInfo.="<sender>{$row['sender']}</sender> <content>{$row['content']}</content><time>{$mytime}</time>";
		   }
		   $messageInfo.="</message>";
		   $sql="update message set isget=1 where sender != \"$sender\" and time > $lasttime";
		   $sqlHelper->execute_dml($sql);
		   $sqlHelper->close_connect();
		   return $messageInfo;
	   }
   }
?>