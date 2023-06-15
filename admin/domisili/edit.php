<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Domisili</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Data Domisili</a></li>
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
                        <h5>Data Domisili</h5>
                        <p> Lengkapi Data Dibawah</p>
                    </div>
                    <div class="card-body">

                      <?php 
                 $id = $_POST['id'];
                  $sql = mysqli_query($koneksi,"SELECT * FROM sk_domisili_i
                                                JOIN t_penduduk USING(id_penduduk)
                                                WHERE kode_skdi='$id'");
                 while ($data = mysqli_fetch_array($sql)) {
                 ?>
                       <form method="POST" action="domisili/proses.php" enctype="multipart/form-data">

                             
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
                                    <label class="col-form-label">Tanggal permohonan</label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control mob_no" name="tgl_permohonan" value="<?=$data['tgl_permohonan']; ?>">
                                </div>
                            </div>
                                <div class="row form-group">
                                <div class="col-sm-2">
                            </div>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control mob_no" name="kode_skdi" value="<?=$data['kode_skdi']; ?>">
                                </div>
                            </div>
                           
                          
                                    
                                    
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                           <center> 
                                            <button  name="edit" class="btn btn-sm btn-primary">Simpan</button>
                                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                            </center> 

                                        </div>
                                    </div>
                                </form>
                  <?php   
                }

                   ?>