-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jul 2019 pada 14.04
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mbaturi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(5) NOT NULL,
  `tema` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tema_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_agenda` text COLLATE latin1_general_ci NOT NULL,
  `tempat` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pengirim` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `tgl_posting` date NOT NULL,
  `jam` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `tema`, `tema_seo`, `isi_agenda`, `tempat`, `pengirim`, `gambar`, `tgl_mulai`, `tgl_selesai`, `tgl_posting`, `jam`, `dibaca`, `username`) VALUES
(64, 'Elton John Greatest Hits Tour', 'elton-john-greatest-hits-tour', '<p>November ini,&nbsp; Indonesia akan disuguhkan salah satu konser megah dari legenda musik dunia yaitu Elton John. Penampilan Elton John yang pertama kalinya di Indonesia akan berlangsung pada 17 November 2012, di&nbsp; Sentul International Convention Center, Bogor yang lokasinya tidak begitu jauh dari Jakarta.<br />\r\n<br />\r\nKonser Elton John ini merupakan bagian dari tur dunianya yang bertajuk &ldquo;Greatest Hits Tour&rdquo; dan akan dimulai pada awal November dari Latvia sampai ke Australia. Elton John akan membawa band lamanya yang terdiri dari Davey Johnstone, Nigel Olsson, Robert Birch, Kim Bullard dan John Mahon, dan empat backing vocal yaitu Rose&nbsp; Batu (Sly dan The Family Stone), Lisa Bank, Tata Vega, dan Jean Witherspoon.</p>\r\n', 'Sentul International Convention Center', 'Robby Prihandaya', '', '2012-11-17', '2012-11-17', '2012-08-20', '02:00:00 - 13:30:00', 121, 'admin'),
(62, 'Maroon Live in Jakarta 2012', 'maroon-live-in-jakarta-2012', 'Maroon 5 akan kembali menghibur penggemar Jakarta mereka dengan sebuah konser pada 5 Oktober 2012 di Istora Senayan, Jakarta. Ini akan menjadi penampilan kedua mereka di tanah air setelah tampil pada konser sold out 27 April 2011 lalu. Grup musik beraliran pop rock yang berasal dari Los Angeles, California Amerika Serikat. Rencananya menggelar konsernya pada 5 Oktober 2012, di Istora Senayan, Jakarta. Java Musikindo selaku promotor telah mengumumkan pembagian kelas serta harga tiket konser. Band yang digawangi oleh Adam Levine (vokal/gitar), Jesse Carmichael (keyboard/gitar),Mickey Madden (bass), James Valentine (gitar), Matt Flynn (drum) ini menggelar konser di Jakarta sebagai bagian dari promo album barunya, Overexposed, yang dirilis Juni lalu.\r\n', 'Istora Senayan Jakarta', 'Muhammad Arsenio', '', '2012-10-05', '2012-10-05', '2012-08-19', '20:00:00 - Selesai', 25, 'admin'),
(63, 'Festival Musik Bambu Nusa', 'festival-musik-bambu-nusantara-2012', 'Bambu Nusantara ke-6 tahun ini akan digelar di Jakarta Convention Center (JCC), di Jalan Jenderal Gatot Subroto, Jakarta, pada 1 - 2 September 2012. Acara tersebut akan menghadirkan beraneka kreasi berbahan bambu dan tampilnya beragam seni dari bambu. Selain suguhan musik etnik berpadu dengan musik modern, dalam Acara ini juga akan turut diisi dengan pameran, seminar, merchandise, kuliner, dan fashion yang dipadu padankan dengan karya berbahan bambu.<br />\r\n', 'Jakarta Convention Center (JCC), Jakarta', 'Dewiit Safitri', '', '2012-09-01', '2012-09-02', '2012-08-20', '09:00:00 - 21:00:00', 52, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id_album` int(5) NOT NULL,
  `jdl_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `album_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_album` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `hits_album` int(5) NOT NULL DEFAULT '1',
  `tgl_posting` date NOT NULL,
  `jam` time NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `album`
--

INSERT INTO `album` (`id_album`, `jdl_album`, `album_seo`, `keterangan`, `gbr_album`, `aktif`, `hits_album`, `tgl_posting`, `jam`, `hari`, `username`) VALUES
(30, 'Konser Kantata Barock 2018 berlangsung Dramatis', 'konser-kantata-barock-2018-berlangsung-dramatis', '<p>Para macan tua yang digawangi Iwan Fals, Setiawan Djody dan Sawung Jabo di Stadion Gelora Bung Karno, Jakarta, Jumat (30/12) malam. Kantata kembali membawakan lagu-lagu legendarisnya setelah 21 tahun vakum dari dunia musik.</p>\r\n\r\n<div style=\"background-color:#ffffff; border:medium none; color:#000000; overflow:hidden; text-align:left; text-decoration:none\">&nbsp;</div>\r\n', 'konser.png', 'Y', 52, '2012-08-20', '09:12:06', 'Senin', 'admin'),
(31, 'Asunt in anim uis aute irure dolor in reprehenderit', 'asunt-in-anim-uis-aute-irure-dolor-in-reprehenderit', '<p>Asunt in anim uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum. Allamco laboris nisi ut aliquip ex ea commodo consequat. Aser velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum.</p>\r\n', 'maxresdefault.jpg', 'Y', 20, '2012-08-20', '09:40:01', 'Senin', 'admin'),
(28, 'Murah Meriah belanja puas di Pasar Asemka', 'murah-meriah-belanja-puas-di-pasar-asemka', '<p>Pasar Asemka, Jakarta, merupakan pasar grosir yang banyak menyediakan berbagai aksesoris seperti kalung, cincin, Souvenir pernakahan, dan lainnya. Di Pasara Asemka anda akan dimanjakan dengan beragam barang yang dibandrol dengan harga murah meriah dan biasanya dijual grosiran.</p>\r\n', 'Murah-Meriah.jpg', 'Y', 57, '2012-08-18', '23:14:05', 'Sabtu', 'admin'),
(29, 'Karpet Raksasa dari Bunga mendapatkan rekor muri', 'karpet-raksasa-dari-bunga-mendapatkan-rekor-muri', '<p>Belgia sedang memperingati peristiwa tahunan &quot;La Fete De La Fleur&quot; atau pesta bunga di bulan Agustus. Ahli bunga merancang karpet raksasa dari bunga di depan Grand Place di Brussel. Karpet ini dibuat menggunakan 700 ribu bunga.</p>\r\n', 'karpet.jpg', 'Y', 121, '2012-08-19', '03:02:27', 'Minggu', 'admin'),
(51, 'Jalan-jalan bersama pemenang quiz online swarakalibata', 'jalanjalan-bersama-pemenang-quiz-online-swarakalibata', '<p>Israel pekan-pekan belakangan ini meningkatkan ancaman-ancamannya untuk menghancurkan fasilitas-fasilitas nuklir Iran guna mencegah Teheran mampu memproduksi senjata-senjata atom. Iran yang terkena sanksi-sanksi Barat membantah tuduhan itu dan menegaskan bahwa program nuklirnya hanya untuk tujuan damai. Militernya memperingatkan akan menghancurkan Israel jika diserang.</p>\r\n', 'quiz.jpg', 'Y', 3, '2018-04-21', '22:55:11', 'Sabtu', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `background`
--

CREATE TABLE `background` (
  `id_background` int(5) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `background`
--

INSERT INTO `background` (`id_background`, `gambar`) VALUES
(1, 'toska');

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `judul`, `url`, `gambar`, `tgl_posting`) VALUES
(19, 'Private Training Web Development', 'https://phpmu.com', '', '2017-05-21'),
(20, 'Kursus Web Programming Online', 'https://phpmu.com', '', '2017-05-21'),
(21, 'Komunitas Belajar web Programming', 'https://phpmu.com', '', '2017-05-21'),
(22, 'Jasa Pembuatan Website Murah', 'https://phpmu.com', '', '2017-05-21'),
(23, 'Komunitas  Pecinta CMS Lokomedia', 'https://phpmu.com', '', '2017-05-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sub_judul` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `judul_seo` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `headline` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `utama` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `isi_berita` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keterangan_gambar` text COLLATE latin1_general_ci NOT NULL,
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `username`, `judul`, `sub_judul`, `youtube`, `judul_seo`, `headline`, `aktif`, `utama`, `isi_berita`, `keterangan_gambar`, `hari`, `tanggal`, `jam`, `gambar`, `dibaca`, `tag`, `status`) VALUES
(4, 64, 'admin', 'Empat Kawasan Industri Halal akan Dikembangkan di Indonesia', 'Sertifikasi Halal', '', 'empat-kawasan-industri-halal-akan-dikembangkan-di-indonesia', 'Y', 'Y', 'Y', '<p>Jakarta, CNN Indonesia --&nbsp;<strong><a href=\"https://www.cnnindonesia.com/tag/Kementerian-perindustrian\">Kementerian Perindustrian</a></strong>&nbsp;menyatakan akan&nbsp;ada&nbsp;empat kawasan<strong><a href=\"https://www.cnnindonesia.com/tag/industri\">&nbsp;industri&nbsp;</a></strong>halal yang dikembangkan di dalam negeri dalam waktu dekat ini.&nbsp;Direktur Perwilayahan Industri Direktorat Jenderal Ketahanan, Perwilayahan dan Akses Industri Internasional (KPAII) Kemenperin Ignatius Warsito&nbsp;mengatakan&nbsp;pengembangan tersebut sudah masuk dalam rencana pengembangan kawasan&nbsp;<a href=\"https://www.cnnindonesia.com/tag/industri-halal\"><strong>industri halal</strong>&nbsp;</a>di Indonesia.<br />\r\n<br />\r\nKawasan tersebut adalah,&nbsp;Batamindo Industrial Estate, Bintan Industrial Park, Jakarta Industrial Estate Pulogadung, dan Modern Cikande Industrial Estate.<br />\r\n<br />\r\n&quot;Keempatnya (pengembang) telah mengajukan diri ke Kemenperin untuk mengembangkan kawasan industri halal,&quot; ungkap Warsito&nbsp;seperti dikutip dari website Kementerian Perindustrian, Selasa (18/6).<br />\r\n<br />\r\nUntuk&nbsp;Batamindo Industrial Park, pengembang kawasan berencana mengembangkan zona halal seluas 17 hektare (ha) dari total area seluas 320 ha. Untuk&nbsp;Bintan Industrial Estate akan mengembangkan zona halal seluas 100 ha dari lahan seluas 320 ha.<br />\r\n<br />\r\nUntuk Modern Cikande&nbsp;pengembangan akan dilakukan di lahan seluas 500 Ha. Sedangkan untuk Jakarta Industrial Estate Pulogadung, pengembang berencana mengembangkan zona halal untuk produk mode, farmasi dan kosmetik, pusat makanan, laboratorium halal, serta halal center.<br />\r\n<br />\r\nWarsito optimistis bakal banyak perusahaan yang berminat masuk ke dalam kawasan industri halal. Keyakinan didasarkan seiring&nbsp;berkembangnya tren penggunaan produk halal yang semakin meningkat.<br />\r\n<br />\r\n&quot;Bahkan, bukan hanya sektor industri, di dalam kawasan tersebut nantinya juga ada banyak sektor pendukungnya. Mulai dari kantor sertifikasi halal hingga transportasi logistiknya yang juga halal. Jadi, akan ada pelayanan sertifikasi halal yang bisa&nbsp;<em>one stop service</em>&nbsp;di sana, dia punya laboratoriumnya, dan tenaga verifikasinya,&quot; paparnya.<br />\r\n<br />\r\nWarsito menambahkan, dalam pengembangan kawasan industri halal, Kemenperin memiliki tugas untuk menetapkan standardisasi, memberikan insentif, serta memfasilitasi promosi dan kerja sama teknis. Nantinya, aspek-aspek tersebut diatur dalam Peraturan Menteri Perindustrian.</p>\r\n\r\n<p>Menteri Perindustrian Airlangga Hartarto&nbsp;memperkirakan industri halal memiliki masa depan yang cerah seiring besarnya permintaan produk halal baik di masyarakat domestik maupun global. Atas kondisi itulah, tahun ini pemerintah menargetkan nilai perdagangan industri halal bisa menembus US$25 miliar.<br />\r\n<br />\r\nTarget tersebut, naik 20 persen dibandingkan pencapaian tiga tahun lalu.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber :&nbsp;<em>CNN Indonesia</em></p>\r\n', 'DPR RI', 'Rabu', '2019-07-03', '12:07:10', '2093586f-0ece-4bbc-90a8-9e86becfc3a5_169.jpg', 4, 'internasional,hukum,metropolitan,nasional', 'Y'),
(5, 64, 'admin', 'Pemerintah dan Asosiasi Dorong Pertumbuhan Industri Oleokimia Kelapa Sawit', 'Pertumbuhan Industri', '', 'pemerintah-dan-asosiasi-dorong-pertumbuhan-industri-oleokimia-kelapa-sawit', 'N', 'N', 'N', '<p><strong>Liputan6.com, Jakarta</strong>&nbsp;Pemerintah melalui Kementerian Perindustrian (<a href=\"https://www.liputan6.com/bisnis/read/3965827/impor-pakaian-makin-marak-kemenperin-minta-plb-dievaluasi\" title=\"Kemenperin\">Kemenperin</a>) dan Asosiasi Produsen Oleochemical Indonesia (Apolin) terus mendorong pertumbuhan industri oleokimia dari&nbsp;<a href=\"https://www.liputan6.com/bisnis/read/3998461/petani-keluhkan-harga-sawit-anjlok-akibat-pungutan-ekspor-cpo\" title=\"kelapa sawit\">kelapa sawit</a>&nbsp;yang diyakini punya masa depan cerah.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Direktur Jenderal Industri Agro Kemenperin Abdul Rochim mengatakan, Kemenperin sampai sengaja membuat direktorat jenderal baru lantaran melihat prospek bisnis dari industri olahan kelapa sawit tersebut.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Peran industri oleokimia sangat strategis karena mampu mengolah industri minyak kelapa sawit yang sangat melimpah. Jadi pak Menperin (Airlangga Hartarto) sempat bilang, untuk jadi dirjen industri argo, salah satu industri yang (harus) dikuasai adalah sawit,&quot; tuturnya di Jakarta, Rabu (3/7/2019).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Menurut catatannya, terdapat pertumbuhan perusahaan dan kapasitas industri oleokimia yang cukup gemilang pada kurun waktu 2016-2018. &quot;Ada investasi yang cukup besar pada 2017 yaitu Rp 4,7 triliun,&quot; sambungnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Mudah-mudahan ke depan bisa lebih besar lagi. Tentunya dengan bantuan pemerintah lewat pemberian insentif, karena biaya keluar saat ini yang sudah tidak lagi pas,&quot; dia menambahkan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Senada, Ketua Umum Apolin Rapolo Hutabarat mengutarakan, industri oleokimia juga memiliki dampak besar bagi sektor industri terkait lainnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Industri sawit merupakan industri yang sangat stratgis bagi bangsa kita, karena mampu menciptakan lapangan kerja, investasi, penerimaan pajak, pembangunan infrastruktur, dan juga membuka daerah terisolir dan jadi stimulus (ekonomi) bagi daerah,&quot; urainya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dia menyebutkan, pertumbuhannya industri oleokimia cukup positif, baik dari sisi investasi dan volume serta nilai ekspor yang menunjukan kinerjanya positif dari tahun ke tahun.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Melihat kinerja industri oleochemical yang tumbuh tadi, bahwa volume ekspor kita di 2017 mencapai 1,9 juta ton. Di 2018 meningkat jadi 2 juta ton. Untuk milai ekspor di 2017 USD 1,5 miliar, meningkat jadi USD 2,3 miliar di 2018,&quot; tandasnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Petani sawit yang tergabung dalam Asosiasi Petani&nbsp;Kelapa SawitIndonesia (APKASINDO) meminta pemerintah untuk melanjutkan kebijakan pungutan ekspor sawit.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ketua Umum DPP APKASINDO Gulat ME Manurung mengatakan, dana pungutan telah dirasakan petani melalui berbagai kegiatan seperti Peremajaan Sawit Rakyat (PSR), beasiswa anak petani serta buruh sawit, dan pelatihan kompetensi petani.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;APKASINDO tegaskan pungutan ekspor harus dipertahankan. Karena program ini menjadi bagian dari upaya pemerintah untuk meningkatkan perekonomian nasional serta daerah,&quot; ujar dia di Jakarta, Jumat (28/6/2019).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dia menilai pungutan sangat berdampak positif bagi petani. Sejak pertengahan 2015, dana pungutan yang dikelola Badan Pengelola Dana Perkebunan Kelapa Sawit (BPDP-KS) sangat bermanfaat bagi para petani khususnya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sebagai contoh, ada 10 ribu petani sawit Apkasindo di 22 provinsi dan 116 Kabupaten/Kota yang mendapatkan pelatihan teknis berkebun.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Terkait program beasiswa, ada 1.500 anak-anak petani di 22 provinsi menerima beasiswa pendidikan D1 dan D3 sawit di Instiper Yogyakarta dan Poltek Sawit CWE.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Selain itu, dana pungutan juga dimanfaatkan bagi pengembangan riset dan kegiatan promosi&nbsp;sawit&nbsp;di dalam serta luar negeri.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Adapula lebih dari 50 ribu hektar lahan petani sudah mendapatkan hibah Rp25 juta per hektare untuk program Peremajaan Sawit Rakyat (PSR).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Yang harus dicatat, PSR ini kebijakan strategis pemerintahan Joko Widodo dalam rangka meningkatkan kesejahteraan petani. Program tersebut dapat terjadi karena Presiden menerbitkan Perpres 61 Tahun 2015 dan berdirinya BPDP-KS. Selama negara ini berdiri, belum ada kebijakan strategis seperti itu,&quot; tegas dia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Gulat juga membantah pernyataan yang menyebut jika pungutan ekspor menjadi biang keladi turunnya harga tandan buah segar (TBS) sawit petani belakangan ini. Itu sebabnya, pungutan ekspor perlu diberlakukan kembali walaupun besarannya perlu disesuaikan.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Sebab lagi-lagi saya katakan, PE (pungutan ekspor) tidak ada kaitannya dengan penurunan harga TBS petani,&quot; kata dia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber : <em>Liputan6</em></p>\r\n', 'Kemendikbud akan melaksanakan sertifikasi keahlian bagi guru produktif dan tenaga kependidikan di SMK ', 'Rabu', '2019-07-03', '12:43:37', '10464962221.jpg', 3, 'hukum,metropolitan,nasional', 'Y'),
(6, 61, 'admin', 'Arab Saudi Tergoda Prestasi Indonesia', 'Berita Internasional', '', 'arab-saudi-tergoda-prestasi-indonesia', 'N', 'N', 'N', '<p><strong>Riyadh</strong>&nbsp;- Kamis besok pemerintah Arab Saudi akan menandatangani MoU digital collaboration dengan Indonesia. Bukan tanpa alasan Arab Saudi mengajak Indonesia kolaborasi digital. Rupanya Arab Saudi terkesan dengan prestasi dan perkembangan digitalisasi di Indonesia.</p>\r\n\r\n<p><br />\r\nMoU kolaborasi digital ini bakal diteken oleh Minister of Communication and Information Technology Kerajaan Arab Saudi Abdullah Alswaha dan&nbsp;<a href=\"https://www.detik.com/tag/menkominfo/?_ga=2.198432495.1133044007.1561944123-1267917328.1560476457\" target=\"_blank\">Menkominfo Rudiantara</a>&nbsp;di Riyadh, Arab Saudi, Kamis (4/7/2019).</p>\r\n\r\n<p><br />\r\nKenapa Indonesia yang dipilih untuk diajak kolaborasi? Ternyata Indonesia dinilai sebagai ekosistem yang tepat untuk ekonomi digital, sebagai rumah bagi 4 dari 10 startup unicorn di Asia Tenggara. Saat ini, Indonesia memiliki visi untuk menjadi episentrum dari ekonomi digital di Asia pada 2020, sedangkan Arab Saudi sebagai sesama negara Asia juga memiliki visi untuk mendiversifikasi perekonomiannya pada 2030 agar tak lagi bergantung pada industri minyak.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Seiring dengan adanya kesamaan visi dan beberapa aspek kebijakan digital yang selaras antara Indonesia dan Arab Saudi, kedua negara pun sepakat untuk melakukan kolaborasi digital.<br />\r\n<br />\r\nSeperti presentasi dari pihak Minister of Communication and Information Technology Kerajaan Arab Saudi, sebagai negara yang masih fokus pada ekonomi di sektor minyak, visi 2030 Arab Saudi ingin memberikan perhatian pada tumbuhnya wirausaha berbasis ekonomi digital sehingga mampu berkontribusi pada ekonomi non-minyak dan mendorong terciptanya lapangan kerja baru. Hal ini didukung dengan potensi anak muda Arab Saudi yang berpendidikan, serta penetrasi internet yang mencapai 76% dan penetrasi mobile mencapai 137%.<br />\r\n<br />\r\nPemerintah Arab Saudi memberikan perhatian pada keberhasilan pemerintah Indonesia yang dalam kurun waktu kurang dari 4 tahun, mampu membangun ekosistem digital dan memanfaatkan pertumbuhan pasar domestik untuk tumbuhnya 4 unicorn. Arab Saudi ingin belajar dari pengalaman Indonesia untuk memanfaatkan potensi digital melalui kolaborasi dua negara.<br />\r\n<br />\r\nPemerintah Arab Saudi juga terkesan dengan posisi Indonesia yang dalam waktu kurang dari 4 tahun telah menjadi &#39;tanah air&#39; untuk 3 unicorn (Traveloka, Tokopedia dan BukaLapak) plus satu decacorn (GoJek). Indonesia juga tercatat sebagai ekonomi terbesar di Asia Tenggara dan menempati urutan ke-16 di dunia (berdasarkan nominal GDP).<br />\r\n<br />\r\nKementerian Komunikasi dan Informatika Republik Indonesia sendiri menjadi partner yang strategis karena telah menjalankan Gerakan Nasional 1.000 Startup Digital (2016-2020) yang sejak diluncurkan telah berhasil mendapatkan 40.000 pendaftar, yang disaring ke 8.000 startup terpilih. Program ini mencakup pembangunan kapasitas, pendampingan dan inkubasi untuk 200 startup digital berbagai kota di Indonesia per tahunnya, sehingga akan mencapai 1000 startup pada akhir program ini di 2020.<br />\r\n<br />\r\nInisiatif-inisiatif ini, turut mendukung Indonesia menjadi negara dengan internet economy terbesar di Asia Tenggara (dengan capaian 27 miliar dollar USD) dan pertumbuhan terpesat (49% per tahunnya).<br />\r\n<strong>(van/knv)</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sumber : <em>Detik.com</em></p>\r\n', 'Dok Kemenkominfo', 'Rabu', '2019-07-03', '12:47:54', 'd685a592-ebca-471e-b610-f914132c1961_169.jpg', 9, 'internasional,teknologi,metropolitan,nasional', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_sertifikat`
--

CREATE TABLE `daftar_sertifikat` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cert_ind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_client_ind` int(200) UNSIGNED NOT NULL,
  `type_iso` tinyint(4) NOT NULL COMMENT '1=Hotel, 2=APW-BPW, 3=Disko, 4=Klab Mlm, 5= Standar Restoran',
  `hotel_start` tinyint(11) DEFAULT NULL,
  `certificate_date` date NOT NULL,
  `expiration_date` date NOT NULL,
  `created_by` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1=>Approved, 2=>Suspend, 3=>Withdraw, 4=>Hide',
  `additional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `daftar_sertifikat`
--

INSERT INTO `daftar_sertifikat` (`id`, `id_cert_ind`, `id_client_ind`, `type_iso`, `hotel_start`, `certificate_date`, `expiration_date`, `created_by`, `status`, `additional`, `created_at`, `updated_at`) VALUES
(18, 'ERA-JPW26', 26, 2, 0, '2019-07-22', '2022-07-21', 0, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `download`
--

CREATE TABLE `download` (
  `id_download` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama_file` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `hits` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `download`
--

INSERT INTO `download` (`id_download`, `judul`, `nama_file`, `tgl_posting`, `hits`) VALUES
(1, 'Portofolio Project', '1.png', '2010-01-01', 2),
(2, 'Percobaan PDF', 'lamaran.pdf', '2018-10-17', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `email`
--

CREATE TABLE `email` (
  `id_email` int(11) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `email`
--

INSERT INTO `email` (`id_email`, `email`) VALUES
(1, ''),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(5) NOT NULL,
  `id_album` int(5) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `jdl_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gallery_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_gallery` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `id_album`, `username`, `jdl_gallery`, `gallery_seo`, `keterangan`, `gbr_gallery`) VALUES
(238, 30, 'admin', 'Lautan Penonton', 'lautan-penonton', 'Lebih kurang dari 50.000 penonton yang memadati Stadion Gelora Bung Karno menyaksikan aksi Kantata Barock.\r\n', ''),
(237, 30, 'admin', 'Mengenang WS. Rendra', 'mengenang-ws-rendra', 'Konser didedikasikan buat salah satu anggota Kantata Takwa, WS. Rendra. Suasana kemeriahan para artis pendukung.\r\n', ''),
(240, 31, 'admin', 'Doa Bersamaaa', 'doa-bersamaaa', '<p>Mengingat agresi yang militer yang dilancarkan Israel merupakan pelanggaran hukum humaniter internasional. Menyusul banyak warga sipil yang telah menjadi korban akibat pertempuran yang dilakukan Israel dan Hamas. Sebelumnya, Sekretaris Jendral Perserikatan Bangsa - Bangsa (PBB) Ban Ki-moon dan Menteri Luar Negeri Amerika Serikat (AS) John Kerry melakukan pertemuan di Kairo, Mesir. Pertemuan di bertujuan untuk mendesak agar konflik yang terjadi di Gaza segera dihentikan.cbcvb</p>\r\n', ''),
(239, 30, 'admin', 'Semangat Kantata', 'semangat-kantata', '<p>Semangat para macan-macan tua Kantata, seolah mmemberi penyadaran baru dan bagai api yang tak pernah padam.</p>\r\n', 'Jellyfish.jpg'),
(236, 30, 'admin', 'Iwan Fals', 'iwan-fals', 'Iwan Fals yang tergabung dalam Kantata Barock bersama Setiawan Djodi dan Sawong Jabo menghibur penggemarnya di GBK.\r\n', ''),
(235, 30, 'admin', 'Iwan dan Oemar Bakrie', 'iwan-dan-oemar-bakrie', 'Aksi penonton yang mirip dengan Iwan Fals dan sang guru Oemar Bakrie\r\n', ''),
(234, 30, 'admin', 'Bento...Bento..!!', 'bentobento', 'Bento...Bento...Bentok...!! ....Asyikkk... begitu teriak Setiawan Djody dan Sawung Jabo yang ikuti ribuan penonton.\r\n', ''),
(232, 29, 'admin', 'Karpet Raksasa dari Bunga 008', 'karpet-raksasa-dari-bunga-008', '', ''),
(233, 30, 'admin', 'Sujud Syukur', 'sujud-syukur', 'Seluruh awak Kantata Barock melakukan sujud syukur di penghujung acara.<br />\r\n', ''),
(231, 29, 'admin', 'Karpet Raksasa dari Bunga 007', 'karpet-raksasa-dari-bunga-007', '', ''),
(230, 29, 'admin', 'Karpet Raksasa dari Bunga 006', 'karpet-raksasa-dari-bunga-006', '', ''),
(229, 29, 'admin', 'Karpet Raksasa dari Bunga 005', 'karpet-raksasa-dari-bunga-005', '', ''),
(228, 29, 'admin', 'Karpet Raksasa dari Bunga 004', 'karpet-raksasa-dari-bunga-004', '', ''),
(227, 29, 'admin', 'Karpet Raksasa dari Bunga 003', 'karpet-raksasa-dari-bunga-003', '', ''),
(225, 29, 'admin', 'Karpet Raksasa dari Bunga 001', 'karpet-raksasa-dari-bunga-001', '', ''),
(226, 29, 'admin', 'Karpet Raksasa dari Bunga 002', 'karpet-raksasa-dari-bunga-002', '', ''),
(224, 28, 'admin', 'Favorit', 'favorit', 'Mainan adalah barang favorit yang senantiasa diburu para pembeli. Selain murah, pilihannya pun berbagai jenis.\r\n', ''),
(223, 28, 'admin', 'Suasana Pasar Asemka', 'suasana-pasar-asemka', 'Pasar Asemka, Jakarta, merupakan pasar grosir yang banyak menyediakan berbagai aksesoris seperti kalung, cincin, Souvenir pernakahan, dan lainnya. Di Pasara Asemka anda akan dimanjakan dengan beragam barang yang dibandrol dengan harga murah meriah dan biasanya dijual grosiran.<br />\r\n', ''),
(222, 28, 'admin', 'Petasan', 'petasan', 'Petasan aneka jenis juga dijajakan di Pasar Asemka, Jakarta.\r\n', ''),
(221, 28, 'admin', 'Merah Marun', 'merah-marun', 'Salah satu suvenir pernikahan nan cantik yang dijual di Pasar Asemka, Jakarta.\r\n', ''),
(220, 28, 'admin', 'Menata Cincin', 'menata-cincin', 'Seorang pedagang cincin aksesoris sedang merapihkan letak cincin agar lebih menarik di Pasar Asemka, Jakarta.\r\n', ''),
(219, 28, 'admin', 'Suvenir', 'suvenir', 'Aneka Souvenir Pernikahan yang dijual di Pasar Asemka, Jakarta.\r\n', ''),
(218, 28, 'admin', 'Seorang Wanita Pedagang', 'seorang-wanita-pedagang', 'Seorang wanita sedang menunggu kios aksesorisnya.\r\n', ''),
(217, 28, 'admin', 'Suasana Pasar', 'suasana-pasar', 'Suasana di Pasar Asemka yang senantiasa ramai. Dan pengunjung bebas memilih berbagai jenis aksesoris.\r\n', ''),
(216, 28, 'admin', 'Pedagang', 'pedagang', 'Seorang pedagang sedang membungkus souvenir penikahan yang akan dijual ataupun pesanan dari pelanggangnnya.\r\n', ''),
(254, 1, 'admin', 'Screenshot 1 ', 'screenshot-1-', 'Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 Screenshot 1 ', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `halamanstatis`
--

CREATE TABLE `halamanstatis` (
  `id_halaman` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `judul_seo` varchar(100) NOT NULL,
  `isi_halaman` text NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  `jam` time NOT NULL,
  `hari` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `halamanstatis`
--

INSERT INTO `halamanstatis` (`id_halaman`, `judul`, `judul_seo`, `isi_halaman`, `tgl_posting`, `gambar`, `username`, `dibaca`, `jam`, `hari`) VALUES
(53, 'Tentang Kami', 'tentang-kami', '<p>Mbaturi Konsultan adalah Lembaga Pelatihan, Konsultan Manajemen dan Konsultan tepercaya yang berkomitmen untuk membantu perusahaan atau organisasi di semua bidang dalam meningkatkan sistem manajemen dan sumber daya manusia.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-lg-6 history-text\">\r\n<div class=\"left style3 title-section\">\r\n<h1>Visi</h1>\r\n</div>\r\n\r\n<p>Menjadi konsultan yang dipercaya oleh pelanggan dan terus berinovasi dalam pengembangan sistem dan berkomitmen untuk selalu melakukan perbaikan berkelanjutan.</p>\r\n\r\n<div class=\"left style3 title-section\">\r\n<h1>Misi</h1>\r\n</div>\r\n\r\n<p>Sebagai mitra dalam upaya meningkatkan nilai perusahaan / organisasi pelanggan.</p>\r\n</div>\r\n</div>\r\n</div>\r\n', '2018-07-07', 'office1.jpg', 'admin', 135, '15:35:59', 'Sabtu'),
(54, 'Karir', 'karir', '<p><span style=\"font-size:28px\">Coming Soon</span></p>\r\n', '2019-06-25', '', 'admin', 7, '13:23:18', 'Selasa'),
(56, 'Verifikasi Sertifikat', 'verifikasi-sertifikat', '<section class=\"flat-row project-single\">\r\n        <div class=\"container\">\r\n            <div class=\"row\">\r\n                <div class=\"col-lg-6\">\r\n                    <div class=\"single-post\">\r\n                        <div class=\"single-text1\">\r\n                            <h2>Sekilas info verifikasi sertifikasi</h2>\r\n                            <p>Setiap sertifikat yang dikeluarkan oleh Lembaga terkait baik itu sertifikasi ISO maupun sertifikasi lainnya seluruhnya memiliki nomer seri sertifikat yang bisa di cek keabsahannya. Masukkan saja nama peserta dan nomor sertifikat untuk memulai verifikasinya. Jika Anda merasa telah melakukan sertifikasi dan mendapatkan sertifikat dari Lembaga terkait namun tidak terdata nomer serinya di veritifkasi sertifikasi ini. Silahkan kontak ke data berikut :</p>\r\n                            <div class=\"project-info\">\r\n                                <h4>Kontak Pelayanan</h4>\r\n                                <ul>\r\n                                    <li><span class=\"name\">Nama</span>:<span class=\"info\">Arief N.R</span></li>\r\n                                    <li><span class=\"name\">Email</span>:<span class=\"info\">arepmain@gmail.com</span></li>\r\n                                    <li><span class=\"name\">No. Hp</span>:<span class=\"info\">0812-1407-1941</span></li>\r\n                                    <li><span class=\"name\">No. WA</span>:<span class=\"info\">0812-1407-1941</span></li>\r\n                                </ul>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div><!-- /.col-md-6 --> \r\n                <div class=\"col-lg-6\">\r\n                    <div class=\"featured-single\">\r\n                        <h4>Ayo Verifikasi Sertifikatmu</h4>\r\n                        <form action=\"./contact/contact-process.php\" id=\"contactform\" method=\"post\">\r\n                            <input name=\"nama_peserta\" required=\"required\" type=\"text\" placeholder=\"Nama Peserta*\" /><br> \r\n                            <input name=\"nomor_cert\" required=\"required\" type=\"text\" placeholder=\"Nomor Sertifikat*\" /> <span class=\"flat-input\"><br>\r\n<!--                                 <button name=\"submit\" type=\"submit\" class=\"flat-button\" id=\"submit\" title=\"Submit now\" onclick=\"myFunction()\">send messages</form> -->\r\n                                <button data-toggle=\"modal\" data-target=\"#myModal\">send messages</form>\r\n                    </div>\r\n                </div><!-- /.col-md-6 --> \r\n            </div><!-- /.row -->        \r\n        </div><!-- /.container -->   \r\n    </section>\r\n\r\n    <!-- Modal -->\r\n<div id=\"myModal\" class=\"modal fade\" role=\"dialog\">\r\n  <div class=\"modal-dialog\">\r\n\r\n    <!-- Modal content-->\r\n    <div class=\"modal-content\">\r\n      <div class=\"modal-header\">\r\n        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>\r\n        <h4 class=\"modal-title\">Data Sertifikat</h4>\r\n      </div>\r\n      <div class=\"modal-body\">\r\n        <table style=\"width:100%\">\r\n        <tbody>\r\n                <tr>\r\n                    <td width=\"30%\"><strong>Nama Perusahaan</strong></td>\r\n                    <td width=\"2%\">: &nbsp;</td>\r\n                    <td width=\"78%\">PT. FATUHA AMANAH WISATA INSANI</td>\r\n                </tr>\r\n                <tr style=\"height: 15px;\">\r\n                    <td style=\"height: 15px;\"><strong>Scope</strong></td>\r\n                    <td style=\"height: 15px;\">: &nbsp;</td>\r\n                    <td style=\"height: 15px;\">Biro Perjalanan Wisata</td>\r\n                </tr>\r\n                <tr style=\"height: 15px;\">\r\n                    <td style=\"height: 15px;\"><strong>Alamat &nbsp;</strong></td>\r\n                    <td style=\"height: 15px;\">: &nbsp;</td>\r\n                    <td style=\"height: 15px;\">Jl. Kawaluyaan Indah XI No. 20, Kel. Jatisari, Kec. Buah  BatuBatu, Prov Jawa Barat 40286 - Indonesia</td>\r\n                </tr>\r\n            </tbody>\r\n        </table>\r\n      </div>\r\n      <div class=\"modal-footer\">\r\n        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>\r\n      </div>\r\n    </div>\r\n\r\n  </div>\r\n</div> \r\n', '2019-07-22', '', 'admin', 27, '09:48:50', 'Senin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `header`
--

CREATE TABLE `header` (
  `id_header` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `subheading` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `button1` varchar(40) NOT NULL,
  `url_button1` varchar(100) NOT NULL,
  `buton2` varchar(40) NOT NULL,
  `url_button2` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `header`
--

INSERT INTO `header` (`id_header`, `heading`, `subheading`, `keterangan`, `button1`, `url_button1`, `buton2`, `url_button2`, `gambar`) VALUES
(1, 'KONSULTAN <span>KELISTRIKAN</span>\r\n', 'PELAYANAN <span>KAMI</span>', '<span>TENAGA</span> LISTRIK', 'Pelayanan Kami', 'service/konsultan-kelistrikan', 'Tentang Kami', 'hubungi', 'listrik.jpg'),
(2, 'KONSULTAN <span>SMK3</span>', 'PELAYANAN <span>KAMI</span>', '<span>SISTEM MANAJEMEN</span> K3', 'Pelayanan Kami', 'service/konsultan-smk3', 'Tentang Kami', 'hubungi', 'smk3.jpg'),
(3, 'KONSULTAN <span>ISO</span>', 'PELAYANAN <span>KAMI</span>', '<span>SISTEM</span> MANAJEMEN', 'Pelayanan Kami', 'service/konsultan-iso', 'Tentang Kami', 'hubungi', 'iso.jpg'),
(4, 'KONSULTAN <span>SBU</span>', 'PELAYANAN <span>KAMI</span>', '<span>SERTIFIKASI</span> BADAN USAHA', 'Pelayanan Kami', 'service/konsultan-sertifikat-badan-usaha', 'Tentang Kami', 'hubungi', 'SBU.jpg'),
(5, 'KONSULTAN <span>PJK3</span>', 'PELAYANAN <span>KAMI</span>', '<span>SERTIFIKASI</span> PJK3', 'Pelayanan Kami', 'service/konsultan-pjk3', 'Tentang Kami', 'hubungi', 'K3_22.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homepage`
--

CREATE TABLE `homepage` (
  `id_homepage` int(11) NOT NULL,
  `layar1_headline` varchar(100) NOT NULL,
  `layar1_keterangan` text NOT NULL,
  `layar2_headline` varchar(100) NOT NULL,
  `layar2_keterangan` text NOT NULL,
  `layar3_keterangan` text NOT NULL,
  `layar4_keterangan` text NOT NULL,
  `header_judul` varchar(50) NOT NULL,
  `header_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `homepage`
--

INSERT INTO `homepage` (`id_homepage`, `layar1_headline`, `layar1_keterangan`, `layar2_headline`, `layar2_keterangan`, `layar3_keterangan`, `layar4_keterangan`, `header_judul`, `header_url`) VALUES
(1, 'Profile <span>Kami</span>', 'Mbaturi Konsultan adalah Lembaga Pelatihan, Konsultan Manajemen dan Konsultan tepercaya yang berkomitmen untuk membantu perusahaan atau organisasi di semua bidang dalam meningkatkan sistem manajemen dan sumber daya manusia.', 'Project Kami', 'Kami di sini untuk Mempercepat bisnis Anda dan membantu Anda menemukan jalannya.', ' <b class=\"is-visible\"> Love Client</b>\r\n <b>Happy Client</b>\r\n <b>Choice Client</b>\r\n <b>Believe Client</b>\r\n', 'Menjadi konsultan yang dipercaya oleh pelanggan dan terus berinovasi dalam pengembangan sistem dan berkomitmen untuk selalu melakukan perbaikan terus menerus', 'Kontak Kami', '#');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(5) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `subjek` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `dibaca` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `subjek`, `pesan`, `tanggal`, `jam`, `dibaca`) VALUES
(39, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', '::1', 'Kami memiliki komitmen untuk memberikan layanan terbaik kepada Anda dan selalu berusaha untuk menyediakan produk dan layanan terbaik yang Anda butuhkan. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami, Anda dapat menyampaikan kritik dan saran Anda kepada kami. Kami akan menidaklanjuti masukan yang Anda berikan dan bila perlu mengambil tindakan untuk mencegah masalah yang sama terulang kembali.', '2017-01-23', '21:56:12', 'Y'),
(35, 'yusri renor', 'aciafifah@gmail.com', 'pertanyaan', 'bagaimana cara mengunduh nomor ujian fak. pertanian', '2014-01-19', '00:00:00', 'Y'),
(36, 'Lusi Rahmawati', 'robby.prihandaya@gmail.com', 'xvgxcvxc', 'gbvibviubuibiub', '2014-07-02', '00:00:00', 'Y'),
(38, 'Udin Sedunia', 'udin.sedunia@gmail.com', 'Ip Pengirim : 120.177.28.244', 'Silahkan menghubungi kami melalui private message melalui form yang berada pada bagian kanan halaman ini. Kritik dan saran Anda sangat penting bagi kami untuk terus meningkatkan kualitas produk dan layanan yang kami berikan kepada Anda.', '2015-06-02', '00:00:00', 'Y'),
(40, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', '::1', 'Kami memiliki komitmen untuk memberikan layanan terbaik kepada Anda dan selalu berusaha untuk menyediakan produk dan layanan terbaik yang Anda butuhkan. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami, Anda dapat menyampaikan kritik dan saran Anda kepada kami. Kami akan menidaklanjuti masukan yang Anda berikan dan bila perlu mengambil tindakan untuk mencegah masalah yang sama terulang kembali.', '2017-01-25', '09:54:45', 'Y'),
(41, 'Robby Prihandaya', 'todaynews.co.id@gmail.coms', '::1', 'asdasdasd', '2018-05-04', '19:33:01', 'Y'),
(42, 'prabowosh', 'prabowosh@gmailcom.com', '::1', 'aloralksjdlkajsldkjaslkdjaskljj', '2018-07-04', '18:36:49', 'N'),
(43, 'beautyiir', 'beauty@gmail.com', '::1', 'lorem ipsume dolor set', '2018-07-04', '18:37:42', 'Y'),
(44, 'asdasd', 'asdad', '::1', 'asdsad', '2018-07-04', '18:46:00', 'N'),
(45, '123123', '123123', '::1', '123123123', '2018-07-04', '18:48:06', 'Y'),
(46, 'Arep', 'areptumpang@gmail.com', '::1', 'Test Massage', '2019-07-22', '11:49:15', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(5) NOT NULL,
  `nama_website` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `facebook` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `rekening` varchar(100) NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `meta_deskripsi` varchar(250) NOT NULL,
  `meta_keyword` varchar(250) NOT NULL,
  `favicon` varchar(50) NOT NULL,
  `maps` text NOT NULL,
  `alamat` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `email`, `url`, `facebook`, `rekening`, `no_telp`, `meta_deskripsi`, `meta_keyword`, `favicon`, `maps`, `alamat`) VALUES
(1, 'Mbaturi Konsultan', 'mbaturi.consultant@gmail.com', 'http://localhost/mbaturi', '#', '3511887071', '6281212771926', 'Pelatihan dan Konsultasi', '', 'mbaturi_circle.png', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9432.91495752318!2d106.96877781458473!3d-6.256855921672153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd49ef84b0498a81d!2sGrand+Galaxi+City!5e0!3m2!1sid!2sid!4v1519194757962', 'Grand Galaxy City, Rukan Blok RSNB No. 12, Bekasi Selatan 17147');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklanatas`
--

CREATE TABLE `iklanatas` (
  `id_iklanatas` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `iklanatas`
--

INSERT INTO `iklanatas` (`id_iklanatas`, `judul`, `username`, `url`, `gambar`, `tgl_posting`) VALUES
(1, 'Jasa Pembuatan Website murah', 'admin', 'http://phpmu.com', 'atas.jpg', '2017-01-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `iklantengah`
--

CREATE TABLE `iklantengah` (
  `id_iklantengah` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `iklantengah`
--

INSERT INTO `iklantengah` (`id_iklantengah`, `judul`, `username`, `url`, `gambar`, `tgl_posting`) VALUES
(1, 'Iklan Home No 1', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-17'),
(2, 'Iklan Home No 2', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-17'),
(3, 'Iklan Home No 3', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-17'),
(4, 'Iklan Bawah Detail Berita', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-17'),
(5, 'Iklan dibawah Detail Video', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-18'),
(6, 'Iklan dibawah Detail Berita Foto', 'admin', 'http://phpmu.com', 'home.swf', '2015-03-19'),
(7, 'Iklan dibawah Halaman Download', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-17'),
(8, 'Iklan dibawah detail agenda', 'admin', 'http://phpmu.com', 'home.jpg', '2015-03-21'),
(9, 'Iklan dibawah halaman statis', 'admin', 'http://phpmu.com', '', '2015-03-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `image_project`
--

CREATE TABLE `image_project` (
  `id_image` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `image_project`
--

INSERT INTO `image_project` (`id_image`, `id_project`, `image`) VALUES
(24, 7, 'Lighthouse2.jpg'),
(25, 7, 'Hydrangeas.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katajelek`
--

CREATE TABLE `katajelek` (
  `id_jelek` int(11) NOT NULL,
  `kata` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ganti` varchar(60) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `katajelek`
--

INSERT INTO `katajelek` (`id_jelek`, `kata`, `username`, `ganti`) VALUES
(4, 'sex', '', 's**'),
(2, 'bajingan', '', 'b*******'),
(3, 'bangsat', '', 'b******'),
(5, 'fuck', 'admin', 'f**k'),
(6, 'pantat', 'admin', 'p****t');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `kategori_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `sidebar` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `username`, `kategori_seo`, `aktif`, `sidebar`) VALUES
(64, 'Bisnis', 'admin', 'bisnis', 'Y', 4),
(63, 'ISO', 'admin', 'iso', 'Y', 3),
(62, 'Teknologi', 'admin', 'teknologi', 'Y', 2),
(61, 'K3', 'admin', 'k3', 'Y', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien_list`
--

CREATE TABLE `klien_list` (
  `id_client_ind` int(11) NOT NULL,
  `client_name_id` varchar(50) DEFAULT NULL,
  `main_site` varchar(50) DEFAULT NULL,
  `other_site` varchar(50) DEFAULT NULL,
  `scope` varchar(50) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  `Id_token` varchar(50) DEFAULT NULL,
  `kode_strukturorganisasi` int(11) DEFAULT NULL,
  `status_client` tinyint(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klien_list`
--

INSERT INTO `klien_list` (`id_client_ind`, `client_name_id`, `main_site`, `other_site`, `scope`, `logo`, `Id_token`, `kode_strukturorganisasi`, `status_client`, `created_by`, `created_at`, `updated_at`) VALUES
(25, 'PT. Era Kualitas Indonesia', 'Bekasi', NULL, 'Pariwisata', NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(5) NOT NULL,
  `id_berita` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_berita`, `nama_komentar`, `url`, `isi_komentar`, `tgl`, `jam_komentar`, `aktif`, `email`) VALUES
(84, 650, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Nice  story, Roy suryo dan Susilo bambang yudhoyono memang cucak rowo. :)   ', '2012-01-05', '00:15:45', 'N', 'robby.prihandaya@gmail.com'),
(88, 650, 'Udin Sedunia', 'www.belajarkonseling.com', ' hm...  kae.x  perlu  juga  ne  bantuan  dari  para  konselor...:)		   ', '2012-01-13', '20:09:07', 'Y', 'www.belajarkonseling.com'),
(90, 650, 'Rizal Faizal', 'www.rizal-online.co.cc', ' asyik  aja  dehh...   ', '2012-02-25', '15:01:40', 'Y', 'www.rizal-online.co.cc'),
(91, 645, 'Eka Praja W', 'komputerkampus.com', ' makin  parah  aja  nih  ...\r\nmudah2n  bisa  berbenah  negeri  ku  yg  q  banggakan   ', '2012-03-08', '20:06:07', 'Y', 'komputerkampus.com'),
(137, 650, 'Lukmanul Hakim', '', ' saya  yakin  PHP  juga  bisa  bertahan  sampai  2030   ', '2013-01-19', '18:56:25', 'Y', 'lukmanul.haskim@gmai;.com'),
(146, 645, 'Tommy Utama', 'tommy.utama@gmail.com', ' Calon  hakim  agung  Muhammad  Daming  Sanusi  menyatakan,  hukuman  mati  tidak  layak  diberlakukan  bagi  pelaku  pemerkosaan.   ', '2014-07-21', '21:03:04', 'Y', 'tommy.utama@gmail.com'),
(147, 655, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Mudah-mudahan  windows  8.2  tampilannya  lebih  keren  lagi  dari  windows  8.1 sebelumnya  yang  kurang  enak  di gunakan.  heheheee   ', '2014-07-22', '08:33:04', 'Y', 'robby.prihandaya@gmail.com'),
(144, 650, 'Tommy Utama', 'tommy.utama@gmail.com', 'Pengamat  politik  dari  Charta  Politika,  Yunarto  Wijaya  mempertanyakan  dasar  keputusan  SBY  menunjuk  Roy  Suryo  sebagai  Menpora.   ', '2014-07-21', '20:59:16', 'Y', 'tommy.utama@gmail.com'),
(143, 650, 'Udin Sedunia', 'udin.sedunia@gmail.com', 'Menurut  Yunarto,  Roy  selama  ini  lebih  dikenal  sebagai  pakar  foto  digital  dan  video  serta  dosen  di  sebuah  perguruan  tinggi  negeri.   ', '2014-07-21', '20:57:52', 'Y', 'udin.sedunia@gmail.com'),
(148, 662, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'pantat negara yahudi yang sangat perlu untuk dihancurkan /  musnahkan  dan  bantai  seluruh  warga israel..!!!   ', '2014-07-24', '09:29:20', 'Y', 'robby.prihandaya@gmail.com'),
(149, 662, 'Edo Ikfianda', 'edomuhammad90@gmail.com', 'Setelah membentuk Timnas, PSSI versi KLB pimpinan La Nyalla Mahmud Matalitti menunjuk Alfred Riedl sebagai pelatihnya.', '2014-08-09', '17:34:35', 'Y', 'edomuhammad90@gmail.com'),
(152, 650, 'Dewi Safitriir', 'dewi_safitri@gmail.com', 'Peremimpin  tertinggi  Iran,  Ayatollah  Ali  Khamenei  menyampaikan  pernyataan  kontroversial  terkait  ketegangan  di  Gaza.Israele.   ', '2014-08-17', '17:46:28', 'N', 'dewi_safitri@gmail.com'),
(153, 662, 'Robby Prihandaya', 'ww.phpmu.com', 'Anda penyuka Transformer? Tentu hal yang paling menarik saat menonton film Transformer salah satunya adalah saat adegan transformasi yang begitu keren dari sebuah mobil atau truk menjadi robot yang gagah.\r\n\r\nAnda penyuka Transformer? Tentu hal yang paling menarik saat menonton film Transformer salah satunya adalah saat adegan transformasi yang begitu keren dari sebuah mobil atau truk menjadi robot yang gagah.', '2015-03-25', '06:10:12', 'Y', 'robby.prihandaya@gmail.com'),
(154, 642, 'Tommy Utama', 'tommyutama.com', ' Para  pengunjuk  rasa  membawa  bendera-bendera  Palestina  dan  foro-foto  pemimpin  tertinggi  Iran,  Ayatollah  Ali  Khamenei.   ', '2016-11-24', '10:24:15', 'Y', 'tommy.utama@gmail.com'),
(164, 656, 'Robby Prihandaya', 'https://phpmu.com', 'Komentar paling pedas Khamenei adalah Iran tidak pernah mengenal Israel. Negara ini juga secara terang-terangan mendukung Hamas. Hamas sendiri sudah dimasukan ke dalam daftar hitam terorisme oleh Israel.', '2018-04-20', '10:41:54', 'Y', 'robby.prihandaya@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentarvid`
--

CREATE TABLE `komentarvid` (
  `id_komentar` int(5) NOT NULL,
  `id_video` int(5) NOT NULL,
  `nama_komentar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `tgl` date NOT NULL,
  `jam_komentar` time NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `komentarvid`
--

INSERT INTO `komentarvid` (`id_komentar`, `id_video`, `nama_komentar`, `url`, `isi_komentar`, `tgl`, `jam_komentar`, `aktif`) VALUES
(107, 160, 'Prabowo Subianto', 'Prabowo@gmail.com', ' Your  email  address  will  not  be  published.  Required  fields  are  marked', '2014-07-21', '13:29:29', 'N'),
(108, 163, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', ' Kita  memang  harus  selamatkan  hutan  indonesia,  walau  apapun  yang  terjadi.   ', '2014-07-21', '13:31:10', 'Y'),
(109, 160, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', ' Swarakalibata  V.3 sekarang  hadir  dengan  tampilan  baru  yang  pastinya  sudah  jauh  lebih  maju  dari  versi  sebelumnya.', '2014-07-21', '21:09:31', 'Y'),
(112, 166, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Exclusive Di IDAFF Acedemy - &quot;Social Blogging Mastery 2&quot; - Workshop 2 Hari Yang Akan Merubah Hidup Anda Di Tahun 2017. Di Bongkar Oleh Ahlinya Cara Paling Mudah Memiliki Penghasillan Sampingan Lewat Internet Hingga Jutaan Rupiah Setiap Bulannya.', '2017-01-25', '09:40:01', 'Y'),
(113, 166, 'Dewiit Safitri', 'dewiit.safitri@gmail.com', 'Pemimpin tertinggi Iran, Ayatollah Ali Khamenei menyampaikan pernyataan kontroversial terkait ketegangan di Gaza. Khamenei mendorong agar Palestina terus melawan Israel. &quot;Salah satu cara untuk menghentikan rezim kurang ajar ini adalah melanjutkan perlawanan dan dan perjuangan bersenjata harus diperluas ke Tepi Barat,&quot; sebut Khamenei, seperti dikutip dari IRNA.', '2017-01-25', '09:40:55', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id_logo` int(5) NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id_logo`, `gambar`) VALUES
(15, 'mbaturi2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(5) NOT NULL,
  `id_parent` int(5) NOT NULL DEFAULT '0',
  `nama_menu` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `aktif` enum('Ya','Tidak') NOT NULL DEFAULT 'Ya',
  `position` enum('Top','Bottom') DEFAULT 'Bottom',
  `urutan` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `id_parent`, `nama_menu`, `link`, `aktif`, `position`, `urutan`) VALUES
(156, 0, 'Karir', 'halaman/karir', 'Tidak', 'Top', 8),
(133, 0, 'Layanan', 'service', 'Ya', 'Bottom', 3),
(132, 0, 'Profil', 'halaman/tentang-kami', 'Ya', 'Bottom', 2),
(136, 0, 'Unduhan', 'download', 'Tidak', 'Bottom', 7),
(137, 0, 'Hubungi Kami', 'hubungi', 'Ya', 'Bottom', 6),
(135, 0, 'Berita', 'berita', 'Ya', 'Bottom', 5),
(130, 0, 'Beranda', '', 'Ya', 'Bottom', 1),
(157, 0, 'Training', 'training', 'Ya', 'Bottom', 3),
(158, 157, 'Pelatihan Umum', 'halaman/pelatihan-umum', 'Ya', 'Bottom', 9),
(159, 157, 'Pelatihan Regular', 'halaman/pelatihan-regular', 'Ya', 'Bottom', 10),
(160, 0, 'Sertifikasi', 'sertifikasi', 'Ya', 'Bottom', 4),
(161, 160, 'Verifikasi Sertifikat', 'halaman/verifikasi-sertifikat', 'Ya', 'Bottom', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE `modul` (
  `id_modul` int(5) NOT NULL,
  `nama_modul` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `link` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `static_content` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `publish` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `status` enum('user','admin') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'Y',
  `urutan` int(5) NOT NULL,
  `link_seo` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id_modul`, `nama_modul`, `username`, `link`, `static_content`, `gambar`, `publish`, `status`, `aktif`, `urutan`, `link_seo`) VALUES
(2, 'Manajemen User', 'admin', 'manajemenuser', '', '', 'Y', 'user', 'Y', 0, ''),
(18, 'Berita', 'admin', 'listberita', '', '', 'Y', 'user', 'Y', 0, ''),
(71, 'Background Website', 'admin', 'background', '', '', 'N', 'admin', 'N', 0, ''),
(10, 'Manajemen Modul', 'admin', 'manajemenmodul', '', '', 'Y', 'user', 'Y', 0, ''),
(31, 'Kategori Berita ', 'admin', 'kategorikategori', '', '', 'Y', 'user', 'Y', 0, ''),
(33, 'Jajak Pendapat', 'admin', 'jajakpendapat', '', '', 'Y', 'user', 'Y', 0, ''),
(34, 'Tag Berita', 'admin', 'tagberita', '', '', 'Y', 'user', 'Y', 0, ''),
(35, 'Komentar Berita', 'admin', 'komentarberita', '', '', 'Y', 'user', 'Y', 0, ''),
(41, 'Agenda', 'admin', 'agenda', '', '', 'Y', 'user', 'Y', 0, ''),
(43, 'Berita Foto', 'admin', 'album', '', '', 'Y', 'user', 'Y', 0, ''),
(44, 'Galeri Berita Foto', 'admin', 'gallery', '', '', 'Y', 'user', 'Y', 0, ''),
(45, 'Template Website', 'admin', 'templatewebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(46, 'Sensor Kata', 'admin', 'sensorkomentar', '', '', 'Y', 'user', 'Y', 0, ''),
(61, 'Identitas Website', 'admin', 'identitaswebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(57, 'Menu Website', 'admin', 'menuwebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(59, 'Halaman Baru', 'admin', 'halamanbaru', '', '', 'Y', 'user', 'Y', 0, ''),
(62, 'Video', 'admin', 'video', '', '', 'Y', 'user', 'Y', 0, ''),
(63, 'Playlist Video', 'admin', 'playlist', '', '', 'Y', 'user', 'Y', 0, ''),
(64, 'Tag Video', 'admin', 'tagvideo', '', '', 'Y', 'user', 'Y', 0, ''),
(65, 'Komentar Video', 'admin', 'komentarvideo', '', '', 'Y', 'user', 'Y', 0, ''),
(66, 'Logo Website', 'admin', 'logowebsite', '', '', 'Y', 'user', 'Y', 0, ''),
(67, 'Iklan Sidebar', 'admin', 'iklansidebar', '', '', 'N', 'admin', 'N', 0, ''),
(68, 'Iklan Home', 'admin', 'iklanhome', '', '', 'N', 'admin', 'N', 0, ''),
(69, 'Iklan Atas', 'admin', 'iklanatas', '', '', 'N', 'admin', 'N', 0, ''),
(70, 'Pesan Masuk', 'admin', 'pesanmasuk', '', '', 'Y', 'user', 'Y', 0, ''),
(72, 'Sekilas Info', 'admin', 'sekilasinfo', '', '', 'N', 'admin', 'N', 0, ''),
(73, 'Yahoo Messanger', 'admin', 'ym', '', '', 'N', 'admin', 'N', 0, ''),
(74, 'Download Area', 'admin', 'download', '', '', 'Y', 'admin', 'Y', 0, ''),
(75, 'Alamat Kontak', 'admin', 'alamat', '', '', 'Y', 'admin', 'Y', 0, ''),
(76, 'Sertifikasi', 'admin', 'sertifikasi', '', '', 'Y', 'admin', 'Y', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mod_alamat`
--

CREATE TABLE `mod_alamat` (
  `id_alamat` int(5) NOT NULL,
  `alamat` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mod_alamat`
--

INSERT INTO `mod_alamat` (`id_alamat`, `alamat`) VALUES
(1, '<strong>Haloo!</strong>, Kami berkomitmen memberikan layanan terbaik untuk Anda,&nbsp;menyediakan produk dan layanan terbaik yang Anda butuhkan. Apabila untuk alasan tertentu Anda merasa tidak puas dengan pelayanan kami dapat menyampaikan kritik dan saran.<br />\r\n<br />\r\nKami akan menidaklanjuti masukan yang Anda berikan dan bila perlu mengambil tindakan untuk mencegah masalah yang sama terulang kembali.\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mod_ym`
--

CREATE TABLE `mod_ym` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ym_icon` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasangiklan`
--

CREATE TABLE `pasangiklan` (
  `id_pasangiklan` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `url` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `pasangiklan`
--

INSERT INTO `pasangiklan` (`id_pasangiklan`, `judul`, `username`, `url`, `gambar`, `tgl_posting`) VALUES
(35, 'Banner 1', 'admin', 'http://themelokomedia.wordpress.com', '1.png', '2018-07-07'),
(36, 'Banner 2', 'admin', 'http://themelokomedia.wordpress.com', '2.png', '2018-07-07'),
(37, 'Banner 3', 'admin', 'http://themelokomedia.wordpress.com', '3.png', '2018-07-07'),
(38, 'Banner 4', 'admin', 'http://themelokomedia.wordpress.com', '4.png', '2018-07-07'),
(39, 'Banner 5', 'admin', 'http://themelokomedia.wordpress.com', '5.png', '2018-07-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id_perusahaan` int(20) NOT NULL,
  `nama_perusahaan` varchar(200) NOT NULL,
  `scope` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `logo` varchar(225) NOT NULL,
  `id_token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(5) NOT NULL,
  `jdl_playlist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `playlist_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `gbr_playlist` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `jdl_playlist`, `username`, `playlist_seo`, `gbr_playlist`, `aktif`) VALUES
(56, 'Playlist Video 1', 'admin', 'playlist-video-1', '', 'Y'),
(57, 'Playlist Video 2', 'admin', 'playlist-video-2', '', 'Y'),
(61, 'Playlist Video 4', 'admin', 'playlist-video-4', '', 'Y'),
(60, 'Playlist Video 3', 'admin', 'playlist-video-3', '', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poling`
--

CREATE TABLE `poling` (
  `id_poling` int(5) NOT NULL,
  `pilihan` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `rating` int(5) NOT NULL DEFAULT '0',
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `poling`
--

INSERT INTO `poling` (`id_poling`, `pilihan`, `status`, `username`, `rating`, `aktif`) VALUES
(18, 'Siapakah Calon Walikota dan Wakil Walikota Padang Favorit Anda?', 'Pertanyaan', 'admin', 0, 'Y'),
(25, 'Mahyeldi Ansyarullah - Emzalmi', 'Jawaban', 'admin', 25, 'Y'),
(31, 'Robby Prihandaya - Dewi Safitri', 'Jawaban', 'admin', 1, 'Y'),
(32, 'Tommy Utama - Laura Hikmah', 'Jawaban', 'admin', 3, 'Y'),
(33, 'Willy Fernando - Vicky Armita', 'Jawaban', 'admin', 9, 'Y'),
(35, 'Laura Himah i Nisaa - Safaruddin', 'Jawaban', 'admin', 5, 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `seo_judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `status` enum('A','N') NOT NULL,
  `sub_judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id_project`, `judul`, `isi`, `seo_judul`, `gambar`, `tanggal`, `status`, `sub_judul`) VALUES
(6, 'Pelatihan Permohonan Sertifikasi', '<div class=\"single-text1\">\r\n<h2>About Project</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .</p>\r\n\r\n<div class=\"project-info\">\r\n<h4>Project Infor</h4>\r\n\r\n<ul>\r\n	<li>Customer:Jason Howard</li>\r\n	<li>Date:20 Sep 2017</li>\r\n	<li>Location:Newyork , NY</li>\r\n	<li>Category:The Recurring Debate Over Concurrent</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"single-text2\">\r\n<h2>Project Analysis</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .</p>\r\n</div>\r\n\r\n<div class=\"single-text3\">\r\n<h2>Our Solution</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com-modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata</p>\r\n</div>\r\n\r\n<div class=\"single-text4\">\r\n<h2>The Result</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .</p>\r\n</div>\r\n', 'pelatihan-permohonan-sertifikasi', 's4.jpg', '2019-07-03', 'A', 'Pelatihan Sertifikasi SMK3, PJ3K, SBU, dan Kelistrikan'),
(7, 'Konsultan', '<div class=\"single-text1\">\r\n<h2>About Project</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .</p>\r\n\r\n<div class=\"project-info\">\r\n<h4>Project Infor</h4>\r\n\r\n<ul>\r\n	<li>Customer:Jason Howard</li>\r\n	<li>Date:20 Sep 2017</li>\r\n	<li>Location:Newyork , NY</li>\r\n	<li>Category:The Recurring Debate Over Concurrent</li>\r\n</ul>\r\n</div>\r\n</div>\r\n\r\n<div class=\"single-text2\">\r\n<h2>Project Analysis</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .</p>\r\n</div>\r\n\r\n<div class=\"single-text3\">\r\n<h2>Our Solution</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com-modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidata</p>\r\n</div>\r\n\r\n<div class=\"single-text4\">\r\n<h2>The Result</h2>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonum-my nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper sus-cipit lobortis nisl ut aliquip ex ea commodo consequat.Duis autem vel eum iriure .</p>\r\n</div>\r\n', 'konsultan', 's5.jpg', '2019-07-03', 'A', 'Jasa Konsultan SMK3, PJ3K, SBU, dan Kelistrikan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekilasinfo`
--

CREATE TABLE `sekilasinfo` (
  `id_sekilas` int(5) NOT NULL,
  `info` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_posting` date NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `sekilasinfo`
--

INSERT INTO `sekilasinfo` (`id_sekilas`, `info`, `tgl_posting`, `gambar`, `aktif`) VALUES
(1, 'Anak yang mengalami gangguan tidur, cenderung memakai obat2an dan alkohol berlebih saat dewasa.', '2015-04-11', '', 'Y'),
(2, 'WHO merilis, 30 persen anak di dunia kecanduan komputer dan menonton televisi.', '2015-03-16', '', 'Y'),
(3, 'Menurut peneliti di Detroit, orang yang selalu tersenyum lebar cenderung hidup lama.', '2015-04-17', '', 'Y'),
(4, 'Menurut United Stated Trade Representatives, 25% obat yang beredar di adalah palsu.', '2015-04-17', '', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `seo_judul` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `judul`, `isi`, `icon`, `seo_judul`, `gambar`, `isi_keterangan`) VALUES
(3, 'Pelatihan K3', 'Pelatihan Ahli K3, P3K, dll', 'fa fa-asterisk', 'pelatihan-k3', 'K3_3.jpg', '<h2>Pengertian K3 Secara Umum</h2>\r\n\r\n<p>Apa yang dimaksud dengan K3?&nbsp;<strong>Pengertian K3</strong>&nbsp;adalah bidang yang berhubungan dengan keselamatan, kesehatan, dan kesejahteraan manusia yang bekerja pada sebuah institusi ataupun lokasi proyek.</p>\r\n\r\n<p>Arti K3 (Keamanan, Kesehatan, dan Keselamatan Kerja) secara khusus dapat dibagi menjadi dua, yaitu:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Pengertian K3 secara keilmuan</strong>; K3 merupakan ilmu pengetahuan dan penerapannya dalam upaya mencegah terjadinya kecelakaan dan penyakit akibat kerja.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Pengertian K3 secara filosofis</strong>; suatu upaya yang dilakukan untuk memastikan keutuhan dan kesempurnaan jasmani dan rohani tenaga kerja pada khususnya, dan masyarakat pada umumnya terhadap hasil karya dan budaya menuju masyarkat adil dan makmur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Keamanan, Kesehatan, dan Keselamatan Kerja (K3) merupakan salah satu hal penting yang wajib diterapkan oleh semua perusahaan. Hal ini juga tertuang dalam Undang-Undang Ketenagakerjaan No. 13 Tahun 2003 pasal 87.</p>\r\n'),
(5, 'Konsultan Sistem Manajemen', 'Jasa Konsultan ISO dan SMK3', 'fa fa-line-chart', 'konsultan-sistem-manajemen', 'iso_2.jpg', '<p style=\"text-align:justify\">Di era globalisasi saat ini, perusahaan dituntut untuk beroperasi lebih efektif dan efisien untuk menghasilkan produk bermutu tinggi secara konsisten. Perusahaan yang mampu memenuhi tuntutan-tuntutan ini akan dapat bertahan hidup dan memenangkan persaingan global. Salah satu cara untuk menjadi perusahaan yang kompetitif adalah dengan mengikuti sistem manajemen mutu yang disarankan dalam standar ISO 9001.</p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\">Dengan didukung tenaga auditor profesional, OCS Certification berkomitmen untuk menyediakan jasa sertifikasi sistem manajemen mutu berdasarkan standar ISO 9001 secara tepat, akurat, independen, terpercaya, dan profesional.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Keuntungan ISO 9001?</p>\r\n\r\n<ol>\r\n	<li>- Memenuhi persyaratan kontraktual atau peraturan lain.</li>\r\n	<li>- Memenuhi keinginan pelanggan dan pihak berkepentingan lain.</li>\r\n	<li>- Menjamin pengembangan program kinerja organisasi.</li>\r\n	<li>- Menjamin penentuan target yang jelas untuk pengembangan sistem manajemen.</li>\r\n	<li>- Jaminan dari lembaga independen terhadap kinerja sistem manajemen.</li>\r\n	<li>- Meningkatkan citra dan daya saing.</li>\r\n	<li>- Memberikan rekomendasi perbaikan secara terus menerus.</li>\r\n</ol>\r\n'),
(6, 'Konsultan SBU', 'Jasa Konsultan Sertifikat Badan Usaha', 'fa fa-area-chart', 'konsultan-sertifikat-badan-usaha', 'SBU_2.jpg', '<p style=\"text-align:justify\">Untuk dapat mengikuti tender pengadaan jasa konstruksi di Indonesia&nbsp;setiap perusahaan asing / lokal harus memiliki Sertifikat Badan Usaha (SBU) sesuai Klasifikasi dan Kualifikasi yang terakreditasi LPJK.<br />\r\nSertifikat Badan Usaha (SBU) adalah bukti pengakuan formal tingkat Kompetensi usaha jasa pelaksana konstruksi (KONTRAKTOR) dan usaha jasa perencana konstruksi atau jasa pengawas konstruksi (KONSULTAN) sebagai perwujudan hasil Sertifikasi dan Registrasi badan usaha yang dilakukan oleh Lembaga Pengembangan Jasa Konstruksi (LPJK).</p>\r\n\r\n<p style=\"text-align:justify\">Sertifikat Badan Usaha juga menjadi acuan bagi perusahaan untuk dapat mengajukan dan mendapatkan Izin Usaha Jasa Konstruksi yang dikeluarkan oleh Pemerintah Daerah Propinsi/Kabupaten/Kotamadya atau Badan Koordinasi Penanaman Modal untuk perusahaan penanaman modal&nbsp;sesuai klasifikasi dan kualifikasi yang dimiliki perusahaan dalam Sertifikat Badan Usaha.</p>\r\n'),
(7, 'Konsultan Kelistrikan', 'Jasa Konsultan Tenaga Listrik', 'fa fa-bolt', 'konsultan-kelistrikan', 'kelistrikan-di-sumatera-utara-surplus-15-persen-516269-1.jpg', '<p>Sejalan dengan kebijakan pemerintah dengan diterapkannya Permenaker No. 4 tahun 1987 tentang Panitia Pembina Kesehatan dan Keselamatan Kerja (P2K3), UU No.13 Tahun 2003 tentang KETENAGAKERJAAN, serta PERMENAKER No. 26 Tahun 2014 tentang penyelenggaraan Sistem Manajemen K3 (SMK3) dan khususnya peraturan yang berkaitan dengan bidang kelistrikan seperti KepMenaker No. Kep-75/ MEN/2002 tentang pemberlakuan PUIL 2000 dan Permenaker No. Per.01/MEN/1989 tentang pengawasan Instalasi Penyalur Petir, Kami bekerjasama dengan provider penyedia jasa pelatihan K3 bermaksud menyelenggarakan&nbsp;<strong>Pelatihan Ahli K3 Listrik</strong>. Tersedianya&nbsp;<strong>Ahli K3 Listrik</strong>&nbsp;di perusahaan diharapkan mampu mengawasi pelaksanaan peraturan perundangan K3 di area perusahaan dan mampu memberikan peran optimal dalam organisasi perusahaan dalam mengendalikan resiko kecelakaan kerja.</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h2><strong>Tujuan&nbsp;Pelatihan Ahli K3 Listrik</strong></h2>\r\n\r\n<p>Pelatihan ini didesain untuk mempersiapkan dan menghasilkan tenaga Ahli K3 Listrik yang dapat melakukan identifikasi, evaluasi, dan pengendalian resiko dalam pelaksanaan K3 Listrik:</p>\r\n\r\n<ol>\r\n	<li>- Mempersiapkan tenaga pelaksana yang mampu melaksanakan K3 Listrik di tempat kerja</li>\r\n	<li>- Mempersiapkan dan menghasilkan tenaga pelaksana yang mampu menjelaskan teknik pencegahan dan penanggulangan kecelakaan kerja, khususnya yang terkait dengan pekerjaan listrik.</li>\r\n</ol>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Kompetensi Setelah Mengikuti Pelatihan Ahli K3 Listrik</strong></h3>\r\n\r\n<p><strong>Umum</strong><br />\r\nPeserta dapat melakukan pekerjaan&nbsp;pemasangan, pengoperasian dan&nbsp;pemeliharaan&nbsp;<strong>instalasi listrik</strong>&nbsp;secara&nbsp;benar dan aman bagi dirinya, orang&nbsp;lain, peralatan dan aman dalam&nbsp;pengoperasiannya.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Akademik&nbsp;Pelatihan Ahli K3&nbsp;Listrik</strong><br />\r\nPeserta dapat memahami secara baik&nbsp;tentang :<br />\r\n1.&nbsp;Potensi Bahaya Listrik<br />\r\n2.&nbsp;Cara Pencegahan Bahaya Listrik<br />\r\n3.&nbsp;Prosedur Kerja Selamat<br />\r\n4.&nbsp;Pembacaan Gambar<br />\r\n5. Pemeriksaan dan Pengujian&nbsp;Instalasi Listrik<br />\r\n6.&nbsp;Dasar-dasar Teknik Kelistrikan<br />\r\n7.&nbsp;Peraturan dan Standar&nbsp;Kelistrikan</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Ketrampilan Teknik Setelah Mengikuti&nbsp;Pelatihan Ahli K3 Listrik</strong><br />\r\n1.&nbsp;Peserta dapat melakukan pekerjaan dengan benar, antara lain :<br />\r\n2.&nbsp;Melaksanakan Pekerjaan Pemasangan Instalasi Listrik<br />\r\n3.&nbsp;Melaksanakan Pekerjaan Perawatan Instalasi Listrik<br />\r\n4.&nbsp;Mempergunakan Alat Ukur Listrik<br />\r\n5.&nbsp;Mengoperasikan Instalasi Listrik<br />\r\n6.&nbsp;Mengidentifikasi dan Mendeteksi Bahaya Listrik<br />\r\n7.&nbsp;Melakukan Tindakan Pertolongan Pertama Kecelakaan Listrik</p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4><strong>Materi&nbsp;Pelatihan Ahli K3 Listrik</strong></h4>\r\n\r\n<p>Materi pelatihan yang akan disampaikan meliputi sebagai berikut:<br />\r\n1.&nbsp;Kebijakan UU No. 1 tahun 1970 K3<br />\r\n2.&nbsp;Pengawasan &amp; Pembinaan Norma K3 Bidang Listrik<br />\r\n3.&nbsp;Persyaratan K3 Rancangan Instalasi Listrik<br />\r\n4.&nbsp;Persyaratan K3 Sistem Proteksi Untuk Keselamatan Listrik<br />\r\n5.&nbsp;Persyaratan K3 Pembangkitan Tenaga Listrik<br />\r\n6.&nbsp;Persyaratan K3 Jaringan Instalasi Tenaga dan Perlengkapannya<br />\r\n7.&nbsp;Persyaratan K3 Instalasi Penerangan<br />\r\n8.&nbsp;Persyaratan K3 Peralatan Instalasi Tenaga/Daya<br />\r\n9.&nbsp;Persyaratan K3 Perlengkapan Hubung Bagi dan Kendali (PHB) serta komponennya<br />\r\n10.&nbsp;Persyaratan Ketentuan Bagi Berbagai Ruang dan Instalasi khusus<br />\r\n11.&nbsp;Persyaratan K3 pada penggunaan peralatan uji listrik<br />\r\n12.&nbsp;Persyaratan K3 Sistem Proteksi Instalasi Penyalur Petir<br />\r\n13.&nbsp;Identifikasi bahaya, penilaian, pengendalian resiko listrik<br />\r\n14.&nbsp;Pelaporan dan analisa kecelakaan kerja bidang listrik<br />\r\n15.&nbsp;Prosedur Kerja aman pada instalasi listrik<br />\r\n16.&nbsp;Praktek kerja Lapangan (PKL)<br />\r\n17.&nbsp;Seminar</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Metode&nbsp;Pelatihan Ahli K3 Listrik</strong><br />\r\nPre-Test, Presentation, Discuss, Case Study, Post-Test, Evaluation, Seminar</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Durasi&nbsp;Pelatihan Ahli K3 Listrik</strong><br />\r\nTraining AK3 Listrik diselenggarakan selama 18 (delapan belas) hari dari pukul 08.00 s/d 17.00 WIB, sesuai dengan rapat bersama KEMNAKER RI &amp; ALPK3 tanggal 30 Januari 2019</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Instrukutr&nbsp;Pelatihan Ahli K3 Listrik</strong><br />\r\nInstruktur pelatihan ini akan disampaikan oleh Tenaga Ahli dari kalangan industri yang telah berpengalaman dalam memberikan pelatihan-pelatihan K3.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Sertifikasi&nbsp;Pelatihan Ahli K3 Listrik</strong><br />\r\nKepada peserta yang lulus&nbsp;diberikan sertifikat pelatihan&nbsp;Ahli K3 Listrik, Lisensi dan Penunjukan&nbsp;Ahli K3 &nbsp;setelah memenuhi&nbsp;syarat.</p>\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statistik`
--

CREATE TABLE `statistik` (
  `ip` varchar(20) NOT NULL DEFAULT '',
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL DEFAULT '1',
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `statistik`
--

INSERT INTO `statistik` (`ip`, `tanggal`, `hits`, `online`) VALUES
('::1', '2019-07-15', 104, '1563182752'),
('::1', '2019-07-16', 55, '1563246611'),
('180.245.27.55', '2019-07-16', 65, '1563273039'),
('207.46.13.43', '2019-07-16', 1, '1563248096'),
('66.249.64.223', '2019-07-16', 3, '1563265731'),
('66.249.64.155', '2019-07-16', 4, '1563260618'),
('66.249.64.159', '2019-07-16', 1, '1563260617'),
('66.249.64.157', '2019-07-16', 1, '1563264579'),
('66.102.6.199', '2019-07-16', 2, '1563265614'),
('66.249.89.193', '2019-07-16', 2, '1563265742'),
('103.22.242.5', '2019-07-16', 1, '1563265925'),
('103.22.242.6', '2019-07-16', 2, '1563265945'),
('114.4.4.198', '2019-07-16', 1, '1563265936'),
('66.102.6.197', '2019-07-16', 1, '1563265963'),
('173.252.127.16', '2019-07-16', 1, '1563271839'),
('157.55.39.28', '2019-07-16', 1, '1563279065'),
('207.46.13.99', '2019-07-16', 1, '1563279070'),
('114.124.228.33', '2019-07-16', 1, '1563279215'),
('114.124.247.218', '2019-07-16', 1, '1563279874'),
('54.68.94.61', '2019-07-16', 1, '1563284496'),
('54.245.182.161', '2019-07-16', 1, '1563287027'),
('157.55.39.14', '2019-07-17', 1, '1563304546'),
('40.77.167.130', '2019-07-17', 1, '1563304550'),
('157.55.39.85', '2019-07-17', 1, '1563305226'),
('40.77.167.175', '2019-07-17', 1, '1563313942'),
('157.55.39.124', '2019-07-17', 1, '1563319254'),
('66.249.75.135', '2019-07-17', 3, '1563334965'),
('66.249.75.133', '2019-07-17', 1, '1563331235'),
('34.215.44.17', '2019-07-17', 1, '1563332583'),
('180.245.27.55', '2019-07-17', 6, '1563334305'),
('36.72.220.166', '2019-07-17', 1, '1563342827'),
('157.55.39.76', '2019-07-17', 2, '1563351646'),
('110.138.151.1', '2019-07-17', 11, '1563360505'),
('140.213.1.159', '2019-07-17', 2, '1563352138'),
('40.77.167.121', '2019-07-17', 2, '1563361609'),
('54.149.97.199', '2019-07-17', 1, '1563362918'),
('173.252.87.4', '2019-07-17', 1, '1563368131'),
('36.71.197.62', '2019-07-17', 1, '1563372704'),
('66.249.75.131', '2019-07-17', 2, '1563374324'),
('207.46.13.1', '2019-07-17', 1, '1563378964'),
('207.46.13.44', '2019-07-17', 1, '1563382450'),
('207.46.13.44', '2019-07-18', 1, '1563386063'),
('35.163.32.253', '2019-07-18', 1, '1563416589'),
('125.161.131.214', '2019-07-18', 2, '1563417090'),
('66.249.64.197', '2019-07-18', 2, '1563417437'),
('110.138.151.1', '2019-07-18', 23, '1563419411'),
('::1', '2019-07-18', 75, '1563443805'),
('::1', '2019-07-19', 113, '1563532024'),
('::1', '2019-07-22', 214, '1563797020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tag`
--

CREATE TABLE `tag` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tag`
--

INSERT INTO `tag` (`id_tag`, `nama_tag`, `username`, `tag_seo`, `count`) VALUES
(22, 'Hiburan', '', 'hiburan', 19),
(28, 'Teknologi', '', 'teknologi', 12),
(27, 'Metropolitan', '', 'metropolitan', 32),
(26, 'Nasional', '', 'nasional', 42),
(25, 'Kesehatan', '', 'kesehatan', 16),
(24, 'Olahraga', '', 'olahraga', 11),
(34, 'Wisata', '', 'wisata', 4),
(36, 'Hukum', '', 'hukum', 16),
(37, 'Film', '', 'film', 25),
(40, 'Internasional', '', 'internasional', 28),
(41, 'Bola', '', 'bola', 21),
(43, 'Selebritis', '', 'selebritis', 9),
(49, 'Palestina', 'admin', 'palestina', 6),
(50, 'Israel', 'admin', 'israel', 3),
(51, 'Yahudi', 'admin', 'yahudi', 4),
(55, '', 'admin', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tagvid`
--

CREATE TABLE `tagvid` (
  `id_tag` int(5) NOT NULL,
  `nama_tag` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tag_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `tagvid`
--

INSERT INTO `tagvid` (`id_tag`, `nama_tag`, `username`, `tag_seo`, `count`) VALUES
(34, 'perang', 'admin', 'perang', 2),
(35, 'Teknologi', 'admin', 'teknologi', 0),
(36, 'Nasional', 'admin', 'nasional', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id_komentar` int(5) NOT NULL,
  `reply` int(5) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `alamat_email` varchar(150) NOT NULL,
  `isi_pesan` text NOT NULL,
  `tanggal_komentar` date NOT NULL,
  `jam_komentar` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_comment`
--

INSERT INTO `tbl_comment` (`id_komentar`, `reply`, `nama_lengkap`, `alamat_email`, `isi_pesan`, `tanggal_komentar`, `jam_komentar`) VALUES
(1, 0, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Perubahan UUD 1945 yang membawa perubahan mendasar mengenai penyelengaraan kekuasaan kehakiman, membuat perlunya dilakukan perubahan secara komprehensif mengenai Undang-Undang Ketentuan-ketentuan Pokok Kekuasaan Kehakiman.								', '2014-11-19', '00:00:00'),
(2, 1, 'si anu', 'anu@gmail.com', 'Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-19', '00:00:00'),
(3, 0, 'Rio Saputra', 'rio.saputra@gmail.com', 'Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut. Perubahan UUD 1945 yang membawa perubahan mendasar mengenai penyelengaraan kekuasaan kehakiman.								', '2014-11-21', '00:00:00'),
(4, 1, 'Anggun Pratiwi', 'angun@gmail.com', 'itu benar bro, kalau ndak pacayo tanyo lah ka baruak.Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-21', '00:00:00'),
(5, 3, 'Dewi Safitri', 'dewi.safitri@gmail.com', 'Oii, ang kareh bana mah, den ambuang ang ka lauik beko,.. Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-21', '00:00:00'),
(6, 0, 'Ahmad Hunaldi', 'ahmad@gmail.com', 'badan-badan peradilan penyelenggara kekuasaan kehakiman, asas-asas penyelengaraan kekuasaan kehakiman Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.								', '2014-11-21', '00:00:00'),
(7, 6, 'Prasmana Enru', 'prasmana@gmail.com', 'Undang-Undang Ketentuan-ketentuan Pokok Kekuasaan	Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2014-11-21', '00:00:00'),
(9, 3, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Untuk itulah penulis memberikan solusi menggunakan program Dreamweaver,.. Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2015-01-22', '00:00:00'),
(14, 0, 'Udin Sedunia', 'udin.sedubia@gmail.com', 'Perlahan tapi pasti, sosok TM yang merupakan artis dan berprofesi sebagai Pekerja Seks Komersial (PSK) akhirnya mulai terungkap Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2015-05-29', '00:54:31'),
(15, 6, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Perlahan tapi pasti, sosok TM yang merupakan artis dan berprofesi sebagai Pekerja Seks Komersial (PSK) akhirnya mulai terungkap Video bocah melakukan hubungan intim layaknya suami istri membuat geger. Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut.', '2015-05-29', '00:59:50'),
(23, 20, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'I spent almost a day searching for this. And found &#039;CSS3 Thumbnail Slider&#039; on this site. Thanks a lot. If the slideIndex is higher than the number of elements (x.length), the slideIndex is set to zero.', '2017-01-24', '16:31:47'),
(24, 14, 'Robby Prihandaya', 'robby.prihandaya@gmail.com', 'Guna mencegah hal-hal yang tidak diinginkan, polisi pun sudah melakukan penelusuran siapa orang di balik pembuatan video cabul tersebut', '2017-04-09', '11:07:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `templates`
--

CREATE TABLE `templates` (
  `id_templates` int(5) NOT NULL,
  `judul` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pembuat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `folder` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `aktif` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `templates`
--

INSERT INTO `templates` (`id_templates`, `judul`, `username`, `pembuat`, `folder`, `aktif`) VALUES
(22, 'PHPMU-Tigo - Swarakalibata Template', 'admin', 'Robby Prihandaya', 'phpmu-tigo', 'N'),
(23, 'Consuloan', 'admin', 'Consuloan', 'consuloan', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `nama_kosumen` varchar(100) NOT NULL,
  `isi_testimoni` text NOT NULL,
  `aktif` enum('Y','N') NOT NULL,
  `waktu_testimoni` datetime NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `nama_kosumen`, `isi_testimoni`, `aktif`, `waktu_testimoni`, `gambar`, `jabatan`) VALUES
(2, 'Adi Saputra', 'Kami bekerja dengan Total Konsultan. Perwakilan kami sangat berpengetahuan dan membantu. Total Konsultan membuat sejumlah saran untuk membantu meningkatkan sistem kami. Total Konsultan menjelaskan cara kerja dan mengapa itu bisa membantu dan kami senang dengan hasilnya.', 'Y', '2019-07-03 00:00:00', 'human2.jpg', 'Konsultan IT'),
(5, 'Aryani Sulistyawati', 'Saya yakin bahwa selalu ada ruang untuk pertumbuhan, inspirasi, dan ide-ide baru. Dengan hal tersebut bisa mendapatkan popularitas di tempat kerja karena menciptakan pembelajaran baru dan membuat orang siap untuk sukses.', 'Y', '2019-07-03 00:00:00', 'human3.jpg', 'Trainer'),
(7, 'Ikke Nur Hikmah', 'kami lebih fokus pada sesuatu yang sesuai dengan harapan pelanggan dan menampilkan sesuatu yang menarik pelanggan untuk dihubungkan dengan si pengguna. Memudahkan setiap aktifitas antara pelanggan dengan pengguna agar dapat mencapai keberhasilan.', 'Y', '2019-07-03 00:00:00', 'human11.jpg', 'Direktur Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `blokir` enum('Y','N') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `foto`, `level`, `blokir`, `id_session`) VALUES
('admin', 'ffdb5ee9b8c289ba51b7145f70bbff1fc7c35787a57e15a3063105a1e36ac0f60ccd66e9ee8dea87d1bcc24c898482ea69e06a8198b17cb1128edb5ff9d6812f', 'Arep', 'areptumpang@gmail.com', '081214071941', 'arep.jpg', 'admin', 'N', 'q173s8hs1jl04st35169ccl8o7'),
('dewi', '82712d6185313c5cab37780e6aa1bb571b2283efa92fd7153a28bbb3e34b0489dcc5a943ae7f61c5380184fea2ee750c40718a1601d9e7748427a767bdc3f64b', 'Dewiiit Safitri', 'dewi.safitri@gmail.com', '081267778899', '', 'kontributor', 'N', 'ed1d859c50262701d92e5cbf39652792-20170120090507'),
('arsen', 'dac396a174a4a2aa2526bf23c05f0adbe6139f53047c273fd65e1fb813a05ce42a82d8e9b997972937a87238702dab4e981b184083d5d83b6542f79f29f8bde0', 'Muhammad Arsenio', 'muhammad.arsenio@gmail.com', '081267773333', '', 'kontributor', 'N', 'f76ad5ee772ac196cbc09824e24859ee');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_modul`
--

CREATE TABLE `users_modul` (
  `id_umod` int(11) NOT NULL,
  `id_session` varchar(255) NOT NULL,
  `id_modul` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users_modul`
--

INSERT INTO `users_modul` (`id_umod`, `id_session`, `id_modul`) VALUES
(1, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 70),
(2, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 65),
(3, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 63),
(4, 'f76ad5ee772ac196cbc09824e24859ee', 70),
(5, 'f76ad5ee772ac196cbc09824e24859ee', 65),
(6, 'f76ad5ee772ac196cbc09824e24859ee', 63),
(7, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 18),
(8, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 66),
(9, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 33),
(10, '3460d81e02faa3559f9e02c9a766fcbd-20170124215625', 18),
(11, 'ed1d859c50262701d92e5cbf39652792-20170120090507', 41),
(12, '6bec9c852847242e384a4d5ac0962ba0-20170406140423', 18),
(13, 'fa7688658d8b38aae731826ea1daebb5-20170521103501', 18),
(14, 'cfcd208495d565ef66e7dff9f98764da-20180421112213', 18),
(15, 'q173s8hs1jl04st35169ccl8o7', 70),
(16, 'q173s8hs1jl04st35169ccl8o7', 66),
(17, 'q173s8hs1jl04st35169ccl8o7', 65),
(18, 'q173s8hs1jl04st35169ccl8o7', 64),
(19, 'q173s8hs1jl04st35169ccl8o7', 63),
(20, 'q173s8hs1jl04st35169ccl8o7', 62),
(21, 'q173s8hs1jl04st35169ccl8o7', 61),
(22, 'q173s8hs1jl04st35169ccl8o7', 59),
(23, 'q173s8hs1jl04st35169ccl8o7', 57),
(24, 'q173s8hs1jl04st35169ccl8o7', 46),
(25, 'q173s8hs1jl04st35169ccl8o7', 45),
(26, 'q173s8hs1jl04st35169ccl8o7', 44),
(27, 'q173s8hs1jl04st35169ccl8o7', 43),
(28, 'q173s8hs1jl04st35169ccl8o7', 41),
(29, 'q173s8hs1jl04st35169ccl8o7', 35),
(30, 'q173s8hs1jl04st35169ccl8o7', 34),
(31, 'q173s8hs1jl04st35169ccl8o7', 33),
(32, 'q173s8hs1jl04st35169ccl8o7', 31),
(33, 'q173s8hs1jl04st35169ccl8o7', 18),
(34, 'q173s8hs1jl04st35169ccl8o7', 10),
(35, 'q173s8hs1jl04st35169ccl8o7', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id_video` int(5) NOT NULL,
  `id_playlist` int(5) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `jdl_video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `video_seo` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `keterangan` text COLLATE latin1_general_ci NOT NULL,
  `gbr_video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `video` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `youtube` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `dilihat` int(7) NOT NULL DEFAULT '1',
  `hari` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `tagvid` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id_video`, `id_playlist`, `username`, `jdl_video`, `video_seo`, `keterangan`, `gbr_video`, `video`, `youtube`, `dilihat`, `hari`, `tanggal`, `jam`, `tagvid`) VALUES
(160, 56, 'admin', 'Selamatkan Hutan di Indonesia', 'selamatkan-hutan-di-indonesia', 'Pengamat politik dari Charta Politika, Yunarto Wijaya mempertanyakan dasar keputusan SBY menunjuk Roy Suryo sebagai Menpora. Apalagi, kata Yunarto, ada pernyataan SBY yang menegaskan Roy cakap untuk mengemban tugas sebagai Menpora.\r\n\r\nMenurut Yunarto, Roy selama ini lebih dikenal sebagai pakar foto digital dan video serta dosen di sebuah perguruan tinggi negeri. \"Namun, belum terdengar kiprahnya di bidang kepemudaan dan olahraga,\" kata Yunarto. Sementara, tugas Menpora yang berat dan masa tugasnya relatif singkat idealnya mengutamakan figur yang kompetensinya teruji di bidang kepemudaan dan olahraga.\r\n\r\nKarena itu, Yunarto menduga penunjukan Roy bukan karena kompetensi, melainkan representasi politik. \"Ditunjuknya kader Partai Demokrat Roy Suryo sebagai Menpora menunjukkan faktor politisnya sangat kuat,\" katanya.', '', '', 'https://www.youtube.com/embed/2Ge1GGitzLw', 31, 'Rabu', '2014-07-02', '07:30:12', ''),
(161, 56, 'admin', 'Hutan Hujan Tropis Indonesia', 'hutan-hujan-tropis-indonesia', 'Pihak Partai Liberal Demokrat pun langsung melontarkan kecaman atas tulisan dari Ward. Juru bicara partai mengatakan bahwa pihak partainya akan menerapkan sanksi terhadap Ward.\r\n\r\nSementara pihak Partai Konservatif yang menguasai koalisi pemerintahan bersama Liberal Demokrat menyatakan Ward harus menarik komentarnya.\r\n\r\n\"Tidak seharusnya seorang anggota parlemen menulis tindakan yang memicu kekerasan. Tindakannya tidak bertanggung jawab,\" ucap pihak Konservatif.\r\n\r\nIni bukan pertama kalinya Ward mengecam tindakan Israel. Pada Juli 2013 lalu, Ward menyebut pihak Zionis diambang kekalahan dalam perang. Dirinya pun mempertanyakan sampai kapan negara apartheid seperti Israel bisa bertahan.', '', '', 'http://www.youtube.com/embed/5biK_PcT7S0', 24, 'Rabu', '2014-07-02', '07:31:23', ''),
(162, 57, 'admin', 'Perang Sengit Pasukan Darat Israel Vs Hamas', 'perang-sengit-pasukan-darat-israel-vs-hamas', 'Israel makin gencar melakukan serangan ke Gaza, baik melalui udara maupun darat. Masjid menjadi salah satu target serangan dari Negara Yahudi itu.\r\n\r\nSekira 15 warga Palestina dilaporkan tewas dan 20 lainnya dalam serangan udara Isarel ke sebuah masjid di Kota Gaza pada Sabtu 19 Juli 2014 lalu. Masjid itu terletak tidak jauh dari rumah milik Komandan Polisi Gaza.\r\n\r\nRudal-rudal dari Israel menghancurkan sebagian dari bangunan masjid. Alquran yang berada di dalam masjid pun tampak rusak akibat serangan. Demikian diberitakan Associated Press, Rabu (23/7/2014).\r\n\r\nSelain itu, serangan Israel juga diarahkan ke rumah sakit yang berada di Gaza. Blokade yang dilakukan oleh Israel makin membuat rumah sakit sulit untuk beroperasi.', '', '', 'https://www.youtube.com/watch?v=CeNjeD8yknI', 16, 'Rabu', '2014-07-23', '15:23:10', ''),
(163, 57, 'admin', 'Isael dan Palestina Memanas', 'isael-dan-palestina-memanas', 'Khamenei dikenal sebagai musuh besar Israel. Beberapa komentarnya membuat panas telinga pemimpin Israel.\r\n\r\nKomentar paling pedas Khamenei adalah Iran tidak pernah mengenal Israel. Negara ini juga secara terang-terangan mendukung Hamas. Hamas sendiri sudah dimasukan ke dalam daftar hitam terorisme oleh Israel.\r\n\r\nSelain itu, Khamenei dan beberapa pemimpin Iran berjanji akan menghilangkan Israel dari peta dunia. Bahkan, beberapa pekan lalu, Khamenei menyatakan peristiwa pembantaian warga Yahudi oleh Nazi satu abad lalu, hanyalah sebuah ilusi yang tak nyata.', '', '', 'https://www.youtube.com/watch?v=oaJpxuDh5Ds', 31, 'Rabu', '2014-07-23', '15:24:30', ''),
(164, 57, 'admin', 'Israel Tembak Mati Warga Palestina Saat Gencatan', 'israel-tembak-mati-warga-palestina-saat-gencatan', 'Seorang tentara Israel dilaporkan menghilang di Jalur Gaza. Hal ini terjadi usai terjadinya pertempuran mematikan yang terjadi di Jalur Gaza pada akhir pekan lalu.\r\n\r\nMelansir Boston Herald, Selasa (22/7/2014), pejabat pertahanan Israel mengatakan, tentaranya hilang usai pertempuran mematikan di Gaza terjadi pada pekan lalu. Namun, tidak jelas apakah tentara tersebut masih hidup atau sudah tewas.\r\n\r\nKonflik yang terjadi antara Israel dan Hamas sejauh ini sudah menyebabkan sekira 25 tentara Israel tewas dan ratusan warga Palestina. Sebagian besar korban warga Palestina adalah anak-anak.\r\n\r\nMemanasnya situasi itu membuat sejumlah desakan gencatan berdatangan dari sejumlah negara dan organisasi internasional.\r\n\r\nSebelumnya, Sekretaris Jendral Perserikatan Bangsa - Bangsa (PBB) Ban Ki-moon dan Menteri Luar Negeri Amerika Serikat (AS) John Kerry melakukan pertemuan di Kairo, Mesir. Pertemuan di bertujuan untuk mendesak agar konflik yang terjadi di Gaza segera dihentikan.', '', '', 'https://www.youtube.com/watch?v=L6R-5XUcDSY', 44, 'Rabu', '2014-07-23', '15:29:41', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_get_daftar_sertifikat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `v_get_daftar_sertifikat` (
`id` int(10) unsigned
,`id_client_ind` int(200) unsigned
,`id_cert_ind` varchar(255)
,`client_name_id` varchar(50)
,`certificate_date` date
,`expiration_date` date
,`created_by` int(10) unsigned
,`status` tinyint(4)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `v_get_daftar_sertifikat`
--
DROP TABLE IF EXISTS `v_get_daftar_sertifikat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_get_daftar_sertifikat`  AS  select `daftar_sertifikat`.`id` AS `id`,`daftar_sertifikat`.`id_client_ind` AS `id_client_ind`,`daftar_sertifikat`.`id_cert_ind` AS `id_cert_ind`,`klien_list`.`client_name_id` AS `client_name_id`,`daftar_sertifikat`.`certificate_date` AS `certificate_date`,`daftar_sertifikat`.`expiration_date` AS `expiration_date`,`daftar_sertifikat`.`created_by` AS `created_by`,`daftar_sertifikat`.`status` AS `status` from (`daftar_sertifikat` join `klien_list` on((`daftar_sertifikat`.`id_client_ind` = `klien_list`.`id_client_ind`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indexes for table `background`
--
ALTER TABLE `background`
  ADD PRIMARY KEY (`id_background`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `daftar_sertifikat`
--
ALTER TABLE `daftar_sertifikat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `daftar_cert_lsu_id_client_ind_index` (`id_client_ind`),
  ADD KEY `daftar_cert_lsu_created_by_index` (`created_by`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  ADD PRIMARY KEY (`id_halaman`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id_homepage`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `iklanatas`
--
ALTER TABLE `iklanatas`
  ADD PRIMARY KEY (`id_iklanatas`);

--
-- Indexes for table `iklantengah`
--
ALTER TABLE `iklantengah`
  ADD PRIMARY KEY (`id_iklantengah`);

--
-- Indexes for table `image_project`
--
ALTER TABLE `image_project`
  ADD PRIMARY KEY (`id_image`);

--
-- Indexes for table `katajelek`
--
ALTER TABLE `katajelek`
  ADD PRIMARY KEY (`id_jelek`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `klien_list`
--
ALTER TABLE `klien_list`
  ADD PRIMARY KEY (`id_client_ind`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `komentarvid`
--
ALTER TABLE `komentarvid`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id_logo`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `modul`
--
ALTER TABLE `modul`
  ADD PRIMARY KEY (`id_modul`);

--
-- Indexes for table `mod_alamat`
--
ALTER TABLE `mod_alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indexes for table `mod_ym`
--
ALTER TABLE `mod_ym`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pasangiklan`
--
ALTER TABLE `pasangiklan`
  ADD PRIMARY KEY (`id_pasangiklan`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indexes for table `poling`
--
ALTER TABLE `poling`
  ADD PRIMARY KEY (`id_poling`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`);

--
-- Indexes for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  ADD PRIMARY KEY (`id_sekilas`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tagvid`
--
ALTER TABLE `tagvid`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id_templates`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `users_modul`
--
ALTER TABLE `users_modul`
  ADD PRIMARY KEY (`id_umod`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `background`
--
ALTER TABLE `background`
  MODIFY `id_background` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `daftar_sertifikat`
--
ALTER TABLE `daftar_sertifikat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id_email` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `halamanstatis`
--
ALTER TABLE `halamanstatis`
  MODIFY `id_halaman` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id_homepage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iklanatas`
--
ALTER TABLE `iklanatas`
  MODIFY `id_iklanatas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `iklantengah`
--
ALTER TABLE `iklantengah`
  MODIFY `id_iklantengah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `image_project`
--
ALTER TABLE `image_project`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `katajelek`
--
ALTER TABLE `katajelek`
  MODIFY `id_jelek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `klien_list`
--
ALTER TABLE `klien_list`
  MODIFY `id_client_ind` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `komentarvid`
--
ALTER TABLE `komentarvid`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id_logo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT for table `modul`
--
ALTER TABLE `modul`
  MODIFY `id_modul` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `mod_alamat`
--
ALTER TABLE `mod_alamat`
  MODIFY `id_alamat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mod_ym`
--
ALTER TABLE `mod_ym`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pasangiklan`
--
ALTER TABLE `pasangiklan`
  MODIFY `id_pasangiklan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id_perusahaan` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `poling`
--
ALTER TABLE `poling`
  MODIFY `id_poling` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sekilasinfo`
--
ALTER TABLE `sekilasinfo`
  MODIFY `id_sekilas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tagvid`
--
ALTER TABLE `tagvid`
  MODIFY `id_tag` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id_komentar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id_templates` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users_modul`
--
ALTER TABLE `users_modul`
  MODIFY `id_umod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id_video` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=175;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
