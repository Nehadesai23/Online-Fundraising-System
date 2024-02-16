<?php
include_once('header1.php');
include_once('db.php');
?>
<head>
<style>
.section{
	background-color:gray;
	min-height:1000px;
}
.section ul li{
	color:white;
}
ul li ul li{
	margin-left:25px;
	line-height:30px;
}
ul li ul li a{
	color:orange
}
</style>	
</head>
<div class="container-fluid">
<div class="row">
<div class="col-md-2 section">
<br><br>
<?php 
include_once('side.php');
?>
</div>
<div class="col-md-9">
	<div class="row">	
	<div class="container">
	<h2 class="text-center">Registered Donors</h2>
		<?php
		$qry="select * from donors";
		$res=mysqli_query($conn,$qry);
		echo "<table class='table table-bordered'>";
		echo "<tr class='table-danger'><th>Donor Image</th><th>Donor Name</th><th>Donor Mobile</th><th>Donor Email</th><th>Donor Address</th><th>Username</th><th>Password</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			?>
			<tr>
				<td><font color="black"><img src="<?php echo $row['donor_image'];?>" width="100" height="100"></font></td>
				<td><font color="black"><?php echo $row['donor_name'];?></font></td>
				<td><font color="black"><?php echo $row['donor_mobile'];?></font></td>
				<td><font color="black"><?php echo $row['donor_email'];?></font></td>
				<td><font color="black"><?php echo $row['donor_address'];?></font></td>
				<td><font color="black"><?php echo $row['username'];?></font></td>
				<td><font color="black"><?php echo $row['password'];?></font></td>
			</tr>
			<?php
		}
		echo "</table>";
		?>
	</div>
	
	</div>
</div>
</div>
</div>
	
