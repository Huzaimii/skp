<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data UMKM</h5>
                        </div>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Permohonan UMKM</a></li>
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
                                </form>
                                <center><h5>DATA BANTUAN UMKM</h5></center> 
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
                                            <th>Aksi</th>
                                        </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                            <?php 
                                            $i = 1;
                                            $sql = mysqli_query($koneksi,"SELECT * FROM dana_umkm
                                                JOIN t_penduduk USING(id_penduduk)");
                                            while ($data = mysqli_fetch_array($sql)) {
                                             ?>
                                            <tr>
                                                <td><?=$i++;?></td>
                                                <td><?=$data['nik'];?></td>
                                                <td><?=$data['nama_lengkap'];?></td>
                                                
                                                
                                                <td>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?=$data['kode_umkm'];?>">
                                                        <button name="edit" class="btn btn-outline-success btn-sm"><i class="feather icon-edit"></i></i></button>
                                                        <button name="view" class="btn btn-outline-primary btn-sm"><i class="feather icon-eye"></i></button>

                                                        <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-outline-danger btn-sm"><i class="feather icon-delete"></i></button>
                                                    </form>




                                                </td>
                                            </tr>
                                        <?php } ?>
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