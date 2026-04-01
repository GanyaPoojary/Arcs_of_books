<?php
include '../config.php';
$admin = new Admin();//used to interact with db
if(isset($_POST['signin'])){ //checking login form is submitted
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $stmt=$admin->ret("SELECT * FROM `user` WHERE `u_mail`='$email' and `u_pass`='$password'");
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    echo $num=$stmt->rowCount();//return no of row affected by the statement
    if($num>0){
        $uid=$row['u_id'];
        $_SESSION['u_id']=$uid;
        echo "<script>alert('Login successfull!');window.location='../show.php'</script>";
    }
    else
    {
        echo "<script>alert('Incorrect email or password.Try again');window.location='../index.php'</script>";   
    }
}
?>