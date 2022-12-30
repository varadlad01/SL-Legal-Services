

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>RG DAILY STATUS</title>

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
	<form action="rgbackend.php" method="POST" enctype="multipart/form-data" onsubmit="return checkform(this);">	
		<div class="container-fluid">
			<div class="row page-title">
				<div class="container">
					<center><span>RG DAILY STATUS</span><br>
						<div class="section-title-divider"></div>
					</center>	
				</div>			
			</div>
		</div>	
		<div class="container" class="form-control">
			<div class="row">
				<center><h4>You can't just give up on someone because the situation's not ideal. Great relationships aren't great because they have no problems. They're great because both people care enough about the other person to find a way to make it work.</h4></center>
				<div style=" width: 100%;height: 3px;background: #FFC000; margin-bottom: 30px;"></div> 
			</div>
			<center>
			<div class="row" style="width: 80%;">
				
				
				
				<label>Date</label>
				<input class="form-control" type="date" name="statusdate" required><br>
				<hr>
				<label>GYM&nbsp;&nbsp;</label>
				<select name="gym">
					<option value="select" selected>Select&nbsp;&nbsp;</option>
				    <option value="yes">YES</option>
				    <option value="no">NO</option>
				</select>
				<hr>
				

				<label>Topic Name That Studied</label>
				<input class="form-control"type="text"name="study" placeholder="Please Enter Main Topic name:"required><br>

				<label>Breakfast</label>
				<input class="form-control"type="text"name="breakfast" placeholder="Please Enter Breakfast Item Name:"required><br>

				<label>Lunch</label>
				<input class="form-control"type="text"name="lunch" placeholder="Please Enter Lunch items:"required><br>

				<label>Dinner</label>
				<input class="form-control"type="text"name="dinner" placeholder="Please Enter Dinner items:"required><br>
				
				<label>Extra Notes</label>
				<input class="form-control"type="text"name="notes" placeholder="Add Extra Notes About Today(If Any):"><br>

				</center>
				
			</div>
			<div class="row">
				
				<center>
				<button type="submit"value="submit" name="submit" class="btn btn-default btn-lg"style="background:#FFC000;font-weight:bold; border:1px solid #111; ">Save This Data</button>
				<br><br><br>
				</center>
			</div>
			<div class="row">
					<center>
				<a href="rgdetails.php" name="details"class="btn btn-default btn-lg" style="background:skyblue;font-weight:bold; border:1px solid #111;" target="_blank">View Details</a>
				<br><br><br>
				</center>
			</div>
		</div>
	</form>
</body>
</html>


