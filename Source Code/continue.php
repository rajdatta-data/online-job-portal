<?php
session_start();
if($_SESSION['uid2']=="")
 {
  header("Location:jobseeker.htm");
}
else
{
 $name=$_SESSION['uid2'];
 $name1=$_SESSION['uid1'];

}

?>


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

.p1{
   margin-left: 20%;
  color: white;
  font-size: 17px;

}



input[type=text]:focus, input[type=password]:focus,input[type=email]:focus,input[type=number]:focus ,input[type=file]:focus{
    background-color: #ddd;
    outline: none;

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



<form  name="f1" method="POST" enctype="multipart/form-data" style="border:1px solid #ccc">
  
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
                              

  <li class="active"><br><span class="glyphicon glyphicon-user" color="white"></span>
                
                <?php echo $name1; ?></li>
                                 <li><a href="logout_com.php"> <font color="white"><span class="glyphicon glyphicon-log-out"></span> Logout</font></a></li>
                                   <li onclick="openElement()"><a href="#"> <font color="white"><i class="far fa-1x fa-comment-alt"></i> Chat</font></a></li>
                                </ul>
                     </div>
               </div>
     </nav>
  <div class="container-fluide  bgcolor">
    <h1><center>Fill Your Details</center></h1> 
     
<form method="POST" action="">

  <b class="p1"> <label for="psw"><b>Student Type</b></label><br></b>
    <select id="s1" name="std_type">
   <option value="fresher">Fresher</option>
  <option value="professional">Professional</option>
  </SELECT><BR><br><br>
    <b class="p1"><label for="name"><b>Highest Qualification</b></label><br></b>

     <select  name="q1"> 
  <option value="master/post-graduation">Masters/Post-Graduction</option>
  <option value=graduation/diploma>Graduction/Diploma</option>
  <option value="12th">12th</option>
  <option value="10th">10th</option>
  <option value="below 10th">Below 10th</option>

  
   </select><br><<br><br>


   <b class="p1"><label for="psw"><b>Courses</b></label><br></b>

    <select name="c1">
   <option value="bca">BCA</option>
  <option value="bcom">BCOM</option>
  <option value="mca">MCA</option>
  <option value="mcom">MCOM</option>
  <option value="mba">MBA</option>
  <option value="other">others</option>
  </SELECT><BR><br><br>

   <b class="p1"><label for="psw"><b>Specialization</b></label><br></b>
    <select  name="s1">
   <option value="php">PHP</option>
  <option value="wed desiging">web desiging</option>
  <option value="asp.net">asp.net</option>
  <option value="teaching">teaching</option>
  <option value="others">others</option>
  </SELECT><BR><br><br>

  <b class="p1"> <label for="psw"><b>University/Collage</b></label><br></b>
    <select  name="c2">
   <option value="Lovely professional University">Lovely Professional University</option>
  <option value="Amity University">Amity University</option>
  <option value="dav collage jalandhar">DAV collage jalandhar</option>
  <option value="iiy kanpur">IIT kanpur</option>
  <option value="khalsa collage">khalsa collage</option>
  </SELECT><BR><br><br>

   <b class="p1"> <label for="psw"><b>Course Type</b></label><br></b>
    <select  name="c3">
   <option vlaue="full time">Full Time</option>
  <option value="part time">Part Time</option>
  <option value="Correspondence">Correspondence</option>
  </SELECT><BR><br><br>

  <b class="p1"><label for="psw"><b>Passing Year</b></label><br></b>
    <select name="p1">
   <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  </SELECT><BR><br><br>


    <b class="p1"><label for="Name"><b>Skills</b></label><br></b>
    <input type="text" placeholder="Enter your areas of experties/Specialization" name="s2" required><br>
<br><br>
    <div class="clearfix">
      <button type="submit" name="submit" value="submit">Submit</button>
      
    </div>
  </div>
</form>
<!-- footer-->
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
      <span class="glyphicon fa-2x glyphicon-log-out"></span>
      <a href="logout_com.php"><font color="white"><h4>LOGOUT</h4></font></a>
  
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
          <div><b>If you want to make connection with us please enter your email.</b></div><br></div>
           <div class="footer">  <div class="text-box" contenteditable="true" disabled="true"></div>
            <button id="sendMessage">submit</button>
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
    $stdtype=$_POST['std_type'];
    $q1=$_POST['q1'];
    $c1=$_POST['c1'];
    $s1=$_POST['s1'];
    $c2=$_POST['c2'];
    $c3=$_POST['c3'];
    $p1=$_POST['p1'];
     $s2=$_POST['s2'];

    
    
    
    include("config.php");
    
  
     //$conn=mysqli_connect("localhost","root","","demo1") or die("conection is not establish");
      
      $q="insert into continue1(std_type,Email_id,hight_qualification,course,specialization,collage,course_type,passing_year,skills) values('".$stdtype."','".$name."','".$q1."','".$c1."','".$s1."','".$c2."','".$c3."','".$p1."','".$s2."');";
      echo $q;
      $query=mysqli_query($conn,$q);
      echo $query;
      if($query==true)
      {
        echo "<script>location.replace('index.htm')</script>";
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
