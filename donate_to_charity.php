<?php
include_once('donors_header.php');
include_once('db.php');
error_reporting(0);
?>
<head>
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
</head>
<section>
    <div class="container">
	<?php
	$qry="select * from reg_charity_org where id ='".$_GET['id']."'";
	$res=mysqli_query($conn,$qry);
	$row=mysqli_fetch_assoc($res);
	?>
	<div class="row">
	
	</div>
	<div class="row">
        <div class="row align-items-stretch" style="margin-top:20px;">
          <div class="col-md-5 m-auto">
            <div class="bg-white h-100 p-4 shadow">
              <form action=" " method="post" class="form">
			  <h3 class="text-center"><font color="white">Donating to <?php echo $row['charity_org_name'];?></font></h3><br>
			  <div class="form-group">
			  </div>
					
					
					<div class="form-group">
                    <input type="text" name="name" value="<?php echo $_SESSION['name']['name'];?>" readonly class="form-control">
					</div>
					
					<div class="form-group">
					  <input type="mobile" name="mobile" pattern="[789][0-9]{9}" required placeholder="Mobile" class="form-control">
					</div>
					
               
				<div class="form-group">
                  <input type="email" name="email" placeholder="Email" required class="form-control">
                </div>
				
				<div class="form-group">
				  <select name="charity" class="form-control" placeholder="Select Charity" readonly  >
				  <option><?php echo $row['charity_org_name'];?></option>
				  <?php
				  $qry="select * from reg_charity_org";
				  $res=mysqli_query($conn, $qry);
				  while($row=mysqli_fetch_assoc($res))
				  {
				  ?>
						<option><?php echo $row['charity_org_name'];?></option>
				  <?php
				  }
				  ?>
				  </select>
				</div>
				<div class="form-group">
                  <input type="text" name="amount" placeholder="Amount" required class="form-control">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Donate" class="btn btn-success">
                </div>
              </form>
	
			  <?php
				if(isset($_POST['submit']))
				{
					$_SESSION['donor_amount']=$_POST['amount'];	
					$_SESSION['charity']=$_POST['charity'];
					$qry="insert into donator(donator_name, donator_mobile, donator_email, charity_name, amount) values('".$_POST['name']."', '".$_POST['mobile']."', '".$_POST['email']."', '".$_POST['charity']."', '".$_POST['amount']."')";
					$res=mysqli_query($conn, $qry);

					$qry="select total_amount from total";
					$res=mysqli_query($conn, $qry);
					$row=mysqli_fetch_assoc($res);
					
					$amnt=$row['total_amount']+$_POST['amount'];
					
					$qry="update total set total_amount='".$amnt."'";
					$res=mysqli_query($conn, $qry);
					
					$qry="insert into transactions(mobile, action, from_name, to_name, amount) values('".$_POST['mobile']."', 'Donated', '".$_POST['name']."','".$_POST['charity']."','".$_POST['amount']."')";
					$res=mysqli_query($conn, $qry);
					?>
					<div style="margin-top:20px; margin-left:523px;">
					<form action="donordompdf.php?donor_name=<?php echo $_SESSION['name']['name'];?>" method="post">
					<input type="submit" name="btn" value="Click Here to Download Receipt" class="btn btn-primary"></center>
					</form>
					</div>
					<?php	
				}
			  ?>
			  
            </div>
          </div>
        </div>
    </div>
	</div>
</section>
<br><br><br>

</div>
<?php
include_once('footer.php');
?>