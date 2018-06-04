-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mei 2018 pada 13.24
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(15) NOT NULL,
  `namacustomer` varchar(30) DEFAULT NULL,
  `alamatcustomer` varchar(50) DEFAULT NULL,
  `emailcustomer` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`idcustomer`, `namacustomer`, `alamatcustomer`, `emailcustomer`) VALUES
(17, 'Vian', 'Bantul', 'vian@gmail.com'),
(18, 'Vian', 'Bantul', 'vian@gmail.com'),
(111, 'ayu', 'sleman', 'ayu@gmail.com'),
(112, 'rizky', 'yogya', 'rizky@gmail.com'),
(113, 'putra', 'bantul', 'putra@gmail.com'),
(114, 'Ari', 'Kulonprogo', 'ari@gmail.com'),
(115, 'Tasya', 'Gunungkidul', 'tasya@gmail.com'),
(116, 'rita', 'cilacap', 'rita@yahoo.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `idmenu` varchar(15) NOT NULL,
  `namamenu` varchar(30) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `hargamenu` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`idmenu`, `namamenu`, `kategori`, `hargamenu`) VALUES
('makanan1', 'pempek kapal selam', 'makanan', 10000),
('makanan2', 'pempek lenjer', 'makanan', 6000),
('makanan3', 'pempek lenggang', 'makanan', 8000),
('makanan4', 'pempek pistel', 'makanan', 3000),
('makanan5', 'pempek adaan', 'makanan', 1500),
('makanan6', 'pempek keriting', 'makanan', 1500),
('makanan7', 'pempek kulit', 'makanan', 2000),
('makanan8', 'pempek panggang', 'makanan', 3000),
('makanan9', 'pempek tahu', 'makanan', 1500),
('minuman1', 'air mineral', 'minuman', 5000),
('minuman2', 'es kacang merah', 'minuman', 10000),
('minuman3', 'es teh', 'minuman', 3000),
('minuman4', 'jus alpukat', 'minuman', 10000),
('minuman5', 'jus mangga', 'minuman', 8000),
('minuman6', 'es jeruk', 'minuman', 3000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `idcustomer` int(11) NOT NULL,
  `idmenu` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id`, `idcustomer`, `idmenu`, `jumlah`, `harga`, `tanggal`) VALUES
(19, 111, 'makanan1', 1, 10000, '2018-04-25'),
(20, 111, 'minuman1', 2, 10000, '2018-04-25'),
(21, 114, 'makanan5', 2, 3000, '2018-04-25'),
(22, 114, 'minuman5', 3, 24000, '2018-04-25'),
(23, 17, 'makanan1', 2, 20000, '2018-04-25'),
(24, 17, 'minuman3', 1, 3000, '2018-04-25'),
(25, 112, 'makanan7', 1, 2000, '2018-04-26'),
(26, 112, 'minuman5', 1, 8000, '2018-04-26'),
(27, 116, 'makanan1', 1, 10000, '2018-05-05'),
(28, 116, 'minuman3', 2, 6000, '2018-05-05'),
(29, 17, 'makanan1', 2, 20000, '2018-05-05'),
(30, 17, 'makanan2', 2, 12000, '2018-05-05'),
(31, 17, 'minuman1', 1, 5000, '2018-05-05'),
(32, 17, 'minuman3', 2, 6000, '2018-05-05'),
(33, 116, 'makanan1', 2, 20000, '2018-05-05'),
(34, 116, 'makanan2', 3, 18000, '2018-05-05'),
(35, 116, 'minuman1', 1, 5000, '2018-05-05'),
(36, 116, 'minuman3', 2, 6000, '2018-05-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
