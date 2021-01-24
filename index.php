<?php session_start();?>
<?php include('h.php');?>
    <body>

    <div class="container">
        <?php include('navbar2.php');?>
    
        <div style = "padding-left: 120px;">
            
                <?php include('img_pro.php');?>
           
        </div>

        <div class="row">
            
           
                <?php   
                    $act =(isset($_GET['act']) ? $_GET['act'] : '');
                    if ($act == 'showbytype'){
                        include('show_product_type.php');

                    }else{

                        include('show_product.php');
                    }
                ?>
           
        </div>

        <?php include('footer.php');?>
    </div>
  
    </body>
</html>