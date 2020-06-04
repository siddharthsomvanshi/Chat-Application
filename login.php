<?php
if(!isset($_SESSION['username'])){
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$a=0;
require'connect.php';
 
mysql_query("UPDATE users SET status='1' WHERE username='$username'");
$result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
 if (mysql_num_rows($result)){
  $res = mysql_fetch_array($result);
  
  $_SESSION['username']=$res['username'];
  echo "<center>";
  echo "Login Successful Redirecting....<a href='index.php'>Or Click Here</a> to go back to main chat window";
  echo "</center>";
  }
  else{
  echo "<center>";
  echo "No user found. Please go <a href='index.php'>back</a> and enter the correct login.<br>";
  echo "You may register a new account by clicking <a href='register.php'>here</a>";
  echo "</center>";
}
$active = mysql_query("SELECT * FROM users WHERE username='$username'");
$activea = mysql_fetch_array($active);
$final = $activea['active']+1;
mysql_query("UPDATE users SET active='$final' WHERE username='$username'");
?>
<?php
 header('Location:/index.php');
 exit;
 }
 ?>