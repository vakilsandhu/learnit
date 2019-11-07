<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include("connection.php");
if(isset($_POST['sub']))
{
$sql="select * from adminlogin where username='".$_POST['username']."' and password='".$_POST['password']."' ";
$query=mysqli_query($con,$sql);
if(mysqli_num_rows($query)>0)
{
session_start();
$_SESSION['un']=$_POST['username'];
header("location:adminpage.php");
}
else
{
echo mysqli_error($con)."ivalid";
}
}

?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
user<br />
<input type="text" name="username" /><br />
password<br />
<input type="password" name="password" />
<input type="submit" name="sub" value="login" />
</form>
</body>
</html>
