<?php
include "../connection.php";
?>
<html>
<head>
<title>Admin</title>
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="../css/bootstrap-grid.min.css" type="text/css" rel="stylesheet"/>
<link href="../cryptos.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="backs">
<div class="container-fluid">
<div class="row p-5" >
<div class="col-md-5 offset-3 spey">
<h2 id="feat">Admin login</h2><br><br><br>
<?php
if(isset($_POST['login']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
if($username=='cryptoadmin' && $password=='1023')
{
	header('location:dashboard.php');
}
else
{
	echo "<p class='text-danger'>Invalid Username or Password!</p>";

}
}
?>
<form action="" method="post" >
<input type="text" class="form-control" placeholder="Username or Email" name="username" required /><br><br>
<input type="password" class="form-control" placeholder="password" name="password" required /><br><br>
<button type="submit" class="btn" id="register" name="login">Log in</button>
<br>
</form>
</div>
</div>
</div>
</body>
</html>