<div class="row">
<div class="col-md-10 offset-1">
<div class="row vast">
<div class="col-md-3">
<img class="play" src="cryptozlogo.svg" /><br><br>
<p class="grey">GymVast, 18 East 50th Street,<br>4th Floor, New York, NY 10022</p><br>
<a href="https://www.facebook.com"><i class="fa fa-facebook ai rounded-circle"></i></a>&nbsp;
<a href="https://www.twitter.com"><i class=" fa fa-twitter ai rounded-circle"></i></a>&nbsp;
<a href="https://www.google.com"><i class="fa fa-google-plus ai rounded-circle"></i></a>&nbsp;
<a href="https://www.youtube.com"><i class="fa fa-youtube ai rounded-circle"></i></a>
</div>
<div class="col-md-3"> 
<p class="gories">Categories</p>
<p class="event"><a href="faq.php" class="nav-link ">FAQ</a></p>
<p class="event"><a href="about.php" class="nav-link ">About Us</a></p>
<p class="event"><a href="#" class="nav-link ">Partners</a></p>
<p class="event"><a href="#" class="nav-link ">Career</a></p>
<p class="event"><a href="#" class="nav-link ">Payments</a></p>
<p class="event"><a href="#" class="nav-link ">Calculator</a></p>
</div>
<div class="col-md-3">
<p class="gories">Useful Links</p>
<p class="event"><a href="#" class="nav-link ">Payment & Tax</a></p>
<p class="event"><a href="terms.php" class="nav-link ">Terms of Service</a></p>
<p class="event"><a href="#" class="nav-link ">My Account</a></p>
<p class="event"><a href="privacy.php" class="nav-link ">Privacy Policy</a></p>
<p class="event"><a href="#" class="nav-link ">Discount</a></p>
</div>
<div class="col-md-3">
<p class="gories">Newsletter</p>
<p class="grey">Get now free 20% discount for all products on your first order</p>
<div class="input-group mb-3 ">


<form id="emailform" action="#" method="post">
<span class="input-group-text envel"><i class="fa fa-envelope "> </i></span>
<input type="email" class="form-control iope"placeholder="Email Address.." name="email" required />
<button type="submit" class="btn" id="btn" name="btnsubmit" ><i class="fa fa-arrow-right rounded-circle" > </i></button>
</form>
<?php
if(isset($_POST['btnsubmit']))
{
	$email=mysqli_real_escape_string($con,$_POST['email']);
	
	$q="insert into tbemail(email,currdate) values('$email',now())";
	if(mysqli_query($con,$q))
	{
		echo"<script>alert('Message SEND')</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>




</div><br>
<p class="event"><a href="#" class="nav-link ">T : +1-202-555-0184</a></p>
<p class="event"><a href="#" class="nav-link ">E : hello@cryptoz.com</a></p>
</div>
</div> 
</div>
</div>

<hr>
 <br><br>
 <div class="row">
<div class="col-md-10 offset-1">
<div class="row">
<div class="col-md-4">
<p class="theme">© 2022 Cryptoz a WordPress Theme by Ritika and Aashiya</p>
</div>
<div class="col-md-4 "><p class="event" ><a href="privacy.php" class="nav-link ">Privacy Policy</a></p> <p class="event"><a href="terms.php" class="nav-link ">Terms & Conditions</a></p></div>
<div class="col-md-4">
<img class="pay" src="payment_1.webp"/></div>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>


	
	
</body>
</html> 