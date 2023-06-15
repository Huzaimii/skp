<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Pendaftran Dana UMKM</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Dana UMKM</a></li>
                            <li class="breadcrumb-item"><a href="#!">Pendaftran Dana Bantuan UMKM</a></li>
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
                        <h5>Dana Bantuan Sosial Tunai</h5>
                        <p>Lengkapi Data Yang Tersedia</p>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12 col-md-12">
                    <div class="card bg-light mb-12" >
                         <div class="mb-3">
                            <div class="card-body">
                                <h5 class="card-title">sSYARAT DOKUMEN BERKAS DANA BANTUAN UMKM</h5>
                                <p class="card-text">1.Lampiran surat Domisili <br> 2.Surat Keterangan Usaha <br> 3.Lampiran 1 <br> 4.Lampiran 2 <br>5.File Dokomen Foto Tempat Usaha </p>
                            </div>
                         </div>
                     </div>
                 </div>
                       <form method="POST" action="umkm/proses.php" enctype="multipart/form-data">

                            
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nama Penduduk <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="id_penduduk">
                                   <option >SILAHKAN PILIH NAMA</option>
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
                                    <label class="col-form-label">memiliki usaha mikro / memiliki usaha <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="pertanyaan5">
                                   
                                        <option>memiliki usaha mikro / memiliki usaha</option>
                                        <option value="YA">YA</option>
                                        <option value="TIDAK"> TIDAK </option>
                                       
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Bukan PNS,TNI,Pegawai BUMN Atau BUMD. <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="pertanyaan2">
                                   
                                        <option>Bukan PNS,TNI,Pegawai BUMN Atau BUMD</option>
                                        <option value="YA">YA</option>
                                        <option value="TIDAK"> TIDAK </option>
                                       
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">tidak sedang menerima kredit atau pembiyayaan dari bank KUR <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="pertanyaan7">
                                   
                                        <option>tidak sedang menerima kredit atau pembiyayaan dari bank KUR</option>
                                        <option value="YA">YA</option>
                                        <option value="TIDAK"> TIDAK </option>
                                       
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tidak Sedang Menerima Bantuan Lain <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="pertanyaan3">
                                   
                                        <option>Tidak Sedang Menerima Bantuan Lain<option>
                                        <option value="YA">YA</option>
                                        <option value="TIDAK"> TIDAK </option>
                                       
                                        </select>
                                </div>
                            </div>


                           
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Surat Keterangan Domisili <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[0]">
                                    <p style="color: red">Disarankan PDF|| MAX SIZE 10MB</p>
                                    
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Surat Keterangan Usaha <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[1]">
                                    <p style="color: red">Disarankan PDF|| MAX SIZE 10MB</p>

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Lampiran 1 <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[2]">
                                    <p style="color: red">Disarankan PDF|| MAX SIZE 10MB</p>

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Lampiran 2 <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[3]">
                                    <p style="color: red">Disarankan PDF|| MAX SIZE 10MB</p>

                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">File Tempat Lokasi <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[4]">
                                    <p style="color: red">Disarankan PDF|| MAX SIZE 10MB</p>

                                </div>
                            </div>  

                            
                            
                            <div class="col-sm-12">
                

                            
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                           <center> 
                                            <button  name="tambah" class="btn btn-sm btn-primary">Simpan</button>
                                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                            </center> 

                                        </div>
                                    </div>
                                </form>
                  