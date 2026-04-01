<?php
include '../config.php';
$admin= new Admin();
if(isset($_POST['buy'])){//checking buy form is submitted
    $name=$_POST['name'];//retrive
    $address=$_POST['add'];
    $phone=$_POST['phone'];
    $email=$_POST['email']; 
    //this variable is used to store the result of the cud method call.
    $stmt=$admin->cud("INSERT INTO `buy` (`name`,`address`,`phone`,`email`)VALUES('$name','$address','$phone','$email')","inserted");
    echo "<script>alert('Ordered Successfully');window.location='../show.php';</script>";
     }
?>

