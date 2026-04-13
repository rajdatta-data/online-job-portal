<?php 
session_start();
if($_SESSION['uid']=="")
{
 header("Location:admin_login.htm");
}
else
{
    $name=$_SESSION['uid'];
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>admin</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="myproject123.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="jquery-3.3.1.js"></script>

     <style>
   
    input[type=Text],input[type=email],input[type=password]
      {
    height:40px;
    width:95%;
    background-color:   #D3D3D3;
    padding: 10px;
    border-radius: 10px;
 

}
    

    .login {
        height: 80%;
        width: 40%;
        color: black;
        border-radius: 10px;
        padding-left: 7%;
        padding-right: 7%;
        padding-top: 5%;
        padding-bottom: 10%;
        margin-right:50%; 
        margin-left:50%;
        margin-top: 5%;
        margin-bottom: 5%;
    }

    .p4 {
        margin-right: 30%;
    
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .pic {
        height: 80%;
        margin-top: -10%;
        background-image: url('myimages/web2.jpg');
        background-size: cover;
    }

    .f1
    {
        margin-top: -10px;
    }
    p{
  margin-left: 10px;
  color: white;
}
.button1 {
        background-color:orange;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    width: 95%;
    height:40px;
    opacity: 0.9;
     margin-left: 3px;
     border-radius: 10px;
}
h3
{
    color:black;
    margin-top: 20px;
}
h2
{
    color:white;
    margin-top: 10px;
  
}


    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
        <div class="container-fluid cf">

<div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>                        
                    </button>

                    <a class="navbar-brand" href="#"><p><font size="5" color="white"><center>ONLINE JOB PORTAL</center></font></p></a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                   <ul class="nav navbar-nav navbar-center">
     
                         <li ><a href="index.htm"><font color="white"> Home</font></a></li>

                           <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="white">JobSeekers<span class="caret"></span></font></a>
        
                               <ul class="dropdown-menu">
                                 <li><a href="admin_fresher.php">Fresher</a></li>
                                 <li><a href="admin_professional.php">Professional</a></li>
                                 
                                </ul>
                                  </li>
                                    <li><a href="admin_company.php"> <font color="white">Companies</font></a></li>
                                    
                                   <li><a href="admin_jobs.php"> <font color="white">Company Jobs</font></a></li>
                                     <li ><a href="admin_putjob.php"> <font color="white">Post Job</font></a></li>
                                     

                                   </ul>

                                <ul class="nav navbar-nav navbar-right">
                                <li><br><span class="glyphicon glyphicon-user" color="white"></span>
                
                <?php echo $name; ?></li>
                <li class="active"><a href="admin_changepassword.php"> <font color="white"><span class="glyphicon glyphicon-lock"></span> Change Password</font></a></li>
                                 <li><a href="logout.php"> <font color="white"><span class="glyphicon glyphicon-log-out"></span> Logout</font></a></li>
                                   
                                </ul>
                     </div>
               </div>
     </nav>

    <form method="POST" action="" enctype="multipart/form-data">

<div class="pic">
      <center> <div class="fluid-container p4 ">
        <div class="login">
          <div class="input-group">
                    <center><img src="myimages/loginimg.png" height="100%" width="100%" class="img-circle"></center>
                  </div>
                    <br>
                    <div class="input-group">
                    <h2><center><b>Admin<br>Change Password</b></center></h3>
                  </div><br>
          
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" name="email" placeholder="Enter your email" class="input-sm">
                </div><br>
                
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-briefcase"></i></span>
         <input type="password" name="pass1" placeholder="Enter your old password"> 
     </div><br>
            <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="Password" name="pass2"  placeholder="Enter your new Password" class="input-sm">
                </div><br>
          
                 <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="Password" name="pass3" placeholder="Enter your Confirm Password" class="input-sm">
                </div><br>
                <button type="submit" name="submit" class="button1">Submit</button>
                </div></div></center></div>
</div>


                    

                    
    
</form>
        
        
              <!--footer-->

<div class="container-fluid text-center  footer123 f1">
  <h2>STAY CONNECTED</h2>
  <h4>Service We provide</h4>
  <br><br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon fa-2x glyphicon-earphone""></span>
      <a href="contactus.php"><font color="white"><h4>CONTACT Us</h4></font></a>
    
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-heart"></span>-->
      <i class="fas fa-2x fa-address-book"></i>
      <a href="aboutus.htm"><font color="white"><h4>ABOUT Us</h4></font></a>
    
    </div>
    <div class="col-sm-4">
<i class="fas fa-2x fa-building"></i>
      <a href="mycompany.htm"><font color="white"><h4>COMPANY</h4></font></a>

    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon fa-2x glyphicon-home"></span>
      <a href="index.htm"><font color="white"><h4>HOME</h4></font></a>
      
    </div>
    <div class="col-sm-4">
      <span class="glyphicon fa-2x glyphicon-log-out"></span>
      <a href="logout.php"><font color="white"><h4>LOGOUT</h4></font></a>
    </div>
    <div class="col-sm-4">
    <i class="fas fa-2x fa-comment-alt"></i>
<a href="feedback123.php"><font color="white"><h4 >FEEDBACK</h4></font></a>
    
    </div>
  </div>
</div>


<?php
include("config.php");
if(isset($_POST['submit']))
   {
    $email=$_POST['email'];
    $pass1=$_POST['pass1'];
    $pass2=$_POST['pass2'];
    $pass3=$_POST['pass3'];
  

    
        if ($pass2==$pass3) 
        {
            $qr="update myadmin set Password='".$pass2."' where Username='".$email."'";
            $query=mysqli_query($conn,$qr);
            if ($query==true) 
            {
                echo "<script>alert('Password Change successfully');</script>";
            }
            else
            {
                echo "<script>alert('Password Change Failed');</script>";
            }
        }
    }
    
?>




</body>
</html>

