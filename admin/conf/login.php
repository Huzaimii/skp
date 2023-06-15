<?php 
include 'koneksi.php';


$email = $_POST['email'];
$emails = $_POST['email'];
$password = md5($_POST['password']);
$passwords = md5($_POST['password']);

$sql = mysqli_query ($koneksi,"SELECT * FROM t_pengguna WHERE 
	email='$email' AND password='$password'");
$sql1 = mysqli_query ($koneksi,"SELECT * FROM t_penduduk WHERE 
	email='$emails' AND password='$passwords'");

$jumlah = mysqli_num_rows($sql);
$data = mysqli_fetch_array($sql);




$jumlah1 = mysqli_num_rows($sql1);
$data1 = mysqli_fetch_array($sql1);

if ($jumlah == 1) {

		$_SESSION['login'] = $jumlah;
		$_SESSION['level'] = "admin";
		$_SESSION['nama'] = $data['nama']; 
		

		echo "<script>alert('Anda Login Sebagai Admin');document.location='../beranda.php'</script>";
	}elseif ($jumlah1 == 1){
		$_SESSION['login'] = $jumlah1;
		$_SESSION['id_penduduk'] = $data1['id_penduduk'];
		$_SESSION['nama'] = $data1['nama_lengkap']; 
		$_SESSION['level'] = "penduduk";


	{
		echo "<script>alert('Anda Login Sebagai Penduduk');document.location='../../user/beranda.php'</script>";
	}	
}else{
 	echo "<script>alert('email Dan Password tidak ditemukan');document.location='../../index.php'</script>";
}
