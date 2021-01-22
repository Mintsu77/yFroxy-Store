<?php include('style.php');?>
<?php
  include('connect.php');  
  $p_id = $_GET["ID"];
  $sql = "SELECT p.*,t.type_name
  FROM tbl_product as p 
  INNER JOIN tbl_type as t ON p.type_id = t.type_id
  WHERE p.p_id = '$p_id'
  ORDER BY p.type_id asc";
  
  $result2 = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result2);
  extract($row);

  $query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
  $result = mysqli_query($conn, $query);
?>

<div class="container">
  <div class="signup-content">
    <form  name="addproduct" action="product_form_edit_db.php" method="POST" enctype="multipart/form-data"  class="signup-form">
      <h2>EDIT PRODUCT</h2>
        <div class="form-group">
            <div class="col-sm-12">
              <input type="text"  name="p_name" class="form-input" required placeholder="Product name" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
              <input type="text"  name="p_price" class="form-input" required placeholder="Product price" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
              <select name="type_id" class="form-control" required>
                <option value="<?php echo $row["type_id"];?>">
                  <?php echo $row["type_name"]; ?>
                </option>
                <option value="type_id">Cetagory</option>
                  <?php foreach($result as $results){?>
                <option value="<?php echo $results["type_id"];?>">
                  <?php echo $results["type_name"]; ?></option>
                  <?php } ?>
              </select>
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-sm-12">
              <textarea  name="p_detail" rows="5" cols="60"><?php echo $p_detail; ?>
              </textarea>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
              <img src="p_img/<?php echo $row['p_img'];?>" width="100px">
              <br>
              <br>
              <input type="file" name="p_img" id="p_img" class="form-control" />
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-12">
              <input type="hidden" name="p_id" value="<?php echo $p_id; ?>" />
              <input type="hidden" name="img2" value="<?php echo $p_img; ?>" />
              <input type="submit" name="submit" id="submit" class="form-submit submit" value="SAVE"/>
            </div>
        </div>
    </form>
  </div>
</div>
