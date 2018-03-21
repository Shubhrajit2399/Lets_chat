<?php
include("letschat_databasecon.php");
session_start();
$client=$_SESSION["client_id"];
$profile=$_SESSION["profile_id"];
$clntpic=$_SESSION["clntimg"];
$profpic=$_SESSION["profimg"];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <style>
    	.t1{
    		margin-left: 1%;
    		margin-right: 5%;
    	}
    	.t2{
    		margin-right: 4%;
    		text-align: right;
    	}
    	
    	
    </style>
</head>
<body>
<div class="container-fluid">
	<?php
		$dquery="select chat_details.chat_talk as txt,chat_details.profile_id as prof from chat_details where (profile_id='$profile' and client_id='$client') or (profile_id='$client' and client_id='$profile')";
		$i=mysqli_query($con,$dquery);
		?>
					<div class="t1">
					<?php
		while ($row=mysqli_fetch_assoc($i)){

				if ($row["prof"] == $profile) {
					?>

					<div class="t2">
					
					<?php
					
								echo "<p align='right' style='border: 2px solid #ccc;background-color: #c4aec7;border-radius: 50px;padding: 16px;margin: 16px 0; word-wrap:break-word; width:800px; max-width:100%; text-align:right; dispaly:inline; margin-right:10%;margin-left:8%;'>".$row["txt"]."&nbsp;&nbsp;&nbsp;". "<img src=' $profpic' height='40' width='40' style='border-radius: 50%;text-align: right;'></p>";
								?>
								</div>
								<hr style="margin-left: 3%;">
								<?php
								
								}

				else{
					
					echo "<p align='left' style='border: 2px solid #ccc;background-color: #1e6cfa;color:white;border-radius: 50px;padding: 16px;margin: 16px 0; word-wrap:break-word;width:800px;max-width:90%;text-align:left;margin-left:1%;margin-right:30%;'><img src=' $clntpic' height='40' width='40' style='border-radius: 50%;text-align: left;'>"."&nbsp;&nbsp;&nbsp;".$row["txt"]."</p>";
					?>
					<hr style="margin-left: 3%;">
					<?php
							
							}
							
						}
						?>
								</div>
								<?php
	?>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
   <script type="text/javascript">
    $(document).ready(function(){
                var scroll = $(window).scrollTop();
                scroll = scroll + 9000;
                $('html, body').animate({
                    scrollTop: scroll
                }, 1000);

            });
</script>
</body>
</html>