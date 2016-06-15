<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="dist/img/hospital-icon.png">
    <title>My Hospital | Makassar</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="dist/css/style.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target="#navigasi">    

    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #2f4050; color: #fff;">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navigasi" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home">
            <span><img src="dist/img/hospital-icon.png" alt="My Hospital" height="50"></span>
          </a>
        </div>
        <div class="collapse navbar-collapse" id="navigasi">
          <ul class="nav navbar-nav" role="tablist">       
            <li class="active"><a href="#home"> Home <span class="sr-only">(current)</span></a></li>
            <li><a href="#the-hospital">The Hospital</a></li>
            <li><a href="#about-site">About Site</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <button type="button" class="btn btn-lg" data-toggle="modal" data-target="#rumahsakit" id="id_rs6" value="Pilih Rumah Sakit" onclick="func_rs6()" style="background-color: #2f4050; color: #fff; margin-right: 10rem">
                <span class="glyphicon glyphicon-list-alt"></span> Daftar 
              </button>
            </li>
            <!-- <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
          </ul>
        </div><!-- /.navbar-collapse -->
      </div>
    </nav>

    <!-- content -->
    <div class="content">
      <?php

        include "home.php";
        include "the-hospital.php";
        include "about-site.php";

      ?>
    </div>

    <script>
      function func_rs6() {
        document.getElementById("id_rs1").value = document.getElementById("id_rs6").value;
      }
    </script>
    <!-- jQuery first, then Bootstrap JS. -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>