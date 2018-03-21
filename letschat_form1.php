<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lets Chat Form</title>
	<link href='https://fonts.googleapis.com/css?family=Geostar Fill' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
		background-image: url("1.jpg");
    	height: 980px;
    	max-height: 100%;
    	background-size: 100% 100%;
	}
		
    	.h1{
			font-family:'Geostar Fill' ;
            font-size: 50px;
            margin-top: 1%;
           color: #c25f71;
		}
		.h2{
			font-family:'Geostar Fill' ;
            font-size: 30px;
            margin-top: 0.5%;
           color: white;
		}
		.h3{
			font-family:'Geostar Fill' ;
            font-size: 20px;
            margin-top: 0.5%;
           color: white;
		}
    </style>
</head>
<body>
 	<div class="h1"><center>Sign Up!</center></div>
 	<form action="letschat_formprocess.php" method="POST" name="letschat_form" id="letscaht_form" enctype="multipart/form-data">
 	<center><div class="h2">
 	
 		Firstname: <input type="text" name="firstname"><br><br>
 		Lastname: <input type="text" name="lastname"><br>
 		Contact: <br><input type="text" name="contact"><br><br>
 		Profile Picture: <br><input type="file" name="profile_img"><br>
 		Username: <input type="text" name="username"><br><br>
 		Password: <input type="Password" name="password"><br><br>
 		Re-Enter Password: <br><input type="Password" name="repassword"><br>
 		Enter the code: <br><input type="text" name="captcha"><br><br>
 		<img src="letschat_captcha.php" width="95" height="50"><br>
 		<input type="submit" name="Submit" value="Submit">
 	
 	    
 	</div></center>
 	</form>
 	<div class="h3">
 		<center>
 			<?php if(isset($_REQUEST['msg1'])) echo $_REQUEST['msg1']; ?>
 		    <?php if(isset($_REQUEST['verify'])) echo $_REQUEST['verify']; ?>
 		    <?php if(isset($_REQUEST['warn1'])) echo $_REQUEST['warn1']; ?>
 		    <?php if(isset($_REQUEST['msg'])) echo $_REQUEST['msg']; ?>
 		    <?php if(isset($_REQUEST['cap1'])) echo $_REQUEST['cap1']; ?>
 		</center>
 	</div>
 		
</body>
</html>