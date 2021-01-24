<?php include('h.php')?>
<?php 
$p_id = $_GET['p_id'];


$sql = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
AND p.p_id = $p_id";

$result_pro =mysqli_query($conn, $sql) 
or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result_pro);

?>
<!DOCTYPE html>
<head>
  <title>yForxy Store</title>
</head>
<body>
  
  <div class="container">
    <?php include('navbar2.php'); ?>
      <div class="row">
        <div class="col-md-10">
          <div class="container" style="margin-top: 50px; color: #fff;">
            <div class="row">

              <div class="col-md-6">
                <div class="polaroid">
                    <?php echo"<img src='backend/p_img/".$row['p_img']."'width='100%'>";?>
                </div>
              </div>

              <div class="col-md-6">
               
                  <h3><b><?php echo $row["p_name"];?></b></h3>
                  <h5>PRICE: ฿<?php echo $row["p_price"];?>.00</h5>
                  <p>CETAGORY: <?php echo $row["type_name"];?></p>
                  <p><?php echo $row["p_detail"];?></p>
                  <p>
                    <?php
                      $query = "SELECT * FROM tbl_size ORDER BY size_id asc" or die("Error:" . mysqli_error());
                      $result = mysqli_query($conn, $query);
                    ?>
                    <h4>Choose a size</h4>
                      <select name="size_id" class="form-input" required>
                        <option value="size_id">SIZE</option>
                          <?php foreach($result as $results){?>
                        <option value="<?php echo $results["size_id"];?>">
                          <?php echo $results["size_name"]; ?></option>
                        <?php } ?>
                      </select>
                  </p>
               
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
  