<?php
  
  session_start();
  if(!isset($_SESSION['username'])) {
    header("Location: ../admin/index.php");
  }
  else {
	header("Location: ../admin/dashboard.php");
  }

  ?>