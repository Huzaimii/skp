
<?php 
include'conf/head.php';
include'conf/nav.php';



 ?>

<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Permohonan SK Domisili</h5>
                        </div>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Permohonan SK Domisili</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <!-- Zero config table start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                       
                          <form method="POST" action="laporan/lskd.php">
                                   <button class=" btn btn-sm btn-info"style="float: right;">Cetak Data</button>
                                </form>
                                <center><h5>SURAT KETERANGAN TIDAK MAMPU</h5></center> 
                    </div>
                             <div class=""  align="left" style="padding: .1rem 1.25rem">
              <h3 class="card-title"></h3><br> 
              <form action="laporan/lskd.php" method="post">
    <div class="row">
        <div class="input-field col-sm-6">
            <label class="">Dari Tanggal</label>

            <input type="date" name="tgl1" class="form-control col-sm-12">
        </div>
        <div class="input-field col-sm-5">
            <label class="">Sampai Tanggal</label>

                <input type="date" name="tgl2" class="form-control col-sm-11">
            
        </div>
        <div class="input-field col s1">
            <button class="btn btn-icon btn-primary has-ripple" name="tampilkan" title="Cetak" style="float: right;"><i class="fa fa-print"></i><span class="ripple ripple-animate" style="height: 45px; width: 45px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: 4.5px; left: -3.5px;"></span></button>
            
        </div>
        <form action="  ">
         <div class="input-field col s1">
            <button class="btn btn-icon btn-success has-ripple" name="tampilkan" title="Cetak" style="float: right;"><i class="fa fa-search"></i><span class="ripple ripple-animate" style="height: 45px; width: 45px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: 4.5px; left: -3.5px;"></span></button>
            
        </div>
        </form>
    </div>
               
            </form>
           
          </div>

                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
 <thead>
                                    <tr>
                                        <tr>
                                            <th>No</th>
                                            <th>NIK</th>
                                            <th>Nama Penduduk</th>
                                            <th>Tanggal Permohonan</th>
                                            <th>Tanggal Konfirmasi</th>
                                            <th>Batas Surat</th>
<th>Lama </th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i = 1;



                                    $sql = mysqli_query($koneksi,"SELECT * FROM sk_domisili_i
                                        JOIN t_penduduk USING(id_penduduk)  ORDER BY tgl_setuju DESC");


                                    while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                        <?php  


                                          $tgl_permohonan = $data['tgl_permohonan'];
                                          $tgl_setuju = $data['tgl_setuju'];



$hari = selisih($tgl_setuju,date('Y-m-d'));
$berlaku = selisih($tgl_permohonan,$tgl_setuju);
$sisa = 90-$hari;
if ($sisa <= 0) {
    $selisih = "Kadaluarsa";
}else{
    $selisih = $sisa." Hari";
} 

                                        

                                        if ($data['ket'] == "diproses") {
                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                <td><?=$data['tgl_permohonan'];?></td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td style="color:white"><span class="badge bg-success"><?=$data['ket'];?></span></td>


                                                <td>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?=$data['kode_skdi'];?>">
                                                        
                                                        <button disabled="" a href="laporan/cskd.php?kode_skdi=<?=$data['kode_skdi'];?>" disabled class="btn btn-sm btn-info"><i class="fa fa-print"></i></button>
                                                     


                                                    </form>

                                                    <form action="domisili/proses.php" method="POST">
                                                        <input type="hidden" name="kode_skdi" value="<?=$data['kode_skdi'];?>">

                                                    </form>

                                                </td>
                                            </tr>
                                            <?php 
                                        }elseif
                                        ($data['ket'] == "diterima") {
                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                <td><?=$data['tgl_permohonan'];?></td>
                                                <td><?=$data['tgl_setuju'];?></td>
                                                <td><?=$selisih;?></td>
                                                  <td><?php 
                                                        $lahir    =new DateTime($data['tgl_permohonan']);
                                                        $today    =new DateTime($data['tgl_setuju']);
                                                        $umur = $today->diff($lahir);
                                                         echo $umur->d; echo " Hari";
                                                    ?>
                                                </td>

                                                <td style="color:white"><span class="badge bg-info"><?=$data['ket'];?></span></td>


                                                <td>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?=$data['kode_skdi'];?>">
                                                       
                                                         <a target="blank" href="laporan/cskd.php?kode_skdi=<?=$data['kode_skdi'];?>" class="btn btn-sm btn-info"><i class="fa fa-print"></i></a>
                                                     


                                                    </form>

                                                    <form action="domisili/proses.php" method="POST">
                                                        <input type="hidden" name="kode_skdi" value="<?=$data['kode_skdi'];?>">

                                                    </form>

                                                </td>
                                            </tr>

                                            <?php
                                        }else{ 

                                            ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                <td><?=$data['tgl_permohonan'];?></td>
                                                <td><?=$data['tgl_setuju'];?></td>
                                                <td>-</td>
                                            <td><?php 
                                                        $lahir    =new DateTime($data['tgl_permohonan']);
                                                        $today    =new DateTime($data['tgl_setuju']);
                                                        $umur = $today->diff($lahir);
                                                         echo $umur->d; echo " Hari";
                                                    ?>
                                                </td>

                                                <td style="color:white"><span class="badge bg-danger"><?=$data['ket'];?></span></td>


                                                <td>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?=$data['kode_skdi'];?>">
                                                       
                                                          <button disabled="" a href="laporan/cskd.php?kode_skdi=<?=$data['kode_skdi'];?>" disabled class="btn btn-sm btn-info"><i class="fa fa-print"></i></button>
                                                     


                                                    </form>

                                                    <form action="domisili/proses.php" method="POST">
                                                        <input type="hidden" name="kode_skdi" value="<?=$data['kode_skdi'];?>">

                                                    </form>

                                                </td>
                                            </tr>
                                        <?php }} ?>
                                        </tbody>
                              
                            </table>
                        </div>
                    </div>
                </div>
            </div>
         
       
            <!-- Language - Comma Decimal Place table end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>
 <?php 
include 'conf/foot.php';
  ?>