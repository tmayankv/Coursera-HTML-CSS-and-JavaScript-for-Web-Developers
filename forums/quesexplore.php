<?php     include 'database.php';     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    </head>
<body style="background-color: grey;">
    <?php     include "navbar.php";       ?>
<div class="container">
<?php 
$id=$_GET['quesid'];
$quesql="SELECT * from `ques` WHERE `sno`='$id'";
$qresult=mysqli_query($con,$quesql);
$qrow=mysqli_fetch_assoc($qresult);
echo'<div class="m-2 my-4 px-4 py-3 rounded-4" id="quesstyle" style="background:linear-gradient(to top, #121a30 34%, #245294 106%);color:white; box-shadow:8px 8px 15px black"">
<div class="d-flex justify-content-between"> 
<div>Question-<h2>['.$qrow['question'].']</h2></div>
  <span>Posted on: '.substr($qrow['date_time'],0,11).'</b></span></div>
  <div class="my-2">Posted by: <span> <strong> '.$qrow['user'].'</strong></span></div></div>';
?><?php
if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)){
  $_SESSION['id']=$id;
  echo'<form action="anshandle.php" method="post">
<div class="mb-2">
<label for="formGroupExampleInput2" class="form-label">Post Your Answer here</label>
<input type="text" class="form-control" id="formGroupExampleInput2" name="answer"></div>
<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-outline-dark rounded-4">Submit My Answer</button>  </div></form>'; }
 else{
  echo'<div class="m-5 px-5 py-3  text-dark rounded-5 d-flex justify-content-center" style="opacity:0.8;background-color:skyblue; box-shadow:8px 8px 15px black">
  <h1 >Please Signup/Login to \'ASK QUESTIONS\'</h1></div>';}
 ?><?php
$asql="SELECT * from `answers` WHERE `ques_id`='$id'";
$result=mysqli_query($con,$asql);
$qrows1=mysqli_num_rows($result);
if($qrows1>0){    echo'<h1 class="my-4 text-center" style="box-shadow: 5px 5px 15px black; border: 2px solid black ; border-radius: 20px; background: linear-gradient(to top, rgba(55, 109, 234, 0.683) 14%, rgb(234, 55, 55,0.683) 74%)">BROWSE ANSWERS BELOW</h1>';
while($qrows=mysqli_fetch_assoc($result)){
  echo' <div class=" m-2 px-4 my-3 py-3 text-white rounded-4"  style="background: linear-gradient(to top, rgba(20, 211, 68, 0.383) 20%, rgba(180, 40, 215, 0.483) 65%); box-shadow:7px 7px 15px black">
<div class="d-flex justify-content-between"> 
<h5 ><span class="text-dark">ANSWER- </span>'.$qrows['answer'].'</h5>
  <span><strong>Posted on </strong>'.substr($qrows['date'],0,10).'</span></div>
  <div class="my-2 text-dark">Posted By: <span class="text-light" > <strong> '.$qrows['user'].'</strong></span></div></div>';}}
else{   echo'<h2 class="text-center mt-2">No Answers founded for this Question</h2>';}
  include 'footer.php';?><div>
<script src="bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script></body></html>