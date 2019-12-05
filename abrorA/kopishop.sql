-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Des 2019 pada 10.07
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kopishop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
`id_makanan` int(100) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `gambar_makanan` varchar(100) NOT NULL,
  `deskripsi_makanan` varchar(1000) NOT NULL,
  `asal_makanan` varchar(500) NOT NULL,
  `bahan_makanan` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `gambar_makanan`, `deskripsi_makanan`, `asal_makanan`, `bahan_makanan`) VALUES
(10, 'cold drew', '5de87d2eed6ac.jpg', 'Isitilah menyeduh kopi selalu identik dengan air panas. Namun, hal ini tidak belaku untuk jenis minuman kopi satu ini. Cold brew adalah teknik penyeduhan kopi dengan mendinginkan air yang telah dicampur dengan bubuk kopi. Proses pembuatan cold brew memakan waktu yang cukup lama yakni 18 sampai 24 jam. Prosesnya yang mudah membuat kopi ini bisa kamu buat sendiri dirumah. Kopi yang dihasilkan cenderung lebih manis dengan tingkat keasaman yang rendah. Sesuai namanya, cold brew  selalu disajikan dalam kondisi dingin. Kamu bisa menemui minuman ini di toko kopi terdekat. Bahkan beberapa minmarket menyediakan kopi ini. ', 'belakang layar dapur', 'bubuk kopi,air.'),
(11, 'es kopi susu', '5de87de52980f.jpg', 'Siapa sih yang tidak tau minuman satu ini. Pasalnya, kopi susu sedang tenar dikalangan masyarakat Indonesia. Inti dari minuman ini adalah campuran antara susu dan kopi. Beberapa bulan ini, varian kopi susu yang tenar adalah kopi susu gula aren. Kamu tidak perlu mencari-cari minuman satu ini. Cukup berjalan beberapa kilo, dan kamu akan menjumpai penjual minuman ini. Kebanyakan toko kopi, menjual minuman ini dengan campuran es batu dan wadah plastik.  ', 'belakang layar dapur', 'es batu,bubuk kopi,susu'),
(12, 'affogato', '5de886bcf0cfb.jpg', 'Mungkin untuk beberapa orang, minuman ini terdengar asing ditelinga. Affogato adalah espresso yang dicampur dengan satu atau dua sendok es krim. Kebanyakan toko kopi mengunakan es krim rasa vanilla untuk membuat affogato. Kamu bisa mencari sajian ini di toko kopi terdekat. Bayangkan perpaduan manisnya es krim dengan pahitnya kopi di siang yang panas.  ', 'belakang layar dapur', 'bubuk kopi,es krim,krim kopi cair'),
(13, 'frappe', '5de8890f07470.jpg', 'Pada dasarnya, frappe dihasilkan dari es yang dishake (kocok) dengan susu sebagai tambahan rasa. Variannya beragam mulai dari kopi maupun non-kopi. Beberapa toko kopi mengolah minuman satu ini dengan cara diblender. Minuman ini akan dengan mudah kamu temui di toko kopi terdekat. Selain kopi, biasanya toko kopi memadukan minuman ini dengan bahan-bahan yang tidak biasa seperti biskuit aneka rasa dari merek terkenal. ', 'belakang layar dapur', 'bubuk kopi,air '),
(14, 'es kopi gula merah', '5de8c34b77ead.jpg', 'es kopi dengan gula merah. Sajian kekinian ini banyak disuguhkan oleh ragam kedai atau merek kopi yang sukses menjadi favorit banyak orang.  Anda juga dapat membuat es kopi dengan gula merah sendiri di rumah yang super segar. Bahan-bahannya sangat mudah didapatkan dan cara membuat minuman ini sangat praktis. Es kopi ini juga dapat Anda jadikan teman beraktivitas.', 'belakang layar dapur', 'kopi,gula merah, es batu'),
(15, 'Almond Brulle â€“ Tyfel Coffee', '5de8c461ecc95.jpg', 'Untuk kamu yang ingin minum kopi hangat yang rasanya bikin nyaman, Almond Brulle dari Tyfel Coffee cocok banget untuk kamu cobain. Harum kopi cappuccino yang hangat dan agak pahit berpadu dengan taburan gula merah crispy dan kacang almond sehingga bikin rasa kopinya manis, agak crunchy dan warm banget.  Walaupun punya topping yang manis-manis, rasa menu andalan dari Tyfel Coffee ini cukup seimbang lho karena kopi yang jadi bahan dasarnya pahit. Cocok banget untuk pagi hari atau untuk menemani kamu lembur.', 'belakang layar dapur', 'bubuk kopi,air panas'),
(16, 'Almond Brulle â€“ Tyfel Coffee', '5de8c462e3064.jpg', 'Untuk kamu yang ingin minum kopi hangat yang rasanya bikin nyaman, Almond Brulle dari Tyfel Coffee cocok banget untuk kamu cobain. Harum kopi cappuccino yang hangat dan agak pahit berpadu dengan taburan gula merah crispy dan kacang almond sehingga bikin rasa kopinya manis, agak crunchy dan warm banget.  Walaupun punya topping yang manis-manis, rasa menu andalan dari Tyfel Coffee ini cukup seimbang lho karena kopi yang jadi bahan dasarnya pahit. Cocok banget untuk pagi hari atau untuk menemani kamu lembur.', 'belakang layar dapur', 'bubuk kopi,air panas'),
(17, 'fds', '5de8c53f1e9e1.jpg', 'fdsfs', 'sdf', 'sfsd'),
(19, 'dsadsa', '5de8c762127f7.jpg', 'n sjbdsa', 'ljdhsaohdosau', 'sahdsoauhd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `gambar_produk` varchar(100) NOT NULL,
  `deskripsi_produk` varchar(1000) NOT NULL,
  `asal_produk` varchar(500) NOT NULL,
  `bahan_produk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
 ADD PRIMARY KEY (`id_makanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
MODIFY `id_makanan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(100) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
