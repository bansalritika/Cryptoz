<?php 
include "aheader.php";
?>
<div class="col-md-9 panel">
<h3 class="two">Feedback</h3>
<table class="table first ">
<tr class="vol">
<th>Sr. No</th>
<th>Name</th>
<th>Email</th>
<th>Price</th>
<th>Amount</th>
<th>Date</th>
</tr>

<?php
$c=1;
$query="select * from tbbuy";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{
	echo "<tr class='grey'>
	<td >".$c."</td>
	<td>".$row['name']."</td>
	<td>".$row['email']."</td>
	<td>".$row['price']."</td>
	<td>".$row['amount']."</td>
	<td>".$row['currdate']."</td>
	</tr>";
	$c++;
}

?>
</table>
</div>


<?php
include "afooter.php";
?>