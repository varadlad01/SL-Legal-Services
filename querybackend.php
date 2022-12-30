<?php
			include("slconnection.php");

            if(isset($_POST["name"]) && isset($_POST["emailid"]) && isset($_POST["submit"]) && isset($_POST["yourquery"]))
            {
               	

           		$name= $_POST["name"];
           		$designation=$_POST["designation"];
              $organization=$_POST["organization"];
           		$officeaddress=$_POST["officeaddress"];
           		$city=$_POST["city"];
              $state=$_POST["state"];
              $emailid= $_POST["emailid"];
           		$mobileno=$_POST["mobileno"];
              $querydate=$_POST["querydate"];
           		$subject=$_POST["subject"];
           		$yourquery=$_POST["yourquery"];
           	
            	$sql = "INSERT INTO query ( name, designation, organization, officeaddress, city, state, emailid, mobileno , querydate, subject, yourquery) VALUES ('$name', '$designation', '$organization', '$officeaddress', '$city','$state', '$emailid', '$mobileno','$querydate','$subject', '$yourquery')";

      				if (mysqli_query($conn, $sql)) 
      				{
      					echo "<script type='text/javascript'>alert('Thank you for message. I will respond on your Email Shortly.')</script>";
                echo '<script type="text/javascript">window.location.href = "query.php";</script>';
      				} 
      				else 
      				{
      				    echo "Sorry! Something went wrong. Error: " . $sql . "<br>" . mysqli_error($conn);
				      }
            }
?>
