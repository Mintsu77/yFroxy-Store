<meta charset="utf-8">
<?php
include('connect.php');
	$id  = $_POST["id"];
	$a_pass1  = $_POST["a_pass1"];
	$a_pass2  = $_POST["a_pass2"];

	if($a_pass1 != $a_pass2){
		echo "<script type='text/javascript'>";
		echo "alert('password does not match. Please enter it again.');";
		echo "window.location = 'admin.php'; ";
		echo "</script>";
	}else{
	$sql = "UPDATE tbl_user SET 
	a_pass ='$a_pass1'
	WHERE id=$id
	 ";
	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	}
	mysqli_close($conn);
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Password changed successfully.');";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
	}else{
	echo "<script type='text/javascript'>";
	echo "window.location = 'admin.php'; ";
	echo "</script>";
}
?>