<?php
include "connection.php";
?>
<html>
<head>
<title>Cryptoz-Cryptocurrency Landing Page Elementor Wordpress Theme</title>
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="css/bootstrap-grid.min.css" type="text/css" rel="stylesheet"/>
<link href="cryptos.css" type="text/css" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});</script>
<link href="ihover/src/ihover.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="back">
<script>
  AOS.init();
</script>
<div class="container-fluid">
<div class="row fixed-top" id="nav">
<div class="col-md-4">
<img src="cryptozlogo.svg" height="50px" width="100%"/>
</div>
<div class="col-md-8">
<ul class="nav">
 <li><a class="nav-link" href="home.php">HOME</a></li>  
 <li><a class="nav-link" href="about.php">ABOUT</a></li>  
 <li><a class="nav-link" href="services.php">SERVICES</a></li>  
 <li><a class="nav-link" href="faq.php">FAQ</a></li> 
 <li><a class="nav-link" href="blog.php">BLOG</a></li> 
 <li><a class="nav-link" href="contact.php">CONTACT</a></li>
 <li><a type="button" data-bs-toggle="modal" data-bs-target="#mycollapse" class="btn"><b>SIGN IN</b></a></li>
 <button type="button" data-bs-toggle="modal" data-bs-target="#myModal" class="btn btn-primary">SIGN UP</button>
 </ul>
 </div>
 </div> 


<div class="modal" id="mycollapse">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1><i class="fa fa-user">&nbsp;User Login</i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
<div class="row" >
<div class="col-md-12"id="form">
<form class="form">
<label>Username or Email</label>
<input type="text" class="form-control" placeholder="Username or Email" required /><br><br>

<label>Password</label>
<input type="password" class="form-control" placeholder="password" required /><br><br>
<button type="submit" class="btn" id="register">Log in</button>
<br>
<a href="#">Lost your Password</a>&nbsp;
</form>
</div>
</div>
</div>
<div class="modal-footer">
This site is protected by reCAPTCHA and the Google
Privacy Policy and Terms of Service apply.
      </div>

    </div>
  </div>
</div>




<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1><i class="fa fa-user">&nbsp;User Registration</i></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
<div class="row" >
<div class="col-md-12"id="form">

<form class="form" id="loginform" action="#" method="post">


<label>First Name</label>
<input type="text" class="form-control" placeholder="Sumedh" name="firstname" required /><br><br>

<label>Last Name</label>
<input type="text" class="form-control" placeholder="Bansal" name="lastname" required /><br><br>

<label>Email</label>
<input type="email" class="form-control" placeholder="example@email.com" name="email" required /><br><br>

<label>Password</label>
<input type="password" class="form-control" placeholder="Enter Password" name="password" required /><br><br>

<button type="submit" class="btn" id="register" name="btnsubmit">Register</button><br><br>
  <a href="#">Lost your Password</a>&nbsp;
<a href="#">Login</a>


</form>
</div>
</div>
</div>
      <div class="modal-footer">
This site is protected by reCAPTCHA and the Google
Privacy Policy and Terms of Service apply.
      </div>

    </div>
  </div>
</div>
<?php
if(isset($_POST['btnsubmit']))
{
	$firstname=mysqli_real_escape_string($con,$_POST['firstname']);
	$lastname=mysqli_real_escape_string($con,$_POST['lastname']);
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	
	$q="insert into tbform(firstname,lastname,email,password,currdate) values('$firstname','$lastname','$email','$password',now())";
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