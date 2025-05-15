<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<?php
    $con=mysqli_connect('127.0.0.1','root','','collegeproject');
    session_start();
    $user=$_SESSION["username"];
    // echo $user;
    // die;
    $str="select * from signupdetails where username='".$user."'";
    $data=mysqli_query($con,$str);
    $row=mysqli_fetch_array($data);
    $email=$npwd=$ncpwd='';
    if(isset($_POST['btnup']))
    {
        $email=$_POST['mail'];
        $npwd=$_POST['npassword'];
        $ncpwd=$_POST['ncpassword'];
        if((!empty($email)) && (!empty($npwd)) && (!empty($ncpwd)))
        {
            if($email==$row['email'])
            {
                $update="update signupdetails set password='".$npwd."',cpaasword='".$ncpwd."' where email ='".$email."'";
                mysqli_query($con,$update);
                if(isset($user))
                {
                    header('location:profile.php');
                }
                else
                {
                    header('location:login.php');
                } 
            }
            else
            {
                ?>
                <script>alert("Enter correct Email...");</script>
                <?php
            }
        }
        else
        {
            ?>
                <script>alert("Please Enter Details...");</script>
            <?php
        }
    }
?>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="loginl.jpg" alt="">
        </div>
        <div class="text-center mt-4 name">
            Forgot Password
        </div>
        <form class="p-3 mt-3" method="POST">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="mail" id="mail" placeholder="E-mail">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="npassword" id="npwd" placeholder="Enter new Password">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="ncpassword" id="ncpwd" placeholder="confirm-Password">
            </div>
            <button class="btn mt-3" name="btnup">OK</button>
        </form>
        <div class="text-center fs-6">
            <a href="login.php">Login</a> or  <a href="signup.php">Sign up</a>
        </div>
    </div>
</body>
</html>