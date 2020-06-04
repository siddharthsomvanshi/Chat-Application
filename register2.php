<?php
require'connect.php';
$name=$_POST['name'];
$lname=$_POST['lname'];
$username=$_POST['user'];
$password1=$_POST['pass'];
$password2=$_POST['pass2'];
$room=$_POST['roomno'];
$email=$_POST['email'];
$about=$_POST['about'];
if($password1 != $password2) {
echo "<div color='red'>";
echo 'Password Do Not Match';
echo "</div>";
}elseif($name="" || $lname="" || $username=="" || $password1=="" || $password2=="" || $room=="" || $email=="" || $about==""){
echo 'Make Sure All Fields Are Filled';
}
elseif($check=mysql_query("SELECT username FROM users WHERE username='$username'")){;
if(mysql_num_rows($check)) {
echo "<div color='red'>";
echo 'Username Already Taken Choose Another Username To Continue';
echo "</div>";
}
else {
mysql_query("INSERT INTO users (username,name,lastname,password,roomno,email,about) VALUES ('$username','$name','$lname','$password1','$room','$email','$about')");
echo 'Registration Successful '.'<a href="index.php">'.'Click Here '.'</a>'.'To Login';
}
}
?>