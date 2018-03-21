<?php
include("letschat_databasecon.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
   		$(document).ready(function () {
    ajax_call = function() {
        $.ajax({ 
            type: "POST",
            url: "letschat_chatfetch.php",
                           
            success: function (response) {
                $("#response1").html(response);
            }
        });
    };
    var interval = 1000;
    setInterval(ajax_call, interval);
    });
   </script>
   <style>
   body{
   		/*background-color: #7ec495;*/
   }
   	/*.d1{
    		max-height: 100%;
    		width:900px;
    		max-width: 100%;
    		background-color: #7ec495;
    	}*/
   </style>
</head>
<body>
	<!--<div class="d1">-->
		<div id="response1"></textarea></div>
	<!--</div>-->
</body>
</html>