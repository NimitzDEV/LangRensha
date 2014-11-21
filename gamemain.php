<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>“天黑请闭眼”游戏界面</title>
<script language="javascript" type="text/javascript" src="my.js"></script>
<script language="javascript" type="text/javascript">
self.setInterval("getMessage()",200);
var last = "last=<?php echo $_COOKIE['last'];?>";
var url="GetMessage.php";
var data="sender=<?php echo $_COOKIE['loginuser']; ?>";
var curr = new Date();

window.onload = function(){
    var role = document.getElementById('role');
    var i = Math.floor(10*Math.random());
	if (i == 1){
	    role.innerHTML = '狼人';
	} else if(i == 2){
	    role.innerHTML = '女巫';
	}else if (i == 3){
	    role.innerHTML = '守卫';
	}else if (i == 4){
	    role.innerHTML = '预言家';
	}else{
	    role.innerHTML = '平民';
	}
}

function getMessage(){
	 var myXmlHttpRequest=getXmlHttpObject();
	   if (myXmlHttpRequest){
 		 }
		 myXmlHttpRequest.open("post",url,true);
	   myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
		 myXmlHttpRequest.onreadystatechange=function(){
    		 if (myXmlHttpRequest.readyState==4){
		    			if(myXmlHttpRequest.status==200){
									last = curr.getTime();  
						 	  	var messagerecieve=myXmlHttpRequest.responseXML;
						      var content = messagerecieve.getElementsByTagName("content");
						      var time=messagerecieve.getElementsByTagName("time");

						      if (content.length!=0){
							         for(var i=0;i<content.length;i++){
								           var str="wolf"+""+"(" + time[i].childNodes[0].nodeValue+ "):" +content[i].childNodes[0].nodeValue;
								           $('myid').value= $('myid').value + str+ "\r\n";
							         }
						      }
					    }
			    }
			}
		  curr = new Date();
		  myXmlHttpRequest.send(data + "&" + last);
}  

function sendMessage(){
		 var myXmlHttpRequest=getXmlHttpObject();
		 if (myXmlHttpRequest){
	    		 var url="SendMessage.php";
			     var data="content="+$('content').value+"&sender=<?php echo $_COOKIE['loginuser']; ?>";
    			 myXmlHttpRequest.open("post",url,true);
		    	 myXmlHttpRequest.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
			     myXmlHttpRequest.onreadystatechange=function (){
	      			   if (myXmlHttpRequest.readyState==4){
				      	      if(myXmlHttpRequest.status==200){
					            }
				          }
			     }
			myXmlHttpRequest.send(data);
		  var msg = "wolf1"+"(" + new Date().toLocaleTimeString() + "):" + $('content').value;
			$('myid').value= $('myid').value + msg + "\r\n";
		 }
		 $('content').value="";
}
function myfunction(ip1){
            var count1 = new Array()
            count1[1]=3,count1[2]=3,count1[3]=4,count1[4]=4,count1[5]=5,count1[6]=5,count1[7]=6,count1[8]=6,count1[9]=7;
            var x=Math.floor(10*Math.random());
            if(x==0) x=2;
            function judge(){
                  window.alert("wolf"+x+" 得了 "+count1[x]+" 票"+",它出局了,如果他已出局，则为平安夜。");
                  document.getElementById(x).style.background="black";
            }
			setTimeout(judge,2000);
            if(x==1) window.alert("你出局了，游戏结束！");
    }
	
function myfunction1()
{
	window.alert("请点击要投票的玩家的头像。")
}

function myfunction2()
{
var r=confirm("是否竞选村长？");
if (r==true)
  {
  alert("恭喜你成为村长，你将获得2票投票权。");
  }
 else
 {
	 var y=Math.floor(10*Math.random());
	 while(y==1)
	 {
		 y=Math.floor(10*Math.random());
	 }
	alert("恭喜"+y+"玩家成为村长，他将获得两票投票权。") 
 }
}

</script>
<style>
  header{height:560px;background:url(picture/1.png)}
  div{position:absolute;bottom:10px;right:200px;height:100px;width:1000px;background:#009}
</style>
</head>

<body>
 <script>
  document.bgColor="black";
  </script> 
<header>
    <input type="button" id = "5" onclick="myfunction(5)" style="position:absolute;left:500px;top:25px; width:80px;height:100px; background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;left:450px;top:130px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 5：</hl>
    
    <input type="button" id = "6" onclick="myfunction(6)" style="position:absolute;right:500px;top:25px; width:80px;height:100px; background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;right:550px;top:130px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 6：</hl>
    
    <input type="button" id = "4" onclick="myfunction(4)" style="position:absolute;left:280px;top:100px; width:80px;height:100px;  background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;left:230px;top:210px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 4：</hl>
    
    <input type="button" id = "7" onclick="myfunction(7)" style="position:absolute;right:280px;top:100px; width:80px;height:100px;  background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;right:300px;top:210px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 7：</hl>
    
    <input type="button" id = "3" onclick="myfunction(3)" style="position:absolute;left:140px;top:200px; width:80px;height:100px;  background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)" >
    <hl style="position:absolute;left:90px;top:310px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 3：</hl>
    
    <input type="button" id = "8" onclick="myfunction(8)" style="position:absolute;right:140px;top:200px; width:80px;height:100px;  background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;right:190px;top:310px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 8:</hl>
    
    <input type="button" id = "2" onclick="myfunction(2)" style="position:absolute;left:40px;bottom:150px; width:80px;height:100px; background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;left:10px;bottom:130px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 2：</hl>
    
    <input type="button" id = "9" onclick="myfunction(9)" style="position:absolute;right:40px;bottom:150px; width:80px;height:100px;  background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
    <hl style="position:absolute;right:90px;bottom:130px; font-style:oblique; font-weight:700; font-size:15px; color:#FFF">wolf 9：</hl>
    <center>
     <textarea rows="60" cols="30" readonly="readonly" style="resize: none; margin-top:165px;background-color:#FFF;filter:alpha(opacity=60);opacity:0.6;width:600px;height:250px" id="myid" ></textarea></br></br></br>
     <div>
     <input type="button" id = "1" style="position:absolute;left:80px; width:80px;height:100px;  background:url(picture/%E6%9C%AA%E6%A0%87%E9%A2%98-12.png)">
     <hl style="position:absolute;left:400px;bottom:5px; font-style:oblique; font-weight:700; font-size:25px; color:#FFF">wolf 1:<?php echo $_COOKIE['loginuser'];?> --- <b id="role"></b></hl>
     <input type="text" style="position:absolute; left:200px; bottom:40px; width:600px;height:40px;background-color:#FFF;filter:alpha(opacity=60);opacity:0.6" id="content"/>
     <button style="position:absolute;right:100px;bottom:50px;color:#30F;" onclick="sendMessage()" >发言</button>
     <input type="button" value="确定"  style="position:absolute;right:50px;bottom:50px; color:#30F"/> 
     <input type="button" value="竞选村长"  onclick="myfunction2()" style="position:absolute;right:100px;bottom:10px; color:#30F"/>
     <input type="button" value="归票" onclick="myfunction1()" style="position:absolute;right:50px;bottom:10px; color:#30F;" />
    </div>
    </center>
</header>
</body>
</html>
