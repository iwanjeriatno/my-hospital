<div id="the-hospital">
  <div class="title-bar">
    <div class="col-sm-offset-2 col-sm-4">
      <h2> The Hospital </h2>
    </div>
<!--       <form action="../model/search-rumah-sakit.php" method="get">
        <div class="input-group col-sm-6">
          <div class="input-group-btn">  
            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
          </div>
          <input class="form-control input-lg" type="text" id="search-field" name="search" placeholder="Cari Rumah Sakit..">
        </div>
      </form> -->
    <hr class="garis">
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="dist/img/hospital.jpg" alt="...">
        <div class="caption" align="center">
          <h3>RS. Ibnu Sina</h3>
          <p>Jln. Urip Sumoharjo</p>
            <button type="button" data-toggle="modal" data-target="#rumahsakit" class="btn btn-success btn-lg" id="id_rs2" value="Rs Ibnu Sina" onclick="func_rs2()"> Daftar </button>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="dist/img/hospital.jpg" alt="...">
        <div class="caption" align="center">
          <h3>RS. Wahidin</h3>
          <p>Jln. Perintis Kemerdekaan</p>
            <button type="button" data-toggle="modal" data-target="#rumahsakit" class="btn btn-success btn-lg" id="id_rs3" value="Rs Wahidin" onclick="func_rs3()"> Daftar </button>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <div class="thumbnail">
        <img src="dist/img/hospital.jpg" alt="...">
        <div class="caption" align="center">
          <h3>RS. Awal Bross</h3>
          <p>Jln. Urip Sumoharjo</p>
            <button type="button" data-toggle="modal" data-target="#rumahsakit" class="btn btn-success btn-lg" id="id_rs4" value="Rs Awal Bross" onclick="func_rs4()"> Daftar </button>
        </div>
      </div>
    </div>
  </div>

</div>

<script>   
function func_rs2() {
  document.getElementById("id_rs1").value = document.getElementById("id_rs2").value;
}
function func_rs3() {
  document.getElementById("id_rs1").value = document.getElementById("id_rs3").value;
}
function func_rs4() {
  document.getElementById("id_rs1").value = document.getElementById("id_rs4").value;
}
</script>


