<?php 
	include '../conf/koneksi.php';

if (isset($_POST['tambah'])) { 
    $id_penduduk = $_POST['id_penduduk'];
    $nama_usaha = $_POST['nama_usaha'];
    $bidang_usaha = $_POST['bidang_usaha'];
    $tgl_berdiri = $_POST['tgl_berdiri'];
    $persetujuan = "Menunggu";

      	
	$sql = mysqli_query($koneksi,"INSERT INTO sk_usaha SET id_penduduk='$id_penduduk',nama_usaha='$nama_usaha',bidang_usaha='$bidang_usaha',tgl_berdiri='$tgl_berdiri',persetujuan='$persetujuan'");
	header('location: ../usaha.php');
}
if (isset($_POST['edit'])) { 
    $kode_usaha = $_POST['kode_usaha'];
    $id_penduduk = $_POST['id_penduduk'];
    $nama_usaha = $_POST['nama_usaha'];
    $bidang_usaha = $_POST['bidang_usaha'];
    $tgl_berdiri = $_POST['tgl_berdiri'];

        
    $sql = mysqli_query($koneksi,"UPDATE sk_usaha SET id_penduduk='$id_penduduk',nama_usaha='$nama_usaha',bidang_usaha='$bidang_usaha',tgl_berdiri='$tgl_berdiri' WHERE kode_usaha='$kode_usaha'");
    header('location: ../usaha.php');
}
		
if (isset($_POST['cancel'])) {
header('location: ../usaha.php'); 
}




 ?>