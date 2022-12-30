<style type="text/css">
	/* CSS Home Slider */
	.carousel-control.left, .carousel-control.right
		{

		    background: none !important;
		    filter:progid:none !important;>
		}
	

		.carousel-caption
		{
			/*background: linear-gradient(to left, rgba(244, 172, 65, 0.9),rgba(244, 172, 65, 0.2));*/
			box-shadow: 2px 2px 5px white;
			/*border-radius: 5px;*/
			padding: 15px 10px;
			bottom: 20%;
			/*left: 0;*/
			/*width: 30%;*/
			text-align: left;
			/*height: 400px;*/
			position: absolute;
            transform:skewX(0deg);
            left: -2%;
            /*bottom:20%;*/
            border-radius: 30px;
            background:rgba(0,0,0,0.8);
            width: 800px;
            color:#fff;
            /* border-top-right-radius: 60px; */
            /*padding: 10px;*/
		}
		.carousel-caption h3
		{
			font-family: "Oswald Regular";
			font-size: 30px;

		}
		.carousel-caption p
		{
			font-family: sans-serif;
			font-size: 14px;	

		}

		@media screen and (max-width: 680px) 
		{
			.carousel-inner > .item > img 
			{
				width: 100%;
				/*height: 200px;*/
			}

			.carousel-caption
			{
				background:rgba(0,0,0,0.8);
				/*padding: 0px 0px;*/
				bottom: 0;
				left: 0;
				padding-top: 0px;
				margin: 0;
				width: 100%;
				height: 100%;
				/*text-align: left;*/
			}
			.carousel-caption h3
			{
				font-family: "Oswald Regular";
				font-size: 20px;
				text-align: center;
			}
			.carousel-caption p
			{
				font-family: sans-serif;
				font-size: 10px;	
				text-align: center;		
			}
			.carousel-caption h2
			{
				font-family: sans-serif;
				padding-top: 0;
				margin-top: 0;
				text-align: center;		
			}
			.carousel-caption h4
			{
				font-family: sans-serif;
				font-size: 20px;	
				text-align: center;
				padding: 0;
				margin-top: 0;
			}
			.carousel-logos
			{
				padding: 0px;
				margin: 0px;
			} 
			.carousel-logos img 
			{
				margin-left: 00px;
				height: 60px;
				width: 60px;
				padding: 0;
				margin-top: 0;
			}
			
			.displayimg img
			{
				margin: 0;
				padding: 0;
				height: auto;
				width: 50%;
				position: center;
			}
			.homelogos p
			{
				align-items: center;
				/*padding-left: -50px;*/
				position: center;
			}
		}
	/* CSS End Home Slider */

	.bg011
	{
		
		height:calc(85vh); 
		
		//width:100%;
		background: linear-gradient(to bottom, rgba( 35, 48, 83, 0.0),rgba(0, 0, 0, 0.9)), url('images/home-slider/1.jpg');
		////background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
        //transform: scale(0.1);
	}
	

	.bg0
	{
		
		height:calc(95vh); 
        width:100%; 
        transform: scale(1.4);
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.0),rgba(0, 0, 0,0.0)), url('images/5.jpg');
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        overflow: hidden;
	}


	/* Imp links */

	.highlights
	{
		background-color: #233053;
		height:calc(75vh); 
		color: #fff;
		margin-top: 0px;
		padding-top: 10px;
	}
	.highlights span	
	{

		font-weight: 200;
		letter-spacing: 1px;

	}

/* End imp Links */

</style>


<div class="container-fluid" style="margin-top:0px; ,margin-bottom: 0px;">
	<div class="row">
		<div class="col-md-12" style="padding: 0px;">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
			    	<div class="item active bg0">	
			    		<div class="container">
                        	<div class="carousel-caption animated slideInLeft"  >
	                            <div class="col-md-12">
	                            	<div class="col-md-5 displayimg">
	                            		 <center><img src="images/picfinal.jpg" height="350" style="border-radius: 40px; margin-top:25px;  "></center>
	                            	</div>
	                        		<div class="col-md-7">
	                            		<br>
	                            		<h2 style="color: #FFC000;">SL LEGAL SERVICES.</h2>
	                            		<h4 style="font-size:20px ; ">Prop. Sudhir Manikrao Laad,<br>
	                            		Insolvency Professional and Advocate.</h4><br>
		                                <div class="col-md-12  carousel-logos">
		                           			<div class="col-md-6 col-sm-12 ">
		                            
		                                	<center><img src="images/ip.png" height="100" width="100" style="border-radius: 20px;">
		                                    <h4 style=" font-size:22px;  ">IP Regn. No.</h4>
		                                    	<p>IBBI/IPA-02/IP-N00956/2019-2020/12994.</p></center><br>
				                            </div>
				                            <div class="col-md-6 col-sm-12 ">
				                            	<center><img src="images/advocate_logo.jpg" width="100" height="100"style="border-radius: 20px;">
				                               
			                               		<h4 style=" font-size:22px;">Adv. Regn. No.</h4>
			                               		<p>MAH/3504/1999.</p></center><br>
			                            	</div>	
		                   				</div>
	                        		</div>
	                   			</div>   
                        	</div>		      
			    		</div>
			  		</div>
				</div>	
			</div>
		</div>	
	</div>
</div>