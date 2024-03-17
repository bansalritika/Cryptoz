<?php
include "header.php";
?><br><br><br><br><br><br><br>

<div class="col-md-8 offset-2">
<form class="form" id="buyform" action="#" method="post">
<h1 id="feat">Order Form</h1><br><br>
<div class="row">
<div class="col-md-4 offset-1">
<label>Name</label>
<input type="text" class="form-control" placeholder="Sumedh" name="name" required /><br><br>

<label>Email</label>
<input type="email" class="form-control" placeholder="example@email.com" name="email" required /><br><br></div>

<div class="col-md-6">
<label>Price(INR)</label>
<input type="text" class="form-control" placeholder="₹1234" name="price" required /><br><br>

<label>Amount(BTC)</label>
<input type="text" class="form-control" placeholder="0.000000" name="amount" required /><br><br></div>
</div>
<button type="submit" class="btn" id="submit" name="btnsubmits">Submit Your Order</button><br><br>
  
</form>
</div>
<?php
if(isset($_POST['btnsubmits']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$price=mysqli_real_escape_string($con,$_POST['price']);
    $amount=mysqli_real_escape_string($con,$_POST['amount']);
	
	$q="insert into tbbuy(name,email,price,amount,currdate) values('$name','$email','$price','$amount',now())";
	if(mysqli_query($con,$q))
	{
		echo"<script>alert('ORDER SUBMIT')</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>

<?php
include "footer.php";
?>