<?php
  include('connect.php');
  $username = $_POST['username'];
  $level_id = $_POST['level_id'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  

  $check = "
	SELECT  username 
	FROM tbl_user  
	WHERE username = '$username' 
	";
    $result1 = mysqli_query($conn, $check) or die(mysqli_error());
    $num=mysqli_num_rows($result1);

    if($num > 0)
    {
    echo "<script>";
    echo "alert(' This username has already been used!');";
    echo "window.history.back();";
    echo "</script>";
    }else{
  
      $sql = "INSERT INTO tbl_user
      (
      username,
      level_id,
      password,
      name,
      email
      )
      VALUES
      (
      '$username',
      '$level_id',
      '$password',
      '$name',
      '$email')";
    
  $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
  mysqli_close($conn);
    }
    if($result){
      echo "<script>";
      echo "alert('Add Succesfuly');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    } else {
      
      echo "<script>";
      //echo "alert('ERROR!');";
      echo "window.location ='admin.php'; ";
      echo "</script>";
    }
?>