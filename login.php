<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

    

<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
 
<div class="pen-title">
  <h1>admin login</h1><
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <?php
session_start(); 

include("connection.php");

if(isset($_POST['sub']))
{
$u=$_POST['username'];
$p=$_POST['password'];
$_SESSION['username']=$_POST['username'];
$_SESSION['password']=$_POST['password'];
$q="select * from adminlogin where username='$u' and password='$p'";
$r=mysqli_query($con,$q);
if(mysqli_num_rows($r)>0)
{
header('location:admin/dashboard.php');
}
else
{
echo"<script>alert('invalid username & password');</script>";
}
}
?>
  <div class="form">
    <h2>Login to your account</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
      <input type="text" placeholder="Username" name="username"/>
      <input type="password" placeholder="Password" name="password"/>
      <button type="submit" name="sub">Login</button>
    </form>
  </div>
  
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
