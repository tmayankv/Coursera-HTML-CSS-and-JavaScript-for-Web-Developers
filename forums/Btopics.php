<?php   include "database.php";     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color: grey;">    
    <?php       include "navbar.php";
$tsql="SELECT * from `topics`";
$result=mysqli_query($con,$tsql);
while($rows=mysqli_fetch_assoc($result)){
echo'
<div class="mx-3">
<a href="Texplore.php?cateid='.$rows['sno'].'" class="text-decoration-none"> 
<div class="my-3 px-5 py-3 bg-dark text-white rounded-3">
<img src="">
 <h1>'.$rows['title'].' Forums</h1>
  <p>'.$rows['description'].'</p>
</div>
</a>
</div>';}?></body></html>