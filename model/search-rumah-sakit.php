<div id="data-pasien" class="container">
  <div class="row">
    <div class="jumbotron">
      <h1> Data Formulir Pasien </h1>
    </div>

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Nomor Antrian</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Umur</th>
            <th>Golongan Darah</th>
            <th>Diagnosa Penyakit</th>
            <th>Tipe Kamar</th>
            <th class="info">Edit</th>
            <th class="danger">Hapus</th>
          </tr>
        </thead>
        <tbody>

			<?php
				include "..controller/koneksi.php";

				$keyword = $_GET['search'];

				$sel_sql = "SELECT * FROM Rumah_Sakit LIKE %'.$keyword.'%";
				$run_sql = mysqli_query($db, $sel_sql);

				while ($data = mysqli_fetch_array($run_sql)) {
					echo '
			            <tr>
			              <td>'.$data['Kode'].'</td>
			              <td>'.$data['Nama_Rumah-Sakit'].'</td>
			              <td>'.$data['Alamat'].'</td>
			            ';
			            echo '
			              <td><a class="btn btn-danger" href="#"> Selesai </a></td>
			            </tr>
			          ';
				}
			?>

		</tbody>
      </table>
    </div>
  </div>
</div>
