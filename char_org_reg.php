<?php
include_once('header2.php');
include_once('db.php');
?>
<head>
	<style>
	label{
		color:black;
		font-weight:bold;
	}
	form{
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
	form{
		position:relative;
		left:90%;
		background-color:rgba(0,0,0,0.5);
	}
	</style>
</head>
<section>
	<br><br>
	<div class="container">
		<div class="col-md-5 m-auto">
			<form action="" method="post" enctype="multipart/form-data">
			<h3 class="text-center"><font color="white">Charity Organization Registration Form</font></h3><br>
				<div class="form-group">
				
					<input type="text" name="name" class="form-control" required pattern="[a-z A-Z]+"  placeholder="Charity Organization Name">
				</div>
				<div class="form-group">
					
					<input type="text" name="mobile" pattern="[789][0-9]{9}" required  placeholder="Charity Organization Contact Number "class="form-control">
				</div>
				<div class="form-group">
					
					<input type="email" name="email" pattern="[a-zA-Z0-9]+.@[a-z]+.com" required placeholder="Charity Organization Email Id" class="form-control">
				</div>
				<div class="form-group">
					<textarea name="address" class="form-control" required placeholder="Charity Oraganization Address"></textarea>
				</div>
				<div class="form-group">
		
					<input type="text" name="user" class="form-control" required placeholder="Username">
				</div>
				<div class="form-group">
				
					<input type="password" name="pass" class="form-control" required  placeholder="Password">
				</div>

				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-success">
				</div>
			</form>
		</div>
		
	</div>
	<?php
	if(isset($_POST['submit']))
	{
		
		$qry="insert into reg_charity_org(charity_org_name, charity_org_mobile, charity_org_email, charity_org_address, username, password) values('".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['address']."','".$_POST['user']."','".$_POST['pass']."')";
		 $res=mysqli_query($conn, $qry);
		 ?> <script>
		 alert($res);
		 </script> <?php
		if($res)
		{
			?>
			<script>
			alert("Registered successfully");
			</script>
			<?php
		}
		else{
			?>
			<script>
			alert("Registation Failed");
			</script>
			<?php
		}	
	}
	?>
</section>
<?php
include_once('footer.php');
?>