<?php
    
    include 'includes/config.php';
    
    $selectq=" select * from tblbooking ";
    $q=mysqli_query($dbh,$selectq);
    $nums=mysqli_num_rows($q);
    echo $nums;
    
?>