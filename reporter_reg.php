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
		<h3 class="text-center"><font color="white">Reporter Registration Form</font></h3><br>
			<div class="form-group">
				
				<input type="text" name="name" placeholder="Reporter Name" class="form-control">
			</div>
			<div class="form-group">
				
				<input type="text" name="mobile" pattern="[789][0-9]{9}" placeholder="Reporter Mobile" class="form-control">
			</div>
			<div class="form-group">
				
				<input type="email" name="email" placeholder="Reporter Email" class="form-control">
			</div>
			<div class="form-group">
				
				<textarea name="address" placeholder="Reporter Address" class="form-control" ></textarea>
			</div>
			<div class="form-group">
				
				<input type="text" name="user" placeholder="Username" class="form-control">
			</div>
			<div class="form-group">
				
				<input type="password" name="pass" placeholder="Password" class="form-control">
			</div>
			<div class="form-group">
			
				<input type="file" name="image" class="form-control"></textarea>
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
		$files=$_FILES['image'];
		
		$filename=$files['name'];
		$fileerror=$files['error'];
		$filetmp=$files['tmp_name'];
		
		$fileext=explode(".",$filename);
		$filecheck=strtolower(end($fileext));
		
		$fileextstored=array('png','jpg','jpeg');
		
			$filedestination = "img/author-1.jpg";
		
		$qry="insert into reporter(reporter_name, reporter_mobile, reporter_email, reporter_address,username, password, reporter_image) values('".$_POST['name']."','".$_POST['mobile']."','".$_POST['email']."','".$_POST['address']."','".$_POST['user']."','".$_POST['pass']."','".$filedestination."')";
		$res=mysqli_query($conn, $qry);
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
			alert("Registration Failed");
			</script>
			<?php
		}	
	}
	?>
</section>
<?php
include_once('footer.php');
?>