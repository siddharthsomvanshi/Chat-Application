<?php
session_start();
if(!isset($_SESSION['username'])){
?>
<!doctype html>
<html>
<head>
<script>
$('#something').click(function() {
    location.reload();
});
</script>
<script type="text/javascript">
if((screen.width<800){
window.location="http://www.google.com"
}
</script>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta charset="utf-8">
<title>Welcome To ChatBot</title>
<link href="/files/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="background-image"></div>
<div class="logotext">
<font face="comic sans ms"><p style="color:white; font-size:37px; z-index:11; position:fixed; left:45%; top:-28px; text-align:center;">ChatBot</p></font>
</div>
<div class="upperbox">
</div></div><br>
<br>
<div class="info">
<h2>Welcome To Hostels New Chat System : ChatBot</h2>
<br>
<pre>With ChatBot Chatting become much faster and
easier than ever. ChatBot runs without internet
so, there is no need for any datapacks or other 
internet subscription.
<br>
ChatBot shows realtime messages of numerous users of 
the hostel in the same place thus its better
place to interact with new mates and your buddies, 
with the passage of time it is promise to all our
users to keep updating ChatBot with new features and
 styles to meet the requirements of our beloved 
users.
so, dont wait Join Chat Bot Today
</pre>
</div>
<div id="text1" style="position:fixed; overflow:hidden; left:74.8%; top:2px;z-index:15;">
<font color="white" face="calibri">
<div>Username</div>
<hr color="white">
<div>Password</div>
</div>
<div align="center" class="signup" style="position:fixed; -webkit-border-radius: 99px 0px 99px 0px; width:380px; height:525px; background-color:black; overflow:hidden; top:120px; left:74%; z-index:16; opacity:0.9;">
<h1><u>Sign Up To Get Access To Fastest Messenger In Hostel<u></h1>
</div>
<form name="login" method="post" action="login.php" style="margin:0px">                        <!-- change php file location according to file destination -->
<input name="username" placeholder=" Enter Username" type="text" style="position:fixed; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:5%; top:0%; z-index:111">
<input name="password" value="" placeholder=" Enter Your Password" type="password" style="position:fixed; height:20px; border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px;right:5%;top:4.5%;z-index:11">
<input name="submit" title="Login To Chatbot" type="submit" value="Login" style="position:fixed;height:51px;border:white; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; color:black; width:60px;right:0.3%;background-color:white;top:1%;z-index:11">
</form>
<div align="center" class="signup" style="position:fixed; font-family:calibri; font-size:21px; width:110px; height:525px; overflow:hidden; top:230px; left:75%; z-index:16;">
<div>Username</div>
<br>
<div>Password</div>
<br>
<div>Room No</div>
<br>
<div>Email</div>
<br>
<div>Mobile No.</div>
<br>
<div>Branch</div>
<br>
<div>About You</div>
</div>
<div>
<form name="reg" method="post" action="/files/reg.php">
<input name="user" placeholder=" Enter Your Desired Username" type="text" style="position:fixed; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:2%; top:31.4%; z-index:111">
<input name="pass" value="" placeholder=" Enter Your Desired Password" type="password" style="position:fixed; height:20px; border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px;right:2%;top:38.5%;z-index:111">
<input name="roomno" placeholder=" Enter Your 3 Digit Room No" type="text" style="position:fixed; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:2%; top:45.5%; z-index:111">
<input name="email" value="" placeholder=" Enter Your Email" type="text" style="position:fixed; height:20px; border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px;right:2%;top:52%;z-index:111">
<input name="mobileno" placeholder=" Enter Your 10 Digit Mobile Number" maxlength="10" type="text" style="position:fixed; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:2%; top:59%; z-index:111">
<input name="branch" placeholder=" Tell What You Study" type="text" style="position:fixed; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:2%; top:66%; z-index:111">
<textarea name="aboutyou" placeholder="Tell Us About Yourself" type="text" style="position:fixed; height:80px; -webkit-border-radius: 0px 0px 99px 0px; border-color:black;width:195px;right:2%;top:73%;z-index:111"></textarea>
<input name="submit" title="Login To Chatbot" type="submit" value="Register" style="position:fixed;height:51px;border:white;color:white; width:300px;right:6.3%;background-color:black;top:91%;z-index:111; opacity:0.9;">
</form>
</div>
<div style="position:fixed;top:93%;left:1%;">
<font color="white" face="calibri">
<pre>All Right Reserved - Copyright ChatBot<sup>TM</sup> 2017</pre>
</font>
</div>
</body>
</html>
<?php
exit;
}
?>
<html>
<head>
<title>chatbot</title>
<link rel = "stylesheet" type="text/css" href ="chat.css"/>
<script src="/files/jquery-1.9.0.js"></script>
<script>
function submitChat(){
 if(form1.msg.value == '' ){
  alert('Enter your message!!!');
  return;
 }
 $('#imageload').show();
 var msg = form1.msg.value;
 var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
  document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
  $('#imageload').hide();
           }
 
 }
 xmlhttp.open('GET','insert.php?&msg='+msg, true);
 xmlhttp.send();
 
 
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#chatlogs').load('logs.php');}, 2000);
});
</script>


</head>
<body>
<form name = "form1">
<table border="1" align="center">
<tr>
<td>Your Chat Name:</td><td><b><?php echo $_SESSION['username']; ?></b></td>
</tr>

<tr>
<td>
Your Message: </td>
<td>
<textarea name= "msg" styles = "width:200px; height: 70px"></textarea></td>
</tr>
<tr>
<td colspan="2">
<a href= "#" onclick= "submitChat()"class= "button">Send</a></td>
</tr>
<td colspan="2">
<a href= "logout.php">Logout</a></td>
</tr>
</table>
<div id="imageload" style="display:none; height:50px; width:50px">
<img src="/files/loader.gif"/>
</div>
<div id="chatlogs" style="width:100%; height:50%; left:2px;"> 
<img height="50px" width="50px" style="left:50%; top:50%; position:fixed;" align="center"src="/files/loader.gif">
<p style="left:40%; top:55%; position:fixed;">LOADING CHATLOGS PLEASE WAIT.....</p>
</img>
</div>
</body>﻿