<?php 
$type_id = $_GET['type_id'];


$query_product_type = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
WHERE p.type_id = $type_id
ORDER BY p.p_id ASC";

$result_pro =mysqli_query($conn, $query_product_type) 
or die ("Error in query: $query_product_type " . mysqli_error());

?>

<body>

<div class="container">
    <div id="message"></div>
      <div class="row mt-2 pb-3">
      <?php foreach ($result_pro as $row){  ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
          <div class="card-deck">
            <div class="card p-2 mb-2" style="background-color: #000;">
                <img src="backend/p_img/<?= $row['p_img'] ?>" class="card-img-top" height="200">
                <div class="card-body p-1">
                  <h4 class="card-title text-center text-light"><?= $row['p_name'] ?></h4>
                  <h5 class="card-text text-center text-light">฿&nbsp;&nbsp;<?= number_format($row['p_price'],2) ?></h5>
                </div>
                <div class="card-footer p-1">
                  <form action="" class="form-submit">
                    <div class="row p-2">
                      <div class="col-md-6 py-1 pl-4 text-light" >
                        <b style="font-size: 10.9px;">Quantity : </b>
                      </div>
                      <div class="col-md-6">
                        <input type="number" class="form-control pqty" value="<?= $row['p_qty'] ?>">
                      </div>
                    </div>
                    <input type="hidden" class="pid" value="<?= $row['p_id'] ?>">
                    <input type="hidden" class="pname" value="<?= $row['p_name'] ?>">
                    <input type="hidden" class="pprice" value="<?= $row['p_price'] ?>">
                    <input type="hidden" class="pimage" value="backend/p_img/<?= $row['p_img'] ?>">
                    <input type="hidden" class="pcode" value="<?= $row['p_code'] ?>">
                    <button class="btn btn-warning btn-block addItemBtn"><i class="fas fa-cart-plus">
                      </i>&nbsp;&nbsp;Add to cart</button>
                  </form>
                </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
</div>


<script type="text/javascript" src="js/add_to_cart.js"></script>
</body>
</html>