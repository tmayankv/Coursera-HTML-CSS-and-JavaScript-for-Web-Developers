<?php  
    if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'database.php';
        $email=$_POST['email'];
        $password=$_POST['password'];
        $cpassword=$_POST['cpassword'];
        $name=$_POST['name'];
        $ph=$_POST['ph'];
        $sesql="SELECT * FROM `signup` WHERE `email`='$email'";
        $sere= mysqli_query($con,$sesql);
        $serows=mysqli_num_rows($sere);
        if($serows==0){
            // INSERTION------
            if(!$result && ($password==$cpassword) ){
                $hash=password_hash($password,PASSWORD_DEFAULT);
                $signsql="INSERT INTO `signup`(`email`, `password`, `ph_no`, `name`) VALUES ('$email','$hash','$ph','$name')";
                $result=mysqli_query($con,$signsql); 
            session_start();
            $_SESSION['email']=$email;
            header('Location:index.php?successsignup=true');}
        else{   header("Location:index.php?successsignup=false&error"); }}}
?>