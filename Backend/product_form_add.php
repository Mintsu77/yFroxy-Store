<?php include('style.php');?>
<?php
  include('connect.php');  
  $query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
  $result = mysqli_query($conn, $query);
?>

<div class="container">
  <div class="signup-content">
    <form  name="addproduct" action="product_form_add_db.php" method="POST" enctype="multipart/form-data"  class="signup-form">
          <h2>ADD PRODUCT</h2> 
        <div class="form-group">
        <div class="col-sm-12">
          <input type="text"  name="p_code" class="form-input" required placeholder="Product code" />
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12">
          <input type="text"  name="p_name" class="form-input" required placeholder="Product name" />
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input  name="p_price" required placeholder="Product price" rows="5" cols="60"></input>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-6">
          <select name="type_id" class="form-input" required>
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
          <textarea  name="p_detail" required placeholder="Product detail" rows="5" cols="60"></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="file" name="p_img" id="p_img" class="form-control" />
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-12">
          <input type="submit" name="submit" id="submit" class="form-submit submit" value="SAVE"/>
        </div>
      </div>
      
    </form>
  </div>
</div>