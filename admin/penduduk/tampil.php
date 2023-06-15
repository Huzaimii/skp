<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">DATA PENDUDUK</h5>
                        </div>

                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Penduduk</a></li>
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
                                    <button class="btn btn-outline-primary btn-sm" name="tambah"><i class="fa fa-plus"></i></button>
                                </form>
                                <center><h5>DATA PENDUDUK</h5></center> 
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Umur</th>
                                            <th>Nama Penduduk</th>
                                            <th>NIK</th>
                                            <th>Foto Penduduk</th>
                                            <th>Aksi</th>
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
                                                
                                                     <td><?php 
                                                        $lahir    =new DateTime($data['tanggal_lahir']);
                                                        $today        =new DateTime();
                                                        $umur = $today->diff($lahir);
                                                        echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
                                                    ?>
                                                </td>
                                                 <td><img width="100" height="100" src="penduduk/berkas/<?=$data['fotodiri']?>" type="application/pdf"></td>
                                                
                                                <td>
                                                    <form method="POST">
                                                        <input type="hidden" name="id" value="<?=$data['id_penduduk'];?>">
                                                        <button name="edit" class="btn btn-outline-success btn-sm"><i class="feather icon-edit"></i></i></button>
                                                        <button name="view" class="btn btn-outline-primary btn-sm"><i class="feather icon-eye"></i></button>

                                                    <form action="penduduk/proses.php" method="POST">
                                                        <input type="hidden" name="id_penduduk" value="<?=$data['id_penduduk'];?>">
                                                        <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-outline-danger btn-sm"><i class="feather icon-delete"></i></button>
                                                    </form>




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