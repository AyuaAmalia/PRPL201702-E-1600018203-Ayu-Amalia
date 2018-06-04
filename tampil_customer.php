<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Palembang resto</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand">Palembang Resto</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
   <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="tambah_customer.php">Order</a>
            </li>
            
            <li class="nav-item active">
                <a class="nav-link" href="tampil_customer.php">Ordered<span class="sr-only">(current)</span></a>
            </li>
            
        </ul>
    </div>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

</div>
<center>   
<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restaurant");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}
$i = 1;
$sql = "SELECT * FROM `customer`, `pesan` WHERE customer.idcustomer = pesan.idcustomer group by pesan.idcustomer";
$data = $konek->query($sql);
?>
<div class="container">
<table class="table table-stripped">
    <thead>
      <tr>
        <th>No.</th>
        <th>Nama Pemesan</th>
        <th>Menu yang Dipesan</th>
        <th>Tanggal Transaksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
          foreach ($data as $d) {
          $idcustomer = $d['idcustomer'];
        ?>
      <tr>
        <td><?php echo $i;?></td>
        <td><?php echo $d['namacustomer']; ?></td>
        <td>
          <table class="table table-hover">
            <th>Nama Menu</th>
            <th>Jumlah</th>
            <th>Harga</th>
          <?php
            $pesan = $konek->query("SELECT * FROM `menu`, `pesan` WHERE pesan.idcustomer = $idcustomer AND pesan.idmenu = menu.idmenu");
            $total = 0;
            foreach ($pesan as $p) {
              $total += $p['harga'];
              ?>
              <tr>
                <td><?php echo $p['namamenu'];?></td>
                <td><?php echo $p['jumlah'];?></td>
                <td><?php echo $p['hargamenu'];?></td>
              </tr>
            <?php }?>
            <tr>
              <td colspan="2"><b>TOTAL</b></td>
              <td><?php echo $total; ?></td>
            </tr>
            </table>
        </td>
        <td><?php echo $d['tanggal']; ?></td>
      </tr>
      <?php $i++;} ?>
    </body>
  </table>
</div>
</center>



    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row my-4">

            <!--First column-->
            <div class="col-md-4 col-lg-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Palembang Resto</h5>
                <p>Restoran ini adalah restoran yang menyediakan maknan khas Palembang</p>
                <p>Restoran ini dibangun bertujuan untuk perantau yang kangen dengan makanan khas daerahnya yaitu Palembang atau bahkan orang-orang perantau lainnya yang ingin mencicipi makanan khas Palembang atau bahkan orang sekitar Yogyakarta yang ingin menikmatinya </p>
            </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-2 col-lg-2 ml-auto">
                <h5 class="text-uppercase mb-4 font-weight-bold">About</h5>
                <ul class="list-unstyled">
                    <p>
                        <a href="#!">PROJECTS</a>
                    </p>
                    <p>
                        <a href="#!">ABOUT US</a>
                    </p>
                    <p>
                        <a href="#!">BLOG</a>
                    </p>
                    <p>
                        <a href="#!">AWARDS</a>
                    </p>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
            <div class="col-md-4 col-lg-3">
                <h5 class="text-uppercase mb-4 font-weight-bold">Address</h5>
                <!--Info-->
                <p>
                    <i class="fa fa-home mr-3"></i> Umbulharjo, Yogyakarta</p>
                <p>
                    <i class="fa fa-envelope mr-3"></i> Palembangresto@google.com</p>
                <p>
                    <i class="fa fa-phone mr-3"></i> +6287797878797</p>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a> Palembang Resto</a>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->
                        
</html>
<?php $konek->close(); ?>
  </body>
