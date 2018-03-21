<?php
include("letschat_databasecon.php");
session_start();
$fnm=$_POST["firstname"];
$lnm=$_POST["lastname"];
$cntc=$_POST["contact"];
$usr=$_POST["username"];
$pswd=$_POST["password"];
$rpswd=$_POST["repassword"];
$pth="letschat_pic/".$fnm;
$img=$_FILES["profile_img"]["size"];
$msg1="";
$msg="";
$warn1="";
$verify="";
$cap="";
if(!empty($fnm) && !empty($lnm) && !empty($cntc) && !empty($usr) && !empty($pswd) && !empty($rpswd) && !empty($pth)){
	if($pswd ==  $rpswd){
			if(preg_match("/^[6-9]{1}[0-9]{9}+$/",$cntc)){
				if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"]){
						if((($img/1024)> 0.0 )){
							
											move_uploaded_file($_FILES["profile_img"]["tmp_name"],$pth);
											$store="insert into account_details(firstname,lastname,contact,username,pasword,img_path) values('$fnm', '$lnm', '$cntc', '$usr', SHA1('$pswd'), '$pth')";
											$i=mysqli_query($con,$store);
    
   											 echo "<script>alert('Account Created!');window.location='chat_login.php';</script>";
							}
							 else{
							 		$msg1="<h3 style='color:Red;;'>Picture Must be inputed!</h3>";
									header("location:letschat_form1.php?msg1=".$msg1);
  							}
						}
						else{
							
							$cap="<h3 style='color:Red;;'>Wrong Verification Code!</h3>";
  							header("location:letschat_form1.php?cap1=".$cap);
						}
			}
			else{
				$verify="<h3 style='color:Red;;'>Wrong Syntax of Contact No!</h3>";
     			header("location:letschat_form1.php?verify=".$verify);
			}
	}
	else{
			$warn1="<h3 style='color:Red;'>Enter right password!!</h3>";
		header("location:letschat_form1.php?warn1=".$warn1);
	}
}
else{
	$msg="<h3 style='color:Red;'>All fields are required to entered!!</h3>";
		header("location:letschat_form1.php?msg=".$msg);
}
?>