<td style="font-size: 25px; font-weight: bold;"></td>
<?php
include '../conf/koneksi.php';
?>
<style>
  @media print
  {
    @page {
      margin-top: 0;
      margin-bottom: 0;
    }

    body {
      padding-top: 72px;
      padding-bottom: 72px;
    }

  }

  table{
    font-size: 14px;


  }
  table, th, td {
    border-collapse: collapse;

  }
  thead{
    font-size: 16px;

  }
  .judul h3,h2,p{
    text-align: center;
    margin: 5px 0 5px 0;
  }
  .form-inline img{
    display: inline-block;

  }
  h2{
    font-size: 30px;
  }
  .kop tr td{
    text-align: center;
    border: 2px solid white;
    border-collapse: collapse;

  }
  .gambar{
    margin-right: 10px;
  }
  .isi tr td{
    padding-left: 5px;
    padding-right: 5px;

  }
  .tdd{
    text-align: center;
    display: inline-block;
    float: right;
  }

</style>
<script>
  window.load = print_d();
  function print_d(){
    window.print();
  }
  window.onfocus=function(){
    window.close();
  }
</script>

<title> Laporan Aset Dalam Perbaikan  </title>

<div class="container-fluid">
  <center>
    <table class="kop">
      <tr>
        <td rowspan="5"><img src="../img/logo.png" height="100" alt="" class="gambar"></td>
      </tr>
      <tr>
        <td style="font-size: 20px; font-weight: bold;">PEMERINTAH KABUPATEN BALANGAN</td>
      </tr>
      <tr>
        <td style="font-size: 20px; font-weight: bold;">KECAMATAN PARINGIN</td>
      </tr>
      <tr>
        <td style="font-size: 20px; font-weight: bold;">DESA BALIDA</td>
      </tr>
      <tr>
        <td style="font-size: 15px">Jalan:Gunung Pandau Desa Balida RT.01 Telpon(0511)777534</td>
      </tr>
    </table>



  </center>
  <hr size="2px" color="black" style="margin-bottom: 1px;">
  <hr size="2px" color="black" style="margin-top: 1px;">

</center>
<center>

  <tr>
    <td style="font-size: 25px; font-weight: bold;">Laporan Data Penduduk</td>
  </tr><br></br>
</center>
<div>
  <table class="isi" style="width: 100%;" align="center" border="1">
   <thead>
                                   <tr>
                                        <tr>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>email</th>
                                            <th>TTL</th>
                                            <th>umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Agama</th>
                                            <th>Alamat</th>
                                            <th>Pendidikan Terakhir</th>
                                            <th>Foto diri</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php 
                                            $i = 1;

                                            $sql = mysqli_query($koneksi,"SELECT * FROM t_penduduk");
                                            while ($data = mysqli_fetch_array($sql)) {




                                             ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                <td><?=$data['email'];?></td>
                                                <td><?php $lahir    =new DateTime($data['tanggal_lahir']);
                                                        $today        =new DateTime();
                                                        $umur = $today->diff($lahir);
                                                        echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
                                                    ?>
                                                </td>
                                             <td><?=$data['tempat']; ?>, <?=$data['tanggal_lahir']; ?></td>
                                                <td><?=$data['jenkel'];?></td>
                                                <td><?=$data['agama'];?></td>
                                             <td><?=$data['alamat']; ?>,RT/RW <?=$data['rt']; ?></td>
                                                <td><?=$data['pendidikan'];?></td>
                                                 <td><img width="100" height="100" src="../penduduk/berkas/<?=$data['fotodiri']?>" type="application/pdf"></td>
                                                
                                                


                                            </tr>
                                        <?php } ?>
                                        </tbody>

    </table>
    <br>
    <table width="100%" align="right">
      <tr>
        <th widht="20%"></th>
        <th widht="20%"></th>
        <th widht="20%"></th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="1" width="40%" align="center">BALANGAN, <?=date('d/m/Y');?></th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="1" width="40%" align="center">Kapala Desa</th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="5" width="40%" align="center">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="5" width="40%" align="center">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="5" width="40%" align="center">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="5" width="40%" align="center">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="5" width="40%" align="center">&nbsp;</th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
        <th colspan="5" width="40%" align="center"><u>Sahridin,S.Pd</u></th>
      </tr>
      <tr>
        <th colspan="5" width="60%" align="center"></th>
      </tr>
    </table>
  </div>
