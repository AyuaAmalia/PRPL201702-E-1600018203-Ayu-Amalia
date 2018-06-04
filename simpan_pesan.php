<?php
// membuat koneksi
$konek = new mysqli("localhost","root","","restaurant");

// mengecek koneksi
if($konek->connect_error){
  die("Koneksi Gagal Karena : ". $konek->connect_error);
}


$idcustomer=$_POST['idcustomer'];
$makanan=$_POST['makanan'];
// $minuman=$_POST['minuman'];
$jumlah_makanan = $_POST['jumlah_makanan'];
// $jumlah_minuman = $_POST['jumlah_minuman'];
$tanggal=$_POST['tanggal'];

// membuat table customer
$j = 0;
for ($i=0; $i < count($jumlah_makanan); $i++) { 
	if ($jumlah_makanan[$i] != NULL) {
		$jumlah = $jumlah_makanan[$i];
		$idmenu = $makanan[$j];
		$harga = $konek->query("SELECT hargamenu FROM menu WHERE idmenu = '$idmenu'");
		foreach ($harga as $h) {
			$totalHarga = $h['hargamenu']*$jumlah;
			$query = $konek->query("INSERT INTO `pesan`(`idcustomer`, `idmenu`, `jumlah`, `harga`, `tanggal`) VALUES ($idcustomer,'$idmenu',$jumlah,$totalHarga,'$tanggal')");
		}
		$j++;
	}
}
if ($query) {
	header("location:tampil_customer.php");
}
