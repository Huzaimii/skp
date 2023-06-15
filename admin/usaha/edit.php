<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Form Elements</h5>
                        </div>
                        <ul class="breadcrumb">
                             <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data SK Usaha</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Data SK Usaha</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data SK Usaha</h5>
                        <p>Lengkapi Data Yang Tersedia</p>
                    </div>
                    <div class="card-body">

                      <?php 
                    $kode_usaha = $_POST['kode_usaha'];
                 $sql = mysqli_query ($koneksi,"SELECT * FROM sk_usaha
                                                JOIN t_penduduk USING(id_penduduk) WHERE kode_usaha='$kode_usaha'");
                 while ($data = mysqli_fetch_array($sql)) {
                 ?>
                       <form method="POST" action="usaha/proses.php" enctype="multipart/form-data">

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nama Penduduk</label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="id_penduduk">
                                    <option value="<?=$data['id_penduduk'];?>"><?=$data['nik'];?>|| <?=$data['nama_lengkap'];?></option>
                                   
                                         <?php 
                                                $p = mysqli_query($koneksi,"SELECT * FROM t_penduduk");
                                                while ($pangkat = mysqli_fetch_array($p)) {
                                                 ?>
                                                <option value="<?=$pangkat['id_penduduk'];?>"><?=$pangkat['nik'];?>|| <?=$pangkat['nama_lengkap'];?></option>
                                                <?php } ?>
                                       
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nama Usaha</label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="nama_usaha" value="<?=$data['nama_usaha']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Bidang Usaha</label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="bidang_usaha" value="<?=$data['bidang_usaha']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tanggal Berdiri</label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control mob_no" name="tgl_berdiri" value="<?=$data['tgl_berdiri']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                
                            </div>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control mob_no" name="kode_usaha" value="<?=$data['kode_usaha']; ?>">
                                </div>
                            </div>
                            
                                    
                                    
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                           <center> 


                                            <button  name="edit" class="btn btn-sm btn-primary">Edit</button>
                                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                            </center> 

                                        </div>
                                    </div>
                                </form>
                  <?php   
                }

                   ?>