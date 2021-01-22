<html>
  <head>
    <?php include('h.php');?>
  </head>

  <body >
    <div class="container">
        <?php include('navbar.php');?>
        <p></p>
      <div class="row">
        <div class="col-md-3">
        <p> Hello <?php echo $name; ?></p>
          <?php include('menu_left.php');?>
        </div>
      <div class="col-md-6">
          <a href="level.php?act=add" class="btn-info btn-sm ">Add</a>
          <p></p>      
            <?php
              $act = $_GET['act'];
              if($act == 'add'){
              include('level_form_add.php');
              }elseif ($act == 'edit') {
              include('level_form_edit.php');
              }
              else {
              include('level_list.php');
              }
            ?>
      </div>
      </div>
    </div> 
  </body>
</html>