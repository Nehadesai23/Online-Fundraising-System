<?php
include_once('header1.php');
include_once('db.php');
?>
<div class="container-fluid">
	<div class="row">
	<div class="col-md-2 section">
	<br><br>
	<?php 
	include_once('side.php');
	?>
	</div>
	<div class="col-md-9">
	<?php
	$qry="select * from needy_people where id='".$_GET['id']."'";
	$res=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($res);
	?>
	<h1>Donating to <?php echo $row['needy_people_name'];?></h1><br>
	<form action="" method="post">
		<div class="form-group">
		<label>Amount</label>
		<input type="text" name="amount" required class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Donate" class="btn btn-success">
		</div>
	</form>

	<?php
	if(isset($_POST['submit']))
	{	
		
		$qry="insert into donate_to_ppl values('".$row['id']."','".$row['needy_people_name']."','".$row['needy_people_mobile']."','".$row['needy_people_address']."','".$_POST['amount']."')";
		$res=mysqli_query($conn, $qry);
		if($res)
		{
		?>
		<script>
			alert('Donated Successfully');
		</script>
		<?php
		}
		else{
			echo "failed";
		}
		
	
		$qry="insert into transactions(mobile, action, to_name, amount) values('".$row['needy_people_mobile']."', 'GivenToNeedy', '".$row['needy_people_name']."', '".$_POST['amount']."')";
		$res=mysqli_query($conn, $qry);
		
		
		$qry="select total_amount from total";
		$res=mysqli_query($conn, $qry);
		$row=mysqli_fetch_assoc($res);
	
		
		$rem_amount=$row['total_amount'] - $_POST['amount'];
		
		
		$qry="update total set total_amount = '".$rem_amount."'";
		$res=mysqli_query($conn, $qry);	
	}
	?>
		
	</div>
	
	</div>
</div>
<?php
include_once('footer.php');
?>