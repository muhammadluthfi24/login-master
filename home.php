<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['Username'])){

?>

<!DOCTYPE html>
<html>
<head>
	<?php include "header.php"; ?>
	<title>Menu Utama</title>
</head>
<body>
	<?php include "menu.php"; ?>

	<!-- isi -->
	<div class="container-fluid" style="padding-top: 10%; text-align: center">
		<h1>
			Selamat Datang,  <?php echo $_SESSION['username'];?><br>
			SISTEM ABSENSI KARYAWAN <br>
		</h1>
	</div>

	<?php include "footer.php"; ?>
</body>
</html>

<?php 
}else{
     header("Location: index1.php");
     exit();
}
 ?>