<?php
include_once('reporters_header.php');
include_once('db.php');
?>
<head>
<style>
	form{
		border:1px solid black;
		padding:10px;
	}
	section{
		margin-top:50px;
	}
</style>
</head>
<div class="container">
<?php
$qry="select * from approved where id = '".$_GET['id']."'";
$res=mysqli_query($conn, $qry);
$row=mysqli_fetch_assoc($res);
?>
<section>
	<div class="">
	<br><br>
		<form action="" method="post" enctype="multipart/form-data">
		<h1 class="text-center">Fill Details of Needy People</h1><br>
			<div class="form-group">
				<label>Name</label>
			</div>
			<div class="form-group">
				<input type="text" name="name" required class="form-control">
			</div>
			<div class="form-group">
				<label>Mobile</label>
			</div>
			<div class="form-group">
				<input type="text" name="mobile" pattern="[789][0-9]{9}" class="form-control">
			</div>
			<div class="form-group">
				<label>Address</label>
			</div>
			<div class="form-group">
				<textarea  name="address" class="form-control"></textarea>
			</div>
			<div class="form-group">
				<label>Image</label>
			</div>
			<div class="form-group">
				<input type="file" name="image" class="form-control">
			</div>
			<div class="form-group">
				<label>Income Certificate</label>
			</div>
			<div class="form-group">
				<input type="file" name="file" class="form-control">
			</div>
			<div class="form-group">
				<center><input type="submit" name="submit" class="btn btn-success btn-lg"></center>
			</div>
		</form>
		
		<?php
		if(isset($_POST['submit']))
		{
			
			$files=$_FILES['image'];
			
			$filename=$files['name'];
			$fileerror=$files['error'];
			$filetmp=$files['tmp_name'];
			
			$fileext=explode(".", $filename);
			$filecheck = strtolower(end($fileext));
			
			$fileextstored=array('png','jpg','jpeg');
			if(in_array($filecheck,$fileextstored))
			{
				$imagedestination='img/'.$filename;
				move_uploaded_file($filetmp, $imagedestination);
			}
			$files=$_FILES['file'];
			
			$filename=$files['name'];
			$filetmp=$files['tmp_name'];
			$icestination='ic/'.$filename;
			move_uploaded_file($filetmp, $icestination);
			
			$qry="insert into needy_people(reporter_id,needy_people_name,needy_people_mobile,  needy_people_address,needy_people_image, needy_people_income_certf) values('".$_GET['id']."','".$_POST['name']."','".$_POST['mobile']."','".$_POST['address']."','".$imagedestination."','".$icestination."')";
			$res=mysqli_query($conn,$qry);
			if($res)
			{
				?>
					<script>
					alert("Repoted Successfully");
					</script>
				<?php
			}	
		}
		?>
	</div>
</section>
</div>
