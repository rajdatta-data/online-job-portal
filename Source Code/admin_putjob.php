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
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="myproject123.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="jquery-3.3.1.js"></script>
   <style>
   
   input[type=Text]
      {
    height:40px;
    width:100%;
    background-color:   #D3D3D3;
    padding: 10px;
    border-radius: 10px;

}
    

    .login {
        height: 100%;
        width: 70%;
        color: black;
        border-radius: 10px;
        padding-left: 7%;
        padding-right: 7%;
        padding-top: 5%;
        padding-bottom: 10%;
        margin-right:35%; 
        margin-left:35%;
        
        margin-bottom: 8%;
        
    }

    .p4 {
        margin-right: 30%;
    
        padding-top: 10%;
        padding-bottom: 10%;
    }

    .pic {
        height: 100%;
        margin-top: -10%;
        background-image: url('myimages/wed1.jpg');
        background-size: cover;
    }

    .f1
    {
      margin-top: -1%;
    }
    p{
  margin-left: 10px;
  color: black;
}
.button1 {
    background-color:orange;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    height:40px;
    opacity: 0.9;
     margin-left: 3px;
     border-radius: 10px;
}
h2
{
    color:black;
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
                                     <li class="active"><a href="admin_putjob.php"> <font color="white">Post Job</font></a></li>
                                     

                                   </ul>

                                <ul class="nav navbar-nav navbar-right">
                                <li><br><span class="glyphicon glyphicon-user" color="white"></span>
                
                <?php echo $name; ?></li>
                <li><a href="admin_changepassword.php"> <font color="white"><span class="glyphicon glyphicon-lock"></span> Change Password</font></a></li>
                                 <li><a href="logout.php"> <font color="white"><span class="glyphicon glyphicon-log-out"></span> Logout</font></a></li>
                                   
                                </ul>
                     </div>
               </div>
     </nav>

<form method="POST" action="" enctype="multipart/form-data">

<div class="pic">

        <div class="fluid-container p4">
            
              
               <div class="login">
                <h1><center><b>Edit New Job</b></center></h1><br><br>
                    <h2><center><b>Company Job Detail</b></center></h2>
                    <br>
                    
                         <p><label for="Company Name"><b> Company Name</b></label><br></p>
                        <input type="text" placeholder="Enter company name" name="name1">
                    
                    <br><br>
                    
                         <p><label for="Email_id"><b>Email_id</b></label><br></p>
                        <input type="text" placeholder="Enter Your email" name="email" >
                
                    <br>
                    <br>
                         <p><label for="Name"><b> Job Title</b></label><br></p>
                        <input type="text" placeholder="Enter your job type" name="title">
                    
                    <br><br>

              
                         <p><label for="Name"><b> Job Location</b></label><br></p>
                        <input type="text" placeholder="Job Location" name="location">
                    
                    <br><br>

                    
                         <p><label for="Name"><b>Job Salary</b></label><br></p>
                        <input type="text" placeholder="salary" name="salary" >
                    
                    <br><br>

                         <p><label for="Name"><b>Candidate Qualification</b></label><br></p>
                        <input type="text" placeholder="enter qualification"  name="qualification">
                    
                    <br><br>
                  
                         <p><label for="Name"><b> Experience</b></label><br></p>
                        <input type="text" placeholder="experience" name="experience">
                    
                    <br><br>
                    
           <button type="submit" name="submit" class="btn btn-primary button1">Post Job</button></a>
                </div>



                    

                    
    
</div>
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
if(isset($_POST['submit']))
    {
      $name1=$_POST['name1'];
      $email=$_POST['email'];
    $title=$_POST['title'];
    $location=$_POST['location'];
    $salary=$_POST['salary'];
    $qualification=$_POST['qualification'];
    $experience=$_POST['experience'];
  

    
    
    
    include("config.php");
    
  
     //$conn=mysqli_connect("localhost","root","","demo1") or die("conection is not establish");
      
      $q="insert into companyjob(Company_name,Email_id,job_title,job_location,job_salary,candidate_qualification,candidate_experience) values('".$name1."','".$email."','".$title."','".$location."','".$salary."','".$qualification."','".$experience."');";
      echo $q;
      $query=mysqli_query($conn,$q);
      echo $query;
      if($query==true)
      {
        echo "uploaded";
      }
      else
      {
        echo "not uploaded";
      }

  mysqli_close($conn);
}


?>

</body>
</html>
