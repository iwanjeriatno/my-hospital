<?php 
  include "../controller/koneksi.php";

  if(isset($_GET['No'])) {
    $del_sql = "DELETE FROM Form_Pasien WHERE No_Antrian = '$_GET[No]' ";
    $run_sql = mysqli_query($db, $del_sql);
  }
?>