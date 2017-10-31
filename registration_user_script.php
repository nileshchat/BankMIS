<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"demo");

$name = $_POST['name'];
$accountnumber = $_POST['accountnumber'];
$DOB = $_POST['DOB'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$address = $_POST['address'];
$balance = $_POST['balance'];

$query = "INSERT INTO userreg (name,accountnumber,DOB,email,contact,address,balance) VALUES('".$name."','".$accountnumber."','".$DOB."','".$email."','".$contact."','".$address."','".$balance."')";

if(!mysqli_query($con,$query))
{
    echo 'Sorry ! Something Went Wrong .';
}
else
{
    /*session_start();
    $SESSION['name'] = $name;
    header("location: successfullyregistered.php");*/
    echo 'SUCCESSFUL';
}
?>

