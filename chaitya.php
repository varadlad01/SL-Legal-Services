<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    
    <link rel = "icon" href =  "images/titlelogo.jpg" type = "image/x-icon"> 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<link rel="stylesheet" type="text/css" href="ani/css/animations.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>
<?php include 'css/leftmenu-stylesheet.php';?>
<style type="text/css">
#about .about-img 
{
  	background:url('images/picofficefinal.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  	padding: 0;
    max-width: 100%;
    height: 450px;
    border: 2px solid black; 
    border-radius: 20px;
}
@media(min-width:680px; )
{
	#about .about-img 
{
  	background:url('images/picofficefinal.jpg');
    background-repeat: no-repeat;
    background-size: cover;
  	padding: 0;
    max-width:8	0%;
    height: auto;
    border: 2px solid black; 
    border-radius: 20px;
}
}
.carousel-caption-about
{
	background: linear-gradient(to left, rgba(0,0,0,0.9),rgba(0,0,0, 0.6));
	box-shadow: 5px 5px 5px #111;
	border-radius: 10px;
	padding:0px 0px 0px 10px;
	margin: 0;
	top: 25%;
	margin-top:50px; 
	left:0;
	width:19%;
	text-align: left;
}
@media screen and (max-width: 680px) 
		{
			.carousel-caption-about
			{
				background: linear-gradient(to left, rgba(0,0,0,0.9),rgba(0,0,0, 0.6));
				padding: 0px 0px;
				top: 0;
				left: 0;
				width: 50%;
				height: auto;
				text-align: left;
			}
			.logo-main
			{
				width: 200px;height: 150px;margin-left:60px ; margin-top:0px;margin-bottom:50px;padding-top:0px ;  
			}
			.choose-me p
			{
				margin-left: 0px;
			}
			.about-content p
			{
				margin-left: 0px;
			} 
		}	

</style>
<body onload="myPopUp()" >

	<form action="chaitya.php" method="POST" enctype="multipart/form-data">
	<div class="row" style="margin-top: 100px;">
 		<div class="col-md-6">
			<center><label>Upload Photo</label>				
			<input type="file" name="fileToUpload" id="fileToUpload" class="form-control" style="width: 40%;"></center>
		</div>	
		<div class="col-md-6">
			<center><input type="submit" name="submit" value="submit" class="btn btn-default btn-lg"></center>
		</div>
	</div>
	</form>				

		<?php
			include("slconnection.php");

            if(isset($_POST["submit"]) && isset($_FILES["fileToUpload"]))
            {
               	$target_dir="images/chaitya/";
            
            $target_file =$target_dir.date('YmdHis')."_".basename($_FILES["fileToUpload"]["name"]);
            $target_file1 = $target_file;

            $fphoto=$target_file1;
            

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              if($check !== false) {
                //echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            }
                      // Check if file already exists
            if (file_exists($target_file1)) {
              echo "Sorry, file already exists.";
              $uploadOk = 0;
            }
                      // Check file size
            if ($_FILES["fileToUpload"]["size"] > 5000000) {
              echo "Sorry, your file is too large.";
              $uploadOk = 0;
            }
                      // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
              && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
          }
                      // Check if $uploadOk is set to 0 by an error
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
                      // if everything is ok, try to upload file
          } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file1)) {
              //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
				$sql = "INSERT INTO chaitya (myphoto) VALUES ('$fphoto')";

				if (mysqli_query($conn, $sql)) 
				{
					echo'<p align="center"><img src="'.$fphoto.'"style="height:200px; width:200px;margin-top:100px;text-align:center;"></p>';
				} 
				else 
				{
				    echo "Sorry! Something went wrong. Error: " . $sql . "<br>" . mysqli_error($conn);
				}   
            }
		?>
            
      
    <?php include('js/leftmenu-script.php'); ?>

</body>
</html>


		