<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Data Penduduk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Data Penduduk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Tambah Data Penduduk</a></li>
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
                        <h5>Data Penduduk</h5>
                        <p> Lengkapi data Dibawah</p>
                    </div>
                    <div class="card-body">
                       <form method="POST" action="penduduk/proses.php" enctype="multipart/form-data">

                        <div class="col-lg-12 col-md-12">
                    <div class="card bg-light mb-12" >
                         <div class="mb-3">
                            <div class="card-body">
                                <h5 class="card-title">Lengkapi Dokumen Data Penduduk</h5>
                                <p class="card-text">1.Foto KTP <br> 2.Foto KK <br> 3.Foto Diri </p>
                            </div>
                         </div>
                     </div>
                 </div>

                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">NIK <label style="color: red">*</label></label>

                            </div>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control mob_no" name="nik" required="wajib disi">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nomor KK <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control mob_no" name="no_kk" required="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nama Lengkap <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="nama_lengkap" required="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Email <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control mob_no" name="email">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tempat <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="tempat" required="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tanggal Lahir <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control mob_no" name="tanggal_lahir" required="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Jenis Kelamin. <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="jenkel" required="wajib disi">
                                   
                                        <option>Masukan Jenis Kelamin</option>
                                        <option value="L">Pria</option>
                                        <option value="W"> Wanita </option>
                                       
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Agama <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="agama" required="wajib disi">
                                   
                                        <option>==PILIH AGAMA==</option>
                                        <option value="islam">islam</option>
                                        <option value="hindu"> hindu </option>
                                         <option value="budha">budha</option>
                                        <option value="kristin"> kristin </option>

                                       
                                        </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Alamat <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="alamat" required="wajib disi">
                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">RT/RW <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="rt" required="wajib disi">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Pendidikan <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                <select class="js-example-basic-single form-control"  data-placeholder="Select" name="pendidikan" required="wajib disi">
                                   
                                                <option>Masukan Pendidikan Terakhir</option>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT </option>
                                                 <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                  <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                                   <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                                   <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                                   <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                   <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                                   <option value="STRATA III">STRATA III</option>
                                                   <option value="STRATA II">STRATA II</option>
                                               
                                            </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Foto Diri <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[0]" required="wajib disi">
                                    <p style="color: red">Disarankan PDF|| Eksakta Didukung PDF Dan JPG || MAX SIZE 10MB</p>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Foto KTP <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[1]" required="wajib disi">
                                    <p style="color: red">Disarankan PDF|| Eksakta Didukung PDF Dan JPG || MAX SIZE 10MB</p>
                                    

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Foto KK <label style="color: red">*</label></label>

                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[2]" required="wajib disi">
                                    <p style="color: red">Disarankan PDF|| Eksakta Didukung PDF Dan JPG || MAX SIZE 10MB</p>

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Password <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="password" required="wajib disi">
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
                  