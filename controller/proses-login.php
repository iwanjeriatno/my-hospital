<?php

		session_start();

		include "koneksi.php";

		$user = $_POST['user'];
		$pass = $_POST['pass'];

		$sel_sql = "SELECT * FROM login WHERE username ='$user' AND password ='$pass' ";

		echo $sel_sql;

		$run_sql = mysqli_query($db, $sel_sql);

		$rowcount = mysqli_num_rows($run_sql);

		if($rowcount == 1) {
			$_SESSION['username'] = $user;
			$_SESSION['password'] = $pass;
			?>
				<script type="text/javascript">
					alert('Sukses');
				</script>
			<?php
			header("Location: main.php");
		}
		else {
			?>
				<script type="text/javascript">
					alert('Gagal');
				</script>
			<?php
			header("Location: ../admin/index.php");
		
		}
	

?>