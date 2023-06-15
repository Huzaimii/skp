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
                       
                        <form method="POST">
                                
                                </form>
                                <center><h5>SURAT DOMISILI</h5></center> 
                                
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
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php 
                                            $i = 1;
                                            $sql = mysqli_query($koneksi,"SELECT * FROM sk_domisili_i
                                                JOIN t_penduduk USING(id_penduduk)");

                                            
                                            while ($data = mysqli_fetch_array($sql)) {

                                                 if ($data['ket'] == "diproses") {
                                                   ?>
                                                   <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                <td><?=$data['tgl_permohonan'];?></td>
                                                <td><?=$data['ket'];?></td>
                                                
                                                
                                                <td>
                                                    <form method="POST">
                                                        <input type="hidden" name="kode_skdi" value="<?=$data['kode_skdi'];?>">
                                                        <input type="hidden" name="id" value="<?=$data['kode_skdi'];?>">
                                                     
                                                     
                                                    </form>

                                                     <form action="domisili/proses1.php" method="POST">
                                                        <input type="hidden" name="kode_skdi" value="<?=$data['kode_skdi'];?>">
                                                        <button  onclick="return confirm('Anda yakin ingin Menerima')" class="btn btn-sm btn-outline-info" name="terima">Diterima</button>
                                                        <button  onclick="return confirm('Anda yakin ingin Menolak')" class="btn btn-sm btn-outline-danger" name="tolak">Ditolak</button>
                                                        
                                                    </form>

                                                </td>
                                            </tr>
                                                   <?php
                                                }else{
                                             ?>
                                            
                                        <?php }}?>
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