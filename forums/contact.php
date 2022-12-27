<?php     include "database.php"    ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: grey;">
<?php   include "navbar.php";
if(isset($_GET['ctc']) && $_GET['ctc']==true){
    echo'<div class="alert alert-danger alert-dismissible fade show m-0 d-flex" id="ctc" role="alert" style="position:absolute;top:50px;z-index:5;width:100%;height:50px;opacity:0.8"><strong>Failed!</strong>User doesn\'t exists.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';}?>
    <div class="container" style="color:white">
        <h1 class="text-center m-2">Contact Form</h1>
            <form action="./contacthandle.php" method="post" class=" mx-5 px-5 py-3 border" style="border-radius: 10px;background:linear-gradient(to top, #121a30 34%, #776641 94%);color:white">
  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text "> <em> We'll never share your email with anyone else.</em></div</div>
  <div class="mb-3">
      <label for="yname" class="form-label">Enter your name</label>
      <input type="text" class="form-control" id="yname" name="name" aria-describedby="emailHelp"></div>
    <div class="mb-3">
        <label for="myemail" class="form-label">Valid Phone No.</label>
        <input type="number" class="form-control" id="myemail" name="ph" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your Phn. no. with anyone else.</div></div>
    <div class="mb-3">
        <label for="querry" class="form-label">Enter Your Query </label>
        <textarea type="text" class="form-control" id="querry" name="querry" cols="30" rows="3"> </textarea></div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label></div>
    <button type="submit" class="btn btn-dark ">Submit</button>
  </form></div></div></div>
<?php include "footer.php";
echo'
<script>
setInterval(() => {
  ctc.classList.add("d-none")
}, 2500);   </script>';
?></body>
<script src="bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</html>