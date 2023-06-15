<?php 
	include '../conf/koneksi.php';

if (isset($_POST['tambah'])) { 
    $nik = $_POST['nik'];
    $no_kk = $_POST['no_kk'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $tempat = $_POST['tempat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenkel = $_POST['jenkel'];
	$alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
	$pendidikan = $_POST['pendidikan'];
    $password =md5( $_POST['password']);

    $fotodiri = $_POST['fotodiri'];
    $fktp = $_POST['fktp'];
    $fkk = $_POST['fkk'];
    $agama = $_POST['agama'];

    $jumlah = "3";
if($jumlah > 0){
    $g = array ();
    for ($i=0; $i <$jumlah; $i++){
        $file_name = $_FILES['g']['name'][$i];
        $tmp_name = $_FILES ['g']['tmp_name'][$i];
        move_uploaded_file($tmp_name,'berkas/'.$file_name);
        $g[$i] = $file_name;
    }
}

    $tipefile = pathinfo($_FILES['g']['name'][0],PATHINFO_EXTENSION);
    if ($_FILES['g']['size'][3]>100000000000) {
        echo "<script>alert('File Kebesaran  Max 10 MB');document.location='../penduduk.php'</script>";
    }else if ($tipefile!="jpeg" AND $tipefile!="jpg") {
        echo "<script>alert('Ekstansi yang diperbolehkan jpeg dan jpg');document.location='../penduduk.php'</script>";
    }else{


      	
	$sql = mysqli_query($koneksi,"INSERT INTO t_penduduk SET nik='$nik', no_kk='$no_kk',nama_lengkap='$nama_lengkap',email='$email',tempat='$tempat',tanggal_lahir='$tanggal_lahir',jenkel='$jenkel',alamat='$alamat',rt='$rt',pendidikan='$pendidikan',fotodiri='$g[0]',fktp='$g[1]',fkk='$g[2]',password='$password',agama='$agama'");
	header('location: ../penduduk.php');
}
		



}
if (isset($_POST['cancel'])) {
header('location: ../pegawai.php'); 
}
if (isset($_POST['edit'])) {
     $id_penduduk = $_POST['id_penduduk'];
    $nik = $_POST['nik'];
    $no_kk = $_POST['no_kk'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $tempat = $_POST['tempat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenkel = $_POST['jenkel'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $pendidikan = $_POST['pendidikan'];
    $fotodiri = $_POST['fotodiri'];
    $fktp = $_POST['fktp'];
    $fkk = $_POST['fkk'];

    $jumlah = "3";
if($jumlah > 0){
    $g = array ();
    for ($i=0; $i <$jumlah; $i++){
        $file_name = $_FILES['g']['name'][$i];
        $tmp_name = $_FILES ['g']['tmp_name'][$i];
        move_uploaded_file($tmp_name,'berkas/'.$file_name);
        $g[$i] = $file_name;
    }
}

    $tipefile = pathinfo($_FILES['g']['name'][0],PATHINFO_EXTENSION);
    if ($_FILES['g']['size'][0]>100000000000) {
        echo "<script>alert('File Kebesaran  Max 10 MB');document.location='../penduduk.php'</script>";
    }else if ($tipefile!="pdf" AND $tipefile!="jpg") {
        echo "<script>alert('Ekstansi yang diperbolehkan pdf dan jpg');document.location='../penduduk.php'</script>";
    }else{


   

	
	$sql = mysqli_query($koneksi,"UPDATE  t_penduduk SET nik='$nik', no_kk='$no_kk',nama_lengkap='$nama_lengkap',email='$email',tempat='$tempat',tanggal_lahir='$tanggal_lahir',jenkel='$jenkel',alamat='$alamat',rt='$rt',pendidikan='$pendidikan',fotodiri='$g[0]',fktp='$g[1]',fkk='$g[2]' WHERE id_penduduk='$id_penduduk' ");
	header('location: ../penduduk.php');
} 

}

 ?>