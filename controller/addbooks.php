<?php
include '../config.php';
$admin= new Admin();//used to interact with db
$id=$_SESSION['a_id'];

if(isset($_POST['add'])){//checking add form is submitted
    $name=$_POST['name'];
    $img=$_POST['img'];
    $type=$_POST['type'];
    $amt=$_POST['price'];
    $img="upload/".basename($_FILES['img']['name']);//This retrieves the original name of the uploaded file 
    move_uploaded_file($_FILES['img']['tmp_name'],$img);// This function moves the uploaded file from its temporary location
    $stmt=$admin->cud("INSERT INTO `adbook`(`a_id`,`a_name`, `img`,`type`, `price`) VALUES('$id','$name','$img','$type','$amt')","inserted");
        //this variable is used to store the result of the cud method call.
     echo "<script>alert('Uploaded Successfully');window.location='../show.php';</script>";
}
?>