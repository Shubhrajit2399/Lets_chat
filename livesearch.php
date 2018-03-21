<?php
include("letschat_databasecon.php");
session_start();
$fnm=$_SESSION["fname"];
if(isset($_REQUEST['term'])){
    // Prepare a select statement
    $sql = "select id as uid,firstname as fname from account_details where firstname LIKE ?";
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        // Set parameters
        $param_term = $_REQUEST['term'] . '%';
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                  if ($row["fname"]==$fnm) {
                    # write nothing
                  }
                  else{
                  ?>
                    <a style="text-decoration: none;" href='letschat_chatbox.php?c1=<?php echo $row["uid"];?>'><p style="color: #fc0102;"><?php echo $row["fname"];?></p></a>
                    
                    <?php
                  }
                }
            } else{
                echo "<p>No matches found</p>";
            }
          }
        }
      }
?>