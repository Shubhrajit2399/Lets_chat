<?php
$con=mysqli_connect("localhost","root","","letschat",3306) or die("Server not found");
	mysqli_select_db($con,"letschat") or die("database not found!");
?>