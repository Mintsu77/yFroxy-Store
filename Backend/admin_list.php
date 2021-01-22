<?php
      include('h.php');
       error_reporting( error_reporting() & ~E_NOTICE );
                
                include('connect.php');  
                
                $query = "SELECT * FROM tbl_user ORDER BY id ASC" or die("Error:" . mysqli_error());
                
                $result = mysqli_query($conn, $query);
                
                $row_am = mysqli_fetch_assoc($result);
                ?>

<script>    
$(document).ready(function() {
    $('#example1').DataTable( {
      "aaSorting" :[[0,'ASC']],
    //"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
  });
} );
 
  </script>

  <table border="2" class="display table table-bordered" id="example1" align="center"  >
  <thead>
    <tr class="info">    
    <th width="5%">id</th>
    <th >username</th>
    <th >email</th>
    <th width="10%">password</th>
    <th width="5%">edit</th>
    <th width="5%">delete</th>
  </tr>
</thead>
  <?php do { ?>
  
    <tr>
      <td><?php echo $row_am['id']; ?></td>
      <td><?php echo $row_am['username']; ?></td>
      <td ><?php echo $row_am['email']; ?></td>
      <td><a href="admin.php?act=rwd&ID=<?php echo $row_am['id']; ?>" class="btn btn-info btn-sm"> password </a> </td>
      <td><a href="admin.php?act=edit&ID=<?php echo $row_am['id']; ?>" class="btn btn-warning btn-sm"> Edit </a> </td>
      <td><a href="delete_db.php?ID=<?php echo $row_am['id']; ?>" class='btn btn-danger btn-sm'  onclick="return confirm('confrim delete')">Delete</a> </td>
    </tr>

    <?php } while ($row_am =  mysqli_fetch_assoc($result)); ?>
  
    </table> 