<?php
include("letschat_databasecon.php");
session_start();
$chat1=$_POST["chat1"];
$client=$_SESSION["client_id"];
$profile=$_SESSION["profile_id"];
$dquery="insert into chat_details(chat_talk,profile_id,client_id) values('$chat1','$profile','$client')";
$i=mysqli_query($con,$dquery);
?>