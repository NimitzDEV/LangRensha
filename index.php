<!DOCTYPE HTML>
<html>
<head>
<title>主页</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <style>
	header{height:200px;background:url(picture/%E6%A0%87%E9%A2%98%E5%9B%BE%E7%89%87.jpg)}
	nav ul li{height:30px;width:200px;float:left;line-height:30px;margin-top:135px}
	div{margin-top:10px;height:450px}
	section{height:450px;background:#030;width:70%;float:left}
	aside{height:450px;width:29%;float:right}
	hgroup{background:url(picture/20130603144628-97934899.jpg);width:375px;height:400px}
	footer{height:100px;background:#960;clear:both;margin-top:10px;line-height:20px}
    </style>
</head>

<body>
<script>
 document.bgColor="black";
</script>
<header>
     <nav>
        <ul>
        <li><a href="mainpage.php" target="_blank" title="主页" style="color:#CF0;width:5px">主页</a></li>
        <li><a href="gameintroduce.php" target="_blank" title="规则介绍" style="color:#CF0;width:5px">规则介绍</a></li>
        <li><a href="accountapply.php" target="_blank" title="玩家注册" style="color:#CF0;width:5px">玩家注册</a></li>
        </ul>
     </nav>
  </header>
    <section>
		<hr />
		<center>
<style type="text/css">
#demo {
background:#030;
overflow:hidden;
width: 400px;
height:400px;
}
#demo img {
border: 2px solid #F2F2F2;
}
#indemo {
float: left;
width: 800%;
}
#demo1 {
float: left;
}
#demo2 {
float: left;
}
</style>
<div id="demo">
     <div id="indemo">
         <div id="demo1">
            <a href="#"><img src="picture/未标题-1副本.png" border="0" /></a>
            <a href="#"><img src="picture/未标题-7副本.png" border="0" /></a>
            <a href="#"><img src="picture/未标题-2副本.png" border="0" /></a>
            <a href="#"><img src="picture/未标题-5副本.png" border="0" /></a>
            <a href="#"><img src="picture/未标题-6副本.png" border="0" /></a>
            <a href="#"><img src="picture/未标题-3副本.png" border="0" /></a>
            <a href="#"><img src="picture/未标题-4副本.png" border="0" /></a>
        </div>
        <div id="demo2"></div>
     </div>
</div>
</center>
<script>
var speed=10;
var tab=document.getElementById("demo");
var tab1=document.getElementById("demo1");
var tab2=document.getElementById("demo2");
tab2.innerHTML=tab1.innerHTML;
function Marquee(){
if(tab2.offsetWidth-tab.scrollLeft<=0)
tab.scrollLeft-=tab1.offsetWidth
else{
tab.scrollLeft++;
}
}
var MyMar=setInterval(Marquee,speed);
tab.onmouseover=function() {clearInterval(MyMar)};
tab.onmouseout=function() {MyMar=setInterval(Marquee,speed)};
</script>
      <hr />
     </section>
     <aside>
        <hgroup>
        <form action="register.php" method="post">
        </br><big><big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;游戏登陆</big></big></br>
        <big>&nbsp;&nbsp;&nbsp;用户名：<input type="text" name="username" required="required" /></big></br></br>
        <big>&nbsp;&nbsp;&nbsp;密&nbsp;&nbsp;码：<input type="password" name="password" required="required" /></big></br></br>
        <big>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;        <input type="submit" value="登陆"/></big>
        </form>
        </hgroup>
        
     </aside>
  </div>
  <footer>
  <big>版权所有&copy;：哈尔滨工业大学软件一班639课题组</big>
  <hr />
  </footer>
</html>
