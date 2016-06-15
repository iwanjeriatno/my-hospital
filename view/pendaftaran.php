 <?php 
 	include "../controller/koneksi.php"; 
 	include "../admin/edit-pasien.php";
 ?>

 <!-- formulir -->
  <div class="modal fade" id="myModal" role="dialog" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Form Pendaftaran</h4>
        </div>
        <div class="modal-body">

        <form class="form-horizontal" method="post" action="../controller/proses_form_pasien.php">

        	<?php 

        		include "form-antrian.php";
        		include "form-pasien.php"; 
        	?>
		  
		    </form>
			
        </div>
        <div class="modal-footer"></div>
      </div>
    </div>
  </div>