<?php
include("letschat_databasecon.php");
session_start();
if (! empty ($_SESSION["fname"])){
$id=$_SESSION["login_id"];
$fnm=$_SESSION["fname"];
$lnm=$_SESSION["lname"];
}
else {
	header("location:chat_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	
	<link href='https://fonts.googleapis.com/css?family=Geostar Fill' rel='stylesheet'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	body{
		background-image: url("1.jpg");
    	height: 625px;
    	max-height: 100%;
    	background-size: 100% 100%;
	}
		.h1{
			background-color: #050510 ;
			color: #2dc9e2;
			margin-top: 0px;
			padding-left: 2%;
			padding-bottom: 1%;
			margin-left: 5px;
			margin-right: 5px;
			font-family: 'Geostar Fill';
			font-size: 35px;
		}
		.button2{width: 300px;
		         height: 50px;
		         padding-bottom: 2px;
		         max-width: 90%;
		     }
		
		table {
		    border-collapse: collapse;
		    background-color: white;
		    
		    border-spacing: 0;
		    width: 100%;
		    border: 1px solid #6bc7e0;
		   
			}
	    td {
    		text-align: left;
    		padding-left: 2px;
    		padding-right: 2px;
    		border: 1px solid #c25f71;
			}
		tbody {
    height:410px;
    overflow:auto;
    overflow-x:hidden;
    display:block;
    width:100%;
}
tbody tr {
    display:table;
    width:100%;
    table-layout:fixed;
}
.search-box{
        font-size: 90%;
        color: #fc0102;
        
        font-family: 'Geostar Fill';
       
        position: relative;
        display: inline-block;
    }
.search-box input[type="text"]{
        font-size: 90%;
        color: #fc0102;
        font-family: 'Geostar Fill';
        
        border: 1px solid #CCCCCC;
    }
.result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
.search-box input[type="text"], .result{
        width: 90%;
        background-color: #fcfbfa;
        font-family: 'Geostar Fill';
        box-sizing: border-box;

    }
    /* Formatting result items */
.result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
.result p:hover{
        background: #f2f2f2;
    }
	</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("livesearch.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
<div class="h1" style="opacity: 0.6">
Hello <?php echo $fnm." ".$lnm?>!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a style="text-decoration: none;" href="letschat_logout.php"><button class="button button2" style="font-family: 'Geostar Fill';color: #2dc9e2;margin-top: 4px;">LogOut</button></a>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-sm-5">

		<?php
		$s="select img_path as img from account_details where id='$id'";
		
		$result=mysqli_query($con,$s) ;
		
		while($row=mysqli_fetch_assoc($result)){
			?>
			<center style="padding-top: 4%;"><img src="<?php echo $row["img"]; ?>" width="200" height="220" style="border: 3px solid #f2f2f2;border-radius: 40%;"><br><hr style="color: #05c37d;height: 4px;border: none;background-color: #05c37d;"><br><span style="color: #05c37d;font-family: 'Geostar Fill';font-size: 22px;">Let's Chat</span><hr style="color: #05c37d;height: 4px;border: none;background-color: #05c37d;"></center>

			<?php
			$_SESSION["profimg"]=$row["img"];
		}
	?>
	
</div>
<div class="col-sm-5" style="border-left: 2px solid #6bc7e0;height: 550px;">
	
		<h4 style="color: #2dc9e2;font-family: 'Geostar Fill';">People You May Know:-</h4><hr style="color: #2dc9e2;height: 4px;border: none;background-color: #2dc9e2;"><br>
		
		<div class="search-box">
       		 <input type="text" autocomplete="off" placeholder="Search by name..." />
        	 <div class="result"></div>
        </div><br><br>
		<table style="opacity: 0.5;">
			<?php
				$s1="select id as uid,img_path as pth, firstname as fname, lastname as lname from account_details order by id desc";
				$res=mysqli_query($con,$s1);

				while ($row1=mysqli_fetch_assoc($res)) {
					if($row1["uid"]==$id){
							//show nothing
					}
					else{
				?>
				<tr style="border-bottom: 2px solid #a00000;">
					<td style="width: 60px;border:1px solid #a00000;">
						<img src="<?php echo $row1["pth"];?>" width="40" height="40" style="border-radius: 50%">
					</td>
					<td>
						<a style="text-decoration: none;" href='letschat_chatbox.php?c1=<?php echo $row1["uid"];?>'><p style="color: #93381a;font-family: 'Geostar Fill';font-size: 15px; word-wrap:break-word;width:80%;max-width:80%;"><b><?php echo $row1["fname"]."<br>".$row1["lname"];?></b></p></a>
					</td>
				</tr>
				<?php
					}
				}
			?>
		</table>
		
	
</div>
</div>
</div>
</body>
</html>