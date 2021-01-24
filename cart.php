<?php session_start();?>
<?php include('h.php')?>
<!DOCTYPE html>
<html lang="en">
    <body>
       <div class="container">
        <?php include ('navbar2.php') ?>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div style="display:<?php if (isset($_SESSION['showAlert'])) {
                            echo $_SESSION['showAlert'];
                        } else {
                            echo 'none';
                        } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><?php if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                        } unset($_SESSION['showAlert']); ?></strong>
                    </div>
                <div class="table-responsive mt-2">
                    <table class="table table-dark table-bordered table-striped text-center">
                        <thead>
                            <tr>
                                <td colspan="7">
                                    <h4 class="text-center text-info m-0">Products in your cart!</h4>
                                </td>
                            </tr>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>
                                    <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return 
                                    confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>
                                    &nbsp;&nbsp;Clear Cart</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                require 'backend/connect.php';
                                $stmt = $conn->prepare('SELECT * FROM tbl_cart');
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $grand_total = 0;
                                while ($row = $result->fetch_assoc()):
                            ?>
                            <tr>
                                <td><?= $row['p_id'] ?></td>
                                    <input type="hidden" class="pid" value="<?= $row['p_id'] ?>">
                                <td><img src="<?= $row['p_img'] ?>" width="50"></td>
                                <td><?= $row['p_name'] ?></td>
                                <td>
                                    ฿&nbsp;&nbsp;<?= number_format($row['p_price'],2); ?>
                                </td>
                                    <input type="hidden" class="pprice" value="<?= $row['p_price'] ?>">
                                <td>
                                    <input type="number" class="form-control itemQty" value="<?= $row['qty'] ?>" style="width:75px;">
                                </td>
                                <td>฿&nbsp;&nbsp;<?= number_format($row['total_price'],2); ?></td>
                                <td>
                                    <a href="action.php?remove=<?= $row['p_id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                                <?php $grand_total += $row['total_price']; ?>
                            <?php endwhile; ?>
                            <tr>
                                <td colspan="3">
                                    <a href="index.php" class="btn btn-success"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                                    Shopping</a>
                                </td>
                                <td colspan="2"><b>Grand Total</b></td>
                                <td><b>฿&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                                <td>
                                    <a href="checkout.php" class="btn btn-info <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> 
        <script type="text/javascript" src="js/cart.js"></script>   
    </body>
</html>