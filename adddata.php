<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container-fluid">
<?php include("menus.php") ?>
<Div class="col-md-10">
 <div class="panel panel-primary">
<form>
<table class="table table-bordered">

<tr><td colspan="2" class="panel-heading"></td></tr>
<tr><td>Home</td></tr>
<tr><td>

<label>Add category</label></td><td><select class="form-control" name="labe"><option>Select</option>
<option>Plumber</option>
<option>Mason</option>
<option>Electricion</option>
<option>Gardner</option>
<option>Driver</option>
</select></td>
</tr>

<tr>
<td>
<label>Add data</label></td><td><input type="text" class="form-control" / name="labe1">
</td>
</tr>
<tr>
<td>
<label>Show data</label></td><td><input type="text" class="form-control" / name="showdata"></td>
</tr>
<tr>
<td>
<label>Change password</label></td><td><input type="password" class="form-control" / name="changepassword"></td>
</tr>
<tr>
<td>Show feedback</td><td><textarea class="form-control" / name="showfeedback"></textarea></td>
</tr>
<tr>

<td>
<label>Add notification</label></td><td><input type="textarea" class="form-control"  / name="feedback"></td>
<tr>
<td colspan="2">
<input type="button" value="submit" class="btn btn-info" / name="btn">
</td>
</tr>
</table>
</div>
</body>
</html>
