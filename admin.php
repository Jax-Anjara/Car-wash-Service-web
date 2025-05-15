<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="style.css">
     
    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Admin Dashboard Panel</title> 
    <script>
        $(document).ready(function(){
            $('#t1').hide();
            $('#t2').hide();
            $('#t3').hide();
            $('#t4').hide();
            // $('#t7').hide();
            $('.culd').hide();
            $('.bod').hide();
            $('.curd').hide();
            $('.pay').hide();
            // $('.report').hide();

            $('.cld').click(function(){
                $('#t3').fadeOut(function(){
                    $('#t4').fadeOut(function(){
                        $('#t2').fadeOut(function(){
                            $('#t7').fadeOut(function(){
                                $('.bod').fadeOut(function(){
                                    $('.pay').fadeOut(function(){
                                        $('.report').fadeOut(function(){
                                            $('.curd').fadeOut(function(){
                                                $('.culd').fadeIn(function(){
                                                    $('#t1').fadeIn();
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            }); 

            $('.bd').click(function(){
                $('#t1').fadeOut(function(){
                    $('#t3').fadeOut(function(){
                        $('#t4').fadeOut(function(){
                            $('#t7').fadeOut(function(){
                                $('.culd').fadeOut(function(){
                                    $('.pay').fadeOut(function(){
                                        $('.report').fadeOut(function(){
                                            $('.curd').fadeOut(function(){
                                                $('.bod').fadeIn(function(){
                                                    $('#t2').fadeIn();
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            }); 

            $('.cr').click(function(){
                $('#t2').fadeOut(function(){
                    $('#t4').fadeOut(function(){
                        $('#t1').fadeOut(function(){
                            $('#t7').fadeOut(function(){
                                $('.culd').fadeOut(function(){
                                    $('.pay').fadeOut(function(){
                                        $('.report').fadeOut(function(){
                                            $('.bod').fadeOut(function(){
                                                $('.curd').fadeIn(function(){
                                                    $('#t3').fadeIn();
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });
            
            $('.pr').click(function(){
                $('#t1').fadeOut(function(){
                    $('#t2').fadeOut(function(){
                        $('#t3').fadeOut(function(){
                            $('#t7').fadeOut(function(){
                                $('.culd').fadeOut(function(){
                                    $('.report').fadeOut(function(){
                                        $('.bod').fadeOut(function(){
                                            $('.curd').fadeOut(function(){
                                                $('.pay').fadeIn(function(){
                                                    $('#t4').fadeIn();
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            }); 

            $('.repo').click(function(){
                $('#t1').fadeOut(function(){
                    $('#t2').fadeOut(function(){
                        $('#t3').fadeOut(function(){
                            $('#t4').fadeOut(function(){
                                $('.culd').fadeOut(function(){
                                    $('.bod').fadeOut(function(){
                                        $('.curd').fadeOut(function(){
                                            $('.pay').fadeOut(function(){
                                                $('.report').fadeIn(function(){
                                                    $('#t7').fadeIn();
                                                    $('#t7').show();
                                                });
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            }); 

        });
    </script>
</head>
<?php 
    // if(isset($_POST['out']))
    // {
    //     header('location:login.php');
    // }
?>
<body>
<form method="POST">
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="logo.png" alt="">
            </div>

            <span class="logo_name">BROTOMOTIVE</span>
        </div>
        
        <div class="menu-items" style="position: relative; right: 29px; line-height: 18px;">
            <ul class="nav-links">
                <li><a href="javascript:;">
                    <i class="uil uil-estate cld"></i>
                    <span class="link-name cld">CUSTOMER LOGIN DETAILS</span>
                </a></li>
                <li><a href="javascript:;">
                    <i class="uil uil-files-landscapes bd"></i>
                    <span class="link-name bd">BOOKING DETAILS</span>
                </a></li>
                <li><a href="javascript:;">
                    <i class="uil uil-chart cr"></i>
                    <span class="link-name cr">CUSTOMER REGISTRAION</span>
                </a></li>
                <li><a href="javascript:;">
                    <i class="uil uil-chart pr"></i>
                    <span class="link-name pr">PAYMENT DETAILS </span>
                </a></li>
                <li><a href="javascript:;">
                    <i class="uil uil-chart repo"></i>
                    <span class="link-name repo">REPORT </span>
                </a></li>
                <!--<li><a href="#">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Like</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-share"></i>
                    <span class="link-name">Share</span>
                </a></li>
            </ul>-->
            
            <ul class="logout-mode" style="position: relative; right: 29px;line-height: 18px;">
            
                <li><a href="login.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name" name="out">Logout</span>
                </a></li>
                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle" style="position: relative; left: 12px;">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" name="contact" placeholder="Search here...">
            </div>
            <div>
            <input type="submit" name="search" class="btn btn-outline-success" value="Booking Search">
            </div>
            <div>
            <input type="submit" name="psearch" class="btn btn-outline-info" value="Payment Search">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                
            </div>

            <div class="activity">
                <div class="title">
                    <!--<i class="uil uil-clock-three"></i>-->
                    <h1 class="culd">&nbsp;&nbsp;&nbsp;Customer Login Details</h1>
                    <h1 class="bod">&nbsp;&nbsp;&nbsp;Booking Details</h1>
                    <h1 class="curd">&nbsp;&nbsp;&nbsp;Customer Details</h1>
                    <h1 class="pay">&nbsp;&nbsp;&nbsp;Payment Details</h1>
                    <h1 class="report">&nbsp;&nbsp;&nbsp;REPORT</h1>
                </div> 


                <!-- Searching code -->
                <?php 
                    $con=mysqli_connect('127.0.0.1','root','','collegeproject');
                    if(isset($_POST['search']))
                    {
                        $svalue=$_POST['contact'];
                        $search="select * from bookingdetails where contact ='".$svalue."'";
                        $input=mysqli_query($con,$search);
                        $count=mysqli_num_rows($input);
                        if($count>0)
                        {
                        //echo $search;die;   
                ?>
                <div class="activity-data" id="t5">
                    <table class="table">
                        <thead class="table-dark" style="text-align : center;">
                        <tr>
                            <th>Customer_id</th>
                            <th>Customer_Name</th>
                            <th>Customer_Email</th>
                            <th>Customer_Contact</th>
                            <th>Customer_Car_No</th>
                            <th>Customer_Car_type</th>
                            <th>Appointment_date</th>
                            <th>Prefered_type</th>
                            <th>Customer_Adrress</th>
                            <th>Action</th>
                            <th>Payment</th>
                        </tr>
                        </thead>
                        <tbody style="text-align : center;">
                            <?php 
                            while($output=mysqli_fetch_array($input))
                                {   
                                ?>
                                <tr>
                                    <td><?php echo $output[0]; ?></td>
                                    <td><?php echo $output[1]; ?></td>
                                    <td><?php echo $output[2]; ?></td>
                                    <td><?php echo $output[3]; ?></td>
                                    <td><?php echo $output[4]; ?></td>
                                    <td><?php echo $output[5]; ?></td>
                                    <td><?php echo $output[6]; ?></td>
                                    <td><?php echo $output[7]; ?></td>
                                    <td><?php echo $output[8]; ?></td>
                                    <td><a href="delete.php?did=<?php echo $output[0]; ?>" onclick="return confirm('You want to delete?.. ');" class="btn btn-outline-danger">Delete</a></td>
                                    <td><a href="payment.php?bname=<?php echo $output[1]; ?>" class="btn btn-outline-info">Pay</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php
                        }else
                        {
                            echo "<div class='alert alert-danger'>No record found</div>";
                        }
                    }
                ?>
                
                <?php 
                    if(isset($_POST['psearch']))
                    {
                        $pvalue=$_POST['contact'];
                        // echo $pvalue;die;
                        $psearch="select * from bookingdetails,payment where bookingdetails.id=payment.bid and bookingdetails.contact ='".$pvalue."'";
                        $pinput=mysqli_query($con,$psearch);
                        $pcount=mysqli_num_rows($pinput);
                        if($pcount>0)
                        {
                        //echo $search;die;
                         
                ?>
                <div class="activity-data" id="t6">
                    <table class="table">
                        <thead class="table-dark" style="text-align : center;">
                        <tr>
                            <th>Customer_id</th>
                            <th>payment_type</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody style="text-align : center;">
                            <?php 
                            while($poutput=mysqli_fetch_array($pinput))
                                {   
                                ?>
                                <tr>
                                    <td><?php echo $poutput['name']; ?></td>
                                    <td><?php echo $poutput['payment_type']; ?></td>
                                    <td><?php echo $poutput['total']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php
                        }else
                        {
                            echo "<div class='alert alert-danger'>No record found</div>";
                        }
                    }
                ?>
                    <?php
                        $ptotal='';
                        if(isset($_POST['psearch']))
                        {
                            $total="select sum(payment.total) as total_payment from bookingdetails,payment where bookingdetails.id=payment.bid and bookingdetails.contact ='".$_POST['contact']."'";
                            $ptotal=mysqli_query($con,$total);
                            $paydata=mysqli_fetch_array($ptotal);
                            ?>
                            <div class='alert alert-info'>Total Payment till now : <?php echo $paydata['total_payment']; ?></div>
                        <?php
                        }
                    ?>
                <!-- Searching code -->

                <!-- After only Show code -->

                <div class="activity-data" id="t1">
                <table class="table">
                    <thead class="table-dark" style="text-align : center;">
                    <tr>
                        <th>Emp_profile</th>
                        <th>Emp_id</th>
                        <th>Emp_name</th>
                    </tr>
                    </thead>
                    <tbody style="text-align : center;">
                        <tr>
                            <td>Default</td>
                            <td>Defaultson</td>
                            <td>def@somemail.com</td>
                        </tr>
                    </tbody>
                </table>
                </div>
                    
                <div class="activity-data" id="t2">
                <table class="table">
                    <thead class="table-dark" style="text-align : center;">
                    <tr>
                        <th>Customer_id</th>
                        <th>Customer_Name</th>
                        <th>Customer_Email</th>
                        <th>Customer_Contact</th>
                        <th>Customer_Car_No</th>
                        <th>Customer_Car_type</th>
                        <th>Appointment_date</th>
                        <th>Prefered_type</th>
                        <th>Customer_Adrress</th>
                        <th>Action</th>
                        <th>Payment</th>
                    </tr>
                    </thead>
                    <tbody style="text-align : center;">
                    <?php 
                            $qry="select * from bookingdetails";
                            $da=mysqli_query($con,$qry);
                            //$q="select * from payment";
                            //$o=mysqli_query($con,$q);
                        ?>
                        <?php 
                        while($r=mysqli_fetch_array($da))
                            {   
                            ?>
                        <tr>
                            <td><?php echo $r[0]; ?></td>
                            <td><?php echo $r[1]; ?></td>
                            <td><?php echo $r[2]; ?></td>
                            <td><?php echo $r[3]; ?></td>
                            <td><?php echo $r[4]; ?></td>
                            <td><?php echo $r[5]; ?></td>
                            <td><?php echo $r[6]; ?></td>
                            <td><?php echo $r[7]; ?></td>
                            <td><?php echo $r[8]; ?></td>
                            <td><a href="delete.php?did=<?php echo $r[0]; ?>" onclick="return confirm('You want to delete?.. ');" class="btn btn-outline-danger">Delete</a></td>
                            <td><a href="payment.php?bname=<?php echo $r[1]; ?>" class="btn btn-outline-info">Pay</a></td>
                        </tr>
                        <?php } ?>
    </tbody>
                </table>
                </div>
                <div class="activity-data" id="t3">
                <table class="table">
                    <thead class="table-dark" style="text-align : center;">
                    <tr>
                        <th>UserName</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Password</th>
                        <th>Confirm password</th>
                    </tr>
                    </thead>
                    <tbody style="text-align : center;">
                        <?php 
                            $str="select * from signupdetails";
                            $data=mysqli_query($con,$str);
                        ?>
                        <?php while($row=mysqli_fetch_array($data))
                            {
                            ?>
                        <tr>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            <td><?php echo $row[4]; ?></td>
                            <td><?php echo $row[5]; ?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
                </div>
                <?php
                            $query="select * from bookingdetails,payment where bookingdetails.id=payment.bid";
                            $o=mysqli_query($con,$query);
                        ?>
                <div class="activity-data" id="t4">
                    <table class="table">
                        <thead class="table-dark" style="text-align : center;">
                        <tr>
                            <th>Customer_name</th>
                            <th>payment_type</th>
                            <th>Amount</th>
                            <th>Discount</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody style="text-align : center;">
                        <?php
                                while($w=mysqli_fetch_array($o))
                                {   
                                ?>
                            <tr>
                            <td><?php echo $w['name']; ?></td>
                                <td><?php echo $w['payment_type']; ?></td>
                                <td><?php echo $w['amount']; ?></td>
                                <td><?php echo $w['discount']."%"; ?></td>
                                <td><?php echo $w['total']; ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- REPORT -->
                
                <?php 
                    if(isset($_POST['report_search']))
                    {
                        $sdt=$_POST['sdt'];
                        $edt=$_POST['edt'];
                        $st=date("m/d/Y", strtotime($sdt));
                        $ed=date("m/d/Y", strtotime($edt));
                        $qryreport="SELECT * FROM bookingdetails,payment WHERE bookingdetails.id=payment.bid AND bookingdetails.appdate >= '".$st."' AND bookingdetails.appdate <='".$ed."'";
                        $report_data=mysqli_query($con,$qryreport);
                        $report_count=mysqli_num_rows($report_data);
                    }
                ?>

                <div id="t7">
                    <div class="row">
                        <div class="col-lg-4"> 
                            <div class="form-group">
                                <label>Date of Registration :</label>
                                <input type="date" name="sdt" id="sdt" class="form-control" Required>
                            </div> 
                        </div> 
                        <div class="form-group col-lg-4">
                          <label for="Adt">
                            <b>Searching Ending Date</b>
                          </label>
                          <input type="date" class="form-control" name="edt" id="edt" required>
                        </div>
                        <div class="form-group col-lg-4 mt-4">
                          <input type="submit" value="report_search" class="form-control btn btn-outline-primary" name="report_search" >
                        </div>
                    </div>
                    <?php if(isset($_POST['report_search'])) { ?>
                    <div class="activity-data mt-5">
                        <table class="table">
                            <thead class="table-dark" style="text-align : center;">
                            </thead>
                            <tbody style="text-align : center;">
                                <?php while($report_row=mysqli_fetch_array($report_data)) {?>
                                <tr>
                                    <td><?php echo $report_row['name']; ?></td>
                                    <td><?php echo $report_row['appdate']; ?></td>
                                    <td><?php echo $report_row['total']; ?></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <?php } ?>
                
                    <div>
                    <?php 
                        if(isset($_POST['report_search']))
                        {
                            $sdt=$_POST['sdt'];
                            $edt=$_POST['edt'];
                            $st=date("m/d/Y", strtotime($sdt));
                            $ed=date("m/d/Y", strtotime($edt));
                            $report_qry="SELECT sum(payment.total) as report_total FROM bookingdetails,payment WHERE bookingdetails.id=payment.bid AND bookingdetails.appdate >= '".$st."' AND bookingdetails.appdate <='".$ed."'";
                            $data_report=mysqli_query($con,$report_qry);
                            $count_report=mysqli_num_rows($data_report);
                            $report_row=mysqli_fetch_array($data_report);
                            if($report_row>0)
                            {
                                ?>
                                <div class='alert alert-info'>Total Payment of the selected duration  : <?php echo $report_row['report_total']; ?></div>
                            <?php
                            } 
                            else
                            {
                                ?>
                                <div class='alert alert-danger'>Value not Found </div>
                            <?php
                            }
                        }
                    ?>
                    </div>
                </div>
                
                <!-- End REPORT -->
            </div>
        </div>
    </section>
    

    <script src="script.js"></script>
</form>
</body>
</html>