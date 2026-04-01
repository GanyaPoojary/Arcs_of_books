<?php
include '../config.php';
$admin= new Admin();
// This checks if the sign-in form has been submitted (isset($_POST['signin'])). If it has, the email and password are retrieved from the form's POST data
if(isset($_POST['register'])){ 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['pass']; 
    $stmt1=$admin->ret("SELECT * FROM `user` WHERE `u_mail`='$email'");
    $row=$stmt1->fetch(PDO::FETCH_ASSOC);//interact with db
    $num=$stmt1->rowCount();//return no of row returned
    if($num>0){
        echo "<script>alert('Email Exists');window.location='../register.php'</script>";    
    }
    else {
    $stmt=$admin->cud("INSERT INTO `user`(`u_name`,`u_mail`,`u_pass`)VALUE('$name','$email','$password')","inserted");
     echo "<script>alert('Registerd Successfully');window.location='../login.php'</script>";
    }
}
?>