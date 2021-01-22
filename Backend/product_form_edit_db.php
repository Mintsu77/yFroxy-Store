<meta charset="UTF-8">
<?php
	include('connect.php');  
    date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	
	$p_id = $_POST["p_id"];
	$p_name = $_POST["p_name"];
	$type_id = $_POST["type_id"];
	$p_price = $_POST["p_price"];
	$p_detail = $_POST["p_detail"];
	$p_img = (isset($_POST['p_img']) ? $_POST['p_img'] : '');
	$img2 = $_POST['img2'];
	$upload=$_FILES['p_img']['name'];
	if($upload !='') { 
 
		$path="p_img/";
		$type = strrchr($_FILES['p_img']['name'],".");
		$newname =$numrand.$date1.$type;
 
		$path_copy=$path.$newname;
		$path_link="p_img/".$newname;
		move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);  
	}else {
		$newname = $img2;
	}

	$sql = "UPDATE tbl_product SET  
			p_name='$p_name',
			type_id='$type_id',
			p_price='$p_price', 
			p_detail='$p_detail',
			p_img='$newname'
			WHERE p_id='$p_id' ";

	$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());

	mysqli_close($conn); 

	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('Update Succesfuly');";
		echo "window.location = 'product.php'; ";
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to Update again');";
		echo "</script>";
	}
?>