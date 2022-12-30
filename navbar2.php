
<style type="text/css">
	
	/* Logo Card */
	.logocard
	{
		width: 200px;
		margin-left: 0px;
		padding-top: 10px;
	}
	.sd1
	{
		width: 250px;
		height: 80px;
		margin-top:-20px;
		padding-top: 2px;
		position: relative;
		display: block;
		background-color: #A71930;
		//border-left: 1px solid #eee;
		//box-shadow: 5px 0px 0px #111;
		box-shadow: -5px 0px 10px 0 rgba(0, 0, 0, 1), 0 0px 0px 0 rgba(0, 0, 0, 1);
		z-index: 999999;
	}

	.sd1:before
	{
		position: absolute;
		content: '';
		display: block;
		height: 100%;
		width: 100%;
		top: 30px;
		left: 0;
		//border-left: 1px solid #eee;
		background-color: #A71930;		
		transform: skewY(10deg);
		z-index: -1;
		box-shadow: -5px 5px 0px 0 rgba(0, 0, 0, 1), 0 0px 0px 0 rgba(0, 0, 0, 1);
		//box-shadow: 5px 5px 0px #111;

	}
	.logocard-title
	{
		color: #fff;
		font-size: 20px;
		font-weight: 300;
		letter-spacing: 1px;
		text-align: right;
	}
	.logocard-subtitle
	{
		color: #fff;
		font-size: 13px;
		font-weight: 100;
		text-align: right;
		letter-spacing: 1px;
	}
	/*Logo Card */

 
</style>



<!-- Logo Card -->
<!--
	<div class="container-fluid">
		<div class="row">
			<div class="logocard">
				<div class="sd1">
					<br>
					<div class="col-md-12">					
						<img src="images/logos/mgmlogo.png" class="img-responsive pull-left " style="width: 20%;">
					
						
						<center><span class="logocard-subtitle" style="font-size: 18px;">MGM<br>Medical College<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aurangabad</span></center>
					</div>											
					
					
				</div>
			</div>										
		</div>
	</div>
-->
<!-- End Logo Card -->
<!--Header Start-->

	<!--End Header -->
	<!-- Navbar -->
	
<?php include("navbar-links.php"); ?>