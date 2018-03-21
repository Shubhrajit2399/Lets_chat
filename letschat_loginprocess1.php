<?php
include("letschat_databasecon.php");
$usr=$_POST["usrname"];
$pswd=$_POST["password"];

$a="select id,firstname,lastname from account_details where BINARY username=BINARY '$usr' and BINARY pasword=BINARY SHA1('$pswd')";
$d=mysqli_query($con,$a);
if($row=mysqli_fetch_assoc($d)){
		session_start();
		if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"]){
				$_SESSION["login_id"]=$row["id"];
				$_SESSION["fname"]=$row["firstname"];
				$_SESSION["lname"]=$row["lastname"];
				echo "<script>alert('Welcome to Lets Chat!'),window.location='letschat_profile.php';</script>";	
}
else{
	echo "<script>alert('Wrong Verification Code!!'),window.location='chat_login.php';</script>";
  }
}
else{
		echo "<script>alert('Invalid Input. Please try again.'),window.location='chat_login.php';</script>";
	}
?>