<?php 
$con=mysqli_connect('127.0.0.1','root','','collegeproject'); 

session_start(); 
if(!isset($_SESSION["username"]) && $_SESSION["username"]== '') {
    header('location:login.php');
} 