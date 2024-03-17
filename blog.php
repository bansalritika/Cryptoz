<?php
include "header.php";
?>
<br><br><br><br><br><br><br><br><br><br>
 <div data-aos="fade-up"><h1 id="feat">Blog Standard</h1></div>
<div data-aos="fade-up"> <p class="shiya"><a href="home.php" >Home</a> / Blog</p></div>
<div class="col-md-10 offset-1">
<div class="row ">

<div class="col-md-3 ">
<div data-aos="fade-up">
<div class="row">
<div class=" strax">
<h1 class="mini">Recent Posts</h1><br>
<ul class="elit">
 <li class="amet">4 reasons Cryptoz is staying remote</li>  
 <li class="amet">Do more with your crypto: beyond the buy and sell buttons</li> 
 <li class="amet">Now get your paycheck deposited into Cryptoz</li> 
 <li class="amet">Cryptoz now supports security keys</li> 
<li class="amet">An overview of the use of cryptocurrencies</li> <br>
 </ul>
</div></div>
</div>
</div>

<?php
$q="select * from tbtlog";
$res=mysqli_query($con,$q);
echo "<div class='col-md-9'>";
while($row=mysqli_fetch_array($res))
{
?>




<div class="row">
<div data-aos="fade-up">
<div class="col-md-11 offset-1 ">
<img src="admin/uploads/<?php echo $row['picture'];?>" height="250"width="100%"/>
</div>
<div class="col-md-11 offset-1 sting">
<h3 class="zee"><?php echo $row['title']; ?> </h3>
<p> Post ON:<?php echo $row['poston']; ?> </p>
<p><?php echo $row['description']; ?> </p>
</div></div>
</div>

<?php }
echo "</div>";
 ?>
</div>
</div>






<br><br>
<div class="row p-5">
<div class="col-md-10 offset-1 ">
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