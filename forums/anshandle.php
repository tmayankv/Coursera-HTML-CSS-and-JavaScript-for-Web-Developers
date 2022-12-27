<?php 
include 'database.php';

$answer=$_POST['answer'];
session_start();
$user=$_SESSION['lemail'];
$id=$_SESSION['id'];

$asql="INSERT INTO `answers`(`ques_id`, `answer`, `user`, `date`) VALUES ('$id','$answer','$user',CURRENT_DATE())";
$result=mysqli_query($con,$asql);


if($result){
    header("Location:quesexplore.php?quesid=$id");
}


?>