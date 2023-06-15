<?php 
include'conf/head.php';
include'conf/nav.php';

$folder = "pkh";


 ?>

<?php
if ($_SESSION['level'] == "admin") {

	if (isset($_POST['tambah'])) {
		include $folder.'/tambah.php';
	}else if (isset($_POST['edit'])) {
		include $folder.'/edit.php';
	}else if (isset($_POST['hapus'])) {
		include $folder.'/hapus.php';
	}else if (isset($_POST['verif'])) {
		include $folder.'/verif.php';
	}else if (isset($_POST['detail'])) {
		include $folder.'/detail.php';
	}else if (isset($_POST['view'])) {
		include $folder.'/view.php';
	}else if (isset($_GET['cetak'])) {
		include $folder.'/cetak.php';
	}else{
		include $folder.'/tampil.php';
	}

}else{
	echo "<script>alert('Akses ditolak! Silahkan Login Kembali!');document.location='../index.php'</script>";
}
 ?>



 <?php 
include 'conf/foot.php';
  ?>