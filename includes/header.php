<link rel="stylesheet" href="style.css">
<style>
    *{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;     
}

.containerx{
  padding: 0 !important;
  position: relative;
}

/* Header Section */

.header{    
  width: 100%;
  height: 100vh;
  position: relative;
  perspective: 100rem;    
}

@media(max-width:1272px){
  .header{
      width: auto;
  }
  .containerx{
      width: auto;
  }
}

.img-wrapper{  
  width: 100%;
  height: 100%; 
  background-color: rgba(0,0,0,0.9);
  animation: animate 20s infinite;
  object-fit: cover;
  background-size: cover;
  /* position: absolute;   */
  background-attachment: fixed;
} 
 

@keyframes animate{
  0%{
      background-image: url(images/1.jpg);
  }
  50%{
      background-image: url(images/3.jpg);
  }
  100%{
      background-image: url(images/4.jpg);
  } 
}

.banner{
  position: absolute;
  top: 4%;
  left: 4%;        
}

.banner h4{
  font-family: 'Baloo Da 2',serif;
  font-size: 7rem;
  font-weight: 300;        
  font-weight: 500;
  line-height: 7rem;
  letter-spacing: .2rem;    
  text-shadow: 0 0.3rem 0.5rem rgb(0,0,0,0.4);
  opacity: 1;    
}
.banner h4:hover{
  cursor: pointer;      
}

.banner a{
    text-decoration: none;
    color: black;
  }
  .banner a:hover,.banner a:active,.banner a:focus{        
    text-decoration: none;
      color: inherit;
  }
/* Navigationbar Section */

.hamburger-menu{
  width: 3rem;
  height: 3rem;    
  position: fixed;
  top: 5rem;
  right: 5rem;
  z-index: 1000000001;
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
  cursor: pointer;
  transition: right 0.7s;
}

.change .hamburger-menu{
  right : 20rem;
}

.nav-dropdown{
  list-style: none;        
  height: auto;
  font-size: 2.5rem;
  width: 15.4rem;
  background: linear-gradient(to top right, #D7E1EC 0%, #FFFFFF 100%);
  text-rendering: initial;    
  position: absolute;     
  z-index: 100;
  opacity: 0;
  visibility: hidden;
  border: 0.1rem black;
  border-radius: 0.5rem;
  transition: 0.5s;
}

.nav-dropdown-link1{      
  width: 100%;
  height: 100%;
  font: 1em sans-serif;
  font-size: 1.5rem;    
  color: #000;
  align-items: center;
}

.nav-dropdown-link1:hover{
  color: black;    
}    

.line{
  width: 100%;
  height: 0.2rem;
  background-color: #fff;
  box-shadow:0 0.1rem 0.2rem rgba(0,0,0,0.2);
}

.change .line{
  background-color: rgba(0,0,0,0.8);
}

.change .line-1{
  transform: rotate(45deg)translate(0.3rem , 0.8rem);
}

.change .line-2{
  opacity: 0;
  visibility: hidden;
}

.change .line-3{
  transform: rotate(-45deg)translate(0.3rem , -0.8rem);
}

.sidebar{
  z-index: 100000000;
  width: 28rem;
  height: 100vh;
  position: fixed;
  top: 0;
  right: -40rem;
  background-color: transparent;
  transition: right 0.5s;

  box-shadow: 2rem 2rem 5rem rgba(0,0,0,0.5);
  border-top: 0.1rem solid rgba(255,255,255,0.5);
  border-left: 0.1rem solid rgba(255,255,255,0.5);
  background: linear-gradient(to top right, #D7E1EC 0%, #FFFFFF 100%);
  border-bottom-left-radius: 2.5rem;
  border-top-left-radius: 2.5rem;
}

.change .sidebar{
  right: 0;
}

.menu{
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.menu-item{
  text-align: center;    
}

.menu-link{
  font-family: 'Baloo Da 2',serif;
  font-size: 2.5rem;
  color:  #2f2626;
  text-decoration: none;
  position: relative;
  transition: transform 0.5s;
  display: inline-block;    
} 

.menu-link:hover{
  color: inherit;   
  color: black;    
  transform : scale(1.5);     
  font-weight: 500;
}

.social-media{
  position: absolute;
  bottom: 1rem;
  width: 100%;    
  display: flex;
  justify-content: center;
}

.social-media i{    
  font-size: 2rem;
  margin: 1.8rem;
  width: 4.5rem;
  height: 4.5rem;
  background-color: #777;
  color:#fff;
  display:flex;
  justify-content: center;
  text-decoration: none;
  align-items: center;
  border-radius: 50%;
  transition: transform 0.5s;    
}

.social-media .sm{
  text-decoration: none;
}

.social-media i:hover{    
  background-color: #c29525;
  transform: scaleZ(1.5);
}

/* Section - 2 */

.containerx .cc{
  height: auto;
  width: auto;
  position: absolute;         
  background-color: white;
  bottom: 0px;
  display: block;
  align-content: center;
  z-index: 4;
}

.containerx .cc::before{
  height: 100%;
  width: 100%;
  content: "";
  top: 0;
  left: 0;    
  opacity: 0.6;
  z-index: -1;
  position: absolute;        
  background: url(images/fff.jpg) no-repeat;   
  background-size: cover;
}

.containerx .cc h1{
  font-size: 3rem;
  margin-top: 3rem;
  margin-left: 10rem;
  margin-right: 10rem;
  color: black;    
} 

.containerx .cc .bld{
  margin-top: 4rem;
  color: black;
  font-size: 2rem;
  margin-left: 10rem;
  margin-right: 10rem;
  display: block;
  padding-top: 1rem;    
}

.containerx .cc p{
  margin-left: 10rem;
  margin-right: 10rem;
  color: rgb(92, 4, 4);
  font-size: 2rem;
  margin-top: 5rem;          
} 

@media (max-width:1164px) {    
  .containerx .cc .bld{    
      font-size: 1.7rem;
      margin-left: 5rem;
      margin-right: 5rem;
  }
  .containerx .cc p{        
      font-size: 1.3rem;
      margin-left: 5rem;
      margin-right: 5rem;
  }
  .containerx .cc h1{
      font-size: 2rem;
      margin-left: 5rem;
      margin-right: 5rem;
  }
}
</style>
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
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/slick.min.js"></script> 
<script src="assets/js/j3.js"></script> 
<script src="assets/js/js.js"></script> 
