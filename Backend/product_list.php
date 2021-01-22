<?php

  include('connect.php');  
 
  $query = "
  SELECT * FROM tbl_product as p 
  INNER JOIN tbl_type  as t ON p.type_id=t.type_id 
  ORDER BY p.p_id DESC" or die("Error:" . mysqli_error());
 
  $result = mysqli_query($conn, $query);

  echo  ' <table class="table table-hover table-bordered table-dark">';
      echo "<tr bgcolor = '#641E16'>
        <td width='5%'>id</td>
        <td width=25%>type</td>
        <td width=30%>name</td>
        <td width=25%>img</td>
        <td width=5%>edit</td>
        <td width=5%>delete</td>
      </tr>";
    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
        echo "<td>" .$row["p_id"] .  "</td> ";
        echo "<td>" .$row["type_name"] .  "</td> ";
        echo "<td>" .$row["p_name"] .  "</td> ";
        echo "<td align=center>"."<img src='p_img/".$row[p_img]."' width='100'>"."</td>";
        echo "<td><a href='product.php?act=edit&ID=$row[0]' class='btn btn-warning btn-sm'>edit</a></td> ";
        echo "<td><a href='product_del_db.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-sm'>del</a></td> ";
      echo "</tr>";
    }
  echo "</table>";
  
  mysqli_close($conn);
?>