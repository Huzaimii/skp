<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">DETAIL DATA DANA BANTUAN UMKM</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="penduduk.php">Penduduk</a></li>
                            <li class="breadcrumb-item"><a href="#!">Detail Data UMKM</a></li>
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
                     <CENTER><h6>DETAIL DATA Bantuan UMKM</h6></CENTER>
               </div>
            
              
                <?php 
                 $id = $_POST['id'];
                 $sql = mysqli_query ($koneksi,"SELECT * FROM dana_umkm
                                                JOIN t_penduduk USING(id_penduduk) WHERE kode_umkm='$id'");
                 while ($data = mysqli_fetch_array($sql)) {
                 ?>
                <form method="POST">

                <div class="card-body ">
                   <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 ">NIK</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['nik']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 ">NO KK</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['no_kk']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 ">Nama</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['nama_lengkap']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 ">Email</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['email']; ?></td>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="" class="col-sm-3 ">memiliki usaha mikro / memiliki usaha</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['pertanyaan5']; ?></td>
                    </div>
                  </div>
                 <div class="form-group row">
                    <label for="" class="col-sm-3 ">Bukan PNS,TNI,Pegawai BUMN Atau BUMD</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['pertanyaan2']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 ">tidak sedang menerima kredit atau pembiyayaan dari bank KUR</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['pertanyaan7']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 ">Tidak Sedang Menerima Bantuan Lain</label>
                    <div class="col-sm-9">
                     <td>:         <?=$data['pertanyaan3']; ?></td>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Surat Keterangan Domisili</label>
                    <div class="col-sm-9">
                      <td><a target="blank" href="umkm/berkas/<?=$data['sk_domisili']?>" class="btn btn-sm btn-info">Lihat File</a></a></td><br><br>  
                      <embed width="600" height="450" src="umkm/berkas/<?=$data['sk_domisili']?>" type="application/pdf" ></embed>

                    </div>
                 

                 
                </div>

                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Surat Keterangan Usaha</label>
                    <div class="col-sm-9">
                      <td><a target="blank" href="umkm/berkas/<?=$data['sk_usaha']?>" class="btn btn-sm btn-info">Lihat File</a></a></td><br><br> 
                      <embed width="600" height="450" src="umkm/berkas/<?=$data['sk_usaha']?>" type="application/pdf" ></embed>

                    </div>
                 

                 
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Lampiran 1</label>
                    <div class="col-sm-9">
                      <td><a target="blank" href="umkm/berkas/<?=$data['lampiran1']?>" class="btn btn-sm btn-info">Lihat File</a></a></td><br><br>  
                      <embed width="600" height="450" src="umkm/berkas/<?=$data['lampiran1']?>" type="application/pdf" ></embed>

                    </div>
                 

                 
                </div>
                 <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Lampiran 2</label>
                    <div class="col-sm-9">
                      <td><a target="blank" href="umkm/berkas/<?=$data['lampiran2']?>" class="btn btn-sm btn-info">Lihat File</a></a></td><br><br>  
                      <embed width="600" height="450" src="umkm/berkas/<?=$data['lampiran2']?>" type="application/pdf" ></embed>

                    </div>
                 

                 
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-3 col-form-label">Foto Lokasi</label>
                    <div class="col-sm-9">
                      <td><a target="blank" href="umkm/berkas/<?=$data['foto_lokasi']?>" class="btn btn-sm btn-info">Lihat File</a></a></td><br><br>  
                      <embed width="600" height="450" src="umkm/berkas/<?=$data['foto_lokasi']?>" type="application/pdf" ></embed>

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