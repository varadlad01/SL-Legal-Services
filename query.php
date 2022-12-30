

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>SL Legal Services</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	 <link rel = "icon" href =  "images/titlelogo.jpg" type = "image/x-icon">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="./icofont.min.css">
	<link rel="stylesheet" type="text/css" href="ani/css/animations.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">	


</head>
<style type="text/css">
	.row h1
	{
		color: #222222;
	}
	.row input
	{
		color: #222222;
		width: 80%;
		border:1px solid black;
		text-align: center;
	}
	.row label
	{
		color: #222222;
		font-size: 16px;
		text-align: center;
	}
	.row textarea
	{
		color: #222222;
		font-size: 16px;
		text-align: center;
		width: 80%;
		border:1px solid black;
	}
</style>

<?php include 'css/leftmenu-stylesheet.php';?>
<body>
	<?php include('navbar2.php'); ?>
	<form action="querybackend.php" method="POST" enctype="multipart/form-data" onsubmit="return checkform(this);">	
		<div class="container-fluid">
			<div class="row page-title">
				<div class="container">
					<center><span >Query</span><br>
						<div class="section-title-divider"></div>
					</center>	
				</div>			
			</div>
		</div>	
		<div class="container" class="form-control">
			<div class="row">
				<center><h1 >Query Sheet</h1></center>
				<div style=" width: 100%;height: 3px;background: #FFC000; margin-bottom: 30px;"></div> 
			</div>
			<div class="row">
				<div class="col-md-6">
				<center>
				
				<label>Name*</label>
				<input class="form-control" type="text" name="name" placeholder="Please Enter Your Full Name :" required><br>
				
				<label>Designation*</label>
				<input class="form-control" type="text" name="designation" placeholder="Please Enter Your Designation :" required><br>


				<label>Organization*</label>
				<input class="form-control"type="text"name="organization" placeholder="Please Enter Your Organization Name :"required><br>

				<label>Office Address*</label>
				<input class="form-control" type="text" name="officeaddress" placeholder="Please Enter Your Office Address :" required><br>

				<label>City*</label>
				<input class="form-control" type="text" name="city" placeholder="Please Enter Your City :" required><br>

				<label>State*</label>
				<input class="form-control" type="text" name="state" placeholder="Please Enter Your State :" required><br>
				</center>
				</div>
				<div class="col-md-6">
					<center>
				<label>Email Address*</label>
				<input class="form-control" type="email" name="emailid" placeholder="Please Enter Your Email :" required><br>

				<label>Mobile No*</label>
				<input class="form-control" type="text" name="mobileno" placeholder="Please Enter Your Mobile Number :" required><br>

				<label>Date Of Query*</label>
				<input class="form-control" type="date" name="querydate" required><br>
	
				<label>Subject Of Query*</label>
				<input class="form-control" type="text" name="subject"placeholder="Please Enter Subject/Topic Of Query :"required><br>

				<label>Query*</label>
				<textarea class="form-control" type="text" name="yourquery"placeholder="Please Enter Your Query :" rows="5"  required></textarea><br>

				
				</center>
				</div>
			</div>
			<div class="row">
				<center>
				<button type="submit"value="submit" name="submit" class="btn btn-default btn-lg"style="background:#FFC000;font-weight:bold; border:1px solid #111; ">Submit</button>
				<br><br><br>
				</center>
			</div>
		</div>
	</form>
		<div class="container-fluid footer">
			<div class="row">
				<?php include('footer.php'); ?>
			</div>
		</div>
</body>
</html>


