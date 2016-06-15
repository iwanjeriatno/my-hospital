<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="../view/dist/img/hospital-icon.png">
    <title>My Hospital | Sistem Admin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../view/dist/css/bootstrap.min.css">
    <!-- Global CSS -->
    <link rel="stylesheet" href="../view/dist/css/admin.css">
  </head>
  <body>
    <div class="container-fluid display-table">
      <div class="row display-table-row">
        <div class="col-md-2 display-table-cell valign-top" id="sidebar">
          <h2>Navigation</h2>
          <ul>

            <li class="link active">
              <a href="dashboard.php?menu=home">
                <span class="glyphicon glyphicon-th" aria-hidden="ture"></span>
                <span> Dashboard </span>
              </a>
            </li>

            <li class="link">
              <a href="dashboard.php?menu=data-pasien">
                <span class="glyphicon glyphicon-user" aria-hidden="ture"></span>
                <span> Pasien </span>
              </a>
            </li>

            <li class="link">
              <a href="#collapse-rumah-sakit" data-toggle="collapse" aria-controls="collapse-comments">
                <span class="glyphicon glyphicon-plus" aria-hidden="ture"></span>
                <span> Rumah Sakit </span>
              </a>

              <ul class="collapse collapseable" id="collapse-rumah-sakit">
                <li>
                  <a href="#collapse-ruang-inap-rs1" data-toggle="collapse" aria-controls="collapse-comments">
                    <span class="glyphicon glyphicon-home" aria-hidden="ture"></span>
                    <span> Rs. Ibnu Sina </span>
                  </a>
                  <ul class="collapse collapseable" id="collapse-ruang-inap-rs1">
                    <li><a href="dashboard.php?menu=pasien_rs1_kelas1">Kelas 1</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs1_kelas2">Kelas 2</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs1_kelas3">Kelas 3</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs1_vip">VIP</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs1_vvip">VVIP</a></li>
                    <li class="seeall"><a href="dashboard.php?menu=seeall_rs1">See All..</a></li>
                  </ul>
                </li> 
                <li>
                  <a href="#collapse-ruang-inap-rs2" data-toggle="collapse" aria-controls="collapse-comments">
                    <span class="glyphicon glyphicon-home" aria-hidden="ture"></span>
                    <span> Rs. Wahidin </span>
                  </a>
                  <ul class="collapse collapseable" id="collapse-ruang-inap-rs2">
                    <li><a href="dashboard.php?menu=pasien_rs2_kelas1">Kelas 1</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs2_kelas2">Kelas 2</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs2_kelas3">Kelas 3</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs2_vip">VIP</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs2_vvip">VVIP</a></li>
                    <li class="seeall"><a href="dashboard.php?menu=seeall_rs2">See All..</a></li>
                  </ul>
                </li>
                <li>
                  <a href="#collapse-ruang-inap-rs3" data-toggle="collapse" aria-controls="collapse-comments">
                    <span class="glyphicon glyphicon-home" aria-hidden="ture"></span>
                    <span> Rs. Awal Bross </span>
                  </a>
                  <ul class="collapse collapseable" id="collapse-ruang-inap-rs3">
                    <li><a href="dashboard.php?menu=pasien_rs3_kelas1">Kelas 1</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs3_kelas2">Kelas 2</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs3_kelas3">Kelas 3</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs3_vip">VIP</a></li>
                    <li><a href="dashboard.php?menu=pasien_rs3_vvip">VVIP</a></li>
                    <li class="seeall"><a href="dashboard.php?menu=seeall_rs3">See All..</a></li>
                  </ul>
                </li>
              </ul>

            </li>
        
            <li class="link settings-btn">
              <a href="dashboard.php?menu=informasi">
                <span class="glyphicon glyphicon-cog" aria-hidden="ture"></span>
                <span> Settings </span>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-10 display-table-cell valign-top" id="content">
          <!-- navbar -->
          <div class="row">
            <header id="nav-header" class="clearfix">
              <div class="col-md-5">
                <input type="text" id="search-field" name="search" placeholder="Search for something..">
              </div>
              <div class="col-md-7">
                <ul class="pull-right">
                  <li class="welcome"> Welcome </li>
                  <li>
                    <a href="#" class="fixed-width">
                      <span class="glyphicon glyphicon-bell" aria-hidden="true"></span>
                      <span class="label label-warning">
                        <?php
                          include "../controller/koneksi.php";
                          
                          $sel_sql = "SELECT * FROM Form_Pasien";
                          $run_sql = mysqli_query($db, $sel_sql);
                          $data = mysqli_num_rows($run_sql);

                          echo $data;
                        ?>
                      </span>
                    </a>
                  </li>
                  <!-- <li>
                    <a href="#" class="fixed-width">
                      <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                      <span class="label label-message"></span>
                    </a>
                  </li> -->
                  <li>
                    <a href="../controller/logout.php" class="log-out">
                      <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                      Log Out
                    </a>
                  </li>
                </ul>
              </div>
            </header>
          </div>

          <!-- content -->
          <div class="row">
            <div class="content">
              <?php
                if(isset($_GET['menu'])) {
                  if ($_GET['menu']=='home'){
                    include "home.php";
                  }
                  else if ($_GET['menu']=='data-pasien'){
                    include "data_pasien.php";
                  }
                  else if ($_GET['menu']=='rumah-sakit'){
                    include "rumah-sakit.php";
                  }
                  else if ($_GET['menu']=='profil'){
                    include "profil.php";
                  }
                  else if ($_GET['menu']=='tipe-kamar'){
                    include "tipe-kamar.php";
                  }
                  else if ($_GET['menu']=='detail_pasien'){
                    include "detail_pasien.php";
                  }
                  else if ($_GET['menu']=='delete_pasien'){
                    include "delete-pasien.php";
                  }

                  // pasien rs1
                  else if ($_GET['menu']=='pasien_rs1_kelas1'){
                    include "pasien-rs1-kelas1.php";
                  }
                  else if ($_GET['menu']=='pasien_rs1_kelas2'){
                    include "pasien-rs1-kelas2.php";
                  }
                  else if ($_GET['menu']=='pasien_rs1_kelas3'){
                    include "pasien-rs1-kelas3.php";
                  }
                  else if ($_GET['menu']=='pasien_rs1_vip'){
                    include "pasien-rs1-vip.php";
                  }
                  else if ($_GET['menu']=='pasien_rs1_vvip'){
                    include "pasien-rs1-vvip.php";
                  }
                  else if ($_GET['menu']=='seeall_rs1'){
                    include "seeall-pasien-rs1.php";
                  }

                  // pasien rs2
                  else if ($_GET['menu']=='pasien_rs2_kelas1'){
                    include "pasien-rs2-kelas1.php";
                  }
                  else if ($_GET['menu']=='pasien_rs2_kelas2'){
                    include "pasien-rs2-kelas2.php";
                  }
                  else if ($_GET['menu']=='pasien_rs2_kelas3'){
                    include "pasien-rs2-kelas3.php";
                  }
                  else if ($_GET['menu']=='pasien_rs2_vip'){
                    include "pasien-rs2-vip.php";
                  }
                  else if ($_GET['menu']=='pasien_rs2_vvip'){
                    include "pasien-rs2-vvip.php";
                  }
                  else if ($_GET['menu']=='seeall_rs2'){
                    include "seeall-pasien-rs2.php";
                  }

                  // pasien rs3
                  else if ($_GET['menu']=='pasien_rs3_kelas1'){
                    include "pasien-rs3-kelas1.php";
                  }
                  else if ($_GET['menu']=='pasien_rs3_kelas2'){
                    include "pasien-rs3-kelas2.php";
                  }
                  else if ($_GET['menu']=='pasien_rs3_kelas3'){
                    include "pasien-rs3-kelas3.php";
                  }
                  else if ($_GET['menu']=='pasien_rs3_vip'){
                    include "pasien-rs3-vip.php";
                  }
                  else if ($_GET['menu']=='pasien_rs3_vvip'){
                    include "pasien-rs3-vvip.php";
                  }
                  else if ($_GET['menu']=='seeall_rs3'){
                    include "seeall-pasien-rs3.php";
                  }

                  else {
                    include "home.php";
                  }
                }
                else {
                  include "home.php";
                }
              ?>
            </div>
          </div> 
          
          <!-- footer -->
          <div class="row">
            <footer id="admin-footer" class="clearfix">
              <div class="pull-left"><b>Copyright &copy 2016 </b></div>
              <div class="pull-right">Admin-System</div>
            </footer>
          </div>

        </div>
      </div>
    </div>

    <!-- jQuery first, then Bootstrap JS. -->
    <script src="../view/dist/js/jquery.min.js"></script>
    <script src="../view/dist/js/bootstrap.min.js"></script>
  </body>
</html>
