<?php
	
	include "../controller/koneksi.php";

	if(isset($_GET['No'])) { 
		$sel_sql = "SELECT * FROM Form_Pasien WHERE No_Antrian='$_GET[No]' ";
		$run_sql = mysqli_query($db, $sel_sql);

		while ($data = mysqli_fetch_assoc($run_sql)) {
			$no = $data['No_Antrian'];
			$nama = $data['Nama_Lengkap'];
			$jk = $data['Jenis_Kelamin'];
			$nama = $data['Nama_Lengkap'];
			$tgl = $data['Tanggal_Lahir'];
			$umur = $data['Umur'];
			$gol = $data['Golongan_Darah'];
			$diagnosis = $data['Diagnosa_Penyakit'];
			$tipe = $data['Tipe_Kamar'];

			if($jk == 'Pria') {
				$pilih_jk = '
					<select class="form-control">
						<option value="Pria" selected> Pria </option>
						<option value="Wanita"> Wanita </option>
					</select> ';	
			}			
			elseif($jk == 'Wanita') {
				$pilih_jk = '
					<select class="form-control">
						<option value="Pria"> Pria </option>
						<option value="Wanita" selected> Wanita </option>
					</select>';
			}
		}
	}
	else {
		$no = '';
		$nama = '';
		$jk = '';
		$nama = '';
		$tgl = '';
		$umur = '';
		$gol = '';
		$diagnosis = '';
		$tipe = '';
		$pilih_jk = '
					<select class="form-control" required>
						<option> Pilih Jenis Kelamin </option>
						<option value="Pria"> Pria </option>
						<option value="Wanita"> Wanita </option>
					</select>';

	}

?>