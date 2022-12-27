<?php  
    if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'database.php';
        $email=$_POST['email'];
        $name=$_POST['name'];
        $ph=$_POST['ph'];
        $query=$_POST['querry'];
        $sesql="SELECT * FROM `signup` WHERE `email`='$email' ";
        $result= mysqli_query($con,$sesql);
        $serows=mysqli_num_rows($result);
        if($serows==1){
            // INSERTION------
            $qsql="INSERT INTO `query`(`name`, `email`, `ph_no`, `query`) VALUES ('$name','$email','$ph','$query')";
            $qresult= mysqli_query($con,$qsql);
            $qrows=mysqli_num_rows($qresult);
            session_start();
                    $_SESSION['sub'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $rows['name'];
                    header('location:contact.php');              }
                else {header('location:contact.php?ctc=true');} }?>