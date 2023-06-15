<?php



require('../fpdf/fpdf.php');


class PDF extends FPDF
{
	function Header()
	{
	$this->Image('../img/Balangan.png',70,5,40);
		$this->setfont('Arial','B',12);
		$this->cell(120);

		$this->cell(120,5,'PEMERINTAH KABUPATEN BALANGAN',0,1,'C');
		$this->cell(120);

		$this->cell(120,5,'KECAMATAN PARINGIN',0,1,'C');
		$this->cell(120);
		$this->cell(120,5,'DESA BALIDA',0,1,'C');
		$this->cell(120);
		$this->setfont('Arial','',11);
		$this->cell(120,5,'Jalan:Gunung Pandau Desa Balida RT.01 Telpon(0511)777534',0,1,'C');
		$this->cell(120);

		$this->setlinewidth(1);
		$this->line (10,35,345,34);
		$this->setlinewidth(0);
		$this->line(10,36,345,35);

		$this->Ln(6);

	}

	function Footer()
	{
		$this->SetY(15);

		$this->setfont('Arial','I',8);

		$this->cell(0,10,'Halaman'.$this->PageNo().'/ {nb}',0,0,'R');
	}

	function ttd(){
		$this->Ln(2);
		$this->setfont('Arial','',8);
		$this->cell(190);
		$this->cell(190,5,'BALANGAN,'.tgl_indo(date('Y-m-d')),0,1,'C');
		$this->cell(190);
		$this->cell(190,5,'Kantor Desa Balida',0,1,'C');
		$this->cell(190);
		$this->cell(190,5,'Kepala Dinas',0,1,'C');
		$this->Ln(16);
		$this->cell(190);
		$this->setfont('Arial','U',8);
		$this->cell(190,5,'Nama',0,1,'C');
		$this->cell(190);
		$this->setfont('Arial','',8);
		$this->cell(190,5,'NIP.19680519 199903 2 001',0,1,'C');


	}
}
	$pdf = new PDF('L','mm','Legal');
	$pdf ->AddPage();
	$pdf ->setfont('Times','B',14);
	$pdf ->cell(120);
	$pdf ->cell(110,9,'LAPORAN DATA SK DOMISILI ',0,1,'C');
	$pdf ->Ln(4);
	
	
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

$pdf->SetFillColor(24,224,23);
$pdf->setfont('Arial','B',9);
$pdf->cell(8,10,'No',1,0,'C',0);
$pdf->cell(50,10,'NIK',1,0,'C',0);
$pdf->cell(50,10,'NO KK',1,0,'C',0);
$pdf->cell(50,10,'Nama Penduduk',1,0,'C',0);
$pdf->cell(70,10,'Email',1,0,'C',0);
$pdf->cell(60,10,'Tanggal Permohonan',1,0,'C',0);
$pdf->cell(50,10,'Ststus',1,1,'C',0);



$pdf->setfont('Arial','',12);

include '../conf/koneksi.php';
 $i=1;

  if(isset($_POST["tampilkan"])){
                           $tgl1 = $_POST["tgl1"];
                          $tgl2 = $_POST["tgl2"];
                     $sql = mysqli_query($koneksi,"SELECT * FROM sk_domisili_i
                                                JOIN t_penduduk USING(id_penduduk)  WHERE tgl_permohonan BETWEEN '$tgl1' AND '$tgl2'");
                     }else{
                     
                          $sql=mysqli_query($koneksi,"SELECT * FROM sk_domisili_i
                           JOIN t_penduduk USING(id_penduduk)");
                     }

                          while ($data = mysqli_fetch_array($sql)) {
  	$pdf->setfont('Arial','',9);
  	$pdf->cell(8,10,$i,1,0,'C',0);
  	$pdf->cell(50,10,$data['nik'],1,0,'L',0);
  	$pdf->cell(50,10,$data['no_kk'],1,0,'L',0);
  	$pdf->cell(50,10,$data['nama_lengkap'],1,0,'L',0);
  	$pdf->cell(70,10,$data['email'],1,0,'L',0);
  	$pdf->cell(60,10,$data['tgl_permohonan'],1,0,'L',0);
  	$pdf->cell(50,10,$data['ket'],1,1,'L',0);

  

  	$i++;
  
    }

  
    
    $pdf->Ln(6);
    $pdf->ttd();
    $pdf->Output();




?>