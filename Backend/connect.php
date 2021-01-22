<?php 
     
     $servername = 'localhost';
     $username = 'root';
     $password = '12345678';
     $dbname = 'store';

     $conn = mysqli_connect($servername, $username, $password, $dbname);

  mysqli_set_charset($conn , "utf8");
  date_default_timezone_set('Asia/Bangkok');
?>