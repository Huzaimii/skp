<?php  

	$kode_usaha = $_POST['kode_usaha'];
	$sql = mysqli_query($koneksi,"DELETE FROM sk_usaha WHERE kode_usaha='$kode_usaha'");
		echo "<script>alert('Berhasil');document.location='usaha.php'</script>";

 ?>