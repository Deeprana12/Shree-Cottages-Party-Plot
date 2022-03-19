<?php 
session_start();
include('../../config/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plot Service</title>
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- <link rel="stylesheet" href="response.css" media="screen and (max-width:1170px)"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">
    <style type="text/css">
    * {
        margin: 0;
        padding: 0;
        outline: none;
        box-sizing: border-box;
        list-style: none;
        text-decoration: none;
    }

    .containerx {
        padding: 0 !important;
        position: relative;
    }

    html {
        font-size: 10px;
    }

    /* Header Section */

    .header{    
    width: 100%;
    height: 150vh;
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
        background-image: url(../../assets/images/1.jpg);
    }
    50%{
        background-image: url(../../assets/images/3.jpg);
    }
    100%{
        background-image: url(../../assets/images/4.jpg);
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
  @media (max-width:310px) {
    .banner h4{
      font-size: 5rem;
    }
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
      color: black;
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
    /* footer */
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


    /* main{            
    } */

    .gallery h1 {
        display: block;
        text-align: center;
    }

    .gallery {
        margin: 2rem;
        align-content: center;
        height: auto;
    }

    .gfb {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
    }

    .gallery .gfb img {
        float: left;
        width: 280px;
        padding: 3px;
        border-radius: 10px;
        filter: grayscale(100%);
        transition: .2s;
        flex: 1 1 20rem;
    }

    .gallery .gfb img:hover {
        filter: grayscale(0);
        transform: scale(0.9);
    }

    @media(max-width:1251px) {
        .gallery {
            width: auto;
            height: auto;
            margin: auto;
            text-align: center;
        }

        .gfb {
            justify-content: center;
        }
    }

    .container h1 {
        font-size: 5rem;
    }

    .container p {
        font-size: 3rem;
    }

    .container .btn {
        font-size: 3rem;
    }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<?php include('../section/header.php');?>

<body>

    <main>

        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Party Plot service</h1>
                    <p class="lead text-muted">
                        Shree Party Plot is a place where time transforms into treasure and adds magic to every moment
                        by making the events of life memorable and enriching. It is known for making all the difference
                        with unmatched ambiance and fascinating luxuries at one place. It is an experience that will
                        transcend and blend with your world and imagination- making it reality!

                    </p>
                    <p>
                        <a href="roomservices.php" class="btn btn-primary my-2">Book Now</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="gallery">
            <h1>Party plot Gallery</h1>
            <div class="gfb">
                <a href="../../assets/images/f1.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f1.jpg"></a>
                <a href="../../assets/images/f2.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f2.jpg"></a>
                <a href="../../assets/images/f3 (1).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (1).jpg"></a>
                <a href="../../assets/images/f3 (3).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (3).jpg"></a>
                <a href="../../assets/images/f3 (6).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (6).jpg"></a>
                <a href="../../assets/images/f3 (7).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (7).jpg"></a>
                <a href="../../assets/images/f3 (9).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (9).jpg"></a>
                <a href="../../assets/images/f3 (10).jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (10).jpg"></a>
                <a href="../../assets/images/f3 (11).JPG" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (11).jpg"></a>
                <a href="../../assets/images/f3 (12).JPG" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f3 (12).jpg"></a>
                <a href="../../assets/images/f5.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f5.jpg"></a>
                <a href="../../assets/images/f6.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                        src="../../assets/images/f6.jpg"></a>
            </div>
        </div>
        <script>
        document.querySelector(".hamburger-menu").addEventListener("click", () => {
            document.querySelector(".containerx").classList.toggle('change');
        });

        const dropdownItems = document.querySelectorAll('.dropdown-hover')

        dropdownItems.forEach(dropdownItems => {
            dropdownItems.addEventListener('mouseover', () => {
                dropdownItems.lastElementChild.style.cssText = 'opacity:1;visibility:visible'
            })
            dropdownItems.addEventListener('mouseout', () => {
                dropdownItems.lastElementChild.style.cssText = 'opacity:0;visibility:hidden'
            })
        })
        </script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
        AOS.init({
            duration: 1000
        });
        </script>

    </main>

    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <script src="../../assets/js/j3.js"></script>
</body>
<?php include('../section/footer.php');?>

</html