<?php 
    include '../conf/koneksi.php';

if (isset($_POST['tambah'])) { 
    $id_penduduk = $_POST['id_penduduk'];
    $pertanyaan5 = $_POST['pertanyaan5'];
    $pertanyaan2 = $_POST['pertanyaan2'];
    $pertanyaan7 = $_POST['pertanyaan7'];
    $pertanyaan3 = $_POST['pertanyaan3'];
    $sk_domisili = $_POST['sk_domisili'];
    $sk_usaha = $_POST['sk_usaha'];
    $lampiran1 = $_POST['lampiran1'];
    $lampiran2 = $_POST['lampiran2'];
    $foto_lokasi = $_POST['foto_lokasi'];
    $ket = "proses";


                if ($_POST['pertanyaan5']=="YA") {
                $n1 = "100";
                }else if($_POST['pertanyaan5']=="TIDAK"){
                $n1 = "10";
                }

                if ($_POST['pertanyaan2']=="YA"){
                $n2 = "100";
                }else if($_POST['pertanyaan2']=="TIDAK"){
                $n2 = "10";
                }

                if ($_POST['pertanyaan7']=="YA"){
                $n3 = "100";
                }else if($_POST['pertanyaan7']=="TIDAK"){
                $n3 = "10";        
                 }


                if ($_POST['pertanyaan3']=="YA"){
                $n4 = "100";
                }else if($_POST['pertanyaan3']=="TIDAK"){
                $n4 = "10";
                } 

                $jumlah = "5";
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
                            echo "<script>alert('File Kebesaran  Max 10 MB');document.location='../umkm.php'</script>";
                        }else if ($tipefile!="pdf" AND $tipefile!="jpg") {
                            echo "<script>alert('Ekstansi yang diperbolehkan pdf dan jpg');document.location='../umkm.php'</script>";
                        }else{      

        
    $sql = mysqli_query($koneksi,"INSERT INTO dana_umkm SET id_penduduk='$id_penduduk',pertanyaan5='$pertanyaan5',pertanyaan2='$pertanyaan2',pertanyaan7='$pertanyaan7',pertanyaan3='$pertanyaan3',n1='$n1',n2='$n2',n3='$n3',n4='$n4',sk_domisili='$g[0]',sk_usaha='$g[1]',lampiran1='$g[2]',lampiran2='$g[3]',foto_lokasi='$g[4]',ket='$ket'");
    header('location: ../umkm.php');
}
}
if (isset($_POST['edit'])) { 
    $kode_umkm = $_POST['kode_umkm'];
    $id_penduduk = $_POST['id_penduduk'];
    $pertanyaan5 = $_POST['pertanyaan5'];
    $pertanyaan2 = $_POST['pertanyaan2'];
    $pertanyaan7 = $_POST['pertanyaan7'];
    $pertanyaan3 = $_POST['pertanyaan3'];
    $sk_domisili = $_POST['sk_domisili'];
    $sk_usaha = $_POST['sk_usaha'];
    $lampiran1 = $_POST['lampiran1'];
    $lampiran2 = $_POST['lampiran2'];
    $foto_lokasi = $_POST['foto_lokasi'];


                if ($_POST['pertanyaan5']=="YA") {
                $n1 = "100";
                }else if($_POST['pertanyaan5']=="TIDAK"){
                $n1 = "10";
                }

                if ($_POST['pertanyaan2']=="YA"){
                $n2 = "100";
                }else if($_POST['pertanyaan2']=="TIDAK"){
                $n2 = "10";
                }

                if ($_POST['pertanyaan7']=="YA"){
                $n3 = "100";
                }else if($_POST['pertanyaan7']=="TIDAK"){
                $n3 = "10";        
                 }


                if ($_POST['pertanyaan3']=="YA"){
                $n4 = "100";
                }else if($_POST['pertanyaan3']=="TIDAK"){
                $n4 = "10";
                } 

                $jumlah = "5";
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
                            echo "<script>alert('File Kebesaran  Max 10 MB');document.location='../umkm.php'</script>";
                        }else if ($tipefile!="pdf" AND $tipefile!="jpg") {
                            echo "<script>alert('Ekstansi yang diperbolehkan pdf dan jpg');document.location='../umkm.php'</script>";
                        }else{      


        
    $sql = mysqli_query($koneksi,"UPDATE dana_umkm SET id_penduduk='$id_penduduk',pertanyaan5='$pertanyaan5',pertanyaan2='$pertanyaan2',pertanyaan7='$pertanyaan7',pertanyaan3='$pertanyaan3',n1='$n1',n2='$n2',n3='$n3',n4='$n4',sk_domisili='$g[0]',sk_usaha='$g[1]',lampiran1='$g[2]',lampiran2='$g[3]',foto_lokasi='$g[4]',ket='$ket' WHERE kode_umkm='$kode_umkm'");
    header('location: ../umkm.php');
}
}
        
if (isset($_POST['cancel'])) {
header('location: ../umkm.php'); 
}




 ?>