<?php
session_start();
if(!isset($_SESSION['username'])){
?>
<!doctype html>
<html>
<head>
<script>
var sUserAgent = navigator.userAgent;
if (sUserAgent.indexOf('Android') > -1 || sUserAgent.indexOf('iPhone') > -1 || sUserAgent.indexOf('iPod') > -1 || sUserAgent.indexOf('Symbian') > -1) {
var clientType = new RegExp('(?:^|; )' + encodeURIComponent('client_type') + '=([^;]*)').exec(document.cookie);
if (!clientType || clientType[1] !== 'pc') {
location.href = "http://mobile.mi.com/in/";
          }
        }
</script>
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta charset="utf-8">
<title>Welcome To ChatBot</title>
<link href="/files/style.css" rel="stylesheet" type="text/css">
</head>
<body background="/files/background.jpg">
<div class="container">
<p style="font-family:Letter Gothic Std; color:white; font-size:20px; position:fixed; left:10px; top:20px; z-index:115;"/>Welcome Guest</p>
<div class="logotext">
<font face="comic sans ms"><p style="color:white; font-size:36px; z-index:115; position:fixed; left:auto; top:-42px; text-align:center;">ChatBot</p></font>
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
<div id="text1" style="position:fixed; overflow:hidden; right:300px; top:2px;z-index:115;">
<font color="white" face="calibri"> 
<div>Username</div>
<hr color="white">
<div>Password</div>
</div>
<form name="login" method="post" action="login.php" style="margin:0px">                        <!-- change php file location according to file destination -->
<input name="username" placeholder=" Enter Username" type="text" style="position:fixed; overflow:hidden; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:80px; top:3px; z-index:114;"/>
<input name="password" value="" placeholder=" Enter Your Password" type="password" style="position:fixed; overflow:hidden; height:20px; border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px;right:80px;top:30px;z-index:114;"/>
<input name="submit" title="Login To Chatbot" type="submit" value="Login" style="position:fixed;height:51px;border:white; overflow:hidden; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; color:black; width:60px;right:3px;background-color:white;top:5px;z-index:114;"/>
</form>
<div style="position:absolute; width:380px; height:400px; border-color:white; background-color:black; overflow:hidden; top:80px; right:17px; z-index:0; opacity:0.7; -webkit-border-radius: 0px 50px 0px 99px;-moz-border-radius: 50px 99px 0px 99px;border-radius: 0px 50px 0px 50px;">
<p align="center">Sign UP For The Fastest Messenger In The Hostel</p>
<form name="reg" method="post" action="register2.php">
Your Name<input name="name" placeholder=" Enter Your Name" maxlength="10" type="text" style="position:absolute; overflow:hidden; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:30px; z-index:111;"/><br><br>
Last Name<input name="lname" maxlength="10" placeholder=" Enter Your Last Name" type="text" style="position:absolute; overflow:hidden; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:30px; z-index:111;"/><br><br>
Username<input name="user" placeholder=" Enter Your Desired Username" type="text" style="position:absolute; overflow:hidden; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:30px; z-index:111;"/><br><br>
Password<input name="pass" value="" placeholder=" Enter Your Desired Password" type="password" style="position:absolute; overflow:hidden; height:20px; border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:30px; z-index:111;"/><br><br>
Retype Pass<input name="pass2" placeholder=" ReEnter Your Password" type="password" style="position:absolute; overflow:hidden; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:30px; z-index:111;"/><br><br>
Room No<input name="roomno" placeholder=" Enter Your 3 Digit Room No" type="text" style="position:absolute; overflow:hidden; height:20px;border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px; right:30px; z-index:111;"/><br><br>
Email<input name="email" value="" placeholder=" Enter Your Email" type="text" style="position:absolute; overflow:hidden; height:20px; border-color:black; -webkit-border-radius: 99px 99px 0px 99px;-moz-border-radius: 99px 99px 0px 99px;border-radius: 99px 99px 0px 99px; width:200px;right:30px; z-index:111;"/><br><br>
About You<textarea name="about" placeholder="Tell Us About Yourself" type="text" style="position:absolute; overflow:hidden; height:80px; -webkit-border-radius: 0px 0px 0px 0px; border-color:black;width:195px;right:30px; z-index:111;"></textarea><br><br><br>
</div>
<input name="submit" type="submit" value="Register" style="position:absolute; top:490px; color:white; overflow:hidden; height:50px; border-color:white; background-color:black; width:380px; right:19px; opacity:0.7; z-index:111;"/><br><br>
</form>

<div style="position:fixed;top:93%;right:1%;">
<font color="white" face="calibri">
<pre>All Right Reserved - Copyright ChatBot<sup>TM</sup> 2017</pre>
</font>
</div>
</div>
</body>
</html>
<?php
exit;
}
?>
<?php
require'connect.php';
$username=$_SESSION['username'];
mysql_query("UPDATE users SET status='1' WHERE username='$username'");
?>
<html>
<head>
<script>
var sUserAgent = navigator.userAgent;
if (sUserAgent.indexOf('Android') > -1 || sUserAgent.indexOf('iPhone') > -1 || sUserAgent.indexOf('iPod') > -1 || sUserAgent.indexOf('Symbian') > -1) {
var clientType = new RegExp('(?:^|; )' + encodeURIComponent('client_type') + '=([^;]*)').exec(document.cookie);
if (!clientType || clientType[1] !== 'pc') {
location.href = "http://mobile.mi.com/in/";
          }
        }
</script>

<title>ChatBot - Chat Interface</title>
<link rel = "stylesheet" type="text/css" href ="chat.css"/>
<link rel = "stylesheet" type="text/css" href ="/files/style.css"/>
<script src="/files/jquery-1.9.0.js"></script>
<script src="/files/jquery-latest.js"></script>
<script>
function hider(){
$("#msgloader").hide();
$("#collmsg").hide();
$("#msgsubmitform").hide();
}
</script>
<script>
function msgcoll(){
$("#msgloader").hide();
$("#msgsubmitform").hide();
$('#collmsg').attr( 'style', 'bottom:0px;position:fixed;right:250px;width:250px;height:40px;background-color:black;z-index:20;overflow:hidden;');
$('#caller').attr( 'onclick', 'msgcollr()' );
}
function msgcollr(){
$("#msgloader").show();
$("#msgsubmitform").show();
$('#collmsg').attr( 'style', 'bottom:318px;position:fixed;right:250px;width:250px;height:40px;background-color:black;z-index:20;overflow:hidden;');
$('#caller').attr( 'onclick', 'msgcoll()' );
}
</script>
<script>
// collapse system ------------------------------------------------------------ beginning


function shows(){
$('#ustatus').show();
$('#collapse').attr( 'onclick', 'coll()' );
$('.collapse').attr('style', 'position:fixed; right:0px; width:220px; height:40px; width:220px; z-index:15; top:60px;');
document.getElementById("data").innerHTML = 'Hide Chat ';
}
function coll(){
$('#ustatus').hide();
$('#collapse').attr( 'onclick', 'shows()' );
$('.collapse').attr('style', 'position:fixed; right:0px; width:220px; height:40px; width:220px; z-index:15; bottom:0px;');
document.getElementById("data").innerHTML = 'Show Chat ';
}

//collapse system ------------------------------------------------------------- end

//localchat system ------------------------------------------------------------------ beginning
function create(username,name){
window.most = username;
window.dname = name;
$("#msgsubmitform").show();
$("#msgloader").show();
$('#collmsg').attr( 'style', 'bottom:318px;position:fixed;right:250px;width:250px;height:40px;background-color:black;z-index:20;overflow:hidden;');
document.getElementById("displayname").innerHTML = dname;

var x = "submitchat('"+name+"');";
$('#send').attr( 'onclick', x);
}
function submitchat(username,name){
if(form1.msg.value == '' ){
  alert('Enter your message!!!');
  return;
 }
 $('#text').empty();
 var msg = form1.msg.value;
 var xmlhttp = new XMLHttpRequest();
 
 xmlhttp.onreadystatechange = function(){
 if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
           }
 
 }
 xmlhttp.open('GET','insert.php?message='+msg+'&sendto='+most, true);
 xmlhttp.send();
}
$(document).ready(function(e){
 $.ajaxSetup({cache:false});
 setInterval(function(){$('#msgloader').load('logs.php?name='+most);}, 2000);
});
</script>
<script>
//localchat system ------------------------------------------------------------- end

//keyhandler ------------------------------------------------------------------- start

$(function() {
    $("#text").keypress(function (e) {
        if(e.which == 13) {
            $("#send").click();
            $(this).val("");
            e.preventDefault();
        }
    });
});


//keyhandler -------------------------------------------------------------------- end

//chatstatus system ------------------------------------------------------------- start

$('#imageload').show();
    $(document).ready(function(){
        setInterval(function() {
            $("#ustatus").load("ustatus.php");
        }, 2000);
		$('#imageload').hide();
    });
	
//chatstatus system ------------------------------------------------------------- end


//profileloader system ------------------------------------------------------------- start


$(document).ready(function(){
        setInterval(function() {
            $("#info").load("userdp.php");
        }, 2000);
    });
	
//profileloader system ------------------------------------------------------------- end

</script>
<script>
window.onbeforeunload = function(){
$.get("disconnect.php");
}
</script>
</head>
<body onload="hider();">
<a id="caller" href="#" onclick="msgcoll();">
<div id="collmsg" style="bottom:318px;position:fixed;right:250px;width:250px;height:40px;background-color:black;z-index:20;overflow:hidden;">
<div style="display:inline-block;background-color:green; height:5px; width:5px border-radius:90px 99px 99px 99px;">
<p align="left" style="font-family:Letter Gothic Std; color:white; font-size:15px;" id="displayname"></p>
</div></div></a>
<div id="msgsubmitform">
<form name = "form1">
<textarea placeholder="Enter Your Message Here"id="text" name= "msg" value=""style="position:fixed; width:200px; z-index:50; bottom:0px; right:300px; height:40px;"></textarea>
<div class="send" height="5px" width="50px">
<a id="send" value="Send" href="#" align="center" style="position:fixed; width:50px; z-index:50; bottom:0px; right:250px; height:0px" onclick="submitchat()"><b>Send</b></a>
</form>
</div></div>
<div id="msgloader">
</div></div>
<div class="logotext">
<font face="comic sans ms"><p style="color:white; font-size:36px; z-index:113; position:fixed; left:0px; top:-35px; text-align:center;">ChatBot</p></font>
</div>
<div class="upperbox">
<div id="info">
</div><br>
<div id="imageload" style="display:none; height:50px; width:50px">
<img height="0px" width="0px" src="/files/loader.gif"/>
</div>
<div align="left" id="ustatus">
<img height="250px" width="250px" style="position:fixed; right:10px; bottom:250px;" align="center"src="/files/loader.gif">
</img>
</div>
<div class="collapse" style="position:fixed; right:0px; width:220px; height:40px; width:220px; z-index:15; top:60px;">
<a id="collapse" value="Send" href="#" align="center" onclick="coll()"><b id="data">Hide Chat 
</b>
</a></div>
</body>
</html>
