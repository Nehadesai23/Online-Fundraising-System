<?php 
include_once('charity_header.php');
include_once('db.php');
?>
<head>
	<style>
	<style>
	label{
		color:white;
		font-weight:bold;
	}
	.form{
		border:1px solid black;
		padding:20px;
	}
	section{
	min-height:700px;
	background-image:url(images/bann1.jpg);
	background-repeat:no repeat;
	background-position:center;
	background-size:cover;
	}
	.form{
		position:relative;
		left:90%;
		background-color:rgba(0,0,0,0.5);
	}
	</style>
	</style>
</head>
<section>
<?php
$qry="select * from reg_charity_org";
$res=mysqli_query($conn, $qry);

?>
	<div class="container">
		<h1>&nbsp;</h1>
	<div class="col-md-5 m-auto">
	<form action="" method="post" class="form">
	<h3 class="text-center text-success mt-5"><font color="white"><?php echo $_SESSION['name']['name']." ";?>Contributing to Charity Organization</font></h3><br><br>
		<div class="form-group">
			<input type="text" name="name" class="form-control" readonly value="<?php echo $_SESSION['name']['name'];?>">
		</div>
		<div class="form-group">
			<input type="text" name="mobile" required placeholder="Charity Mobile" class="form-control">
		</div>
		<div class="form-group">
			<input type="text" name="email" placeholder="Charity Email" required class="form-control">
		</div>
		<div class="form-group">
			<textarea  name="address" required placeholder="Charity Address" class="form-control"></textarea>
		</div>
		<div class="form-group">
			<input type="text" name="amount" placeholder="Amount" required class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" name="submit" value="Contribute" class="btn btn-success">
		</div>
	</form>
	</div>
	<?php
	if(isset($_POST['submit']))
	{
			$_SESSION['amount']=$_POST['amount'];	
		$qry="insert into contribute(charity_name, charity_mobile, charity_email, charity_address, contr_amount) values('".$_POST['name']."', '".$_POST['mobile']."', '".$_POST['email']."', '".$_POST['address']."','".$_POST['amount']."')";
		$res=mysqli_query($conn, $qry);
		
		$qry="select sum(contr_amount) as total from contribute";
		$res=mysqli_query($conn, $qry);
		$row=mysqli_fetch_assoc($res);
		
		$qry="update contribute set total_contr='".$row['total']."'";
		$res=mysqli_query($conn, $qry);	
		
		
		$qry="select total_amount from total";
		$res=mysqli_query($conn, $qry);
		$row=mysqli_fetch_assoc($res);
					
		$amnt=$row['total_amount']+$_POST['amount'];
					
		$qry="update total set total_amount='".$amnt."' where id=1";
		$res=mysqli_query($conn, $qry);
		
		$qry="insert into transactions(mobile, action, from_name, amount) values('".$_POST['mobile']."', 'Contributed', '".$_POST['name']."', '".$_POST['amount']."')";
		$res=mysqli_query($conn, $qry);	
		
		?>
		<div style="margin-top:430px; margin-left:520px;">
		<form action="dompdf.php?charity_name=<?php echo $_SESSION['name']['name'];?>" method="post">
		<input type="submit" name="btn" value="Click Here to Download Receipt" class="btn btn-primary"></center>
		</form>
		</div>
		<?php
	}
	?>
</section>
<?php
include_once('footer.php');
?>