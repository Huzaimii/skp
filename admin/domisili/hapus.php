<?php  
	include '../conf/koneksi.php';

	$id = $_POST['id'];
	$sql = mysqli_query($koneksi,"DELETE FROM sk_domisili_i WHERE kode_skdi='$id'");
		echo "<script>alert('Berhasil');document.location='domisili.php'</script>";

 ?>