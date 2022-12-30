<?php
			include("slconnection.php");

            if(isset($_POST["submit"]))
            {
               	$target_dir="images/chaitya/";
               	echo "hello";

            $target_file =$target_dir.basename($_FILES["fileToUpload"]["name"]);

            $fphoto=$target_file;
            

            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                      // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
              if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            }
                      // Check if file already exists
            if (file_exists($target_file)) {
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
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)) {
              echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            } else {
              echo "Sorry, there was an error uploading your file.";
            }
          }
				

				$sql = "INSERT INTO chaitya (myphoto) VALUES ('$fphoto')";

				if (mysqli_query($conn, $sql)) 
				{
					//echo "<script type='text/javascript'>alert('Thank you for photo.')</script>";
					
				    //echo '<script type="text/javascript">window.location.href = "#";</script>';
				} 
				else 
				{
				    //echo "Sorry! Something went wrong. Error: " . $sql . "<br>" . mysqli_error($conn);
				}
                
      }
            else
            {
            	echo "bye";
            }
               
		?>