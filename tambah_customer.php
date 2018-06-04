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
    <div class="collapse navbar-collapse" id="basicExampleNav">

        </ul>
         <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="menu.php">Menu</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="tambah_customer.php">Order<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tampil_customer.php">Ordered</a>
            </li>
            
        </ul>
    </div>
        <!-- Links -->
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->

</div>
<!--/.Card-->
 <center>

    <div>
      <?php 


          $konek = new mysqli("localhost","root","","restaurant");

            // mengecek koneksi
            if($konek->connect_error){
              die("Koneksi Gagal Karena : ". $konek->connect_error);
            } ?>
    <h1><font color"brown"></font></h1>
    <div class="row">
      <div class="col-md-6" style="margin-left:25%;">
          <form class="form-horizontal" method="POST" action="simpan_pesan.php">
            <div class="form-group">
              <label for="exampleInputEmail1"><strong>Nama :</strong></label>
              <select class="form-control" name="idcustomer"> 
                <?php
                    $select = $konek->query("SELECT * FROM customer");
                    foreach ($select as $x) {
                ?>
                    <option value="<?php echo $x['idcustomer']; ?>"><?php echo $x['namacustomer']; ?></option>
                <?php } ?>
                    </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><strong>Pilih Jenis Makanan</strong></label><br>
              <div class="row">
                <?php
                  $makanan = $konek->query("SELECT * FROM menu WHERE kategori = 'makanan'");
                  foreach ($makanan as $x) {
                ?>
                <div class="col-sm-3">
                    <label class="checkbox-inline"><input type="checkbox" value="<?php echo $x['idmenu']; ?>" name="makanan[]"><?php echo $x['namamenu']; ?></label>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="jumlah_makanan[]" placeholder="Jumlah"></div>
                <br>
                <?php }?>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><strong>Pilih Jenis Minuman</strong></label><br>
              <div class="row">
                <?php
                  $minuman = $konek->query("SELECT * FROM menu WHERE kategori = 'minuman'");
                  foreach ($minuman as $x) {
                ?>
                <div class="col-sm-3">
                    <label class="checkbox-inline"><input type="checkbox" value="<?php echo $x['idmenu']; ?>" name="makanan[]"><?php echo $x['namamenu']; ?></label>
                </div>
                <div class="col-sm-3">
                  <input type="text" class="form-control" name="jumlah_makanan[]" placeholder="Jumlah"></div>
                <br>
                <?php }?>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><strong>Tanggal Order</strong></label><br>
              <input type="hidden" value="<?php echo date('Y-m-d') ?>" name="tanggal" >
            <input class="form-control" type="text" value="<?php echo date('Y-m-d') ?>" disabled >
            </div>
            <input class="btn btn-danger btn-rounded" type="submit" value="Submit">
          </form>
      </div>
    </div>

  </div>
</center>
  </body>

    <script language="javascript">
function getkey(e)
{
if (window.event)
   return window.event.keyCode;
else if (e)
   return e.which;
else
   return null;
}
function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
 
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();
 
// check goodkeys
if (goods.indexOf(keychar) != -1)
    return true;
// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
   return true;
    
if (key == 13) {
    var i;
    for (i = 0; i < field.form.elements.length; i++)
        if (field == field.form.elements[i])
            break;
    i = (i + 1) % field.form.elements.length;
    field.form.elements[i].focus();
    return false;
    };
// else return false
return false;
}
</script>
 
<!--    <script>
        function hanyaAngka(evt) {
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }
    </script>   
    --> 
  
  </html>



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

  </body>