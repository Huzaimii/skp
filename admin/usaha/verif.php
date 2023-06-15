<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Permohonan SK Usaha</h5>
                        </div>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Permohonan SK Usaha</a></li>
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
                       
                        <form method="POST">
                                   <button class="btn btn-icon btn-primary has-ripple" name="tambah" title="Tambahkan Data" style="float: right;"><i class="feather icon-plus"></i><span class="ripple ripple-animate" style="height: 45px; width: 45px; animation-duration: 0.7s; animation-timing-function: linear; background: rgb(255, 255, 255); opacity: 0.4; top: 4.5px; left: -3.5px;"></span></button>
                               
                                <center><h5>SURAT KETERANGAN USAHA</h5></center> 
                                    <button class="btn btn-outline-info btn-sm" name="verif"><i class="fa fa-eye-slash"></i></button>
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
                                            <th>Nama Usaha</th>
                                            <th>Bidang Usaha</th>
                                            <th>Tanggal Berdiri</th>
                                            <th>Status</th>



                                            <th>Aksi</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                            <?php 
                                            $i = 1;
                                            $sql = mysqli_query($koneksi,"SELECT * FROM sk_usaha
                                                JOIN t_penduduk USING(id_penduduk)");
                                            while ($data = mysqli_fetch_array($sql)) {
                                            if ($data['persetujuan'] == "Menunggu") {
                                                ?>
                                                <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                <td><?=$data['nama_usaha'];?></td>
                                                <td><?=$data['bidang_usaha'];?></td>
                                                <td><?=$data['tgl_berdiri'];?></td>
                                                <td><?=$data['persetujuan'];?></td>
                                                
                                                
                                                <td>
                                                    <form action="usaha/proses1.php" method="POST">
                                                        <input type="hidden" name="kode_usaha" value="<?=$data['kode_usaha'];?>">
                                                        <button  onclick="return confirm('Anda yakin ingin Menerima')" class="btn btn-sm btn-outline-info" name="terima">Diterima</button>
                                                        <button  onclick="return confirm('Anda yakin ingin Menolak')" class="btn btn-sm btn-outline-danger" name="tolak">Ditolak</button>
                                                        
                                                    </form>





                                                </td>
                                            </tr>

                                                 <?php 
                                                   
                                                }else{
                                             ?>                                           
                                              
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