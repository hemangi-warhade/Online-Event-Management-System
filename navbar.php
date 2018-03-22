<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<title>PHP-Demo</title>
<style>
.clock
{
color:white;
font-size:25px;
}
</style>
</head>
<body>
	
	<div class="navbar">
    	<img src="elogo.png" />
    	<div class="links">	
<div id ="MyClockDisplay" class="clock" style="display:inline";></div>
<script type="text/javascript">
function showTime()
{
var date=new Date();
var h=date.getHours();
var m =date.getMinutes();
var s = date.getSeconds();
var session="Am";
if(h ==0){
h=12;
}
if(h>12)
{
h=h-12;
session="Pm";
}
h=(h<10)?"0"+h:h;
m=(m<10)?"0"+m:m;
s=(s<10)?"0"+s:s; var time=h+":" +m+ ":" +s+"  "+  session;
document.getElementById("MyClockDisplay").innerText=time;
document.getElementById("MyClockDisplay").textContent=time;
setTimeout(showTime, 1000);
}
 showTime();
</script>
    		<a href="index.php">Home</a>
			<a href="login.php">
            	<?php
                if(isset($_SESSION['user']))
                	echo "Profile";
				else if(isset($_SESSION['admin']))
                	echo "Admin"; 
                else
                	echo "Login";
                ?>
            </a>
	</div>
        </div>
    </div>
