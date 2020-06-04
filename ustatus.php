<?php
session_start();
require'connect.php';
 
$currentuser=$_SESSION['username'];
$result1 = mysql_query("SELECT * FROM users WHERE status='1' AND username!='$currentuser'");
while($collect = mysql_fetch_array($result1)){
$name = $collect['name']." ".$collect['lastname'];
$displayname = $collect['name'];
$username = $collect['username'];
$send="'".$username."'".","."'".$name."'";
$image= $collect['profilepic'];
$imageb= 'default.png';
$address=0;
if($image=="") {
$address=$imageb;
}
else {
$address=$image;
}
echo '<br>';
echo '<a href="#" onclick="create('.$send.');"><div align="left" class="circularimg" style="background-image:url(/files/'.$address.')"></div><div align="left" class="circulartext"> '.ucwords($displayname).'</div>'.'</a>';
echo '<br>';
}
?>
