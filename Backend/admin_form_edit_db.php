<?php
  include('connect.php');  
  
  $id = $_REQUEST["id"];
  $username = $_REQUEST["username"];
  $password = $_REQUEST["password"];
  $name = $_REQUEST["name"];
  $email = $_REQUEST["email"];
 

  $sql = "UPDATE tbl_user SET  
  username='$username' , 
  password='$password' , 
  name='$name' , 
  email='$email'  
  WHERE id='$id' ";

  $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($conn); 

  if($result){
  echo "<script type='text/javascript'>";
  echo "alert('Update');";
  echo "window.location = 'admin.php'; ";
  echo "</script>";
  }
  else{
  echo "<script type='text/javascript'>";
  echo "alert('Error back to Update again');";
  echo "</script>";
}
?>