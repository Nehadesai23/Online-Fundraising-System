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
		<?php
		$qry="select * from reporter where action=''";
		$res=mysqli_query($conn, $qry);
		$total=mysqli_num_rows($res);
		if($total>0)
		{
		echo "<br>";
		echo"<h2 class='text-center'>Newly Registered Reporters</h2>"; 
		echo "<div class='table-responsive'>";
		echo "<table class='table table-bordered'>";
		echo "<tr><th>Image</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th colspan='2' class='text-center'>Action</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>
				<td><img src='$row[reporter_image]' width='100' height='100'></td>
				<td><font color='black'>".$row['reporter_name']."</font></td>
				<td><font color='black'>".$row['reporter_mobile']."</font></td>
				<td><font color='black'>".$row['reporter_email']."</font></td>
				<td><font color='black'>".$row['reporter_address']."</font></td>
				<td><a href='approve.php?id=$row[id]'><input type='button' name='approve' class='btn btn-success btn-sm' name='approve' value='Approve'></a></td>
				<td><a href='notapprove.php?id=$row[id]'><input type='button' name='notapprove' class='btn btn-danger btn-sm' name='notapprove' value='Not Approve'></a></td>
				</tr>";
		}
		echo "</table>";
		echo "</div>";
		}
		else
		{
			
		}
		?>
		</div>
		
		<div class="row">
	
		<?php
		$qry="select * from approved";
		$res=mysqli_query($conn, $qry);
		$total=mysqli_num_rows($res);
		if($total>0)
		{
		echo "<br>";
		echo"<h2 class='text-center'>Approved Reporters</h2>"; 
		echo "<div class='table-responsive'>";
		echo "<table class='table table-bordered'>";
		echo "<tr><th>Image</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th class='text-center'>Action</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>
				<td><img src='$row[reporter_image]' width='100' height='100'></td>
				<td><font color='black'>".$row['reporter_name']."</font></td>
				<td><font color='black'>".$row['reporter_mobile']."</font></td>
				<td><font color='black'>".$row['reporter_email']."</font></td>
				<td><font color='black'>".$row['reporter_address']."</font></td>
				<td><a href='ntaprv.php?id=$row[id]'><input type='button' name='notapprove' class='btn btn-danger btn-sm' name='notapprove' value='Not Approve'></a></td>
				</tr>";
		}
		echo "</table>";
		echo "</div>";
		}
		else{
		}
		?>
		</div>
		
		
		
		<div class="row">
		
		<?php
		$qry="select * from notapproved";
		$res=mysqli_query($conn, $qry);
		$total=mysqli_num_rows($res);
		if($total>0)
		{
		echo "<br>";
		echo"<h2 class='text-center'>Notapproved Reporters</h2>"; 
		echo "<div class='table-responsive'>";
		echo "<table class='table table-bordered'>";
		echo "<tr><th>Image</th><th>Name</th><th>Mobile</th><th>Email</th><th>Address</th><th class='text-center'>Action</th></tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>
				<td><img src='$row[reporter_image]' width='100' height='100'></td>
				<td><font color='black'>".$row['reporter_name']."</font></td>
				<td><font color='black'>".$row['reporter_mobile']."</font></td>
				<td><font color='black'>".$row['reporter_email']."</font></td>
				<td><font color='black'>".$row['reporter_address']."</font></td>
				<td><a href='aprv.php?id=$row[id]'><input type='button' name='approve' class='btn btn-success btn-sm' name='approve' value='Approve'></a></td>
				</tr>";
		}
		echo "</table>";
		echo "</div>";
		}
		else{
		}
		?>
		</div>
</div>
</div>
</div>
	
