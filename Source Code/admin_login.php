<?php
    session_start();
    include( "config.php");
    $uname=$_POST['name'];
    $pass=$_POST['pass'];
     $sql="SELECT * FROM myadmin WHERE Username='$uname' AND Password='$pass'";
     $result=$conn->query($sql);
     if(!$row=$result->fetch_assoc())
     {
        echo "<script>alert('not match')</script>";
        header("location:admin_login.htm");
        //header("Location:error.php");
     }
     else
     {
       $uname=$row['Name'];
       $_SESSION['uid']=$uname;
     header("location:admin_putjob.php");
     }





?>