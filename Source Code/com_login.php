<?php
		session_start();
		include( "config.php");
		$uname=$_POST['name'];
		$pass=$_POST['pass'];
		 $sql="SELECT * FROM comany WHERE Email_id='$uname' AND Password='$pass'";
		 $result=$conn->query($sql);
		 if(!$row=$result->fetch_assoc())
		 {
				echo "<script>alert('not match')</script>";
				
				//header("Location:error.php");
		 }
		 else
		 {
		 	$uname=$row['Company_name'];
		 	$Email=$row['Email_id'];
		 
       $_SESSION['uid1']=$uname;
       $_SESSION['uid2']=$Email;
      header("location:companyjob.php");
		 }





?>