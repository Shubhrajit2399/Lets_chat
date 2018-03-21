<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Lets Chat.com</title>
	<link href='https://fonts.googleapis.com/css?family=Gorditas' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		body{
		background-image: url("1.jpg");
    	height: 400px;
    	max-height: 80%;
    	background-size: 100% 100%;
	}
	.d1{
	color: white;
	font-family: 'Gorditas';
	font-size: 800%;
	margin-top: 15%;
}
	</style>
</head>
<body>
<div class="d1">
<h2><center>C</center></h2>
<?php
    header("refresh:2;url=chat_login.php");
?>
</div>
</body>
</html>