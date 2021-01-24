<?php include('h.php') ?>
<?php require_once('backend/connect.php');

	$query_type = "SELECT * FROM tbl_type ORDER BY type_id ASC";
	$result_type =mysqli_query($conn, $query_type) or die ("Error in query: $query_type " . mysqli_error());
		// echo($query_type);
		// exit()

?>

<html lang="en">
    <body>
        <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #000;">
        <div class ="logo"<a href ="#"><img src = "images/logo1.png"></a></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-tshirt"></i> ALL</a>
                    </li>
                   
                    <li class=" nav-item dropdown">
                        <a class=" nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-th-list mr-2"></i>CETAGORIES</a>
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" >
                                <?php
		                            foreach ($result_type as $row ){?>
                                <li><a class="dropdown-item" href="index.php?act=showbytype&type_id=<?php echo $row['type_id'];?>">
                                    <?php echo $row["type_name"]; ?></a>
                                </li>
                                    <?php } ?>
                            </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listenmusic.php"><i class="fas fa-music"></i> LISTEN TO MUSIC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>CHECKOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form_login.php"><i class="fas fa-user mr-2"></i>LOGIN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-warning"></span></a>
                    </li>
                </ul>
            </div>
        </nav>
        
    </body>
</html>
