//创建ajax引擎
   function getXmlHttpObject(){
	   var   xmlHttpRequest;
	   if (window.ActiveXobject){
		   xmlHttpRequest=new ActiveXobject("Microsoft.XMLHTTP");   
	   }else{
		   xmlHttpRequest=new XMLHttpRequest();
	   }
	   return xmlHttpRequest;
   }
   
   function $(id){
	   return document.getElementById(id);   
   }