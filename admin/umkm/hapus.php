<?php  
	include '../../config/koneksi.php';

	$id = $_POST['id'];
	$sql = mysqli_query($koneksi,"DELETE FROM dana_umkm WHERE kode_umkm='$id'");
		echo "<script>alert('Berhasil');document.location='../admin/umkm.php'</script>";

 ?>