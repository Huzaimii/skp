<?php



require('../fpdf/fpdf.php');


class PDF extends FPDF
{
	function Header()
	{
		

	}

	function Footer()
	{
		$this->SetY(2);

		$this->setfont('Arial','I',8);

		$this->cell(0,2,'Halaman'.$this->PageNo().'/ {nb}',0,0,'R');
	}

	function ttd(){
		


	}
}
	$pdf = new PDF('P','cm','Legal');
	$pdf ->AddPage();
	
	
	
function tgl_indo($tanggal){
	$bulan = array (
		1 =>   'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
	);
	$pecahkan = explode('-', $tanggal);
	
	// variabel pecahkan 0 = tanggal
	// variabel pecahkan 1 = bulan
	// variabel pecahkan 2 = tahun
 
	return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}


include '../conf/koneksi.php';

    $kode_tidakmampu = $_GET['kode_tidakmampu'];
                 $sql = mysqli_query ($koneksi,"SELECT * FROM sk_tidakmampu
                                                JOIN t_penduduk USING(id_penduduk) WHERE kode_tidakmampu='$kode_tidakmampu'");
                  while ( $data = mysqli_fetch_array($sql)) { /* Menampilkan Data Data*/ 
$pdf->SetTitle('SK Tidak Mampu ');
	
	$pdf->Image('../img/Balangan.png', 3,1,3,2.5);

	$pdf->Setfont("Arial", "B", "15");
	$pdf->Cell(20, 1, "PEMERINTAH KABUPATEN BALANGAN", 0,1, "C");
	$pdf->Setfont("Arial", "B", "13");	
	$pdf->Cell(20, 0.3, "KECAMATAN PARINGIN", 0,1, "C");
	$pdf->Setfont("Arial", "B", "13");	
	$pdf->Cell(20, 1, "DESA BALIDA", 0,1, "C");
	$pdf->Setfont("Arial", "", "10");	
	$pdf->Cell(20, 0.1, "Jalan:Gunung Pandau Desa Balida RT.01 Telpon(0511)777534 ", 0,1, "C");
	$pdf->line(1,3.9,21,3.9); //membuat garis line (x1,y1,x2,y2);
	$pdf->ln(0.5); //fungsi ln sama seperti <br>
	$pdf->Setfont("Arial", "U", "12");	
	$pdf->Cell(20,1, "Surat Keterangan Tidak Mampu ", 0, 1, 'C');
	$pdf->Setfont("Arial", "", "10");	
	$pdf->Cell(20,0, "NOMOR : B-2975/Kk.17.02-1/Kp.08.2.".date('m')."/".date('Y'), 0, 1, 'C');
	$pdf->ln(0.5);	
	$pdf->Cell(5, 1, 'Yang bertanda tangan dibawah ini       :', 0, 1, '');
	$pdf->ln(0.9);

	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Nama ', 0, 0, '');
	$pdf->Cell(2, 0, ':  '.'SAHRIDIN', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, 'Jabatan', 0, 0, '');
	$pdf->Cell(2, 1, ': '.'Kepala Desa Balida', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Alamat ', 0, 0, '');
	$pdf->Cell(2, 0, ':  '.'Desa Balida Kec.Paringin Kab.Balangan', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, '', 0, 0, '');
	$pdf->Cell(2, 1, ' '.'', 0, 1, '');

	$pdf->Cell(2, 0, ''.'Menerangkan Dengan Sebenarnya :', 0, 1, '');
		$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, '', 0, 0, '');
	$pdf->Cell(2, 1, ' '.'', 0, 1, '');



	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Nama ', 0, 0, '');
	$pdf->Cell(2, 0, ':  '.$data['nama_lengkap'], 0, 1, '');
	$pdf->Cell(1, 1, '', 0, 0, '');
	$pdf->Cell(5, 1, 'NIK', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['nik'], 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Tempat,Tanggal Lahir', 0, 0, '');
	$pdf->Cell(2, 0, ': '.$data['tempat'].','.tgl_indo(date($data['tanggal_lahir'])), 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, 'Alamat', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['alamat'], 0, 1, '');
	$pdf->Cell(2, 0, '', 0, 0, '');
	$pdf->ln(0.1);	


	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Jenis Kelamin ', 0, 0, '');
	$pdf->Cell(2, 0, ':  '.$data['jenkel'], 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, 'Agama', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['agama'], 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 0, 'Kewarganegaraan', 0, 0, '');
	$pdf->Cell(2, 0, ': WNI', 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');
	$pdf->Cell(5, 1, 'Keperluan', 0, 0, '');
	$pdf->Cell(2, 1, ': '.$data['keperluan'], 0, 1, '');
	$pdf->Cell(1, 0, '', 0, 0, '');





	





	$pdf->ln(0.5);	


	$pdf->Cell(5, 1, '		      Dengan ini Menerangkan Bahwa yang bersangkutan diatas Benar Warga Desa Balida Kabupaten Balangan Kecamaan, ', 3, 1, '');
	$pdf->Cell(5, 0, 'PARINGIN Dalam Sepengethuan Kami Dan Sesusai Data Yang ada diKantor Desa Yang Bersangkutan diatas', 0, 1, '');
	$pdf->Cell(5, 1, 'Benar Kurang Mampu (Keluarga Berpenghasilan Rendah). ', 0, 1, '');
	$pdf->ln(0.9);



$pdf->Cell(5, 0, 'Demikian Surat ini dibuat semoga bisa dipergunakan sebagaimana mestinya .', 0, 1, '');
	$pdf->ln(0.9);


		$pdf->Cell(1, 1, '', 0, 0, 'C');	
		$pdf->Setfont("Arial", "", "10");	

			$pdf->Setfont("Arial", "", "10");	
	$pdf->ln(2);
	$pdf->cell(30,0.7,'Balangan,'.tgl_indo(date('Y-m-d')),0,1,'C');
	$pdf->Cell(30, 0.7, "Kantor Desa Balida", 0,1, "C");
	$pdf->Cell(30, 0.3, "Kabupaten Balangan", 0,1, "C");
	$pdf->ln(2);
	$pdf->Cell(30, 0.7, "NAMA", 0,1, "C");
	$pdf->Cell(30, 0.3, "NIP. ", 0,1, "C");


  

  
  
    }

  
    
  $pdf->ln(0.5);
    $pdf->ttd();
    $pdf->Output();




?>