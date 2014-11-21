<?php
    class SqlHelper{
		
		public $conn;
		public $dbname="connectsql";
		public $username="root";
		public $password="123456";
		public $host="localhost";
		
		public function _construct(){
		}
		
		public function exectue_dql($sql){
			
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			return $res;
		}
		
		public function execute_dpl2($sql){
			 $this->conn=mysql_connect($this->host,$this->username,$this->password);
			 if(!$this->conn){
			 	 echo "mysql connect failed!!";
				 die("连接失败".mysql_error());
			 }
			 mysql_select_db($this->dbname,$this->conn);
			$arr=array();
			$res=mysql_query($sql,$this->conn) or die(mysql_error());
			
			while($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}
			mysql_free_result($res);
			return $arr;
		}
		
		public function exectue_dpl_fenye($sql1,$sql2,$fenyePage){
			
			$res=mysql_query($sql1,$this->conn)or die(mysql_error());
			$arr=array();
			while($row=mysql_fetch_assoc($res)){
				$arr[]=$row;
			}
			mysql_free_result($res);	
			
			$res2=mysql_query($sql2,$this->conn) or die(mysql_error());
			
			if ($row=mysql_fetch_row($res2)){
				$fenyePage->pageCount=ceil($row[0]/$fenyePage->pageSize);
				$fenyePage->rowCount=$row[0];
			}
			
			mysql_free_result($res2);
			
			$navigate=" ";
			
			if ($fenyePage->pageNow>1){
				$prePage=$fenyePage->pageNow-1;
				$navigate=" <a href='{$fenyePage->gotoUrl}pageNow={$prePage}'>上一页</a>&nbsp;";
			}
			if ($fenyePage->pageNow < $fenyePage->pageCount){
				$nextPage=$fenyePage->pageNow+1;
				$navigate.=" <a href='{$fenyePage->gotoUrl}pageNow={$nextPage}'>下一页</a>&nbsp;";
			}
			
			$page_whole=3;
			$start=floor(($fenyePage->pageNow-1)/$page_whole)*$page_whole+1;
			$index=$start;
			
			if ($fenyePage->pageNow>$page_whole){
				$navigate.="&nbsp;$nbsp;<a href='{$fenyePage->gotoUrl}pageNow=".($start-1)."'>&nbsp;&nbsp;<<&nbsp;$nbsp;</a>";
			}
			for (;$start<$index+$page_whole;$start++){
				$navigate.="<a href='{$fenyePage->gotoUrl}pageNow={$start}'>[{$start}]</a>";
			}
			$navigate.="&nbsp;&nbsp;<a href='{$fenyePage->gotoUrl}pageNow=$start'>&nbsp;&nbsp;>>&nbsp;&nbsp;</a>";
			$navigate.="&nbsp;&nbsp;当前页{$fenyePage->pageNow}/共{$fenyePage->pageSize}条";
			
			$fenyePage->res_array=$arr;
			$fenyePage->navigate=$navigate;
		}
		
		public function execute_dml($sql){
			 $this->conn=mysql_connect($this->host,$this->username,$this->password);
			 if(!$this->conn){
			 	 echo "mysql connect failed!!";
				 die("连接失败".mysql_error());
			 }
			 mysql_select_db($this->dbname,$this->conn);
  		 $b=mysql_query($sql,$this->conn) or die(mysql_error());
			 if (!$b){
			    	return 0;
			 }else{
				   if(mysql_affected_rows($this->conn)>0){
				      	return 1;
				   }else{
				    	return 2;
			     }
			 }
		}
			
		public function close_connect(){
		if(!empty($this->conn)){
				mysql_close($this->conn);
		}
		}
}
?>