<?php

session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<?php
echo'
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">SayFORUM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Topics
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Texplore.php?cateid=1">Python</a></li>
            <li><a class="dropdown-item" href="Texplore.php?cateid=3">Jquery</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="Btopics.php">More Topics Here.....</a></li>
          </ul>
        </li>
      </ul>';
      
include 'loginmodal.php';
include 'signupmodal.php';
echo'<form class="d-flex" action="search.php" method="get" role="search">
<input class="form-control me-2" type="search" placeholder="Search" id="mysh" name="query" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Search</button>
</form>';

if((isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)){
  echo'
  <p class="text-light my-0 mx-2 btn btn-success" style="border-radius:50%">'.$_SESSION['lemail'].'</p>
<a href="logout.php" class="btn btn-outline-success ml-2">Logout</a>
';
}

  else{
      echo'
        <button type="button" class="btn btn-outline-primary mx-1 my-1" data-bs-toggle="modal" data-bs-target="#signupModal">
  Signup
      </button>
<button type="button" class="btn btn-outline-primary my-1" data-bs-toggle="modal" data-bs-target="#loginModal">
  Login
</button>';
    }
    echo'
    </div>
  </div>
</nav>';

