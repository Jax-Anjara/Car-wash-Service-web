<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    $u1=$u2=$u3=$u4=$u5='';
    session_start();
    $con=mysqli_connect('127.0.0.1','root','','collegeproject');
    if(isset($_GET['id']))
    {
        $str="select * from signupdetails where id='".$_GET['id']."'";
        $data=mysqli_query($con,$str);
        $row=mysqli_fetch_array($data);
        $u1=$row[1];
        $u2=$row[2];
        $u3=$row[3];
        $u4=$row[4];
        $u5=$row[5];
    }
    if(isset($_POST['btnlogin']))
    {
        if(isset($_GET['id']))
        {
            $str="update signupdetails set username='".$_POST['userName']."',email='".$_POST['mail']."',contact='".$_POST['contactno']."',password='".$_POST['password']."',cpaasword='".$_POST['cpassword']."'  where id='".$_GET['id']."' ";
            mysqli_query($con,$str);
            $_SESSION["username"]=$_POST['userName'];          
            header('location:profile.php');
        }
        else
        {
            $s="insert into signupdetails values(NULL,'".$_POST['userName']."','".$_POST['mail']."','".$_POST['contactno']."','".$_POST['password']."','".$_POST['cpassword']."')";
            mysqli_query($con,$s);
            ?>
            <script>alert("Record inserted successfully...");</script>
            <?php
        }
    }
?>
</head>
<style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding: 25px;
    text-align: center;
    color: #555;
}

.wrapper .form-field input {
    padding: 17px 30px 17px 10px !important;
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 15px;
  
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #081e2e;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
    letter-spacing: 1.3px;
    text-decoration: none;
    border: 0px;
    
    margin-bottom: 15px;
}



.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="loginl.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Sign up
        </div>
        <form class="p-3 mt-3" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="userName" id="userName" value="<?php echo $u1;?>" placeholder="Username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="email" name="mail" id="mail" value="<?php echo $u2;?>" placeholder="E-mail">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="contactno" id="contactno" value="<?php echo $u3;?>" placeholder="contact">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" value="<?php echo $u4;?>" placeholder="Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="cpassword" id="cpwd" value="<?php echo $u5;?>" placeholder="Confirm-Password">
            </div>
            <button class="btn mt-3" name="btnlogin">Sign Up</button>
        </form>
        <div class="text-center fs-6">
            <a href="forgot.php">Forget password?</a> or <a href="login.php">log in</a>
        </div>
    </div>
</body>
</html>