<link rel="stylesheet" type="text/css" href="style.css">
<style>
  .containerf{
	max-width: 1170px;
	margin:auto;
}
.row{
	display: flex;
	flex-wrap: wrap;
}
ul{
	list-style: none;
}
.footer{
	background-color: #24262b;
    padding-left: 70px;
    padding-right: 70px;
    padding-top: 70px;
    padding-bottom:0px;    
}
.footer-col{
   width: 25%;
   padding: 0 15px;
}
.footer-col h4{
	font-size: 18px;
	color: #ffffff;
	text-transform: capitalize;
	margin-bottom: 35px;
	font-weight: 500;
	position: relative;
}
.footer-col h4::before{
	content: '';
	position: absolute;
	left:0;
	bottom: -10px;
	background-color: #e91e63;
	height: 2px;
	box-sizing: border-box;
	width: 50px;
}
.footer-col ul li:not(:last-child){
	margin-bottom: 10px;
}
.footer-col ul li a{
	font-size: 16px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 300;
	color: #bbbbbb;
	display: block;
	transition: all 0.3s ease;
}
.footer-col ul li a:hover{
	color: #ffffff;
	padding-left: 8px;
}
.footer-col .social-links a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin:0 10px 10px 0;
	text-align: center;
	line-height: 40px;
	border-radius: 50%;
	color: #ffffff;
	transition: all 0.5s ease;
}
.footer-col .social-links a:hover{
	color: #24262b;
	background-color: #ffffff;
}

/*responsive*/
@media(max-width: 767px){
  .footer-col{
    width: 50%;
    margin-bottom: 30px;
  }
}
@media(max-width: 574px){
  .footer-col{
    width: 100%;
  }
}

</style>
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
                  color: #bbbbbb;display: inline;margin-left:0.8rem">Phone No. :<br>&nbsp;&nbsp;(M)+91-9999999999</p></li>
            <li><p style="font-size: 16px;
                  text-transform: capitalize;
                  color: #ffffff;
                  text-decoration: none;
                  font-weight: 300;
                  color: #bbbbbb;display: inline;margin-left:0.8rem">(O) +91-265-9999999 / <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91-265-2338879</p></li>
            <li><p style="font-size: 16px;
                  text-transform: capitalize;
                  color: #ffffff;
                  text-decoration: none;
                  font-weight: 300;
                  color: #bbbbbb;display: inline;margin-left:0.8rem">Email Add.: <br>	&nbsp;&nbsp;shreepartyplot@gmail.in</p></li>  	 				
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