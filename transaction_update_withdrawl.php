<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"demo");

$accountnumber = $_POST['accountnumber'];
$name = $_POST['name'];
$amount = $_POST['withdrawlamount'];

$query = "INSERT INTO transaction (accountnumber,name,MOT,amount) VALUES ('".$accountnumber."','".$name."','withdrawl','".$amount."')";

if(!mysqli_query($con,$query))
{
    echo 'Sorry ! Something Went Wrong.';
}
else
{
   /*session_start();
   $_SESSION['name'] = $name;
    header("location: withdrwal_complete.php");*/
    echo 'Successfully Withdrawl !!';
}
?>