<?php
    session_start();
    include_once 'include/class.user.php';
    $user = new User();

    $uid = $_SESSION['uid'];

    if (!$user->get_session()){
       header("location:login.php");
    }

    if (isset($_GET['q'])){
        $user->user_logout();
        header("location:login.php");
    }
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cricket Scorecard</title>

<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/coda-slider.css" type="text/css" media="screen" charset="utf-8" />

<script src="js/jquery-1.2.6.js" type="text/javascript"></script>
<script src="js/jquery.scrollTo-1.3.3.js" type="text/javascript"></script>
<script src="js/jquery.localscroll-1.2.5.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.serialScroll-1.2.1.js" type="text/javascript" charset="utf-8"></script>
<script src="js/coda-slider.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript" charset="utf-8"></script>
<style>
body {
    background-image: url("images/site.jpg");
}
</style>
</head>
<body>

<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="http://zeenews.india.com/tags/IPL.html">News</a></li>
  <li><a href="index.html">Logout</a></li>
  <li><h1>
                  Hello <?php $user->get_fullname($uid); ?>
    			</h1>	
           </li>
</ul>


<div id="slider">
	
    <div id="templatemo_sidebar">
    	<div id="templatemo_header">
        	<a href="index.html" target="_parent"><img src="images/ball.jpe" alt="Cricket Ball" /></a>
        </div> <!-- end of header -->
        
        <ul class="navigation">
            <li><a href="#home">Home<span class="ui_icon home"></span></a></li>
            <li><a href="#aboutus">Full Scorecard<span class="ui_icon aboutus"></span></a></li>
            <li><a href="#services">Balling Scorecard<span class="ui_icon services"></span></a></li>
            <li><a href="#gallery">Match Details<span class="ui_icon gallery"></span></a></li>
            <li><a href="#contactus">Contact Us<span class="ui_icon contactus"></span></a></li>
        </ul>
    </div> <!-- end of sidebar -->

	<div id="templatemo_main">
    	<ul id="social_box">
            <li><a href="http://www.facebook.com"><img src="images/facebook.png" alt="facebook" /></a></li>
            <li><a href="http://www.twitter.com"><img src="images/twitter.png" alt="twitter" /></a></li>
            <li><a href="http://www.linkdin.com"><img src="images/linkedin.png" alt="linkin" /></a></li>
            <li><a href="http://www.gmail.com"><img src="images/gmail.jpe" alt="gmail" /></a></li>                     
        </ul>
        
        <div id="content">
        
        <!-- scroll -->
        
        	
            <div class="scroll">
                <div class="scrollContainer">
                
                    <div class="panel" id="home">
                        <h1>IPL SCHEDULE</h1>    
                        <img src="images/ipl1.jpg" alt="01" />
                        
                      <div class="cleaner_h40"></div>
                        
                        
                    </div> <!-- end of home -->
                    
                    <div class="panel" id="Full Scorecard">
                        <h1>Todays Match</h1>
                    	<h1>RCB vs RPW</h1>
		<h3>FOR VIDEO LINK</h3>
		<a href="http://www.hotstar.com"><img src="images/gallery/image_04.jpe" alt="facebook" /></a>
                    </div>
                    
                    <div class="panel" id="Balling Scorecard">
                        <h1>Balling Scorecard</h1>
                		
                        
                        
                    </div>
                
                    <div class="panel" id="Match Details">
                        <h1>Match Details</h1>
                        
                        <div id="gallery_container">
                           	<div class="gallery_box">
                                <img src="images/gallery/image_04.jpe" alt="01" />
                                <h4>RCB wins Against SRH</h4>
                                <p></p> 
                                 <div class="btn_more"><a href="image1.php">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>
                            </div>
                            <div class="gallery_box">
                                <img src="images/gallery/image_02.jpg" alt="02" />
                                <h4>Gujrat Lions vs Punjab</h4>
                                <p></p> 
                                 <div class="btn_more"><a href="image2.php">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>                      
                            </div>
                            <div class="gallery_box">
                                <img src="images/gallery/image_03.jpg" alt="03" />
                                <h4>Wesi Indies Wins The world Cup</h4>
                                <p> </p> 
                                 <div class="btn_more"><a href="image3.php">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>     
                            </div>
                            <div class="gallery_box">
                                <img src="images/gallery/image_01.jpg" alt="04" />
                                <h4>RPW vs MI Opening</h4>
                                <p> </p> 
                                 <div class="btn_more"><a href="image4.php">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>             
                            </div>
                            
                            <div class="gallery_box">
                                <img src="images/gallery/image_06.jpe" alt="06" />
                                <h4>IPL opening Ceremony</h4>
                                <p></p> 
                                 <div class="btn_more"><a href="image6.php">Visit <span>&raquo;</span></a></div>
                                <div class="cleaner"></div>          
                            </div>
                            <div class="cleaner"></div>
                        </div>
                
                    </div>
                
                    <div class="panel" id="contactus">
                        <h1>Feel free to send us a message</h1>
                        <div id="contact_form">
                            <form method="post" name="contact" action="#contactus">
                                
                                <label for="author">Your Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="email">Your Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                                <div class="cleaner_h10"></div>
                                
                                <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                                <div class="cleaner_h10"></div>
                                
                                <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                                <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />
                            
                            </form>
						</div>
                    </div>
                
                </div>
			</div>
            
        <!-- end of scroll -->
        
        </div> <!-- end of content -->
        
        <div id="footer">

                                     Copywrite @Aditya Adekar
        
        </div> <!-- end of footer -->
    
    </div> <!-- end of main -->
</div>

<div align=center>CrickBuzz-More Info>> </div></body>
</html>













	