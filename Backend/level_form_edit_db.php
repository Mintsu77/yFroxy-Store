<meta charset="UTF-8">
<?php
  include('connect.php');  
  $level_id = $_REQUEST["level_id"];
  $level_name = $_REQUEST["level"];
  
  $sql = "UPDATE tbl_level SET  
      level='$level_name' 
      WHERE level_id='$level_id' ";

  $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($conn); 
  
  if($result){
    echo "<script type='text/javascript'>";
    echo "alert('Update Done');";
    echo "window.location = 'level.php'; ";
    echo "</script>";
  }
  else{
    echo "<script type='text/javascript'>";
    echo "alert('Error back to Update again');";
    echo "</script>";
  }
?>