<?php     include 'database.php';     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head><body style="background-color: grey;">
<?php   include 'navbar.php';
$srchquery = $_GET['query'];
$sql="SELECT * FROM `ques` WHERE match (`title`,`question`) against ('$srchquery')";
$result=mysqli_query($con,$sql);
echo '<h2 class="m-2 mx-4">Search Results for <em>"'.$srchquery.'"</em></h2>'; 
$rows=mysqli_num_rows($result);
if($rows>0){
while($rows=mysqli_fetch_assoc($result)){
      echo '<div class=" m-2 px-4 py-3 bg-dark text-white  rounded-4">
<div class="d-flex justify-content-between"> 
<a href="quesexplore.php?quesid='.$rows['sno'].'" style="text-decoration:none;color:white">
<h5 class="text-decoration-none" >' . $rows['title'] .'</h5></a></div>
<p>'.$rows['question'].'</p>
  <div class="my-2 d-flex justify-content-between"><span>Posted By:  <strong class="text-light" > ' . $rows['user'] . '</strong></span>
  <span>Uploaded on: <b>'.substr($rows['date_time'],0,10).'</b></span></div></div>';}}
include 'footer.php';?>
<script src="bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script></body></html>