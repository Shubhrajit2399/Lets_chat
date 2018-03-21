<?php
include("letschat_databasecon.php");
session_start();

$chat_id=$_REQUEST["c1"];
$profl_id=$_SESSION["login_id"];

$w="select firstname as fname, lastname as lname, img_path as pic from account_details where id='$chat_id'";
$r=mysqli_query($con,$w);
?>
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	<title>Lets_Chat Chatbox</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Geostar Fill' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    body{
    	background-image: url("1.jpg");
    	height: 625px;
    	max-height: 100%;
    	background-size: 100% 100%;
    }
    	.d1{
    		height: 465px;
    		width:1400px;
    		max-width: 100%;
    		
  			
    	}
    	.d2{
    		width: 1400px;
    		height: 140px;
    		max-width: 100%;
    		
    	}
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script>

	 function submit_form()

	    {
			var chat1 = $("#chat1").val();
	        $.ajax({

	                    type: "POST",
	                    url: "letschat_chatsubmit.php",
	                    data: "chat1="+chat1,
	                    });

	    }

	</script>
	
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4" style="border: 5px solid #120fd7;">
			<?php
				while($rw=mysqli_fetch_assoc($r)){
					?>
					<center style="padding-top: 30px;"><img src="<?php echo $rw["pic"]?>" width="200" height="320" style="border: 2px solid #c25f71;"></center>
					<center><p style="color:#2dc9e2; font-family: 'Geostar Fill';"><b><?php echo $rw["fname"]."<br>".$rw["lname"];?></b></p><a href="letschat_profile.php"><button type="button" style="color: #2dc9e2; font-family: 'Geostar Fill';font-size: 22px;">
          <span class="glyphicon glyphicon-backward"></span> Back
        </button></a>
					</center>
					<?php
				$_SESSION["clntimg"]=$rw["pic"];
				}
			?>
		</div>
		<div class="col-sm-8" style="opacity: 0.75;">
		<div class="d1">
				<iframe src="letschat_fetch.php" style="height: 465px;width: 1400px;max-width: 100%;background-color: #7ec495;"></iframe>
			</div>
			<div class="d2">
			<form action="" method="">
				<textarea name="chat1" placeholder="Write Your Message..." style="height: 80px;width: 1400px;max-width: 100%;" id="chat1"></textarea>
				<input type="reset" name="submit" value="Send" onclick="submit_form();" style="font-size: 22px; font-family: 'Geostar Fill';color: #1e6cfa;">
			</form>
			<p id="success_para" ></p>	
			</div>
		</div>
	</div>
</div>
<?php
	$_SESSION["client_id"]=$chat_id;
	$_SESSION["profile_id"]=$profl_id;
?>

	
	
    
</body>
</html>