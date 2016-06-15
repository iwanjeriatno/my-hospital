<div class="form-group">
        <label for="lb-nama" class="col-sm-3 control-label">Nama</label>
        <div class="col-sm-9">
          <input type="text" name="nama" class="form-control input-lg" id="lb-nama" value="<?php echo $nama; ?>" placeholder="Nama Lengkap" autocomplete="off" required>
        </div>
      </div>

      <div class="form-group">
        <label for="jk" class="col-sm-3 control-label"> Jenis Kelamin </label>
        <div class="col-sm-5">
            <select class="form-control input-lg" id="jk" name="jk" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Pria">Pria</option>
            <option value="Wanita">Wanita</option>
        </select>
      </div>
      </div>

      <div class="form-group">           
        <label for="datepicker" class="col-sm-3 control-label">Tanggal Lahir</label>
        <div class="col-sm-5">
          <input type="date" name="tanggal" class="form-control input-lg" id="datepicker" value="<?php echo $tgl; ?>">
        </div>
      </div>

      <div class="form-group">         
        <label for="lb-umur" class="col-sm-3 control-label">Umur</label>
        <div class="col-sm-3">
          <input type="number" name="umur" class="form-control input-lg" id="umur" value="<?php echo $umur; ?>">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-3 control-label"> Golongan Darah </label>
        <div class="col-sm-5">
            <select class="form-control input-lg" id="gol" name="gol" required>
            <option value="">Pilih Golongan Darah</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select>
      </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-3" for="diagnosis"> Diagnosa Penyakit </label>
        <div class="col-sm-9">
          <textarea class="form-control" name="diagnosis" id="diagnosis" value="<?php echo $diagnosis; ?>" rows="8" required></textarea>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-4">
          <input type="button" data-dismiss="modal" aria-label="Close" name="batal" class="btn btn-danger btn-lg" value="Batal">
        </div>
        <div class="col-sm-4">          
          <input type="submit" name="daftar" class="btn btn-success btn-lg" value="Oke">
        </div>
      </div>


      <?php
        include "konfirmasi-form.php";
      ?>
      

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
  $(function() {
      $( "#datepicker" ).datepicker();
  });

  window.onload=function(){
      $('#datepicker').on('change', function() {
          var dob = new Date(this.value);
          var today = new Date();
          var age = Math.floor((today-dob) / (365.25 * 24 * 60 * 60 * 1000));
          $('#umur').val(age);
      });
  }
</script>