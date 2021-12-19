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
    <!-- <link rel="stylesheet" href="lightbox.min.css"> -->
    <!-- <script src="lightbox-plus-jquery.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Yesteryear&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">
</head>

<body>

    <?php include('../section/header.php');?>
    </div>
    <!-- Gallery section -->
    <div class="gallery">
        <h1>Gallery</h1>
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
            <a href="../../assets/images/f3 (12).JPG" data-lightbox="mygallery" data-aos="fade-up"><img
                    src="../../assets/images/f3 (12).jpg"></a>
            <a href="../../assets/images/f5.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                    src="../../assets/images/f5.jpg"></a>
            <a href="../../assets/images/f6.jpg" data-lightbox="mygallery" data-aos="fade-up"><img
                    src="../../assets/images/f6.jpg"></a>
        </div>
    </div>
    <!-- ------------ -->
    <?php include('../section/footer.php');?>
</body>

</html>