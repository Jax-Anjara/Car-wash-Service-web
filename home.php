<?php
$con=mysqli_connect('127.0.0.1','root','','collegeproject');
            
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="p2.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="Stylesheet" type="text/css" />
    <title>Car wash</title> <?php
            
            $u1=$u2=$u3=$u4=$u5='';
            $u0=$v='';
            if(isset($_POST['prof']))
            { 
              $_SESSION["username"];
              header('location:profile.php');
            }
            // echo $_SESSION["username"];
            // die;
            if(isset($_SESSION["username"]))
            {
              // echo $_SESSION["username"];
              // die;
              $str="select * from signupdetails where username ='".$_SESSION["username"]."'";
              $data=mysqli_query($con,$str);
              $row=mysqli_fetch_array($data);
              $u0=$row[0];
              $u1=$row[1];
              $u2=$row[2];
              $u3=$row[3];
              $u4=$row[4];
              $u5=$row[5];
            }
            $st="select * from bookingdetails";
            $dat=mysqli_query($con,$st);
            //$r=mysqli_fetch_array($dat);
          
            if(isset($_POST['reg']))
            {
                $sql="select * from bookingdetails where pretime='".$_POST['predt']."' and appdate='".$_POST['adt']."'";
                $data=mysqli_query($con,$sql);
              
                $count=mysqli_num_rows($data);
                //echo $count;die;
                if($count>0)
                {?>
                  <script> 
                  alert("already taken");
                </script> 
                <?php }
                else
                {
                  ?>
                  <script> 
                  alert("Booking successfully..");
                </script> 
                <?php
                    $qry="insert into bookingdetails values(NULL,'".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['Carno']."','".$_POST['cartype']."','".$_POST['adt']."','".$_POST['predt']."','".$_POST['address']."','".$u0."')";
                      //echo $qry;die;    
                    $test=mysqli_query($con,$qry); 
                    // $_SESSION["username"]=$_POST['name']; 
                    // header('location:booking.php');
                }
          }
             
          ?>
  </head>
  <body>
    <div class="background">
      <div class="header">
        <div class="container pad ">
          <div class="navbars sticky">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-md-3 col-sm-5">
                  <div class="logo">
                    <a href="home.php">
                      <img src="logo.png">
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-sm-2">
                  <div class="menu">
                    <ul>
                      <li>
                        <a href="#home"> Home </a>
                      </li>
                      <li>
                        <a href="#service"> Our Services </a>
                      </li>
                      <li>
                        <a href="#aboutus"> About Us </a>
                      </li>
                      <li>
                        <a href="#contact">Booking </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <?php 
                  
                ?>
                <div class="col-md-3 col-sm-5">
                  <div class="social ">
                    <ul> 
                      <?php if(isset($_SESSION["username"]) && $_SESSION["username"]!= '') 
                      { ?> 
                        <a href="login.php">
                        <img style="width:25px;" src="logg.png">
                        Sign Out </a>

                        <a href="profile.php">
                            <img style="width:25px;" src="user.png"><?php echo $_SESSION["username"];?>
                        </a>
                      <?php 
                      } else {
                          ?> 
                          <a href="login.php"><button>
                          <img src="user.png">Login </button></a>
                       <?php 
                    }?>
                    </ul>
                  </div>
                </div>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container pad ">
        <div class="slider" id="home">
          <div class="slider1 fade-in-imagem ">
            <div class="p1">We Love To Make</div>
            <div class="p2">Your Car Shine</div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-3">
            <div class="box1">
              <div class="sec1">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</p>
                <div class="hov">
                  <button>
                    <img src="next.png">Learn more </button>
                </div>
              </div>
              <div class="sec2">
                <img src="star.png">
                <img src="star.png">
                <img src="star.png">
                <img src="star.png">
                <img src="star.png">
                <h2>23 Years</h2>
                <h5>Experience</h5>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="sl-img">
              <div class="fade-in-image">
                <img src="sl-1.png">
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box3">
              <div class="test">
                <img src="quote-left.png">
                <h2>Because Your Car Deserves a Bath</h2>
              </div>
              <div class="sec3">
                <img src="Screenshot 2024-07-19 164333.png">
                </br>
                <div class="display">
                  <h2>100+</h2>
                  <h5>/Happy Client</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section1">
        <div class="back rad" id="service">
          <div class="container pad">
            <div class="slider2 fade-in-imagem">
              <div class="p1">Bringing the Shine</div>
              <div class="p2">For Your Car</div>
            </div>
            <div class="row bot ">
              <div class="col-md-4 hov">
                <div class="1box">
                  <div class="titleb">
                    <h2>Professional Services</h2>
                  </div>
                  <div class="descb">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                  <div class="descb bord1">
                    <img src="b1.jpg">
                  </div>
                </div>
                <div class="bbttnn">
                  <img src="1.jpg">
                </div>
              </div>
              <div class="col-md-4 hov">
                <div class="1box 2box">
                  <div class="titleb">
                    <h2>High-End Equipment</h2>
                  </div>
                  <div class="descb">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                  <div class="descb bord11">
                    <img src="b2.jpg">
                  </div>
                </div>
                <div class="bbttnn">
                  <img src="1.jpg">
                </div>
              </div>
              <div class="col-md-4 hov">
                <div class="1box 3box">
                  <div class="titleb">
                    <h2>Competitive Pricing</h2>
                  </div>
                  <div class="descb">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                  <div class="descb bord1">
                    <img src="b3.jpg">
                  </div>
                </div>
                <div class="bbttnn">
                  <img src="1.jpg">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section2">
        <div class="background" id="aboutus">
          <div class="container pad">
            <div class="row">
              <div class="col-md-6 ">
                <div class="box1">
                  <div class="slider6 fade-in-imagem">
                    <div class="p1">Quality Car Care</div>
                    <div class="p2">Every Time</div>
                  </div>
                  <div class="desc darkblue">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </br>Ut elit tellus luctus nec.Lorem ipsum dolor </br>sit amet, consectetur </h6>
                    <img src="Screenshot 2024-07-23 160539.png">
                  </div>
                  <div class="border"></div>
                  <div class="b">
                    <button>
                      <img src="next.png">Learn more </button>
                  </div>
                </div>
              </div>
              <div class="col-md-6 ">
                <div class="img fade-in-image">
                  <img src="Screenshot 2024-07-23 155928.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section3">
        <div class="back img">
          <div class="container pad">
            <div class="bord">
              <div class="slider2 slider5 fade-in-imagem ">
                <div class="p1">Because Your Car</div>
                <div class="p2">Deserves a Bath</div>
              </div>
              <div class="desc slider5">
                <h6>We offer a range of services, such as exterior washes, interior cleaning, detailing, and waxing. </br>Ut elit tellus luctus nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </h6>
                <button>
                  <img src="next.png">Learn more </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section4">
        <div class="container pad">
          <div class="slider slider3 fade-in-imagem">
            <div class="p1">Make Them Choose</div>
            <div class="p2">Your Services</div>
          </div>
          <div class="row3">
            <div class="row">
              <div class="col-md-4">
                <div class="s3box1">
                  <div class="bimg">
                    <img src="car-wash.png">
                    <p>Reservation</p>
                  </div>
                  <div class="bdec">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                  </div>
                  <div class="bprice">
                    <img src="dollar-symbol.png">
                    <h2>20</h2>
                    <h5>/Services</h5>
                  </div>
                  <div class="hov paddy ">
                    <button> Get Package <img src="next.png">
                    </button>
                  </div>
                  <div class="bbody">
                    <p>Top wash Package </p>
                    <ul>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="s3box1 s3box2">
                  <div class="bimg">
                    <img src="car-wash (1).png">
                    <p>Reservation</p>
                  </div>
                  <div class="bdec">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                  </div>
                  <div class="bprice col">
                    <img src="dollar-symbol (1).png">
                    <h2>30</h2>
                    <h5>/Services</h5>
                  </div>
                  <div class="hov paddy ">
                    <div class="colourb">
                      <button> Get Package <img src="next.png">
                      </button>
                    </div>
                  </div>
                  <div class="bbody">
                    <p>Full wash Package </p>
                    <ul>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="s3box1">
                  <div class="bimg">
                    <img src="car-wash.png">
                    <p>Reservation</p>
                  </div>
                  <div class="bdec">
                    <h5>Lorem ipsum dolor sit amet.</h5>
                  </div>
                  <div class="bprice">
                    <img src="dollar-symbol.png">
                    <h2>50</h2>
                    <h5>/Services</h5>
                  </div>
                  <div class="hov paddy ">
                    <button> Get Package <img src="next.png">
                    </button>
                  </div>
                  <div class="bbody">
                    <p>Premium wax Package </p>
                    <ul>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                      <li>
                        <img src="arrow-right.png">Sed ut perspiciatis unde
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section5">
        <div class="back2 rad ">
          <div class="container pad">
            <div class="slider4">
              <div class="p1">How It Work For</div>
              <div class="p2">Car For Shine</div>
            </div>
            <div class="row bot">
              <div class="col-md-4 hov">
                <div class="1box colo">
                  <div class="desc">
                    <img src="11.jpg">
                  </div>
                  <div class="titleb darkblue">
                    <h2>Professional Services</h2>
                  </div>
                  <div class="descb darkblue">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 hov">
                <div class="1box colo">
                  <div class="desc">
                    <img src="2.jpg">
                  </div>
                  <div class="titleb darkblue">
                    <h2>Professional Services</h2>
                  </div>
                  <div class="descb darkblue">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                </div>
              </div>
              <div class="col-md-4 hov">
                <div class="1box colo">
                  <div class="desc">
                    <img src="3.jpg">
                  </div>
                  <div class="titleb darkblue">
                    <h2>Professional Services</h2>
                  </div>
                  <div class="descb darkblue">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section6">
        <div class="back rad ">
          <div class="container pad">
            <div class="slider2 slider5">
              <div class="p1">Customer Reviews</div>
              <div class="p2">Your Review Proves</div>
            </div>
            <div class="row bot">
              <div class="col-md-6">
                <div class="1box bk ">
                  <div class="des">
                    <img src="quote.png">
                  </div>
                  <div class="descb">
                    <h6>Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                  <img src="testi.png">
                </div>
              </div>
              <div class="col-md-6">
                <div class="1box bk">
                  <div class="des">
                    <img src="quote.png">
                  </div>
                  <div class="descb">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus luctus nec.</h6>
                  </div>
                  <img src="testi.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section7">
        <div class="container">
          <div class="search" id="contact">
            <div class="row">
              <div class="col-lg-6">
                <div class="paddiingg">
                  <div class="add">
                    <div class="single-cta">
                      <i class="fas fa-map-marker-alt"></i>
                      <div class="cta-text">
                        <h4>Find us</h4>
                        <span>G-20, Siddhi Residency, Pal Gam, Surat, Gujarat</span>
                      </div>
                    </div>
                  </div>
                  <div class="phn">
                    <div class="single-cta">
                      <i class="fas fa-phone"></i>
                      <div class="cta-text">
                        <h4>Call us</h4>
                        <span>9876543210</span>
                      </div>
                    </div>
                  </div>
                  <div class="mail">
                    <div class="single-cta">
                      <i class="far fa-envelope-open"></i>
                      <div class="cta-text">
                        <h4>Mail us</h4>
                        <span>brotomotiv346@gmail.com</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 ">
                <div class="form">
                  <form action="" method="POST">
                    <div class="container pad rad">
                      <div class="slider6 slid">
                        <div class="p1">Book your slot</div>
                      </div>
                      <div class="Cont">
                        <label for="name">
                          <b>Name</b>
                        </label>
                        <input type="text" placeholder="Enter Full Name" value="<?php echo $u1; ?>" name="name" id="name" required>
                        <label for="email">
                          <b>Email</b>
                        </label>
                        <input type="text" placeholder="Enter Email" value="<?php echo $u2;?>" name="email" id="email" required>
                        <label for="contact">
                          <b>Contact</b>
                        </label>
                        <input type="text" placeholder="Enter Contact" name="contact" value="<?php echo $u3;?>" id="con" required>
                        <div class="form-group">
                          <label for="Carno">
                            <b>Car No.</b>
                          </label>
                          <input type="text" placeholder="GJ XX CA 0000" name="Carno" id="Carno" required>
                        </div>
                        <div class="form-group">
                          <label for="Cartype">
                            <b>Car Type</b>
                          </label>
                          <div class="dropdown">
                            <select class="form-control" id="Cartype" name="cartype">
                              <option value="Sedan">Sedan</option>
                              <option value="Suv">Suv</option>
                              <option value="Hatchback">Hatchback</option>
                              <option value="Coupe">Coupe</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="Adt">
                            <b>Appointment date</b>
                          </label>
                          <!-- <input type="date" name="adt" id="Cartype" required>  -->
                          <input type="text" class="form-control" name="adt" required id="datepicker" required placeholder="select booking date"> 
                        </div>
                        <div class="form-group">
                          <label for="Cartype">
                            <b>prefered Time </b>
                          </label> <?php
                          
                          $prefer="select * from prefered";
                          $p=mysqli_query($con,$prefer);
                          ?> <div class="dropdown">
                            <select class="form-control" id="Cartype" name="predt"> 
                              <?php while($ro=mysqli_fetch_array($p)){ ?>
                              <option value="<?php echo $ro[1]; ?>"> <?php echo $ro[1]; ?> </option> 
                              <?php } ?> </select>
                          </div>
                        </div>
                        <label for="Address">
                          <b>Address</b>
                        </label>
                        <input type="text" placeholder="Enter Your Address" name="address" id="Address" required>
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>. </p>
                        <button type="submit" class="registerbtn" name="reg">Register</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer-section rad">
        <div class="container pad">
          <div class="footer-content pt-5 pb-5">
            <div class="row padd">
              <div class="col-xl-4 col-lg-4 mb-50">
                <div class="footer-widget">
                  <div class="footer-logo">
                    <a href="index.html">
                      <img src="logo.png" class="img-fluid" alt="logo">
                    </a>
                  </div>
                  <div class="footer-text">
                    <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing elit,Lorem ipsum dolor sit amet.</p>
                  </div>
                  <div class="footer-social-icon">
                    <span>Follow us</span>
                    <a href="#">
                      <i class="fab fa-facebook-f facebook-bg"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter twitter-bg"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-google-plus-g google-bg"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3>Useful Links</h3>
                  </div>
                  <ul>
                    <li>
                      <a href="#home"> Home </a>
                    </li>
                    <li>
                      <a href="#service"> Our Services </a>
                    </li>
                    <li>
                      <a href="#aboutus"> About Us </a>
                    </li>
                    <li>
                      <a href="#contact">Booking </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                <div class="footer-widget">
                  <div class="footer-widget-heading">
                    <h3>Subscribe</h3>
                  </div>
                  <div class="footer-text mb-25">
                    <p>Don’t miss to subscribe to our new feeds, kindly fill the form below.</p>
                  </div>
                  <div class="subscribe-form">
                    <form action="#">
                      <input type="text" placeholder="Email Address">
                      <button>
                        <i class="fab fa-telegram-plane"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-area">
          <div class="container pad">
            <div class="row">
              <div class="col-xl-12 col-lg-12 text-center text-lg-left">
                <div class="copyright-text">
                  <p>Copyright &copy; 2018, All Right Reserved brotomotiv</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script>
        
        // set minDate to 0 for today's date
       $('#datepicker').datepicker({ minDate: 0 });
      
    </script>
  </body>
</html>