<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>账号申请</title>
<style>
	header{height:200px;background:url(picture/%E6%A0%87%E9%A2%98%E5%9B%BE%E7%89%87.jpg)}
	nav ul li{height:30px;width:200px;float:left;line-height:30px;margin-top:160px}
	div{height:400px}
	section{height:400px;width:40%;background:url(picture/20130603144628-97934899.jpg)}
	footer{height:100px;background:#FF0;clear:both;margin-top:10px;line-height:20px}
    </style>
    </head>
<body>
<script>
/*function upperCase()
{
  x = document.getElementsByName("user")[0].value;
  if ( (x.length <4) || (x.length > 16) )
  {
     document.getElementById("error").style.visibility="visible";
	 document.getElementById("error").innerHTML="用户名字长度4-16字符";   
  } 
  else
  {
    
	if (window.XMLHttpRequest)
    {
      xmlhttp=new XMLHttpRequest();
    }
    else
    {
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
         document.getElementById("error").style.visibility="hidden";
      }
	  else
	  {
	 document.getElementById("error").style.visibility="visible";
       	 document.getElementById("error").innerHTML="你的用户名冲突";   
	  }
      }
  xmlhttp.open("GET","/account_check.php?" + "username=" + x,true);
  xmlhttp.send();
}
function show_confirm()
{
   var r=confirm("确定要注册吗？");
if (r==true)
  {
   
  }
else
  {
  }
}
}*/
  document.bgColor="black";
 </script>
    <header>
    <nav>
    <ul>
    <li><a href="index.php" target="_blank" title="主页" style="color:#CF0;width:5px">主页</a></li>
    <li><a href="gameintroduce.php" target="_blank" title="规则介绍" style="color:#CF0;width:5px">规则介绍</a></li>
    <li><a href="accountapply.php" target="_blank" title="玩家注册" style="color:#CF0;width:5px">玩家注册</a></li>
    </ul>
    </nav>
    </header> 
    <div>
         <center>
         <section>
         <b style="color:#0F0;font:Verdana, Geneva, sans-serif;font-size:40px">请填写你的申请信息</b></br><hr/>
         <form action="account_insert.php" method="post" >
         <b style="color:#FF0;font-size:25px;float:left"> 用户名：</b><input type="text" name="username" onChange="upperCase()"  placeholder="不能以数字开头，不能含有非法字符" required="required" />
         <br/>
         <br/>
          <b style="color:#FF0;font-size:25px;float:left">密码：</b><input type="password" name="key" required="required" />
          <br/>
         <br/>
          <b style="color:#FF0;font-size:25px;float:left">性别：</b><select name="sex" >
                    <option value="男">男</option>
                    <option value="女">女</option>
                    </select>
                   <br/>
         <br/>
          <b style="color:#FF0;font-size:25px;float:left">出生年月：</b><input type="date" name="date" required="required" />
         <br/>
         <br/>
          <b style="color:#FF0;font-size:25px;float:left">邮箱:</b><input type="email" name="mail" value=""  required="required" />
          <br/>
          <br/>
         <input type="submit" onClick="show_confirm()" value="注册" />
         </form>
         </section>
         </center>
    </div>
   <footer>
  <big>版权所有&copy;：哈尔滨工业大学软件一班639课题组</big>
  
  </footer>

</body>

</html>
