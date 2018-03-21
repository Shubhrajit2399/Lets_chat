<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link href='https://fonts.googleapis.com/css?family=Geostar Fill' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<style>
	body{
		background-image: url("1.jpg");
    	height: 625px;
    	max-height: 100%;
    	background-size: 100% 100%;
	}
		.c1{
            font-family:'Geostar Fill' ;
            font-size: 70px;
            margin-top: 2%;
            color: #c25f71;   
		}
		.c2{
			font-family: 'Geostar Fill';
			font-size: 36px;
			margin-top: 1%;
			color: #f8381a;
		}
		.c3{
			font-family:'Geostar Fill' ;
            font-size: 50px;
            margin-top: 1%;
           
		}
	</style>
</head>
<body>
<div class="c1"><center>Login</center></div>
<form name="chat_login" id="chat_login" action="letschat_loginprocess1.php" method="POST">
<div class="c2"><center>Username:<br>
<input type="text" name="usrname"><br>
Password:<br>
 		<input type="Password" name="password"><br>
 		Enter the number below:<br>
 		<input type="text" name="captcha"><br><br>
 		<img src="letschat_captcha.php" width="95" height="50"><br>
 		<input type="submit" name="Submit" value="Login">
 </center>
 </div>
 	</form>
 <div class="c3">
 	<a style="text-decoration: none;color: #c25f71;" href="letschat_form1.php"><center>Create Account</center></a>
 </div>	
</body>
</html>