<?php
$con=mysqli_connect('127.0.0.1','root','','collegeproject');
            
session_start();
$user=$id=$pay='';
if(isset($_GET['bname']))
{
    $user=$_GET['bname'];
    $qry="select * from bookingdetails where name='".$user."'";
    $data=mysqli_query($con,$qry);
    $row=mysqli_fetch_array($data);
    $id=$row[0];
}
else
{
    $user='';
}
if(isset($_POST['pay']))
{
    $pay=$_POST['payment_type'];
    $str="insert into payment values(NULL,'".$_POST['user']."','".$pay."','".$_POST['Amount']."','".$_POST['Discount']."','".$_POST['Total']."')";
    mysqli_query($con,$str);
    header('location:admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script>
        function cal()
        {
            var amount=document.getElementById("Amount").value;
            var discount=document.getElementById("Discount").value;

            var total=amount-(amount*discount/100);

            document.getElementById("Total").value=total;
            // alert(amount);
            // alert(discount);
        }
    </script>
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center">Payment</h1>
<form method="POST" >
    <div class="form-group mt-2">
      <label for="User">Userid </label>
      <input type="text" class="form-control mt-2" value="<?php echo $id;?>" id="user" name="user">
    </div>
<div class="form-group mt-4">
      <label>payment_type</label>
      <select class="form-control mt-2"  name="payment_type">
        <option value="Cash">Cash</option>
        <option value="Online">Online</option>
      </select>
    </div>
    <div class="form-group mt-2">
      <label for="Amount">Amount</label>
      <input type="text" class="form-control mt-2" id="Amount" placeholder="Enter Amount" name="Amount" onkeyup="cal();">
    </div>
    <div class="form-group mt-2">
      <label for="Discount">Discount</label>
      <input type="text" class="form-control mt-2" id="Discount" placeholder="Enter Discount" name="Discount" onkeyup="cal();">
    </div>
    <div class="form-group mt-2">
      <label for="Total">Total</label>
      <input type="text" class="form-control mt-2" id="Total" placeholder="Total" name="Total">
    </div>
    <button type="submit" class="btn btn-outline-primary mt-2" name="pay">Payment Go</button>
  </form>    
  </div>
</body>
</html>
