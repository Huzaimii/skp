<?php  
	include '../../config/koneksi.php';

	$id_penduduk = $_POST['id_penduduk'];
	$sql = mysqli_query($koneksi,"DELETE FROM t_penduduk WHERE id_penduduk='$id_penduduk'");
		echo "<script>alert('Berhasil');document.location='../admin/penduduk.php'</script>";

 ?>