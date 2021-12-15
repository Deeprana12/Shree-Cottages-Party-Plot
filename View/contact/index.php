<?php
session_start();
error_reporting(0);
include('../config/config.php');
if(isset($_POST['send']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phonenumber=$_POST['phonenumber'];
$message=$_POST['message'];
$sql="INSERT INTO tblcontactusquery(Firstname,Lastname,Emailid,Phonenumber,Message) VALUES ('$firstname','$lastname','$email','$phonenumber','$message')";
$query = $dbh->prepare($sql);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':phonenumber',$phonenumber,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Query Sent. We will contact you shortly";
}
else 
{
$error="Something went wrong. Please try again";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400;500;600;700;800&family=Mulish:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700;900&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

  <!-- Glidejs StyleSheet -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css" />

    
    
<style>
    
     .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
    .succWrap{
        padding: 10px;
        margin: 0 0 20px 0;
        background: #fff;
        border-left: 4px solid #5cb85c;
        -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
        box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    }
 </style>

</head>
<body>
    <?php include('../section/header.php');?>
    </div>
    <section>
        <div class="container">
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                    <ul class="info">
                        <li>
                            <span><img src="../../assets/contactus/location.png"></span>
                            <span>Veraval Road,Opp.Navjivan School<br>
                                Talala-Gir<br>
                                Dist:Gir Somanath.</span>
                        </li>
                        <li>
                            <span><img src="../../assets/contactus/mail.png"></span>
                            <span>kishanpatel3721@gmail.com</span>
                        </li>
                        <li>
                            <span><img src="../../assets/contactus/call.png"></span>
                            <span> 9427424157</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="contactForm">
                <h2>Send a message</h2>
                <form Action="" method="POST">
                
                <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
                 else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
                <div class="formBox">
                
                    <div class="inputBox w50">
                        <input type="text" class="input" id=" first_name" name="firstname" required="required">
                        <span>First Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" class="input" id="last_name" name="lastname" required="required">
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="email"  class="input" id="email" name="email" required="required">
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" class="input" id="phone_number" name="phonenumber" required="required">
                        <span>Phone Number</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea name="message" class="input" id="message" required="required"></textarea>
                        <span>Write your message here....</span>
                    </div>
                    <div class="inputBox w100">
                    <input type="submit"  class="input" name="send" value="submit">
                    </div>
                
                </div> 
                </form>     
         </div>
        </div>
    </section>  
    <div class="cprt" style="height:auto;padding:15px;background-color:#24262b;">
        <p style="margin-bottom:0.2rem;color:white;display:block;text-align:center;">
            © Copyright 2021 Shree cottages & party plot. All rights reserved.
        </p>
    </div>     
    
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/slick.min.js"></script> 
<script src="../../assets/js/j3.js"></script>
</body>
</html>