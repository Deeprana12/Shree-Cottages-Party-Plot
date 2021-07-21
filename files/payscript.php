<?php
session_start();
error_reporting(0);
include('includes/config.php');
$apiKey = "rzp_test_MSHtaj41Ek0gm1";
if(isset($_POST['BookNow'])){
  
  // alert("Ypfb");
	$name=$_POST['Name'];
	$email=$_POST['email'];
	$phonenumber=$_POST['Phone'];
	$eventname=$_POST['Eventname'];
	$time=$_POST['Time'];
	$booking=$_POST['Booking'];
	$fromdate=$_POST['FromDate'];
	$todate=$_POST['ToDate'];
	$sql="INSERT INTO tblbooking(name,userEmail,phone,event,time,booking,FromDate,ToDate) VALUES ('$name','$email','$phonenumber','$eventname','$time','$booking','$fromdate','$todate')";
	$query = $dbh->prepare($sql);
	$query->bindParam(':Name',$name,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':Phone',$phonenumber,PDO::PARAM_STR);
	$query->bindParam(':Eventname',$eventname,PDO::PARAM_STR);
	$query->bindParam(':FromDate',$fromdate,PDO::PARAM_STR);
	$query->bindParam(':ToDate',$todate,PDO::PARAM_STR);
	$query->execute();      
  // $to_email = $_POST['email'];
  // $subject = "Booking at shree cottages!";
  // $body = "Yout booking is confirm! proceed to payment.";
  // $headers = "deeprana12357@gmail.com";

  // if (mail($to_email, $subject, $body, $headers)) {      
  // } else {
  //     echo "Failed";
  // }	
}
?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<form action="" method="POST">

    <script src="https://checkout.razorpay.com/v1/checkout.js"
      data-key="<?php echo $apiKey; ?>" 
      data-amount="5000" 
      data-currency="INR" 
      data-id="<?php echo 'OID'.rand(10,100).'END';?>"
      data-buttontext="Pay with Razorpay"
      data-name="Shree cottages"
      data-description="Training & Development!"
      data-image="https://traidev.com/img/web-desgin-development.png"
      data-prefill.name="<?php echo $_POST['name'];?>"
      data-prefill.email="<?php echo $_POST['email'];?>"
      data-prefill.contact="<?php echo $_POST['mobile'];?>"
      data-theme.color="#F37254"}>
    </script>

    <input type="hidden" custom="Hidden Element" name="hidden">    

</form>
