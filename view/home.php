<div id="home" class="content">
  <div id="stage">
    <div id="stage-caption">
      <h1><strong> Silahkan Daftar !</storng></h1>
      <h2> Daftar inap, dimana saja, kapan saja</h2><br>
      <button type="button" class="btn btn-lg btn-success" data-toggle="modal" data-target="#rumahsakit" id="id_rs5" value="Pilih Rumah Sakit" onclick="func_rs5()"> Daftar </button>
        <?php include "form-daftar-inap.php" ?>
    </div>
  </div>    
</div>

<script>
function func_rs5() {
  document.getElementById("id_rs1").value = document.getElementById("id_rs5").value;
}
</script>

