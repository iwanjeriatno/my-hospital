<div class="form-group">
	<h4 class="col-sm-offset-2 col-sm-10">
		<strong>Silahkan Pilih Tipe Kamar Anda!</strong>
	</h4></br>
</div>
<div class="form-group">
  	<div class="col-sm-12">

		<?php

			$kuota = 5;

			// form pasien kelas 1
			$sel1_sql = "SELECT * FROM Form_Pasien_Kelas1";
			$run1_sql = mysqli_query($db, $sel1_sql);
			$data1 = mysqli_num_rows($run1_sql);
			$kosong_kelas1 = $kuota - $data1;

			// form pasien kelas 2
			$sel2_sql = "SELECT * FROM Form_Pasien_Kelas2";
			$run2_sql = mysqli_query($db, $sel2_sql);
			$data2 = mysqli_num_rows($run2_sql);
			$kosong_kelas2 = $kuota - $data2;

			// form pasien kelas3
			$sel3_sql = "SELECT * FROM Form_Pasien_Kelas3";
			$run3_sql = mysqli_query($db, $sel3_sql);
			$data3 = mysqli_num_rows($run3_sql);
			$kosong_kelas3 = $kuota - $data3;

			// form pasien vip
			$sel4_sql = "SELECT * FROM Form_Pasien_VIP";
			$run4_sql = mysqli_query($db, $sel4_sql);
			$data4 = mysqli_num_rows($run4_sql);
			$kosong_vip = $kuota - $data4;

			// form pasien vvip
			$sel5_sql = "SELECT * FROM Form_Pasien_VVIP";
			$run5_sql = mysqli_query($db, $sel5_sql);
			$data5 = mysqli_num_rows($run5_sql);
			$kosong_vvip = $kuota - $data5;

			
			echo '			  		
				<div class="col-sm-offset-2 col-sm-2">
		  			<button class="btn btn-primary" type="button" data-toggle="collapse tooltip" title="Kapasitas 5 Orang" data-target="#formulir" id="id_tipe2" value="Kelas 1" onclick="func_tipe2()">
		  				Kelas 1 <br/>	
		  				<span class="badge">'.$kosong_kelas1.' kosong</span>	  		
		  			</button>
		  		</div>
		  		<div class="col-sm-2">
		  			<button class="btn btn-primary" type="button" data-toggle="collapse tooltip" title="Kapasitas 5 Orang" data-target="#formulir" id="id_tipe3" value="Kelas 2" onclick="func_tipe3()">
		  				Kelas 2 <br/>
		  				<span class="badge">'.$kosong_kelas2.' kosong</span>
		  			</button>
		  		</div>
		  		<div class="col-sm-2">
		  			<button class="btn btn-primary" type="button" data-toggle="collapse tooltip" title="Kapasitas 5 Orang" data-target="#formulir" id="id_tipe4" value="Kelas 3" onclick="func_tipe4()">
		  				Kelas 3 <br/>
		  				<span class="badge">'.$kosong_kelas3.' kosong</span>
		  			</button>
		  		</div>
		  		<div class="col-sm-2">
		  			<button class="btn btn-primary" type="button" data-toggle="collapse tooltip" title="Kapasitas 5 Orang" data-target="#formulir" id="id_tipe5" value="VIP" onclick="func_tipe5()">
		  				VIP <br/>
		  				<span class="badge">'.$kosong_vip.' kosong</span>
		  			</button>
		  		</div>
		  		<div class="col-sm-2">
		  			<button class="btn btn-primary" type="button" data-toggle="collapse tooltip" title="Kapasitas 5 Orang" data-target="#formulir" id="id_tipe6" value="VVIP" onclick="func_tipe6()">
		  				VVIP <br/>
		  				<span class="badge">'.$kosong_vvip.' kosong</span>
		  			</button>
		  		</div>
	  		';
	  	?>
  	</div><hr class="garis">
</div>
<div class="form-group">
	<label for="id_tipe2" class="col-sm-3 control-label"> Tipe Kamar </label>
	<div class="col-sm-3">
		<input class="form-control input-lg" type="text" id="id_tipe1" name="tipe" required>
	</div>sign
</div>

<div class="form-group">
  	<label class="col-sm-3 control-label">Nomor Antrian</label>
   	<div class="col-sm-2">
  	 	<?php

			$sel_sql = "SELECT * FROM Form_Pasien";
			$run_sql = mysqli_query($db, $sel_sql);
			$data = mysqli_num_rows($run_sql);
			$antrian = $data + 1;

			echo '
				<p class="form-control-static" id="id_antrian"> '.$antrian.'
			';

		?>	
		
    </div>
    <div class="col-sm-offset-2 col-sm-5">
    	<span class="glyphicon glyphicon-time" style="font-size:1.5em; color:#000;"><?php echo '  '.date("d/m/Y h:i:s"); ?></span>
    </div>
</div>

<script>	 
	function func_tipe2() {
		document.getElementById("id_tipe1").value = document.getElementById("id_tipe2").value;
	}
	function func_tipe3() {
		document.getElementById("id_tipe1").value = document.getElementById("id_tipe3").value;
	}
	function func_tipe4() {
		document.getElementById("id_tipe1").value = document.getElementById("id_tipe4").value;
	}
	function func_tipe5() {
		document.getElementById("id_tipe1").value = document.getElementById("id_tipe5").value;
	}
	function func_tipe6() {
		document.getElementById("id_tipe1").value = document.getElementById("id_tipe6").value;
	}
</script>