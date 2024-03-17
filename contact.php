<?php
include "header.php";
?>



<br><br><br><br><br><br><br><br><br><br>
<div data-aos="fade-up"><p class="map">CONTACT US</p></div>
<div data-aos="fade-up"><h1 id="feat">Our Mumbai Office</h1></div><br><br><br><br>

<div data-aos="fade-up"><div class="col-md-10 offset-1">
<div class="row" id="feature">
<div class="col-md-4" >
<div class="col-md-12 time">
<p class="hunt"><i class="fa fa-map-marker siv rounded-circle" ></i></p>
<p class="ress"><a class="nav-link"href="#">Address</a></p>
<p class="no">Goregaon East, Mumbai - 400063, Near to Oberoi Mall(map)</p>
</div>
</div>
<div class="col-md-4">
<div class="col-md-12 time">
<p class="hunt"><i class="fa fa-phone phone rounded-circle"></i></p>
<p class="ress"><a class="nav-link"href="#">Phone</a></p>
<p class="no">76538-98342<br>76538-98341</p>
</div>
</div>
<div class="col-md-4">
<div class="col-md-12 time">
<p class="hunt"><i class="fa fa-envelope phone rounded-circle"></i></p>
<p class="ress"><a class="nav-link" href="#">Email</a></p>
<p class="no">info@cryptozz.com<br>info2@cryptozz.com</p>
</div>
</div>
</div></div>
</div>

<br><br><br>
<div data-aos="fade-up"><h1 id="feat">Inquiries</h1></div><br><br><br><br><br>
<div class="row">
<div class="col-md-10 offset-1">
<div class="row tui">

<div class="col-md-6" >
<div data-aos="fade-right">
<div class="row">
<div class="col-md-2" > <i class="fa fa-user rounded-circle " > </i>
</div>
<div class="col-md-10" >
<p class="eget">Client Inquiries</p>
<p class="block">"There is a desperate need for improvement everywhere, from response times and communication channels to empathy and communication skills," and customer support consultant currently working with the Web3 Foundation.</p>
<p class="nibh">Prakyath</p>
<p class="block">Blockchain Expert<br>76538-98341<br>info@cryptozz.com</p>
</div></div>
</div>
</div>

<div class="col-md-6" >
<div data-aos="fade-left">
<div class="row">
<div class="col-md-2" ><i class="fa fa-newspaper-o rounded-circle eget"></i>
</div>
<div class="col-md-10" >
<p class="eget">News Inquiries</p>
<p class="block">Blockchain analytics firm Chainalysis found that 37% of crypto scam revenue last year went to “rug pulls,” a type of scheme that involves developers listing a token on an exchange, pumping it up, and then vanishing with the funds.</p>
<p class="nibh">Ajay Gupta</p>
<p class="block">Blockchain Expert<br>76538-98342<br>info@cryptozz.com</p>
</div>
</div>
</div></div>
</div>
</div>
</div><br><br><br><br><br><br><br><br>





<div data-aos="fade-up"><h1 id="feat">Our Offices</h1></div><br><br><br><br>
<div data-aos="fade-up"><div class="col-md-10 offset-1">
<div class="row" id="feature">
<div class="col-md-4" >
<div class="col-md-12 time">
<p class="hunt"><i class="fa fa-map-marker siv rounded-circle" ></i></p>
<p class="ress"><a class="nav-link"href="#">Mumbai</a></p>
<p class="no">Goregaon East,Mumbai - 400063<br> Near to Oberoi Mall<br>Phone: 76538-98342<br>Email: info@cryptozz.com</p>
</div>
</div>
<div class="col-md-4" >
<div class="col-md-12 time">
<p class="hunt"><i class="fa fa-map-marker siv rounded-circle" ></i></p>
<p class="ress"><a class="nav-link"href="#">Karnataka</a></p>
<p class="no">4th Block, Rajajinagar,<br> Bengaluru, Karnataka 560010<br>Phone: 76490-45893<br>Email: support@cryptozz.com</p>
</div>
</div>
<div class="col-md-4" >
<div class="col-md-12 time">
<p class="hunt"><i class="fa fa-map-marker siv rounded-circle" ></i></p>
<p class="ress"><a class="nav-link"href="#">Haryana</a></p>
<p class="no">Info Technology Park, Sector 33,<br> Gurugram, Haryana 122001<br>Phone: 98325-94717<br>Email: cryto@cryptozz.com</p>
</div>
</div></div>
</div>
</div>






<div class="col-md-10 offset-1">
<div class="row" >
<div class="col-md-5 litu" >
<div data-aos="fade-up-right">
<p class="stock">CONTACT US</p>
<h1 id="on">Keep In Touch</h1>
<p class="ca ">Sync your data between your desktop and mobile app and keep track of your crypto assets no matter where you are.</p><br>
<p class="ritu"><i class="fa fa-envelope "></i>&nbsp;&nbsp;<a>contact@cryptozz.com</a></p>
<p class="ritu"><i class="fa fa-phone  "></i>&nbsp;&nbsp;<a>76538-98341</a></p>
</div></div>
<div class="col-md-7" >
<div data-aos="fade-up-left">
<form id="contactform" action="#" method="post">
<div class="input-icons">
<i class="fa fa-user icon" > </i><input type="text" placeholder="Full Name..." class="form-control" name="name" required />
<i class="fa fa-envelope icon"></i><input type="email" placeholder="Email Address..." class="form-control" name="email" required />
<i class="fa fa-globe icon"></i><input type="text" placeholder="Website..." class="form-control" name="website"required />
<i class="fa fa-sticky-note icon"></i><textarea placeholder="Message..." class="form-control"name="message" ></textarea>
<button type="submit" class="btn" name="btnsubmit" >Submit</button></div>
</form>
</div>
</div>
</div>
</div>
<?php
if(isset($_POST['btnsubmit']))
{
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$website=mysqli_real_escape_string($con,$_POST['website']);
	$message=mysqli_real_escape_string($con,$_POST['message']);
	
	$q="insert into tbcontact(name,email,website,message,currdate) values('$name','$email','$website','$message',now())";
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


<div class="row">
<div class="col-md-10 offset-1">
<div class="avail">
<div data-aos="fade-up"><p class="roid">Connect with us</p></div>
<div data-aos="fade-up"><p class="sync">Explore our social media channels to read about latest insights, our unique culture and our differentiated approach to serving clients and achieving enduring results.</p></div>
<div data-aos="fade-up"><p id="twit">
<a href="https://www.facebook.com"><i class=" fa fa-facebook kio rounded-circle"></i></a>
<a href="https://www.google.com"><i class="fa fa-google-plus kio rounded-circle"></i></a>
<a href="https://www.twitter.com"><i class=" fa fa-twitter kio rounded-circle"></i></a>
<a href="https://www.youtube.com"><i class="fa fa-youtube kio rounded-circle"></i></a>
<a href="https://www.linkedin.com"><i class="fa fa-linkedin kio rounded-circle"></i></a>
<a href="https://www.instagram.com"><i class="fa fa-instagram kio rounded-circle"></i></a>
</p></div>
</div>
</div>
</div>





<?php
include "footer.php";
?>