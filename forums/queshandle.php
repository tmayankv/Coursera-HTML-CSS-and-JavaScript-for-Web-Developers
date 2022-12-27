<?php  
include "database.php";


if($_SERVER['REQUEST_METHOD']=='POST'){
    $qtitle=$_POST['qtitle'];
    $ques=$_POST['ques'];
    // $id=$_GET['cateid'];
   
    session_start();
           $username=$_SESSION['lemail'];
            $id=$_SESSION['id'];
    $sql="INSERT INTO `ques`(`title`, `question`, `catid`, `user`, `date_time`) VALUES ('$qtitle','$ques','$id','$username',CURRENT_DATE())";
        $result=mysqli_query($con,$sql);

            if($result){
                  session_start();
            $_SESSION['quesupload']=true;
                header("location:Texplore.php?cateid=$id");
            }
}

?>