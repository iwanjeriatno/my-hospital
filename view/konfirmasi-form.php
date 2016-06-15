 <!-- formulir -->
  <div class="modal fade" id="modal-data-pasien" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Form Pendaftaran</h4>
        </div>
        <div class="modal-body">

           <div class="container">
              <?php
              include "../controller/koneksi.php";
              include "../controller/tanggal-indo.php";

                  $sel_sql = "SELECT * FROM Form_Pasien ";
                  $run_sql = mysqli_query($db, $sel_sql);

                  while($data = mysqli_fetch_assoc($run_sql)) {

                    echo '
                      <div class="jumbotron">
                        <h1> Detail Data Pasien </h1>
                        <button value="Kembali" onclick="history.go(-1); return true;"></button>
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
              ?>
            </div>
          </div>
      
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>

 
