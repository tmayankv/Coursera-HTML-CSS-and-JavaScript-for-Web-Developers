<?php   include 'database.php';   ?>
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
<?php   include "navbar.php";   ?> 
<div class="container">
  <?php   if(isset($__SESSION['quesupload']) && $_SESSION['quesupload']==true){
   echo'<div class="alert alert-warning alert-dismissible fade show m-0" role="alert" style="position:absolute;top:50px;z-index:5;width:100%;height:50px;opacity:0.8">
   <strong>Congrats!</strong>Your has been successfully Uploaded.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';}
$id=$_GET['cateid'];
$tsql="SELECT * from `topics` WHERE `sno`='$id'";
$result=mysqli_query($con,$tsql);
$rows=mysqli_fetch_assoc($result);
$title = $rows['title'];
echo'<div class="my-3 px-5 py-3 bg-dark text-white rounded-3">
  <h1 class="text-center">'.$rows['title'].' Forums</h1>
  <p class="text-center"><em>'.$rows['description'].'</em></p></div>';?>
<!-- SUBMITTING QUESTIONS -->
<?php if(isset($_SESSION['loggedin']) && ($_SESSION['loggedin']==true)){
  $_SESSION['id']=$id;
  echo'<form action="queshandle.php" method="post">
  <div class="mb-3">
<label for="formGroupExampleInput" class="form-label">Enter topic of your Question</label>
<input type="text" class="form-control" name="qtitle" id="formGroupExampleInput"></div>
<div class="mb-2">
<label for="formGroupExampleInput2" class="form-label">Ask Your Question here</label>
<input type="text" class="form-control" id="formGroupExampleInput2" name="ques"></div>
<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-dark mt-2 rounded-5">Submit My Question</button>  </div></form>'; }
 else{
  echo'<div class="m-5 px-5 py-3 text-black rounded-5 d-flex justify-content-center " style="opacity:0.8;background-color:skyblue; box-shadow:8px 8px 15px black">
  <h1 style="opacity:1"><em>Please Signup/Login to \'ASK QUESTIONS\'</em></h1></div>';}?>
<?php     // SECTION OF QUESTIONS AND DISCUSSION-------
$qsql="SELECT * from `ques` WHERE `catid`='$id'";
$result=mysqli_query($con,$qsql);
$qrows1=mysqli_num_rows($result);
if($qrows1>0){ 
  echo'<h1 class="my-4 py-2 text-center" style="box-shadow: 5px 5px 15px black; border: 2px solid black ; border-radius: 20px; background: linear-gradient(to top, rgba(55, 109, 234, 0.683) 14%, rgb(234, 55, 55,0.683) 74%)" ><em>BROWSE QUESTIONS BELOW</em></h1>';
while($qrows=mysqli_fetch_assoc($result)){
  echo'<div class="m-2 my-4 px-4 py-3 rounded-4" id="quesstyle" style="background:linear-gradient(to top, #121a30 34%, #245294 106%);color:white; box-shadow:8px 8px 15px black"">
<div class="d-flex justify-content-between"> 
<h5 >'.$qrows['title'].'</h5>
  <span>Uploaded on <b>'.substr($qrows['date_time'],0,10).'</b></span></div>
   <a href="quesexplore.php?quesid='.$qrows['sno'].'" class="text-decoration-none text-warning d-inline"><h3 class="my-3 d-inline"><em>'.$qrows['question'].'</em></h3><a>
  <div class="my-2">Uploaded By: <span> <strong> '.$qrows['user'].'</strong></span></div>
  <a href="quesexplore.php?quesid='.$qrows['sno'].'" class="text-decoration-none"><button class="btn btn-outline-primary rounded-5">Answers</button> </a></div>';?>
<?php }}else{
  echo'<h1 class="text-center mt-2">No results for '.$title.' here </h1>';
}?></div>
<?php   include "footer.php"    ?>
<script src="bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script></body></html>