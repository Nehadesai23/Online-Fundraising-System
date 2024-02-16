<?php 
include_once('header.php');
include_once('db.php');
?>
<head>
	<style>
		form{
			border:1px solid black;
			padding:20px;
			background-color:#6f6f6f;
			color:white;
			text-align:center;
		}
		form h2{
			color:white;
			text-align:center;
		}
		.box-92819{
			z-index: 2;
			position: absolute;
			top: 35%;
			left: 50%;
			-webkit-transform: translate(-50%, -50%);
			-ms-transform: translate(-50%, -50%);
			transform: translate(-50%, -50%);
			min-width: 300px; 
		}
	</style>
</head>
    <div class="owl-carousel-wrapper">
      <div class="box-92819">
    
			<form action="" method="post">
				<h2>Admin Login</h2><br>
				<div class="form-group">
				
				<input type="text" name="user" placeholder="Username" required class="form-control">
				</div>
				<div class="form-group">
			
				<input type="password" name="pass" placeholder="Password" class="form-control">
				</div>
				<div class="form-group">
				<center><input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit"></center>
				</div>
			</form>
			
      </div>
	<?php
			if(isset($_POST['submit']))
			{
			
			$qry="select * from admin where username='".$_POST['user']."' && password='".$_POST['pass']."'";
			$res=mysqli_query($conn,$qry);
			$total=mysqli_num_rows($res);
			if($total==1)
			{
				header('location:admin.php');
			}
			else
			{
				?>
				<script>
				alert('Login Failed');
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
<?php 
include_once('footer.php');
?>