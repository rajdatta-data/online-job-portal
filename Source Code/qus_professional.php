<!DOCTYPE html>
<html lang="en">
<head>
  <title>Job Portal</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet"  type="text/css" href="myproject123.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

  <script src="jquery-3.3.1.js"></script>

   <style>
   
body {font-family: Arial, Helvetica, sans-serif;}
* {}


textarea
{
  width:60%;
  height:50px;
  border-radius: 10px;
  margin-left: 20%;
  margin-right: 20%; 
}

p{

  color: white;
}

/* Set a style for all buttons */
.button1 {
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

.button1:hover {
    opacity:10;
}
h1{
  color: white;
  size: 5%;
}
    </style>
  </head> 

<body background="myimages/img.jpg">

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

                           <li class="dropdown  active"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="white"> Jobs<span class="caret"></span></font></a>
        
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
                                   <li ><a href="govt1.htm"> <font color="white">Govt Jobs</font></a></li>
                                     <li><a href="aboutus.htm"> <font color="white">About Us</font></a></li>
                                     <li><a href="contactus.php"> <font color="white">Contact Us</font></a></li>

                                   </ul>

                                <ul class="nav navbar-nav navbar-right">
                               
                                 <li><a href="login1.htm"> <font color="white"><span class="glyphicon glyphicon-log-in"></span> Login</font></a></li>
                                   <li onclick="openElement()"><a href="#"> <font color="white"><i class="far fa-1x fa-comment-alt"></i> Chat</font></a></li>
                                </ul>
                     </div>
               </div>
     </nav>




<!--body-->
<div class="container border1">
  <h1><center>Answer This Question</center></h1> 
  <form  method="POST" enctype="multipart/form-data">
    <center>
<br>
    <p><label for="Name"><b>Tell me a bit about yourself?</b></label><br></p>
     <textarea  name="comment1" placeholder="describe yourself in 3/5 lines" rows="4" ></textarea><br>
<br>
       <p><label for="Name"><b>Why do you want to work here?</b></label><br></p>
     <textarea  name="comment2" placeholder="explain it in 2 lines" rows="4" ></textarea><br>
<br>

<p><label for="Name"><b>Why did you leave your last job?</b></label><br></p>
     <textarea  name="comment3" placeholder="why leave last job" rows="4" ></textarea><br>
<br>

   
   <p><label for="Name"><b>What kind of work environment do<br> you like best</b></label><br></p>
     <textarea  name="comment4" placeholder="work enviroment" rows="4" ></textarea><br>
<br> 
<p><label for="Name"><b>What are three positive things your<br> last boss would say about you?</b></label><br></p>
     <textarea  name="comment5" placeholder=" pull out your old performance appraisals" rows="4" ></textarea><br>
<br> 


     
     

     <p><label for="Name"><b>Why should company Hires you?</b></label><br></p>
     <textarea  name="comment6" placeholder=" summarizing your experiences" rows="4" ></textarea><br><br><br>



 

    <div class="clearfix">
      <input type="submit" name="submit" class="button1" value="submit">
      
    </div>
    <br>
    <br>
    <br>
  </center>
</form>
  </div>


     <!--footer-->

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


    $comment1=$_POST['comment1'];
    $comment2=$_POST['comment2'];
    $comment3=$_POST['comment3'];
    $comment4=$_POST['comment4'];
    $comment5=$_POST['comment5'];
    $comment6=$_POST['comment6'];

    //include("config.php");
  
     $conn=mysqli_connect("localhost","root","","demo1") or die("conection is not establish");
      
      $q="insert into qus_professional(about_yourself,why_work_here,why_leave_lastjob,work_enviroment,possitive_things,why_hire_you) values('".$comment1."','".$comment2."','".$comment3."','".$comment4."','".$comment5."','".$comment6."');";
      echo $q;
      $query=mysqli_query($conn,$q);
      echo $query;
      if($query==true)
      {
        echo "<script>location.replace('index.htm')</script>";
      }
      else
      {
        echo "not done";
      }

  mysqli_close($conn);
}


?>
</body>
</html>
