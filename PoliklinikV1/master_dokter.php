<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Master Dokter</title>

    <!-- My Style -->
    <link rel="stylesheet" href="assets/style.css">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

</head>
<body>

<!-- Navbar -->
<div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <img src="assets/biomedic.png" alt="" class="img-icon" style="margin-left:100px;">
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                        
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#80011f;">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="halaman_admin.php" style="color:#80011f;"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        
                        
                        <li>
                            <a href="master_dokter.php" style="color:#80011f;"><i class="fa fa-user-md fa-fw"></i> Dokter</a>
                        </li>
                        <li>
                            <a href="master_pasien.php" style="color:#80011f;"><i class="fa fa fa-wheelchair fa-fw"></i> Pasien</a>
                        </li>
                        <li>
                            <a href="master_periksa.php" style="color:#80011f;"><i class="fa fa-stethoscope fa-fw"></i>  Periksa</a>
                        </li>
                        <!-- <li>
                            <a href="menu_poli.php"><i class="fa fa fa-hospital-o fa-fw"></i> Poli</a>
                        </li>
                        <li>
                            <a href="menu_obat.php"><i class="fa fa fa-medkit fa-fw"></i> Obat</a>
                        </li>
                        <li>
                            <a href="menu_users.php"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="menu_profile.php"><i class="fa fa-user fa-fw"></i> Profile</a>
                        </li> -->
                       
                        
                        
                    </ul>

                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        

<!-- Main -->
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:#80011f;"><i class="fa fa-user-md"></i> List Dokter</h1>
                </div>

                <div class="col-lg-12">
                <div style='float: right;' >	
                        <!-- Trigger the modal with a button -->
                          <button type="button" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Tambah Dokter</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Tambah Dokter</h4>
                              </div>

                                    <div class="modal-body">
                                    <!-- Form tambah data obat disini -->
                                    <form action="pages/tambah_dokter.php" method="post">
                                        <div class="form-group">
                                            <label for="nama_dokter">Nama Dokter</label>
                                            <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_dokter">Alamat</label>
                                            <input type="text" class="form-control" id="alamat_dokter" name="alamat_dokter" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_hpD">Nomor HP</label>
                                            <input type="text" class="form-control" id="no_hp_dokter" name="no_hp_dokter" required>
                                        </div>
                                        
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                            </div>
                                    </form>
                                    </div>

                              
                            </div>

                          </div>
                        </div>
	            </div>
	            </div>

          
            </div>
            <br>
          <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <tr align="center" style="font-weight:bold">
                    <td width="5%">No</td>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Nomor HP</td>
                    <td width="15%">Aksi</td>
                    </tr>

                    <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = "SELECT * FROM dokter";
                        $result = mysqli_query($koneksi, $query);

                        while ($row = mysqli_fetch_array($result)) :

                            ?>


                                    <tr align="center">
                                    <td><?= $no++ ?></td>
                                    <td><?= $row['nama_dokter'] ?></td>
                                    <td><?= $row['alamat_dokter'] ?></td>
                                    <td><?= $row['no_hp_dokter'] ?></td>
                                    <td>
                                        <div class="btn-group" role="group">
                                        <a title="Edit Data" type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalEdit<?=$no?>"><i class="fa fa-edit"></i></a>
                                        <a title="Hapus Data" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus<?=$no?>"><i class="fa fa-trash"></i></a>
                                        </div>
                                    </td>
                                    </tr>

                                  <!-- Awal Modal Ubah-->
                                  <div class="modal fade" id="modalEdit<?=$no?>" role="dialog">
                                  <div class="modal-dialog">
        
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Edit Dokter</h4>
                                      </div>
        
                                            <div class="modal-body">
                                            <!-- Form ubah data obat disini -->
                                            <form action="pages/update_dokter.php" method="post">
                                            <input type="hidden" name="id_dokter" value="<?= $row['id_dokter']; ?>">
                                                <div class="form-group">
                                                    <label for="nama">Nama Dokter</label>
                                                    <input type="text" class="form-control" id="nama" name="nama_dokter" value="<?= $row['nama_dokter']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <input type="text" class="form-control" id="alamat" name="alamat_dokter" value="<?= $row['alamat_dokter']; ?>" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_hp">Nomor HP</label>
                                                    <input type="text" class="form-control" id="no_hp" name="no_hp_dokter" value="<?= $row['no_hp_dokter']; ?>" required>
                                                </div>
                                                
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </div>
                                            </form>
                                            </div>
        
                                      
                                    </div>
        
                                  </div>
                                  </div>
                                  <!-- Akhir Modal Ubah-->

                                  <!-- Awal Modal Hapus-->
                                  <div class="modal fade" id="modalHapus<?=$no?>" role="dialog">
                                  <div class="modal-dialog">
        
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Hapus Dokter</h4>
                                      </div>
        
                                            <div class="modal-body">
                                            <!-- Form ubah data obat disini -->
                                            <form action="pages/hapus_dokter.php" method="post">
                                            <input type="hidden" name="id" value="<?= $row['id_dokter']; ?>">
                                            
                                            <h5 class="text-center"> Apakah anda yakin ingin menghapus data ini? </h5>
                                            <br>
                                            <h5 class="text-center " style="color:red;"><?= $row['nama_dokter'] ?></h5>

                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" name="bHapus">Hapus</button>
                                            </div>  
                                            
                                            </form>
                                            </div>

                                          
        
                                      
                                    </div>
        
                                  </div>
            </div>
                                  <!-- Akhir Modal Hapus-->

                                    <?php endwhile; ?>                       
                    </table>
            </div>
         </div>
</div>
    


<!-- Footer -->
<!-- <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Company, Inc</p>

    <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
    <img src="assets/biomedic.png" alt="" class="img-icon">
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
    </ul>
  </footer>
</div> -->

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="vendor/raphael/raphael.min.js"></script>
<script src="vendor/morrisjs/morris.min.js"></script>
<script src="data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="dist/js/sb-admin-2.js"></script>
    
</body>
</html>