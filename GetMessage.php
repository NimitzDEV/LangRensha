<?php
   require_once 'massagelink.php';
	
	header("Content-Type: text/xml; charset=utf-8");
	header("Cache-control: no-cache");
	
	$getter=$_POST['sender'];
	$last = $_POST['last'];
	 
	$massagelink=new messagelink;
	$information=$massagelink->getMessage($getter,$last);
	
	echo $information;
?>