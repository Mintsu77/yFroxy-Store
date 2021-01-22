<?php
include('connect.php');

$level_name = $_POST['level'];

$sql ="INSERT INTO tbl_level
    
    (level) 

    VALUES 

    ('$level_name')";
    
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
    mysqli_close($conn);
    
    if($result){
      echo "<script>";
      echo "alert('Done');";
      echo "window.location ='level.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      echo "alert('ERROR!');";
      echo "window.location ='level.php'; ";
      echo "</script>";
    }
?>