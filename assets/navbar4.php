<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:700');
.divSlant{
    width: 240px;
    height: 55px;
    background-color: #ffc800;
    position: absolute;
    top: 5px;
    left: 0;
    z-index: 999999;
    position: fixed;
    padding: 10px;
    font-size: 24px;
    color: #2d417b;
    font-weight: 500;
}
.divSlant-M{
    width: 150px;
    height: 55px;
    background-color: #ffc800;
    position: absolute;
    top: 5px;
    left: 0;
    z-index: 999999;
    position: fixed;
    padding: 10px;
    font-size: 20px;
    color: #1A237E;
    font-weight: 900;
}
.divSlant2{
    width: 0; 
    height: 0; 
    border-top: 40px solid transparent;
    border-bottom:40px solid transparent;
    transform: rotate(225deg);
    border-left: 40px solid #ffc800;
    position: fixed;
    border-radius: 0px;
    top: -21px;
    left: 230px;
    z-index: 999999;

}
.divSlant2-M{
    width: 0; 
    height: 0; 
    border-top: 40px solid transparent;
    border-bottom:40px solid transparent;
    transform: rotate(225deg);
    border-left: 40px solid #ffc800;
    position: fixed;
    border-radius: 0px;
    top: -21px;
    left: 140px;
    z-index: 999999;

}
/*end*/

 
    /* primary color = #2d417b*/
    @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:700');
    *{
        transition: ease all 0.4s;
    }
    body{
        background-color: #eee;
    }
    .navbar{
        border-radius: 0px;
        background-color: #2d417b;
        color: #fff;
        border-bottom: 4px solid #ffc800;
        margin-bottom: 0px;
        z-index: 9999;
    }
    .title{
        color: #fff;
        font-weight: 300;
        font-size: 24px;
    }
    .active{    
        background-color: #fff;
    }
    .navbar-default .navbar-nav>li>a {
        color: #fff;
    }
    .navbar-default .navbar-nav>li>a:hover {
        background: #fff;
    }

.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0, 0.9);
    overflow-y: hidden;
    transition: 0.5s;
}

.overlay-content {
    position: relative;
    width: 100%;
    margin-top: 100px;
}

/*.overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
    }*/

    .overlay a:hover, .overlay a:focus {
        color: #f1f1f1;
    }

    .overlay .closebtn {
        position: absolute;
        top: 40px;
        right: 45px;
        font-size: 40px;
    }

    @media screen and (max-height: 450px) {
      .overlay {overflow-y: auto;}
      .overlay a {font-size: 20px}
      .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 15px;
    }
}
.nav-notification{
    width: 100%;
    height: auto;
    padding: 10px;
    background: #212121;
    margin-top: 20px;
}

ul.dropdown-menu{
    border-radius: 10px;
}

#menuCircle{
    height: 44px;
    width: 170px;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    padding-left: 12px;
    padding-top: 10px;
    background: #2d417b;
    position: fixed;
    bottom: 40px;
    right: 0px;
    z-index: 99999;
}
/* dropdown styles */
.navbar-nav>li>.dropdown-menu {
    line-height: 15px;
}
.dropdown-menu>li>a:hover
{
    background: #2d417b;
    
    color: #fff;

    letter-spacing: 1px;
    width: 100%;

}

.dropdown-menu>li>a
{
    line-height: 1.5;
    padding: 10px 10px 10px 20px;
    
    text-align: left;
    border-bottom: 1px solid  #eee;
}



        .dropdown:hover .dropdown-menu {
                    display: block;
                    //margin-top: 0; // remove the gap so it doesn't close

                 }


/* heart animation */
    .heart {
        animation: HEARTBEAT 2.5s infinite;
    }
    #top span {
        animation: BOUNCE 2.5s infinite;
    }

    @keyframes HEARTBEAT {
        0% {
            transform: scale(1);
        }
        5% {
            transform: scale(1.3);
        }
        10% {
            transform: scale(1.1);
        }
        15% {
            transform: scale(1.5);
        }
        50% {
            transform: scale(1);
        }
        100% {
            transform: scale(1);
        }
    }
    @keyframes BOUNCE {
        0% {
            top: 110px;
        }
        10% {
            top: 80px;
        }
        15% {
            top: 85px;
        }
        20% {
            top: 70px;
        }
        75% {
            top: 110px;
        }
        100% {
            top: 110px;
        }
    }
 h1,h2,h3,h4,h5,h6
{
   font-family: 'Roboto Condensed', sans-serif;
}
p, a, li 
{
    font-size: 15px;
    
}
</style>

<a href="index.php"><div class="divSlant hidden-xs"><img src="images/jnec-logo.jpg" style="width: 60px;height: 40px;margin-right: 8px;"><Span style="font-family: 'Roboto Condensed', sans-serif;">MGM's JNEC</Span></div></a>
<div class="divSlant2 hidden-xs"></div>

<a href="index.php"><div class="divSlant-M hidden-lg hidden-md hidden-sm"><img src="images/jnec-logo.jpg" style="width: 60px;height: 40px;margin-right: 8px;font-family: 'Roboto Condensed', sans-serif;color: #2d417b;">JNEC</div></a>
<div class="divSlant2-M hidden-lg hidden-md hidden-sm"></div>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>Menu
                    <!-- <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                </button>
                <a class="navbar-brand" href="index2.php"><span class="title">MGM's JNEC</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class=""><a href="index.php">Home</a></li>
                    <li class=""><a href="about.php">About</a></li>
                    <li><a href="admissions.php">Admissions</a></li>
                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="academics.php">Academics
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="ug.php">UG Program</a></li>
                                <li><a href="pg.php">PG Progarm</a></li>
                                <li><a href="research.php">Research</a></li>
                            </ul>
                        </li>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="academics.php">Campus
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a href="library.php">Library</a></li>
                                <li><a href="http://164.100.247.17/">Online Library</a></li>
                                <li><a href="compFacility.php">Computer Facility</a></li>
                                <!-- <li><a href="hostelFacilities.php">Hostel Facility</a></li> -->
                                <!-- <li><a href="canteen.php">Canteen</a></li>
                                <li><a href="sports.php">Sports Facility</a></li> -->
                                <li><a href="infrastructure.php">Infrastructure</a></li>
                            </ul>
                        </li>
                        <li><a  href="placement.php">Placement</a></li>
                            <!--<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="academics.php">Placement
                                <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="tnpGuidelines.php">Guidelines</a></li>
                                    <li><a href="">Recruiters</a></li>
                                    <li><a href="placements-2016-17.php">Year 2016-17</a></li>
                                    <li><a href="placements-2015-16.php">Year 2015-16</a></li>
                                    <li><a href="ug.php">Year 2014-15</a></li>
                                    <li><a href="ug.php">Year 2013-14</a></li>
                                    <li><a href="ug.php">Year 2012-13</a></li>
                                    <li><a href="ug.php">Year 2011-12</a></li>
                                </ul>
                            </li>-->
                            <li><a  href="gallery.php">Gallery</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="academics.php">Alumni
                                    <span class="caret"></span></a>
                                    <ul class="dropdown-menu">

                                        <li><a href="alumni-main.php">Alumni Activities</a></li>
                                        <li><a href="jnec-alumni.php">Proud Alumni</a></li>
                                        <li><a href="research.php">Alumni Registration</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="academics.php">Downloads
                                        <span class="caret"></span></a>
                                        <ul class="dropdown-menu">

                                            <li><a href="downloads/jnec_prospectus_2017-18.pdf" download="JNEC-Prospectus">Information Brochure</a></li>
                                            <li><a href="syllabus.php">Syllabus</a></li>
                                            <li><a href="lab-manuals.php">Lab Manuals</a></li>
                                            <li><a href="acts-notifications.php">Acts/Rules/Notifications</a></li>
                                            <li><a href="nirf.php">NIRF</a></li>
                                            <li><a href="downloads/SSR volume 01.pdf" download="SSR Vol 01">NAAC SSR Vol-1</a></li>
                                            <li><a href="downloads/SSR-volume-02.pdf" download="SSR Vol 02">NAAC SSR Vol-2</a></li>
                                            <li><a href="eaos.php">EOAS</a></li>
                                            <li><a href="downloads/Mandatory_Disclosure_2017_18.pdf" download="Mandatory_Disclosure_2017_18">Mandatory Disclosure 2017-18</a></li>
                                        </ul>
                                    </li>
                                    
                                    <li><a  href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>

                    <div id="myNav" class="overlay" style="z-index: 99999;">
                      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                      <div class="overlay-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                  <!--   <div class="nav-notification">
                                        <marquee style="color: #E0E0E0;">Latest Notification/Announcment</marquee>
                                    </div> -->
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="nav-notification">
                                        <center><span style="font-weight: 300;font-size: 20px;color:#E0E0E0;">Newsletter</span></center><br>
                                        
                                         <?php
                                             include("./dbconnection.php");

                                                    
                                                    $sql = "SELECT * FROM news_letter ORDER BY news_id DESC LIMIT 10";

                                                    $result = mysqli_query($conn, $sql);

                                                    if (mysqli_num_rows($result) > 0) {
                                                        // output data of each row
                                                        while($row = mysqli_fetch_assoc($result)) {

                                                            $news_title= $row["news_title"];

                                                            echo
                                                            '   <a href="" target="_blank">

                                                                    
                                                                        <i class="fas fa-hand-o-right fa-1x"></i>
                                                                        '.$news_title.'
                                                                    

                                                                </a>
                                                                <br>
                                                                <br>
                                                            ';
                                                        }
                                                    }
                                                
                                        ?>
                                        
                                       
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="nav-notification">
                                        <center><span style="font-weight: 300;font-size: 20px;color:#E0E0E0;">Events</span></center><br>
                                        
                                        <?php
                                        $sql = "SELECT * FROM news_events ORDER BY event_id DESC LIMIT 10";

                                        $result = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($result) > 0) 
                                            {
                                            // output data of each row
                                            while($row = mysqli_fetch_assoc($result)) 
                                            {

                                                $event_id=$row["event_id"];
                                                $event_title=$row["event_title"];
                                                $event_desc=$row["event_desc"];
                                                $evene_img=$row["event_img"];
                                                $evene_upload_date=$row["event_upload_date"];
                                                $evene_date=$row["event_date"];

                                                echo 
                                                '   
                                                    <a href="all_events.php" target="_blank">
                                                        <i class="fas fa-hand-o-right fa-1x"></i>
                                                                '.$event_title.'
                                                    </a>
                                                    
                                                    <br>
                                                    <br>      
                                                ';
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="nav-notification">
                                        <center>
                                            <span style="font-weight: 300;font-size: 20px;color:#E0E0E0;">Important Downloads</span></center>
                                            <br>
                                        <a href="notifications.php"><li>Syllabus</li></a>
                                        <a href="notifications.php"><li>Important PDF</li></a>
                                        <a href="notifications.php"><li>NIRF</li></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menuCircle">
                    <span style="font-size:20px;cursor:pointer;" onclick="openNav()"><i class="fas fa-bell heart" style="color: #ffc800;">  </i> <span style="font-size: 20px; color: #fff;">Notice Board</span>
                    </span>
                </div>


                <script>
                    function openNav() {
                        document.getElementById("myNav").style.height = "100%";
                    }

                    function closeNav() {
                        document.getElementById("myNav").style.height = "0%";
                    }
                </script>
                