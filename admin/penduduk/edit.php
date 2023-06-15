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
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
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
                        <h5>Basic Component</h5>
                    </div>
                    <div class="card-body">

                      <?php 
                 $id = $_POST['id'];
                 $sql = mysqli_query ($koneksi,"SELECT * FROM t_penduduk
                                                WHERE id_penduduk='$id'");
                 while ($data = mysqli_fetch_array($sql)) {
                 ?>
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
                                    <input type="number" class="form-control mob_no" name="nik" value="<?=$data['nik']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nomor KK <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control mob_no" name="no_kk" value="<?=$data['no_kk']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Nama Lengkap <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="nama_lengkap" value="<?=$data['nama_lengkap']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Email <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control mob_no" name="email" value="<?=$data['email']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tempat <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="tempat" value="<?=$data['tempat']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Tanggal Lahir <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control mob_no" name="tanggal_lahir" value="<?=$data['tanggal_lahir']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Jenis Kelamin <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <select class="form-control show-tick ms select2" data-placeholder="Select" name="jenkel">
                                       <option>Masukan Jenis Kelamin</option>
                                        

                                                 <?php 
                                                    if ($data['jenkel'] == "L") {
                                                ?>
                                                 <option value="L" selected="">Pria</option>
                                                <option value="W"> Wanita </option>
                                                <?php
                                                    }else if ($data['jenkel'] == "W") {
                                                ?>
                                                <option value="L" >Pria</option>
                                                <option value="W" selected=""> Wanita </option>
                                               <?php
                                                    }
                                                 ?>


                                                
                                               
                                            </select>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Alamat <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="alamat" value="<?=$data['alamat']; ?>">
                                </div>
                            </div>
                             <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">RT/RW <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control mob_no" name="rt" value="<?=$data['rt']; ?>">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Pendidikan <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                   <select class="form-control show-tick ms select2" data-placeholder="Select" name="pendidikan">
                                               <option></option>
                                                <?php 
                                                    if ($data['pendidikan'] == "TAMAT SD / SEDERAJAT") {
                                                ?>
                                                  <option value="TAMAT SD / SEDERAJAT" selected>TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT </option>
                                                 <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                  <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                                   <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                                   <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                                   <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                                   <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                                   <option value="STRATA III">STRATA III</option>
                                                   <option value="STRATA II">STRATA II</option>
                                                <?php
                                                    }else if ($data['pendidikan'] == "SLTP/SEDERAJAT") {
                                                ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" selected>SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                 <?php
                                                    }else if ($data['pendidikan'] == "TIDAK / BELUM SEKOLAH") {
                                                    ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH" selected>TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                     <?php
                                                    }else if ($data['pendidikan'] == "SLTA / SEDERAJAT") {
                                                    ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT" selected>SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                     <?php
                                                      }else if ($data['pendidikan'] == "BELUM TAMAT SD/SEDERAJAT") {
                                                    ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT"selected>BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                     <?php
                                                     
                                                      }else if ($data['pendidikan'] == "DIPLOMA IV/ STRATA I") {
                                                    ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I" selected>DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                     <?php
                                                      }else if ($data['pendidikan'] == "AKADEMI/ DIPLOMA III/S. MUDA") {
                                                    ?>
                                               <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA" selected>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                     <?php
                                                      }else if ($data['pendidikan'] == "DIPLOMA I / II") {
                                                    ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II" selected>DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                     <?php
                                                      }else if ($data['pendidikan'] == "STRATA III") {
                                                    ?>
                                               <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III" selected>STRATA III</option>
                                               <option value="STRATA II">STRATA II</option>
                                                 <?php
                                                      }else if ($data['pendidikan'] == "<= STRATA II") {
                                                    ?>
                                                <option value="TAMAT SD / SEDERAJAT">TAMAT SD / SEDERAJAT</option>
                                                <option value="SLTP/SEDERAJAT" >SLTP/SEDERAJAT </option>
                                                <option value="TIDAK / BELUM SEKOLAH">TIDAK / BELUM SEKOLAH </option>
                                                <option value="SLTA / SEDERAJAT">SLTA / SEDERAJAT</option>
                                               <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                                               <option value="DIPLOMA IV/ STRATA I">DIPLOMA IV/ STRATA I</option>
                                               <option value="AKADEMI/ DIPLOMA III/S. MUDA">AKADEMI/ DIPLOMA III/S. MUDA</option>
                                               <option value="DIPLOMA I / II">DIPLOMA I / II</option>
                                               <option value="STRATA III">STRATA III</option>
                                               <option value="STRATA II" selected>STRATA II</option>
                                                     <?php
                                                    }
                                                 ?> 
                                            </select>

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Foto Diri <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">

                                    <input type="file" class="form-control mob_no" name="g[0]" value="fotodiri" required="">
                                </div>

                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Foto KTP <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[1]" required="">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-sm-2">
                                    <label class="col-form-label">Foto KK <label style="color: red">*</label></label>
                            </div>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control mob_no" name="g[2]" required="">
                                </div>
                            </div>

                            <div class="row form-group">
                                
                            </div>
                                <div class="col-sm-10">
                                    <input type="hidden" class="form-control mob_no" name="id_penduduk" value="<?=$data['id_penduduk']; ?>">
                                </div>
                         
                                    
                                    
                                    
                                    <div class="form-group row">
                                        <div class="col-sm-10">
                                           <center> 
                                            <button  name="edit" class="btn btn-sm btn-primary">Update</button>
                                            <button type="reset" class="btn btn-sm btn-danger">Reset</button>
                                            </center> 

                                        </div>
                                    </div>
                                </form>
                  <?php   
                }

                   ?>