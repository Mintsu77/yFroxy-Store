<html>
  <head>
    <?php include('h.php');?>
  </head>
  
  <body>
    <div class="container"> 
        <?php include('navbar.php');?>
        <p></p>
      <div class="row">
          <div class="col-md-3">
          <p> Hello <?php echo $name; ?></p>
              <?php include('menu_left.php');?>
          </div>
      <div class="col-md-9">
            <a href="admin.php?act=add" class="btn-info btn-sm ">Add</a>
            <p></p>
            <?php
              $act = $_GET['act'];
              if($act == 'add'){
              include('admin_form_add.php');
              }elseif ($act == 'edit') {
              include('admin_form_edit.php');
              }elseif ($act == 'rwd') {
              include('admin_form_rwd.php');
              }
              else {
              include('admin_list.php');
              }
            ?>
      </div>
      </div>
    </div>
  </body>
</html>