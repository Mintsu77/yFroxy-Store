<meta charset="UTF-8">
<?php
	include('connect.php');  
	
	date_default_timezone_set('Asia/Bangkok');
	$date1 = date("Ymd_His");
	$numrand = (mt_rand());
	
	$p_code = $_POST['p_code'];
	$p_name = $_POST['p_name'];
	$type_id = $_POST['type_id'];
	$p_price = $_POST['p_price'];
	$p_detail = $_POST['p_detail'];
	$p_img =(isset($_POST['p_img']) ? $_POST['p_img'] :'');

	$upload=$_FILES['p_img'];
	if($upload <> '') {

	$path="p_img/";
	
	$type = strrchr($_FILES['p_img']['name'],".");
	
	$newname ='p_img'.$numrand.$date1.$type;
	$path_copy=$path.$newname;
	$path_link="p_img/".$newname;
	
	move_uploaded_file($_FILES['p_img']['tmp_name'],$path_copy);
	}
	
		$sql = "INSERT INTO tbl_product
		(
		p_name,
		type_id,
		p_price,
		p_detail,
		p_code,
		p_img
		)
		VALUES
		(
		'$p_name',
		'$type_id',
		'$p_price',
		'$p_detail',
		'$p_code',
		'$newname')";
		
		$result = mysqli_query($conn, $sql);
	
	mysqli_close($conn);
	
	if($result){
		echo "<script type='text/javascript'>";
		echo "alert('Add Succesfuly');";
		echo "window.location = 'product.php'; ";
		echo "</script>";
	}
	else{
		echo "<script type='text/javascript'>";
		echo "alert('Error back to upload again');";
		echo "window.location = 'product.php'; ";
		echo "</script>";
	}
?>