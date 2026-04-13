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
   

input[type=Text],input[type=file],input[type=email],input[type=password],input[type=number]
{
    height:40px;
    width:100%;
    background-color:#D3D3D3;
    display: inline-block;
    padding: 10px;
    border-radius: 10px;

}

select{
    height:40px;
    width:100%;
    background-color:   #D3D3D3;
    display: inline-block;
    padding: 10px;
    border-radius: 10px;

}
.textarea
{
    
 height:40px;
    width:100%;
  border-radius: 10px;
    background-color: #D3D3D3;
    display: inline-block;
    padding: 10px;


}




    .login {
        height: 80%;
        width: 60%;
        background-color: white;
        color: black;
        border-radius: 10px;
        padding-left: 7%;
        padding-right: 7%;
        padding-top: 3%;
        padding-bottom: 10%;
        margin-right:20%; 
        margin-left:20%;
        margin-top: 10%;
        margin-bottom: 10%;
        
    }



    .pic {
      background-color: black;
      margin-top: -5%;
    }
    p{
  margin-left: 10px;
  color: black;
}
.button1 {
    background-color: #FF8C00;
    color: black;
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

    <form  method="POST" enctype="multipart/form-data">
    <div class="pic">
        <div class="container-fluid ">
            <div class="login">

                    <h3><b><center>Company Sign-up Form</center></b></h3>


                    <br>
              
                         <p><label for="Name"><b> Type Company/Consultancy</b></label><br></p>
                         <select name="type"  class="input-sm"><option>Company</option>
                          <option>Consultancy</option></select>
                        
                    
                    <br> <br>
                    
                    
                         <p><label for="Name"><b> Company/Consultancy Name</b></label><br></p>
                        <input type="text" placeholder="Enter a company name" name="name1" class="input-sm">
                    
                    <br> <br>
                    

                         <p><label for="Name"><b>Email ID </b></label><br></p>
                        <input type="email" placeholder="Enter your email id"  name="email1" class="input-sm">
                  
                    <br> <br>
                    


                     <p><label for="qus"><b>Select Your Qus</b></label> <br></p>
  <select id="s1" name="qus">
  <option value="What is your favourite color ?">What is your favourite color ?</option>
                            <option value="Who is your childhood friend ?">Who is your childhood friend ?</option>
                            <option value="Which is your most memorable  incidence?">Which is your most memorable  incidence?</option>
                            <option value="What is your nick name?">What is your nick name? </option>
   </select>
                    <br> <br>
                    
                    

   <p><label for="ans"><b>Your Answer</b></label><br></p>
    <input type="text" placeholder="Enter your answer" name="ans" required><br><br>

                    
                    

            
                         <p><label for="password"><b> Enter Password</b></label><br></p>
                        <input type="password" placeholder="minimum 8 characters" name="password1" class="input-sm">
                    
                    <br> <br>
                    

                     
                     <p> <label for="mobile number"><b>Mobile Number</b></label><br></p>
                      <input type="number" placeholder="enter your 10 digit  mobile number"  name="mobile1" required>
                  
                  <br> <br>
                    

                     
                   <p><label for="Name"><b>Company Address?</b></label><br></p>
     <textarea class="form-control textarea" id="comments"placeholder=" enter your full address" name="address1" rows="4" ></textarea>
<br>
<br>
                    <p><label for="Upload logo"><b>Company Logo</b></label><br></p>
            <input type="file" placeholder="upload your logo "  name="picture" required><br><br>

                  
                    <br>
                   
                    <a href="add job.htm"><button  type="submit" value="submit"  name="submit" class="btn btn-primary button1">Submit</button></a>
                
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

 <script type="text/javascript">
        var element = $('.floating-chat');
        
    </div>
</div>
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
   $type=$_POST['type'];
    $name=$_POST['name1'];
    $email=$_POST['email1'];
    $qus=$_POST['qus'];
    $ans=$_POST['ans'];
    $password=$_POST['password1'];
    $mobile=$_POST['mobile1'];
    $address=$_POST['address1'];
    $filename=$_FILES['picture']['name'];
    $tempname=$_FILES['picture']['tmp_name'];
     move_uploaded_file($tempname,"img/".$filename);
    $path="img/".$filename;

    //include("config.php");
  
     $conn=mysqli_connect("localhost","root","","demo1") or die("conection is not establish");
      
      $q="insert into comany(Type,Company_name,Email_id,chk_qus,chk_ans,Password,Mobile_no,Company_address,Company_logo) values('".$type."','".$name."','".$email."','".$qus."','".$ans."','".$password."',".$mobile.",'".$address."','".$path."');";
  
      $query=mysqli_query($conn,$q);
    
      if($query==true)
      {
        echo "<script>alert('register Successfully');</script>";
        echo "<script>location.replace('index.htm')</script>";
      }
      else
      {
        echo "<script>alert('You are allready register');</script>";
        header('location:company.php');
      }

  mysqli_close($conn);
}

}
?>


    
</body>

</html>