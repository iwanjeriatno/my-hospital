<?php
 	include "koneksi.php";

	if(isset($_POST['daftar'])) {
		$nama = strip_tags($_POST['nama']);	
		$jk = $_POST['jk'];	
		$tanggal = $_POST['tanggal'];
	 	$umur = $_POST['umur'];
		$gol = $_POST['gol'];		
	 	$diagnosis = trim(htmlspecialchars($_POST['diagnosis']));
		$tipe = $_POST['tipe'];
		$rs = $_POST['rs'];

		if($nama==""||$jk==""||$diagnosis==""||$gol==""||$rs=="") {
 			?>
				<script type="text/javascript">
					alert('Inputan Tidak boleh ada yang kosong');
				</script>
			<?php
		}
		else {	
			// form pasien kelas1
			$sel1_sql = "SELECT * FROM Form_Pasien_Kelas1";
			$run1_sql = mysqli_query($db, $sel1_sql);

			// form pasien kelas2
			$sel2_sql = "SELECT * FROM Form_Pasien_Kelas2";
			$run2_sql = mysqli_query($db, $sel2_sql);
			$data2 = mysqli_num_rows($run2_sql);

			// form pasien kelas3
			$sel3_sql = "SELECT * FROM Form_Pasien_Kelas3";
			$run3_sql = mysqli_query($db, $sel3_sql);
			$data3 = mysqli_num_rows($run3_sql);

			// form pasien vip
			$sel4_sql = "SELECT * FROM Form_Pasien_VIP";
			$run4_sql = mysqli_query($db, $sel4_sql);
			$data4 = mysqli_num_rows($run4_sql);

			// form pasien vvip
			$sel5_sql = "SELECT * FROM Form_Pasien_VVIP";
			$run5_sql = mysqli_query($db, $sel5_sql);
			
			if($data5 = mysqli_num_rows($run5_sql) > 5) {
				?>
				<script type="text/javascript">
					alert('Maaf Ruangan tidak ada yang kosong');
					window.location ="http://localhost/MyHospital/view/index.php";	
				</script>
				<?php
			}
			else {
			 	$ins_sql = "INSERT INTO Form_Pasien (Nama_Lengkap, Jenis_Kelamin, Tanggal_Lahir, Umur, Golongan_Darah, Diagnosa_Penyakit, Tipe_Kamar, RS_Pilihan) VALUES ('$nama', '$jk', '$tanggal', '$umur', '$gol', '$diagnosis', '$tipe', '$rs')";
				$run_sql = mysqli_query($db, $ins_sql);

				if ($run_sql) {
		 		?>
					<script type="text/javascript">
						alert('Data berhasil disimpan');
						window.location ="http://localhost/MyHospital/view/index.php";
					</script>
				<?php
				}
		  		else {
				?>
					<script type="text/javascript">
						alert('Data gagal disimpan');
						window.location ="http://localhost/MyHospital/view/index.php";
					</script>
				<?php
				}
			}
		}
	}
	$db->close();
?>