<?php
  include('connect.php');  
  $type_id = $_REQUEST["ID"];

  $sql = "SELECT * FROM tbl_type WHERE type_id='$type_id' ";
  $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
  $row = mysqli_fetch_array($result);
  extract($row);
?>

<?php include('h.php');?>

<div class="container">
  <p> </p>
    <div class="row">
      <div class="col-md-12">
        <form  name="admin" action="type_form_edit_db.php" method="POST" id="admin" class="form-horizontal">
          <input type="hidden" name="type_id" value="<?php echo $type_id; ?>" />
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="type_name" type="text" required class="form-control" id="type_name" value="<?=$type_name;?>" placeholder="cetagory name" pattern="^[a-zA-Z0-9]+$" title="A-Z or Number Only" minlength="2"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-dark btn-sm" id="btn"> SAVE </button>      
            </div> 
          </div>
        </form>
      </div>
    </div>
</div>