<?php
include 'koneksi.php';
$id = $_GET['id_siswa'];
$sql    = "SELECT * FROM siswa WHERE id_siswa = '$id'";
$query  = mysqli_query($conn, $sql);
$siswa = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Uprak array pwpb</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- <link rel="stylesheet" href="../assets/css/components.css"> -->
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Notifications
                <div class="float-right">
                  <a href="#">Mark All As Read</a>
                </div>
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-primary text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Template update is available now!
                    <div class="time text-primary">2 Min Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="far fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>You</b> and <b>Dedik Sugiharto</b> are now friends
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-success text-white">
                    <i class="fas fa-check"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b> has moved task <b>Fix bug header</b> to <b>Done</b>
                    <div class="time">12 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-danger text-white">
                    <i class="fas fa-exclamation-triangle"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Low disk space. Let's clean it!
                    <div class="time">17 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item">
                  <div class="dropdown-item-icon bg-info text-white">
                    <i class="fas fa-bell"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    Welcome to Stisla template!
                    <div class="time">Yesterday</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">View All <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block">Aulia Putri</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php">P O R T A L</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="index-0.html">General Dashboard</a></li>
                  <li class="active"><a class="nav-link" href="index.html">Ecommerce Dashboard</a></li>
                </ul>
              </li>
              <li class="menu-header">Starter</li>
              <li class="nav-item dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Admin</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="tambahbaru.php">Tambah Siswa</a></li>
                  <!-- <li><a class="nav-link" href="layout-transparent.html">Transparent Sidebar</a></li>
                  <li><a class="nav-link" href="layout-top-navigation.html">Top Navigation</a></li> -->
                </ul>
              </li>
              <!-- <li><a class="nav-link" href="blank.html"><i class="far fa-square"></i> <span>Blank Page</span></a></li> -->
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Siswa</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="bootstrap-alert.html">RPL 1</a></li>
                  <li><a class="nav-link" href="bootstrap-badge.html">RPL 2</a></li>
                  <li><a class="nav-link" href="bootstrap-breadcrumb.html">RPL 3</a></li>
                  <li><a class="nav-link" href="bootstrap-buttons.html">BRC 1</a></li>
                  <li><a class="nav-link" href="bootstrap-card.html">BRC 2</a></li>
                  <li><a class="nav-link" href="bootstrap-carousel.html">BRC 3</a></li>
                </ul>
              </li>
        </aside>
      </div>

      <!-- Content -->
      <br>
      <br>
      <br>
      <br>
      <div class="container">
        <div class="row">
            <div class="container" style="margin-top:20px">

                <div class="container mt-4 ml-5 justify-content-center">
                    <div class="card">
                        <h4 class="mt-4 text-black text-center">Form Edit Data Siswa</h4>

                        <div class="card-body">
                            <form action="simpanedit.php" method="post">
                               
                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label">Nama</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="nama" class="col-md-9" value="<?= $siswa['nama_siswa'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="tempat_lahir" class="col-md-9" value="<?= $siswa['tempat_lahir'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-6">
                                        <input type="date" name=" tgl_lahir" class="col-md-9" value="<?= $siswa['tgl_lahir '] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="jk" class="col-md-9" value="<?= $siswa['jk'] ?>">
                                    </div>
                                </div>

                                <div class="form-group row justify-content-center">
                                    <label for="" class="col-sm-3 col-form-label">Umur</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="umur" class="col-md-9" value="<?= $siswa['umur'] ?>">
                                    </div>
                                </div>

                                <input type="submit" name="simpan" value="simpan" class="btn btn-primary ml-5 mt-2 mb-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

      <!-- end content -->

      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2021 <div class="bullet"></div> Design By <a href="https://nauval.in/">Aulia Putri</a>
        </div>
        <div class="footer-right">
          2.2.0
        </div>
      </footer>
    </div>
  </div>

  <?php
        include 'koneksi.php';
        if (isset($_post['simpan'])) {
            $nama = $_post['nama_siswa'];
            $tempat = $_post['tempat_lahir'];
            $tgl = $_post['tgl_lahir'];
            $jk = $_post['jk'];
            $umur = $_post['umur'];
        
            $sql = "UPDATE siswa SET tempat_lahir='$tempat', tgl_lahir='$tgl', jk='$jk', umur='$umur' WHERE nama_siswa='$nama'";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                header('Location: datasiswa.php');
            } else {
                header('location: simpanedit.php?status=gagal');
            }
        }
    ?>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="../node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="../node_modules/chart.js/dist/Chart.min.js"></script>
  <script src="../node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="../node_modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

  <!-- Template JS File -->
  <script src="scripts.js"></script>
  <script src="../assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="../assets/js/page/index.js"></script>
</body>

</html>
