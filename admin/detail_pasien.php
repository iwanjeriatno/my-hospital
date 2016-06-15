<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="dist/img/hospital-icon.png">
    <title>My Hospital | Makassar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../view/dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../view/dist/css/style.css" rel="stylesheet">
  </head>
  <body> 

  <div class="container">
    <?php
    include "../controller/koneksi.php";
    include "../controller/tanggal-indo.php";

      if (isset($_GET['No'])) {
        $sel_sql = "SELECT * FROM Form_Pasien WHERE No_Antrian='$_GET[No]' ";
        $run_sql = mysqli_query($db, $sel_sql);

        while($data = mysqli_fetch_assoc($run_sql)) {

          echo '
            <div class="jumbotron">
              <h1> Detail Data Pasien </h1>
              <a class="btn btn-warning" href="../view/pendaftaran.php?No='.$data['No_Antrian'].' "> Edit '.$data['Nama_Lengkap'].'</a>
            </div>

            <div class="row">
              <strong class="col-sm-3">No Antrian</strong>
              <div class="col-sm-3">'.$data['No_Antrian'].'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Nama</strong>
              <div class="col-sm-3">'.$data['Nama_Lengkap'].'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Jenis Kelamin</strong>
              <div class="col-sm-3">'.$data['Jenis_Kelamin'].'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Tanggal Lahir</strong>
              <div class="col-sm-3">'.TanggalIndo($data['Tanggal_Lahir']).'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Umur</strong>
              <div class="col-sm-3">'.$data['Umur'].'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Golongan Darah</strong>
              <div class="col-sm-3">'.$data['Golongan_Darah'].'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Diagnosa Penyakit</strong>
              <div class="col-sm-3">'.$data['Diagnosa_Penyakit'].'</div>
            </div>
            <div class="row">
              <strong class="col-sm-3">Tipe Kamar</strong>
              <div class="col-sm-3">'.$data['Tipe_Kamar'].'</div>
            </div>
          ';
        }
      }
    ?>
  </div>
</div>

      <!-- jQuery first, then Bootstrap JS. -->
    <script src="../view/dist/js/jquery.min.js"></script>
    <script src="../view/dist/js/bootstrap.min.js"></script>
  </body>
</html>