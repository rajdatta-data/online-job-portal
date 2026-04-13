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
  	
  	.bg1{
	background-color: black;
	height: 100%;
	width:100%;
	margin-top: -20px;
}
table{

  background-color: grey;
  color:black;
  margin-top: 5%;
  margin-bottom: 5%;
  width: 80%;
  border: 1px solid black;
  border-radius: 10px;
  font-size: 18px;
  padding: 10px;

}
table tr{
  background-color:#1b7e7e; 
}
table tr th{
	height: 50px;
	padding: 10px;
	margin: 10px;
	text-align: center;
	font-weight: 20px;
	background-color: #1b7e7e;
	border-radius: 10px;
	color: black;
}

h1{
      color: white;
      text-align: center;
    }

table tr th:hover{
	height: 50px;
	padding: 10px;
	margin: 10px;
	text-align: center;
	font-weight: 20px;
	border-radius: 10px;
  font-size: 18px;
	color: black;
	background-color:white;
}

table tr td{
	height: 50px;
	padding: 10px;
	margin: 10px;
	text-align: center;
	font-weight: 20px;
	background-color:orange;
	
	color: white;
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
     
                         <li><a href="index.htm"><font color="white"> Home</font></a></li>

                           <li class="dropdown active"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="white">JobSeekers<span class="caret"></span></font></a>
        
                               <ul class="dropdown-menu">
                                 <li><a href="admin_fresher.php">Fresher</a></li>
                                 <li><a href="admin_professional.php">Professional</a></li>
                                 
                                </ul>
                                  </li>
                                    <li><a href="admin_company.php"> <font color="white">Companies</font></a></li>
                                    
                                   <li ><a href="admin_jobs.php"> <font color="white">Company Jobs</font></a></li>
                                     <li><a href="admin_putjob.php"> <font color="white">Post Job</font></a></li>
                                     

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
     <div class="container-fluid bg1">
       <h1> Fresher JobSeeker Detail</h1>
<center><table border="2">
			<tr>
				<th>Reg_no</th>
				<th>Name</th>
				<th>Email_id</th>
				<th>Password</th>
				<th>Mobile_no</th>
				<th>Current_location</th>	
				<th>Upload_resume</th>			
			</tr>
		<?php

			include("config.php");
			//require"config.php";
			//require_once("config.php");
			//$conn=mysqli_connect("localhost","root","","demo1");
			//if(!$conn)
			//{
				/*echo "not created";*/
			//}
			$q="select * from fresher";

			$query=mysqli_query($conn,$q);

			while($row=mysqli_fetch_array($query))
			{
			?>
				<tr>
					<td><?php echo $row['Reg_no'];?></td>
					<td><?php echo $row['Name'];?></td>
					<td><?php echo $row['Email_id'];?></td>
					<td><?php echo $row['Password'];?></td>
					<td><?php echo $row['Mobile_no'];?></td>
					<td><?php echo $row['Current_location'];?></td>
					<td><?php echo $row['Upload_resume'];?></td>
					
				</tr>
				
				<?php
			}
			mysqli_close($conn);
		
				?>
				</table></center>
			</div>
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




			</body>
				</html>

