<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <span>
        <h2 align="center"> Data Formulir Pasien &nbsp &nbsp
        <a href="javascript:location.reload(true)">
          <span class="glyphicon glyphicon-refresh"></span>
        </a> 
        </h2>
      </span>
    </div>
    <div class="panel-body panel-refresh">
      <div class="well"> 
        Searching....
      </div>
      <div class="data-pasien"> 
          <table class="table">
            <thead>
              <tr>
                <th>Rumah Sakit</th>
                <th>Nomor Antrian</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Umur</th>
                <th>Golongan Darah</th>
                <th>Diagnosa Penyakit</th>
                <th>Tipe Kamar</th>
                <th class="danger">Akses</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include "../controller/koneksi.php";
                include "../controller/tanggal-indo.php";
                include "delete-pasien.php";

                $sel_sql = "SELECT * FROM Form_Pasien";
                $run_sql = mysqli_query($db, $sel_sql);

                while($data = mysqli_fetch_array($run_sql)) {
                  echo '
                    <tr>
                      <td>'.$data['RS_Pilihan'].'</td>
                      <td>'.$data['No_Antrian'].'</td>
                      <td>'.$data['Nama_Lengkap'].'</td>
                      <td>'.$data['Jenis_Kelamin'].'</td>
                      <td>'.TanggalIndo($data['Tanggal_Lahir']).'</td>
                      <td>'.$data['Umur'].'</td>
                      <td>'.$data['Golongan_Darah'].'</td>
                      <td>'.$data['Diagnosa_Penyakit'].'</td>
                      <td>'.$data['Tipe_Kamar'].'</td>
                      <td>
                        <a class="btn btn-warning" href="index.php?menu=detail_pasien&detail_pasien.php&No='.$data['No_Antrian'].'"> Detail </a><br>
                        <a class="btn btn-danger" href="index.php?menu=data_pasien&delete_pasien.php&No='.$data['No_Antrian'].' "> Selesai </a>
                      </td>
                    </tr>
                  ';
                }

              ?>
            </tbody>
          </table>
        </div>
      </div>
  </div>
</div>