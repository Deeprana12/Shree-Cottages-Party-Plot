<?php 
session_start();
include('includes/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shree cottages</title>
    <link rel="stylesheet" href="onlystyle.css">
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    
</head>
<body>
        
<div class="containerx">     

        <div class="hamburger-menu">            
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
        </div>

        <header class="header">                        
            <div class="img-wrapper">                
                <div class="banner" >                    
                <a href="index.php"><h4 data-aos="fade-up">Shree Cottages & Party Plot</h4></a>
                </div>               
            </div>                    
        </header>

        <section class="sidebar">
            <ul class="menu">
                <li class="menu-item"> 
                    <a href="index.php" class="menu-link" data-content="Home"> Home<span class="sr-only"></span> </a>
                </li>
                <li class="menu-item">
                    <a href="page.php" class="menu-link" data-content="About Us"> About Us </a>
                </li>
                <li class="menu-item dropdown-hover">
                    <a href="image.php" class="menu-link" data-content="About Us"> Gallery <i class="fas fa-chevron-down arrow">  </i></a>
                    <ul class="nav-dropdown">
                        <li class="nav-dropdown-item">
                            <a href="image.php" class="nav-dropdown-link1">Image gallery</a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="video.php" class="nav-dropdown-link1">video gallery</a>
                        </li>
                    </ul>   
                </li>
                <li class="menu-item dropdown-hover">
                    <a href="#" class="menu-link" data-content="Services"> Services <i class="fas fa-chevron-down arrow">  </i></a>
                    <ul class="nav-dropdown">
                    <li class="nav-dropdown-item">
                            <a href="Roomservices1.php" class="nav-dropdown-link1">Room Services</a>
                        </li>
                        <li class="nav-dropdown-item">
                            <a href="plotservices.php" class="nav-dropdown-link1">Plot Services</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="contact.php" class="menu-link" data-content="Contact Us"> Contact Us </a>
                </li>
            </ul>
            <div class="social-media">
                <a class="sm" href="#" ><i class="fab fa-facebook-f"></i></a>   
                <a class="sm" href="#" ><i class="fab fa-instagram"></i></a>   
                <a class="sm" href="#" ><i class="fab fa-twitter"></i></a>   
            </div>
        </section>  
    
    <!-- Meta Section -->

    <div class="cc" data-aos="zoom-in">          

        <h1>Shree Party Plot & Banquet Hall - Many Celebrations… One Destination
            The finest celebration venue in the city</h1>
                
        <b class="bld"> location… lush landscape… stunning décor… premium facilities… experienced staff and much more.</b>
                
        <p>Marriages they say are made in heaven. That's why, we do everything we can to make your special day truly heavenly for you and your loved ones. It’s certainly the perfect wedding destination.</p>            
                    
    </div>

    <!-- ------------>

</div>
    

<!-- Bookevent Section -->
    
    <div class="bookevent">            
        <h2>Want to celebrate your best day at best place !!</h2>
        <a href="roomservices.php"  class="btn" data-aos="fade-up" style="font-family: 'Yesteryear', cursive;font-size:2.5rem">Book Your Event</a>         
        <div class="pics">
            <div class="block" data-aos="fade-up">
                <img class="pic" src="images/crpevnt.jpg" class="responsive" alt="" srcset=""  height= "27rem";
    width= "34rem"; >
                <h3>Corporate Events</h3>
            </div> 
            <div class="block" data-aos="fade-up">
                <img class="pic" src="images/cnrst.jpg" class="responsive" alt="" srcset=""  height= "27rem";
    width= "34rem"; >
                <h3>Event managment</h3>
            </div>                        
            <div class="block" data-aos="fade-up">                            
                <img class="pic" src="images/wddingpic.jpg" class="responsive" alt="" srcset=""  height= "27rem";
    width= "34rem"; >
                <h3>Wedding ceremony</h3>
            </div> 
            <div class="block" data-aos="fade-up">
                <img class="pic" src="images/birthday.jpg" class="responsive" alt="" srcset=""  height= "27rem";
    width= "34rem"; >
                <h3>Birthday Parties</h3>
            </div>                                                                                          
        </div>          
    </div>     
    
<!-- ---------------- -->
    
<!-- Services Section -->
        
<div class="serv">
    <h1 class="center" data-aos="zoom-in">Our Services</h1>              
        <div class="fb">

            <div class="box" data-aos="fade-left">
                <div class="photo"><img src="images/room1.JPG" alt=""></div>
                <h2>Room Services</h2>
                <p>We will execute every little detail of your event to perfection, while you and your family can simply relax in the spacious, fully furnished, air conditioned rooms.</p>                        
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="photo"><img src="images/pp.JPG" alt=""></div>
                <h2>Party plot</h2>
                <p>Spread across 65,000 sq. ft. with a capacity to easily accommodate 3000 people, our party plot is known for its wonderful service and facilities.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <div class="photo"><img src="images/dcr.jpg" alt=""></div>
                <h2>Decoration</h2>
                <p>Indian wedding is a perfect showcase of the beauty and grandeur of our culture. Vibrant colors, rich textures, gorgeous artefacts and sparkling lighting comes together to create a mesmerizingly spectacular setting for a magical event.</p>
            </div>

        </div>
    </div>    
</div>

<!-- Gallery Section -->

<div class="gallery">    
    <h1>Gallery</h1>
    <hr style="margin-left:50rem;margin-right:50rem">
    <div class="glryflex">
        <div class="pglry">
            <h4>Photo Gallery</h4>
            <a href="image.php"><img src="images/photog.jpg" alt="" srcset=""></a>
        </div>
        <div class="vglry">
            <h4>Video Gallery</h4>
            <a href="video.php"><video src="images/video_1.MOV" controls='controls' autoplay='autoplay' loop='loop' height='280' width='450'></video></a>
        </div>
    </div>
</div>

<!-- Map Section -->

<iframe class="map" data-aos="zoom-in" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.609633885867!2d70.52312451493296!3d21.048299985987818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be2ca27bd28f1d1%3A0xe609e025f726b7c6!2sShree%20cottage!5e0!3m2!1sen!2sin!4v1615390605537!5m2!1sen!2sin" width="200" height="1057" style="border:0;" allowfullscreen="" loading="lazy"></iframe>    

    
<!-- -------------------- -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init(
            {duration:1000}
        );
    </script>
    <script src="j3.js"></script>


<!--Footer -->
<footer class="footer">
  	 <div class="containerf">
  	 	<div class="row justify-content-center">
  	 		<div class="footer-col col-lg-4">
  	 			<h4>Quick links</h4>
  	 			<ul>
  	 				<li><a href="index.php">Home</a></li>
  	 				<li><a href="roomservices.php">Book Now</a></li>
  	 				<li><a href="roomservices1.php">Room services</a></li>
             <li><a href="roomservices1.php">Plot services</a></li>
  	 				<li><a href="image.php">Image Gallery</a></li>
             <li><a href="video.php">Video Gallery</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col col-lg-4">
  	 			<h4>Reach Us</h4>
           <ul>
              <li><i class="fa fa-map-marker fa-lg" style="color:white;size:2rem" aria-hidden="true"></i>
                  <p style="font-size: 16px;
                  text-transform: capitalize;
                  color: #ffffff;
                  text-decoration: none;
                  font-weight: 300;
                  color: #bbbbbb;display: inline;margin-left:0.8rem">
                  Gujarat State Highway 26 <br>
                  &nbsp;&nbsp;&nbsp;&nbsp;  Talala, Gujarat,
                  India<br>
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pincode : 362150
                  </p>    
              </li>
              <li><i class="fa fa-paper-plane fa-lg" style="color:white;size:2rem" aria-hidden="true"></i>
                <a style="display: inline;margin-left:0.8rem" href="https://www.google.com/maps/place/Shree+cottage/@21.0483,70.5231245,17z/data=!3m1!4b1!4m8!3m7!1s0x3be2ca27bd28f1d1:0xe609e025f726b7c6!5m2!4m1!1i2!8m2!3d21.0483!4d70.5253132">Locate Us</a>
              </li>
          </ul> 
  	 		</div>
  	 		<div class="footer-col col-lg-4">
  	 			<h4>Contact Us</h4>
  	 			<ul>
  	 				<li><p style="font-size: 16px;
                  text-transform: capitalize;
                  color: #ffffff;
                  text-decoration: none;
                  font-weight: 300;
                  color: #bbbbbb;display: inline;margin-left:0.8rem">Phone No. :<br>&nbsp;&nbsp;(M)+91-9825303933</p></li>
            <li><p style="font-size: 16px;
                  text-transform: capitalize;
                  color: #ffffff;
                  text-decoration: none;
                  font-weight: 300;
                  color: #bbbbbb;display: inline;margin-left:0.8rem"
                  >(O) +91-265-2344499 / <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91-265-2338879</p></li>
            <li><p style="font-size: 16px;
                  text-transform: capitalize;
                  color: #ffffff;
                  text-decoration: none;
                  font-weight: 300;
                  color: #bbbbbb;display: inline;margin-left:0.8rem;
                  @media(max-width(387px){font-size:5vw}"
                  >Email Add.: <br>	&nbsp;&nbsp;aminpartyplot@yahoo.in</p></li>  	 				
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col col-lg-4">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>     
      <p style="margin-bottom:0.2rem;color:white;display:block;text-align:center;">
        © Copyright 2021 Shree cottages & party plot. All rights reserved.
      </p>
  </footer>
<!-- /Footer--> 


<!--Login-Form -->
<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/j3.js"></script> 
<script src="assets/js/js.js"></script> 

</body>
</html>