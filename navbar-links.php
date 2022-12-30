<style type="text/css">
	    .navbar{
        border-radius: 0px;
        background-color: rgba(0,0,0,0.9);
        box-shadow: 0 5px 5px 0 rgba(0, 0, 0, 0.2), 0 4px 50px 0 rgba(0, 0, 0, 0.19);
        margin-bottom: 0px;
        z-index: 99;
        padding: 10px 0px 10px 0px;
       }
       .navbar-nav
       {
       	padding-left: 0;
       	width: 100%;
       }


    .navbar-nav>li>a {
       	
        color: #FFC000;
        padding-left: 15px;
        padding-right:20px;
        border-radius:20px; 
        font-size: 16px;
    }
    .navbar-nav>li>a:hover {
        border-radius:20px; 
        color: #111;
    }
	    /* dropdown styles */
	.navbar-nav>li>.dropdown-menu {
	    line-height: 10px;
	   	padding: 0;
	}
	
	.dropdown-menu>li>a:hover
	{
	    //background: #233053;
	    background-color: white;
	    color: #222222;
	    width: 100%;
	}
	.dropdown-menu>li>a
	{
	    line-height: 1;
	    padding: 10px 10px 10px 20px;    
	    text-align: left;
	    color: #FFC000;
	    background-color: rgba(0,0,0,0.9);
	    border: 1px solid  white;
	}
	

@media (min-width: 680px){
    .navbar-nav{
        float:none;
        margin: 0 auto;
        display: table;
        table-layout: fixed;
    }
    
}

	@media screen and (min-width: 680px) {
	  	.dropdown:hover .dropdown-menu 
		{
		    display: block;
		    border-radius: 10px;
		
		    //margin-top: 0; // remove the gap so it doesn't close
		}
	
	}
/* CSS Navbar */
	 .affix {
    top: 0;
    width: 100%;
    z-index: 9999 !important;
    margin: 0px 0px;
  }

  .affix + .container-fluid +.row{
    padding-top: 70px;
  }
 
/* End CSS Navbar */

.open > .dropdown-menu {
  -webkit-transform: scale(1, 1);
  transform: scale(1, 1);  
  opacity:1;

}
  
.dropdown-menu {
  opacity:.3;
  -webkit-transform-origin: top;
  transform-origin: top;
  -webkit-animation-fill-mode: forwards;  
  animation-fill-mode: forwards; 
  -webkit-transform: scale(1, 0);
  transition: all 0.4s linear;
  -webkit-transition: all 0.4s linear;

}

.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
	

/* End CSS Navbar */
</style>
 <script type="text/javascript">
    	    $(function(){
			    $(".dropdown").hover(            
			            function() {
			                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
			                $(this).toggleClass('open');
			                $('b', this).toggleClass("caret caret-up");                
			            },
			            function() {
			                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
			                $(this).toggleClass('open');
			                $('b', this).toggleClass("caret caret-up");                
			            });
			    });
    </script>



<!-- Navbar -->


<nav class="navbar container-wrap" data-spy="affix" data-offset-top="0">
  <div class="container-fluid">

    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"  style="background-color: #fff;"></span>
        <span class="icon-bar"  style="background-color: #fff;"></span>
        <span class="icon-bar"  style="background-color: #fff;"></span>                        
      </button>
      <!--<a class="navbar-brand" href="index.php" style="color: #fff; padding-left:80px;">
	      	<span><img src="images/logos/mgmlogo.png" style="width:30px;margin-top: -5px;"> </span>
	      &nbsp;&nbsp;&nbsp;MGM MCHA &nbsp;&nbsp;&nbsp;</a>-->
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav ">
      		<li><img src="images/weblogonew.jpg" height="50" width="50" style="border-radius:50%;margin-right:30px ; "></li>
			<li class=""><a href="index.php">Home</a></li>
			<li class=""><a href="about-myself.php">About</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">Services
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="irp.php">Interim Resolution Professional</a></li> 
						<li><a href="resolution-professional.php">Resolution Professional</a></li> 
						<li><a href="liquidator.php">Liquidator</a></li>  
						<li><a href="legal-consultancy.php">Legal Consultancy</a></li> 
						<li><a href="intellectual-property-rights.php">Intellectual Property Rights</a></li>  
						<li><a href="independent-director.php">Independent Director</a></li> 	
								
					</ul>
			</li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">IBC Law
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
								<li><a href="https://ibbi.gov.in/legal-framework/act" target="_blank">IBC Amendment</a></li> 
								<li><a href="https://ibbi.gov.in/legal-framework/rules" target="_blank">IBC Rules </a></li> 
								<li><a href="https://ibbi.gov.in/legal-framework/updated" target="_blank">IBC Regulations </a></li> 
								<li><a href="https://ibbi.gov.in/legal-framework/circulars" target="_blank">IBC Circulars</a></li> 
								<li><a href="https://ibbi.gov.in/legal-framework/notifications" target="_blank">IBC Notifications </a></li> 		
					</ul>
			</li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="https://ibbi.gov.in/orders/supreme-court" target="_blank">Supreme Court</a></li> 
						<li><a href="https://ibbi.gov.in/orders/high-courts" target="_blank">High Courts</a></li> 
						<li><a href="https://ibbi.gov.in/orders/nclat"target="_blank">NCLAT</a></li><li><a href="https://ibbi.gov.in/orders/nclt"target="_blank">NCLT</a></li>
						<li><a href="https://ibbi.gov.in/orders/drat"target="_blank">DRAT</a></li> 
						<li><a href="https://ibbi.gov.in/orders/drts"target="_blank">DRTs</a></li>
						<li><a href="https://ibbi.gov.in/orders/ibbi"target="_blank">IBBI</a></li>
						<li><a href="https://ibbi.gov.in/orders/ipa-rvo" target="_blank">IPA/RVO</a></li> 
					</ul>
			</li>
			
			
			<li class=""><a href="query.php">Query</a></li>
			<li class=""><a href="contact.php">Contact</a></li>
			
		</ul>
      
    </div>
  </div>
</nav>
  

<!-- End navbar -->