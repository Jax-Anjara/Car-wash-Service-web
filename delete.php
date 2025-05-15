<?php
    $con=mysqli_connect('127.0.0.1','root','','collegeproject');
    $del=$_GET["did"];
    $delete="delete from bookingdetails where id=".$del;
    mysqli_query($con,$delete);
    header('location:admin.php');
?>