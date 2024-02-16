<?php 
include_once('header1.php');
?>
<head>
	<style>
	bg{
		min-height:600px;
		background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)),url('images/img12.jpg');
		background-repeat:no repeat;
		background-position:center;
		background-size:cover;
	}
	.section{
	background-color:gray;
	min-height:589px;
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
<section>
<div class="row align-items-stretch">
        <div class="col-md-2 section">
		<br>
		<ul>
		<li>View Registrars
			<ul>
			<li><a href="disp_charity_org.php">Charity Organizations</a></li>
			<li><a href="disp_reg_reporters.php">Reporters</a></li>
			<li><a href="disp_reg_donors.php">View Donors</a></li>
			</ul></li>
		<li>Fundraising Events
			<ul>
			<li><a href="disp_contributions.php">View Contributions</a></li>
			<li><a href="disp_donations.php">View Donations</a></li>
			<li><a href="disp_needy_ppl.php">View Needy People</a></li>
			<li><a href="donate_needy_ppl.php">Donate To Needy People</a></li>
			<li><a href="got_donation.php">People who Got Donations</a></li>
			<li><a href="transactions.php">Transactions</a></li>
			<li><a href="amount.php">Amount After Donating To Needy People</a></li>
			</ul></li>	
		</ul>
        </div>   
		<div class="col-md-9">
			<img src="images/img12.jpg" alt="Image" class="img-fluid shadow">
        </div>
</div>
</section>
			  
<?php
include_once('footer.php');
?>