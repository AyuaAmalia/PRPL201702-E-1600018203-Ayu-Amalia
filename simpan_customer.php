<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restaurant");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}

$namacustomer=$_POST['namacustomer'];
$alamatcustomer=$_POST['alamatcustomer'];
$emailcustomer=$_POST['emailcustomer'];

// membuat table customer
$sql = "INSERT INTO customer (namacustomer, alamatcustomer, emailcustomer) VALUES ('$namacustomer','$alamatcustomer','$emailcustomer')";

if($konek->query($sql)){
  echo "data customer BERHASIL dibuat!<br/>";
}else{
  echo "data customer GAGAL dibuat : ".$konek->error."<br/>";
}
$konek->close();
echo "<a href='menu.php'>Kembali Ke Home</a>";
?>
