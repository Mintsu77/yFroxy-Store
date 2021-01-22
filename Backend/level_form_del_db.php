<meta charset="UTF-8">
<?php 
  include('connect.php');  
  $level_id = $_REQUEST["ID"];
 
  $sql = "DELETE FROM tbl_level WHERE level_id='$level_id' ";
  $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
 
  if($result){
    echo "<script type='text/javascript'>";
    echo "window.location = 'level.php'; ";
    echo "</script>";
    }
  else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to delete again');";
    echo "</script>";
  }
?>