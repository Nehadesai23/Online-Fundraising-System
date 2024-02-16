<?php 
include_once('header2.php');
include_once('db.php');
session_start();
?>
<head>
	<style>
		form{
			
			padding:20px;
			background-color:#efefef;
			color:white;
			text-align:center;
		
		}
		form h2{
			color:white;
			text-align:center;
		}
		form input{
			border-radius:0px !important;
		}
		.box-92819{
			margin-top:130px;
			z-index: 2;
			position: absolute;
			top: 35%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			min-width: 300px; 
		}
		section{
		min-height:600px;
		background-image:linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url('images/img12.jpg');
		background-repeat:no repeat;
		background-position:center;
		background-size:cover;
	}
	</style>
</head>
<section>

    <div class="owl-carousel-wrapper">
      <div class="box-92819">
    
			<form action="" method="post">
				<h2 style="background-color:red; padding:7px;"><font color="black">Login Form</font></h2><br>
				<div class="form-group">
				
				<input type="text" name="user" placeholder="Username" required class="form-control">
				</div>
				
				<div class="form-group">
			
				<input type="password" name="pass" placeholder="Password" required  class="form-control">
				</div>
				<div class="form-group">
				<center><input type="submit" name="submit" class="btn btn-primary btn-block btn-lg" value="Login"></center>
				</div>
			</form>
			
      </div>
	<?php
			if(isset($_POST['submit']))
			{
			
			$qry="select * from reg_charity_org where username='".$_POST['user']."'  && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{
				$row=mysqli_fetch_assoc($res);
				$_SESSION['name']=array('id'=>$row['id'], 'name'=>$row['charity_org_name']);

?>
				 <script> location.replace("http://localhost/charity/charity_index.php"); </script>

			
				<?php
				header('location:charity_index.php');
			}
		
			$qry="select * from reporter where username='".$_POST['user']."'  && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{
				$row=mysqli_fetch_assoc($res);
				$_SESSION['name']=array('id'=>$row['id'], 'name'=>$row['reporter_name']);
				?>
				 <script> location.replace("http://localhost/charity/reporters_index.php"); </script>

			
				<?php
				header('location:reporters_index.php');
			}
		
			$qry="select * from donors where username='".$_POST['user']."'  && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{
				$row=mysqli_fetch_assoc($res);
				$_SESSION['name']=array('id'=>$row['id'], 'name'=>$row['donor_name']);
				?>
				 <script> location.replace("http://localhost/charity/donors_index.php"); </script>

			
				<?php
				header('location:donors_index.php', true,  301); 
			}
			
			$qry="select * from admin where username='".$_POST['user']."'  && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{	
				$row=mysqli_fetch_assoc($res);
				$_SESSION['name']=array('id'=>$row['id'], 'name'=>$row['username']);
?>
				 <script> location.replace("http://localhost/charity/admin.php"); </script>

			
				<?php
				header('location:admin.php');
			}
			
			$qry="select * from approved where username='".$_POST['user']."'  && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{	
				$row=mysqli_fetch_assoc($res);
				$_SESSION['name']=array('id'=>$row['id'], 'name'=>$row['reporter_name']);
?>
				 <script> location.replace("http://localhost/charity/reporters_index.php"); </script>

			
				<?php
				header('location:reporters_index.php');
			}
			
			$qry="select * from notapproved where username='".$_POST['user']."'  && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{	
				$row=mysqli_fetch_assoc($res);
				$_SESSION['name']=array('id'=>$row['id'], 'name'=>$row['reporter_name']);

?>
				 <script> location.replace("http://localhost/charity/reporters_index.php"); </script>

			
				<?php
				header('location:reporters_index.php');
			}
			
			if($total==0)
			{
				?>
				<script>
					alert('login failed');
				</script>
				<?php 
			}
			}
	?>
	
      <div class="owl-carousel owl-1 ">
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_1.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/img_3.jpg');"></div>
        <div class="ftco-cover-1 overlay" style="background-image: url('images/hero_2.jpg');"></div>
        
      </div>
    </div>
</section>
<?php 
include_once('footer.php');
?>
