<?php
			include("slconnection.php");

            if(isset($_POST["statusdate"]) && isset($_POST["gym"]) && isset($_POST["submit"]) && isset($_POST["study"])&& isset($_POST["breakfast"])&& isset($_POST["lunch"])&& isset($_POST["dinner"]))
            {
               	

              $statusdate=$_POST["statusdate"];
           		$gym= $_POST["gym"];
              $study=$_POST["study"];
              $breakfast=$_POST["breakfast"];
              $lunch=$_POST["lunch"];
              $dinner=$_POST["dinner"];
              $notes=$_POST["notes"];

              $sql = "INSERT INTO rgstatus ( statusdate, gym, study, breakfast, lunch, dinner, notes) 
                  VALUES ('$statusdate', '$gym','$study', '$breakfast','$lunch', '$dinner', '$notes')";

      				if (mysqli_query($conn, $sql)) 
      				{
      					echo "<script type='text/javascript'>alert('Thank You Babe!!! Keep Loving Me...')</script>";
                echo '<script type="text/javascript">window.location.href = "RG.php";</script>';
      				} 
      				else 
      				{
      				    echo "Babe! Please Enter Properly.. Error: " . $sql . "<br>" . mysqli_error($conn);
				      }
            }
?>
