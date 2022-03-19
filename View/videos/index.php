<?php 
session_start();
include('../../config/config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lightbox.min.css">
    <script src="lightbox-plus-jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Slab:ital,wght@0,400;0,500;1,300;1,400;1,500&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" type="text/css" href="index.css">
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">

    <title>Video Gallery</title>
    
</head>
<?php include('../section/header.php');?>

<body>
    <div class="container1">
        <div class="heading">Video Gallery</div>
        <div class="video-container">
            <div class="vid">
                <video src="../../assets/images/video_1.MOV" controls='controls' autoplay='autoplay' loop='loop'
                    width="300"></video>
            </div>
            <div class="vid">
                <video src="../../assets/images/video_2.MOV" controls='controls' autoplay='autoplay' loop='loop'
                    width="300"></video>
            </div>
            <div class="vid">
                <video src="../../assets/images/video_3.MOV" controls='controls' autoplay='autoplay' loop='loop'
                    width="300"></video>
            </div>
            <div class="vid">
                <video src="../../assets/images/video_4.MOV" controls='controls' autoplay='autoplay' loop='loop'
                    width="300"></video>
            </div>
            <div class="vid">
                <video src="../../assets/images/video_5.MOV" controls='controls' autoplay='autoplay' loop='loop'
                    width="300"></video>
            </div>
            <div class="vid">
                <video src="../../assets/images/video_6.mp4" controls='controls' autoplay='autoplay' loop='loop'
                    width="300"></video>
            </div>
        </div>
    </div>
    </div>
</body>
<?php include('../section/footer.php');?>

</html>