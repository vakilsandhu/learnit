<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="" method="post">
user</br><input type="text" name="username"/>
</br></br>
Password</br><input type="password" name="password"/>
</br></br>
<input type="submit" naame="submit" value="submit"/>
</form>
</body>
</html>
<?php
$con=new mysqli("localhost","root","","db_homeworks")or die("error:".$con->connect_error);
if($_SERVER['REQUEST_METHOD']=="POST"){
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT usernaame,password FROM  login WHERE username='$username' AND password='$passsword' ";
if($con->query($sql)===TRUE){
echo "you are logged in";
}
else{
echo "your enter invalid username and passsword";

}}
?>