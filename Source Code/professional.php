<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="myproject123.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="jquery-3.3.1.js"></script>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] ,input[type=email],input[type=number],input[type=file]{
   width: 60%;
    padding: 15px;
    border-radius: 10px;
    display: inline-block;
    border: none;
    background-color:   #D3D3D3;
     margin-left: 20%;
     margin-right: 20%;
}
select{ 
    width:60%;
    padding: 15px;
    border-radius: 10px;
    display: inline-block;
    border: none;
    background-color:#D3D3D3;
     margin-left: 20%;
     margin-right: 20%;
}
#s2
{
    width: 24%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background-color: #D3D3D3;
     margin-left: 20%;
}
#s3
{
    width: 24%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background-color: #D3D3D3;
    margin-left: 1%; 
}

.p1{
  margin-left: 20%;
  color: white;
  font-size: 17px;

}



input[type=text]:focus, input[type=password]:focus,input[type=email]:focus,input[type=number]:focus ,input[type=file]:focus{
    background-color: #ddd;
    outline: none;
 margin-left: 50px;
}


/* Set a style for all buttons */
button {
     background-color: #FF8C00;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
    opacity: 0.9;
     margin-left: 20%;
     margin-right: 20%;
     border-radius:10px; 
}

button:hover {
    opacity:1;
}

.bgcolor{
  background-color: black;
  margin-top: -1.4%;
  padding-top:2%;
  padding-bottom: 10%; 
}
h1{
  color: white;
  size: 5%;
}

</style>
<body>



<form  method="POST" enctype="multipart/form-data" style="border:1px solid #ccc">
  
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
     
                         <li class="active"><a href="index.htm"><font color="white"> Home</font></a></li>

                           <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="white"> Jobs<span class="caret"></span></font></a>
        
                               <ul class="dropdown-menu">
                                <li><a href="job10.htm">10th Based</a></li>
                                 <li><a href="job12.htm">12th Based</a></li>
                                 <li><a href="job15.htm">Graguation Based</a></li>
                                 <li><a href="job17.htm"> Post Graguation Based</a></li>
                                 <li><a href="job123.htm">Others</a></li>
                                </ul>
                                  </li>
                                    <li><a href="mycompany.htm"> <font color="white">Companies</font></a></li>
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                       <font color="white">Location<span class="caret"></span></font></a>
        
                               <ul class="dropdown-menu">
                                 <li><a href="mumbai.html">Mumbai</a></li>
                                 <li><a href="pune.html">Pune</a></li>
                                 <li><a href="kolkate.html">Kolkate</a></li>
                                 <li><a href="delhi.html"> Delhi</a></li>
                                 <li><a href="banglore.html">Banglore</a></li>
                                 <li><a href="chandigarh.html">Chandigarh</a></li>
                                 <li><a href="mohali.html">Mohali</a></li>
                                 <li><a href="more.html">More</a></li>
                                </ul>
                                  </li>
                                   <li><a href="govt1.htm"> <font color="white">Govt Jobs</font></a></li>
                                     <li><a href="aboutus.htm"> <font color="white">About Us</font></a></li>
                                     <li><a href="contactus.php"> <font color="white">Contact Us</font></a></li>

                                   </ul>

                                <ul class="nav navbar-nav navbar-right">
                                <li><div class="dropdown">

  <button class="db">Register With Us</button>
 
  <div class="dropdown-c">
    <div class="row">
      <div class="db2">
      tell us about us self
    </div>
      </div>
    <div class="row">
    <div class="col-sm-4">
      <img src="myimages/f11.png"  style="width:100%; "><br>
      <button class="db1" onclick="location.href='freasher.php'">I am Fresher</button>
    </div>
    <div class="col-sm-4">
      <img src="myimages/f13.png"  style="width:100%; "><br><br><br>
      <button class="db1" onclick="location.href='professional.php'">I am Professional</button>
    </div>
    <div class="col-sm-4"><br>
      <img src="myimages/handshak1.jpg"  style="width:100%; "><br><br>
      <button class="db1" onclick="location.href='company.php'">Company Register</button>
    </div>

    
</div>


    <!--<a href="#">PHP</a>
    <a href="#">JAVA</a>
    <a href="#">C++</a>-->
  
</div>
</div><!--<a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>--></li>
                                 <li><a href="login1.htm"> <font color="white"><span class="glyphicon glyphicon-log-in"></span> Login</font></a></li>
                                   <li onclick="openElement()"><a href="#"> <font color="white"><i class="far fa-1x fa-comment-alt"></i> Chat</font></a></li>
                                </ul>
                     </div>
               </div>
     </nav>
  <div class="container-fluide  bgcolor">
    <h1><center>Professional Registeration Form</center></h1>

    <b class="p1"><label for="Name">Name</label><br></b>
    <input type="text" placeholder="Enter your full name" name="name1" required><br><br>

   <b class="p1"> <label for="psw"><b>Email ID</b></label><br></b>
    <input type="email" placeholder="Enter your active email id" name="email1" required><br><br>
 <b  class="p1"><label for="qus">Select Your Qus</label> <br></b>
  <select id="s1" name="qus">
  <option value="What is your favourite color ?">What is your favourite color ?</option>
                            <option value="Who is your childhood friend ?">Who is your childhood friend ?</option>
                            <option value="Which is your most memorable  incidence?">Which is your most memorable  incidence?</option>
                            <option value="What is your nick name?">What is your nick name? </option>
   </select><br><br>

   <b class="p1"><label for="ans"><b>Your Answer</b></label><br></b>
    <input type="text" placeholder="Enter your answer" name="ans" required><br><br>
    <b class="p1"><label for="psw-repeat"><b>Create Password</b></label><br></b>
    <input type="password" placeholder="minimum 6 characters"psw-repeat" name="password1" required><br><br>
    
    <b class="p1"> <label for="mobile number"><b>Mobile Number</b></label><br></b>
    <input type="number" placeholder="enter your 10 digit mobile number" name="mobile1" required><br><br>
    
    
  <b class="p1"><label for="Current location"><b>Current Location</b></label> <br></b>
  
  <select name="location1">
  <option>Delhi</option>
  <option>Puna</option>
  <option>Mumbai</option>
  <option>punjab</option>
  <option>jalandhar</option>
  <option>mohali</option>
  <option>chandigarh</option>
  
   </select><br><br>

    <b class="p1"><label for="Current location"><b>Total Work Experience</b></label> <br></b>
  <select id="s2" name="year1">
    <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  <option>13</option>
  <option>14</option>
  <option>15+</option>
  
</select> <label for="Current location"><b><font color="white">(Years)</font></b></label>
<select id="s3" name="month1">
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10</option>
  <option>11</option>
  <option>12</option>
  
</select> <label for="Current location"><b><font color="white">(Months)</font></b></label> <br><br>




   <b class="p1"><label for="Upload Resume"><b>Upload Resume</b></label><br></b>
    <input type="file" placeholder="upload your resume "  name="picture" required><br><br>


    
    
    <b class="p1"><label>
    <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> I agreedto the<a href="#" style="color:dodgerblue">Terms & Privacy</a> governing the use of<a href="#" style="color:dodgerblue"> online job portal</a><br>I have reviewed the default<a href="#" style="color:dodgerblue"> Mailer and Communications settings</a><br>
    </label></b><br>

    <div class="clearfix">
      <a href="qus_professional.php"><button type="submit" value="Submit" name="submit" class="cancelbtn">Submit</button></a>
      
    </div>
  </div>
</form>

<div class="container-fluid text-center  footer123">
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
      <span class="glyphicon fa-2x glyphicon-log-in"></span>
      <a href="login1.htm"><font color="white"><h4>LOGIN</h4></font></a>
      
    </div>
    <div class="col-sm-4">
    <i class="fas fa-2x fa-comment-alt"></i>
<a href="feedback123.php"><font color="white"><h4 >FEEDBACK</h4></font></a>
      
    </div>
  </div>
</div>



<!-- chat  option-->
<div class="floating-chat">
    <i class="fa fa-comments" aria-hidden="true"></i>
    <div class="chat">
        <div class="header">
            <span class="title">
                what's on your mind?
            </span>
            <button>
                <i class="fa fa-times" aria-hidden="true"></i>
            </button>
                         
        </div>
        <ul class="messages">
            <li class="other">Welcome to our site</li>
            
           
        </ul>
        <div class="footer">
            <div class="text-box" contenteditable="true" disabled="true"></div>
            <button id="sendMessage">send</button>
        </div>
        <div class="footer">
          <div><b>If you want to make connection wuith us please enter your email.</b></div><br></div>
           <div class="footer"> <div><input type="text" placeholder="Enter your Email " class="text-box"  contenteditable="true" disabled="true"></div>
            <button  type="submit" id="sendMessage">Submit</button>
        </div>
        
    </div>
</div>

 <script type="text/javascript">
        var element = $('.floating-chat');
var myStorage = localStorage;

if (!myStorage.getItem('chatID')) {
    myStorage.setItem('chatID', createUUID());
}

setTimeout(function() {
    element.addClass('enter');
}, 1000);

element.click(openElement);

function openElement() {
    var messages = element.find('.messages');
    var textInput = element.find('.text-box');
    element.find('>i').hide();
    element.addClass('expand');
    element.find('.chat').addClass('enter');
    var strLength = textInput.val().length * 2;
    textInput.keydown(onMetaAndEnter).prop("disabled", false).focus();
    element.off('click', openElement);
    element.find('.header button').click(closeElement);
    element.find('#sendMessage').click(sendNewMessage);
    messages.scrollTop(messages.prop("scrollHeight"));
}

function closeElement() {
    element.find('.chat').removeClass('enter').hide();
    element.find('>i').show();
    element.removeClass('expand');
    element.find('.header button').off('click', closeElement);
    element.find('#sendMessage').off('click', sendNewMessage);
    element.find('.text-box').off('keydown', onMetaAndEnter).prop("disabled", true).blur();
    setTimeout(function() {
        element.find('.chat').removeClass('enter').show()
        element.click(openElement);
    }, 500);
}

function createUUID() {
    // http://www.ietf.org/rfc/rfc4122.txt
    var s = [];
    var hexDigits = "0123456789abcdef";
    for (var i = 0; i < 36; i++) {
        s[i] = hexDigits.substr(Math.floor(Math.random() * 0x10), 1);
    }
    s[14] = "4"; // bits 12-15 of the time_hi_and_version field to 0010
    s[19] = hexDigits.substr((s[19] & 0x3) | 0x8, 1); // bits 6-7 of the clock_seq_hi_and_reserved to 01
    s[8] = s[13] = s[18] = s[23] = "-";

    var uuid = s.join("");
    return uuid;
}

function sendNewMessage() {
    var userInput = $('.text-box');
    var newMessage = userInput.html().replace(/\<div\>|\<br.*?\>/ig, '\n').replace(/\<\/div\>/g, '').trim().replace(/\n/g, '<br>');

    if (!newMessage) return;

    var messagesContainer = $('.messages');

    messagesContainer.append([
        '<li class="self">',
        newMessage,
        '</li>'
    ].join(''));

    // clean out old message
    userInput.html('');
    // focus on input
    userInput.focus();

    messagesContainer.finish().animate({
        scrollTop: messagesContainer.prop("scrollHeight")
    }, 250);
}

function onMetaAndEnter(event) {
    if ((event.metaKey || event.ctrlKey) && event.keyCode == 13) {
        sendNewMessage();
    }
}
        
    </script>



<?php
if(isset($_POST['submit']))
    {
if(isset($_FILES['picture']))
  {

    $name=$_POST['name1'];
    $email=$_POST['email1'];
    $qus=$_POST['qus'];
    $ans=$_POST['ans'];
    $password=$_POST['password1'];
    $mobile=$_POST['mobile1'];
    $location=$_POST['location1'];
     $years=$_POST['year1'];
      $months=$_POST['month1'];
    $filename=$_FILES['picture']['name'];
    $tempname=$_FILES['picture']['tmp_name'];
     move_uploaded_file($tempname,"img/".$filename);
    $path="img/".$filename;

    include("config.php");
  
     //$conn=mysqli_connect("localhost","root","","demo1") or die("conection is not establish");
      
      $q="insert into professional(Name,Email_id,chk_qus,chk_ans,Password,Mobile_no,Current_location,Work_years,Work_montha,Upload_resume) values('".$name."','".$email."','".$qus."','".$ans."','".$password."',".$mobile.",'".$location."',".$years.",".$months.",'".$path."');";
      echo $q;
      $query=mysqli_query($conn,$q);
      echo $query;
      if($query==true)
      {
        echo "<script>alert('register Successfully');</script>";
      
        
        echo "<script>location.replace('qus_professional.php')</script>";
      }
      else
      {
        echo "<script>alert('You are allready register');</script>";
        header('location:professional.php');
      }

  mysqli_close($conn);
}

}
?>


</body>
</html>
