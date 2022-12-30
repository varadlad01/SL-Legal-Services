<style type="text/css">
.footer-link {

	width: 80%;
	height: auto;
	padding: 10px;
}
.footer-link h3{
	color:#FFC000;
}
.footer-link li{
	color:#fff;
	padding-left: 0px;
}
.footer-link a{
	color: #fff;
	//font-weight: 100;
	letter-spacing: 1px;
}
.footer-link a:link{
	text-decoration: none;
	color: #fff;
}
.footer-link p{
	text-decoration: none;
	color: #fff;
	
}

.contact-div p
{
	font-size:16px ; 
}

.myfooter
{
	background:rgba(0,0,0,0.9);
	width:100%;
	margin:0px;
	color:#FFC000;
	border-top:4px solid #FFC000;
}
.footer-icon i
{
	color:#FFC000 ;
}
.icondiv
{
	padding-bottom:20px ;
	padding-left: 0px;
}
.quicklinks
{
	padding-left:65px; 
}
.quicklinks a:hover
{
	color: #FFC000;
}
.icondiv a:hover
{
	color: #FFC000;
}
</style>

 <?php
		include 'slconnection.php';

	 	function getUserIpAddr(){
    	if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
  	  	}elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    	}else{
        $ip = $_SERVER['REMOTE_ADDR'];
    	}
    	return $ip;
		}
		$ip = getUserIpAddr();
		$qry = "SELECT * FROM `ipdb` WHERE `ip` = '$ip'";
		$result = mysqli_query($conn,$qry);
		$num = mysqli_num_rows($result);
		if ($num == 0){
			$qry3 = "INSERT INTO `ipdb`(`ip`) VALUES ('$ip')";
			mysqli_query($conn,$qry3);
			
			$qry1 = "SELECT * FROM `counter` WHERE `id` = 0";
			$result1 = mysqli_query($conn,$qry1);
			$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
			$count = $row1['visiters'];
			$count = $count + 1;
			
			$qry2 = "UPDATE `counter` SET `visiters`='$count' WHERE `id`=0";
			$result2=mysqli_query($conn,$qry2);
			}else{
			$qry1 = "SELECT * FROM `counter` WHERE `id` = 0";
			$result1 = mysqli_query($conn,$qry1);
			$row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
			$count = $row1['visiters'];
			}
  ?>


<footer class="myfooter">

	<div class="container-fluid footer-link">
			
		<div class="col-md-3"style="padding: 0; ">	
			<div class="col-md-12">
				<h3 style="text-align:center;">Useful Links</h3><br>
				<div class="quicklinks" style="line-height: 1.5;">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about-myself.php">ABOUT</a> </li>
					<li><a href="query.php">QUERY</a> </li>
					<li><a href="contact.php">CONTACT</a></li>
					<li><a href="https://ibbi.gov.in" target="_blank" >IBBI WEBSITE</a></li>
				</div>
			</div>
		</div>
		<div class="col-md-5" style="padding: 0; text-align:center;">
			<div class="col-md-12">
			<h3 style=" "> Contact</h3><br>
				<div class="contact-div">
				<p>Mobile No : 9422709445</p>
				<p>Email Id : cslaad@gmail.com</p>
				
				<p>Address : Flat No. 1, Plot No. 59, Shrinivas Apartment,
					Alankar Housing Society, Garkheda Parisar, Aurangabad.</p></div>
			</div>	
		</div>
		
		<div class="col-md-4 footer-icon"style="padding: 0; text-align:center;">
			


			<div class="col-md-12">
				<center><h3>Social Media</h3></center><br>
				<center>
					<div class="col-md-12 icondiv">
						<a href="https://www.facebook.com/sudhir.laad.9" target="_blank"><span style="font-size: 20px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-facebook"></i>&nbsp;&nbsp;Facebook</span></a><br><br>
						<a href="https://www.linkedin.com/in/sudhir-laad-88919942" target="_blank"><span style="font-size: 20px;">&nbsp;&nbsp;&nbsp;<i class="fa fa-linkedin"></i>&nbsp;&nbsp;Linkedin</span></a><br>
						<center>
						<p style="color: #FFC000; font-size:20px ;padding-left:30px;padding-top: 3px;padding-bottom: 3px;padding-right:0;   width: 80%; border-radius:10px;  margin: 0;" >Website Visitors : <b><?php echo "$count";  ?></b> </p></center>
					</div>
				</center>
			</div>


		</div>	
		
	</div>
		
		<div style="font-weight: 100;letter-spacing: 1px;padding-bottom: 20px; font-size:14px; ">
			<hr style="height: 1px; background:white">
			<center>©2020 SL LEGAL SERVICES</center>
			
			<center>Designed by Coding Store.</a></center>
		</div>
	


</footer>