<?php  
include 'database.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['email'];
    $password=$_POST['password'];
$logsql="SELECT * FROM `signup` WHERE `email`='$email'";
$result=mysqli_query($con,$logsql);
$lnum=mysqli_num_rows($result);
if($lnum==1){
        while($rows = mysqli_fetch_assoc($result)) {
            if(password_verify($password, $rows['password'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['lemail'] = $email;
                $_SESSION['name'] = $rows['name'];
                header('location:index.php');}   }}
else{
    header('location:index.php?logerror=true');}}?>