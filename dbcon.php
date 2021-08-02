<?php

$server='localhost';
$username='root';
$password='';
$db='coronadb';

$con=mysqli_connect($server,$username,$password,$db);

if($con){
  ?>
  <!-- <script type="text/javascript">
    alert('connection successful');
  </script> -->
  <?php
}else{
  ?>
  <!-- <script type="text/javascript">
    alert('connection failed');
  </script> -->
  <?php
}


 ?>
