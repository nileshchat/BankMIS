<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"demo");

$accountnumber = $_POST['accountnumber'];
$name = $_POST['name'];
$amount = $_POST['depositedamount'];

$query = "INSERT INTO transaction (accountnumber,name,MOT,amount) VALUES ('".$accountnumber."','".$name."','deposit','".$amount."')";

if(!mysqli_query($con,$query))
{
    echo 'Sorry ! Something Went Wrong.';
}
else
{
   /*session_start();
   $_sessTransaction['name'] = $name;
    header("location: deposit_complete.php");*/
    echo 'Successfully Deposited!!';
}
?>