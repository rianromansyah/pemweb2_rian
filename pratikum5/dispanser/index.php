<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RianRomansyah | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../../dist/img/lg.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <?php require_once('../../../partial/header_nav.php');
require_once('../../../partial/side_content_pratikum1.php');

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pratikum 5</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../../index.php">Home</a></li>
              <li class="breadcrumb-item active">Pratikum 5</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
              <div class="card-header">
                <h2>Dispanser</h2>
              </div>
            </div>
            <?php
class Dispenser
{
    protected $volume;
    protected $hargaSegelas;
    private $volumeGelas = 250;
    public $namaMinuman;
    public $gelasTerjual = 0;

    public function __construct($volGalon, $harga, $nama)
    {
        $this->volume = $volGalon;
        $this->hargaSegelas = $harga;
        $this->namaMinuman = $nama;
    }

    public function minum($berapaGelas)
    {
        if ($this->volume > 0) {
            $this->volume = $this->volume - ($this->volumeGelas * $berapaGelas);
            echo "Selamat Menikmati Jus $this->namaMinuman <br/>";
            echo "Sisa Volume Jus yang tersedia $this->volume <br/>";
            $this->gelasTerjual++;
        } else {
            echo "Sorry, $this->namaMinuman sudah habis terjual <br/>";
        }
    }

    public function isi($vol)
    {
        $this->volume = $vol;
        echo "Berhasil mengisi ulang $this->namaMinuman sebanyak $vol <br/>";
    }

    public function getPengasilan()
    {
        echo "Penghasilan yang didapat dari penjualan " . number_format($this->hargaSegelas * $this->gelasTerjual, 2, ',', '.');
    }
}

$mangga = new Dispenser(1000, 5000, 'Mangga');


$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);

$mangga->isi(1000);

$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);

$mangga->isi(1000);

$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);
$mangga->minum(1);

$mangga->getPengasilan();
?>
    </div>

    <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">Rian Romansyah</a>.</strong>
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../../plugins/moment/moment.min.js"></script>
<script src="../../../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../../dist/js/pages/dashboard.js"></script>
</body>
</html>

