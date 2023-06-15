<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">DETAIL DATA PENDUDUK</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="penduduk.php">Penduduk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Detail Data Penduduk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
        
        </div>
      </div><!-- /.container-fluid -->
   
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
     
            <!-- Horizontal Form -->
            <div class="card">
               <div class="card-header text-white bg-success ">
                     <CENTER><h6>DETAIL DATA PENDUDUK</h6></CENTER>
               </div>
            
              
                <?php 
                 $id = $_POST['id'];
                 $sql = mysqli_query ($koneksi,"SELECT * FROM t_penduduk
                                                WHERE id_penduduk='$id'");
                 while ($data = mysqli_fetch_array($sql)) {
                 ?>
                <form method="POST">

                <div class="card-body ">
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['nik']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">NO KK</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['no_kk']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['nama_lengkap']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['email']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['tempat']; ?>, <?=$data['tanggal_lahir']; ?></td>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Umur</label>
                    <div class="col-sm-10">
                      <td>; <?php $lahir    =new DateTime($data['tanggal_lahir']);
                        $today        =new DateTime();
                        $umur = $today->diff($lahir);
                        echo $umur->y; echo " Tahun, "; echo $umur->m; echo " Bulan, dan "; echo $umur->d; echo " Hari";
                    ?>
                       </td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['jenkel']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['alamat']; ?>,RT/RW <?=$data['rt']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                     <td>:         <?=$data['pendidikan']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Foto Diri</label>
                    <div class="col-sm-10">

                      <img width="450" height="450" src="penduduk/berkas/<?=$data['fotodiri']?>" type="application/pdf" >
                     
                    </div>
                  </div>
                  <br> 
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Foto KTP</label>
                    <div class="col-sm-10">
                      <img width="450" height="450" src="penduduk/berkas/<?=$data['fktp']?>" type="application/pdf" >
                     
                    </div>
                  </div>
                  <br>  
                  <div class="form-group row">
                    <label for="" class="col-sm-2 col-form-label">Foto Kartu Keluarga</label>
                    <div class="col-sm-10">

                      <img width="450" height="450" src="penduduk/berkas/<?=$data['fkk']?>" type="application/pdf" >

                    </div>
                  </div>

                 
                </div>
           
                              <!-- /.card-footer -->
              </form>
              <form method="POST">
                  <input type="hidden" name="id" value="<?=$data['id_penduduk'];?>">
                 <center><button name="edit" class="btn btn-outline-success btn-xm"><i class="feather icon-edit"></i></button>        
                <form action="penduduk/proses.php" method="POST">
                            <input  type="hidden" name="id_penduduk" value="<?=$data['id_penduduk'];?>">
                            <button name="hapus" onclick="return confirm('Anda yakin ingin menghapus')" class="btn btn-outline-danger btn-xm"><i class="feather icon-delete"></i></button>

                            </center>
                            <br><br><br>
                    </form>
                         <?php 
                }
                   ?>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>
</body>