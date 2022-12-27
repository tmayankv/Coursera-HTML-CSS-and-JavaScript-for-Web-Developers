<?php include 'database.php';?>
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></head>
<body style="background-color: grey;">
  <?php include "navbar.php";
if (isset($_GET['successsignup']) && $_GET['successsignup'] == true) {
  echo '<div class="alert alert-success alert-dismissible fade show m-0" role="alert" id="sig" style="position:absolute;top:50px;z-index:5;width:100%;height:50px;opacity:0.8">
  <strong>Congrats! </strong>' . $_SESSION['email'] . 'You have successfully Registered.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo '<div class="alert alert-warning alert-dismissible fade show m-0" id="log" role="alert" style="position:absolute;top:50px;z-index:5;width:100%;height:50px;opacity:0.8">
    <strong>Congrats! </strong><i>' . $_SESSION['lemail'] . '</i>  You have successfully logged in.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';}

if (isset($_GET['logerror']) && $_GET['logerror'] == true) {
  echo '<div class="alert alert-warning alert-dismissible fade show m-0" id="log" role="alert" style="position:absolute;top:50px;z-index:5;width:100%;height:50px;opacity:0.8">
    Failed! You have entered incorrect username or password.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';}

if (isset($_GET['loggedout']) && $_GET['loggedout'] == true)
  echo '<div class="alert alert-success alert-dismissible fade show m-0 d-flex" id="out" role="alert" style="position:absolute;top:50px;z-index:5;width:100%;height:50px;opacity:0.8">
  <strong>Congrats!</strong>You have been logged out.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';?>
  <!-- Carsouel after navbar -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button></div>
    <div class="carousel-inner"><div class="container-fluid">
        <div class="carousel-item active">
          <img src="images/1.jpg" class="d-block" alt="..." style="width:100%;height:82vh;z-index:10">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgba(0, 0, 0, 0.555);margin:0px 100px;border-radius:30px">
            <h5>Build A Logic</h5>
            <p>Build and Help others to crack a query/logic in which you were stucked earlier.</p></div></div>
        <div class="carousel-item">
          <img src="images/2.jpg" class="d-block w-100" alt="..." style="width:100%;height:82vh">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgba(0, 0, 0, 0.555);margin:0px 100px;border-radius:30px">
            <h3>Team Work Always pays Off</h3>
            <p>Interact with Your Fellow mates here and do logic building ask and reply any query here.</p></div></div>
        <div class="carousel-item">
          <img src="images/3.jpg" class="d-block w-100" alt="..." style="width:100%;height:82vh">
          <div class="carousel-caption d-none d-md-block"
            style="background-color: rgba(0, 0, 0, 0.555);margin:0px 100px;border-radius:30px">
            <h5>Solve and Build Your Website</h5>
            <p>Much more guidance and helful to access anytime/anywhere .</p></div></div></div></div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span></button></div>
  <div class="intro m-4 p-2"
    style="border:2px solid black; border-radius:20px; background:linear-gradient(to bottom, #121a30 34%, #826641 74%);color:white; box-shadow: 10px 20px 25px black; ">
    <h1 class="text-center">Little to Know About SayForum</h1>
    <hr class="container" style="color:yellow;">
    <p class="text-center"><i>SayForum is a Trustful Site made specially for you and your day-to-day need. All the 
      content either it is your code or it is a question will be given by your fellow mates who are currently solving the problems you might have.Each question and answer is uploaded by all of you and for other benefits and make queries a slight easy to do.</i></p></div>
  <h1 class="text-center py-2 container" id="tt"  style="box-shadow: 5px 5px 15px black; border: 2px solid black ; border-radius: 20px; background: linear-gradient(to top, rgba(55, 109, 234, 0.683) 14%, rgb(234, 55, 55,0.683) 74%)">Browse Topics Here</h1>
  <div class="container-fluid d-flex flex-wrap justify-content-center">
    <?php
$resql = 'SELECT * from `topics`';
$result = mysqli_query($con, $resql);
while ($rows = mysqli_fetch_assoc($result)) {
  echo '
  <div class="card m-3 text-center d-flex align-items-center " style="width: 20rem;border-radius:50px 5px;background:linear-gradient(to top, #121a30 14%, #126641 56%,orange 83%);color:white; box-shadow: 8px 8px 25px black ">
    <img src="images/' . $rows['title'] . '.jpg" class="card-img-top p-3" alt="..." style="width:50%;display:flex;align-self:center">
    <div class="card-body ">
      <h5 class="card-title">' . $rows['title'] . '</h5>
      <p class="card-text">' . substr($rows['description'], 0, 50) . '.......</p>
      <a href="Texplore.php?cateid=' . $rows['sno'] . '" class="btn btn-outline-primary">Explore</a></div>
      </div>';}?>
  </div><?php
include "footer.php";
echo '<script type="text/Javascript">
setInterval(() => {
  log.classList.add("d-none")
}, 2500);

setInterval(() => {
  sig.classList.add("d-none")  
}, 2500);

setInterval(() => {
  out.classList.add("d-none")  
}, 2500);

let colo = tt.style.color
tt.addEventListener("mouseover", function(){
tt.style.color="white"});

tt.addEventListener("mouseout", function(){
  tt.style.color=colo});
</script>';?>
  <script src="bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>