<?php
  include('h.php');
  include('connect.php');  
  $query = "SELECT * FROM tbl_level ORDER BY level_id ASC" or die("Error:" . mysqli_error());
  $result = mysqli_query($conn, $query);
                
  echo ' <table class="table table-hover table-bordered table-dark">';
    echo "
    <tr bgcolor ='#641E16'>
      <td>id</td>
      <td>level</td>
      <td>edit</td>
      <td >delete</td>                 
    </tr>";
                
    while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
      echo "<td>" .$row["level_id"] .  "</td> ";
      echo "<td>" .$row["level"] .  "</td> ";
      echo "<td><a href='level.php?act=edit&ID=$row[0]' class='btn btn-warning btn-sm'>Edit</a></td> ";  
      echo "<td><a href='level_form_delete_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-sm'>Delete</a></td> ";
      echo "</tr>";
    }
    echo "</table>";
  mysqli_close($conn);
?>