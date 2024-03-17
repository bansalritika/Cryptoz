<?php 
include "aheader.php";
?>
<div class="col-md-9 pt-5 panel" >
<h1 class="two">ADD BLOG</h1>
<form action="#" method="post" enctype="multipart/form-data" class="gnd">
<label class="soto">TITLE</label>
<input type="text" class="form-control" placeholder="Enter Title" name="title" required /><br><br>
<label class="soto">Picture</label>
<input type="file" class="form-control" name="picture" required /><br><br>
<label class="soto">Description</label>
<textarea placeholder="Description..." class="form-control" name="description" required ></textarea><br><br><br>
<button type="submit" class="btn" id="submitse" name="btnsubmit">Submit</button><br><br>
</form>
</div>

<?php
if(isset($_POST['btnsubmit']))
{
	$title=mysqli_real_escape_string($con,$_POST['title']);
    $picture=$_FILES['picture']['name'];
	$tpicture=$_FILES['picture']['tmp_name'];
	move_uploaded_file($tpicture,'uploads/'.$picture);
	$description=mysqli_real_escape_string($con,$_POST['description']);
	
	$q="insert into tbblog(title,picture,description,poston) values('$title','$picture','$description',now())";
	if(mysqli_query($con,$q))
	{
		echo"<script>alert('Blog Added')</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
}
?>
<?php
include "afooter.php";
?>