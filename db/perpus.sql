-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2020 pada 11.28
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `book`
--

CREATE TABLE `book` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `kategori` enum('Gaya hidup','Romantis','Sains','Pendidikan','Sosial & Humaniora','Bisnis & Ekonomi','Agama & Psikologi','Seni & Desain','Fiksi & Sastra','Pengembangan Diri','Komik','Komputer & Teknologi') NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `book`
--

INSERT INTO `book` (`id`, `nama`, `penulis`, `penerbit`, `tahun_terbit`, `kategori`, `deskripsi`, `status`) VALUES
(14, 'The Rain has come', 'Pockyyummyyummy', 'PT. Cahaya', '2009-02-01', 'Sosial & Humaniora', 'Pocky adalah wanita lajang berumur 25 th yang sedang mencari cinta di tengah-tengah kehidupana sosial yang rumit. Akan kah pocky menemukan cintanya di hiruk pikuk dunia ini?', 1),
(15, 'Frog n Cheese', 'Mirara', 'PT. Cahaya', '2019-02-10', 'Komik', 'Apa hubungan kodok dengan keju? Apakah makanannya? atau jangan-jangan kisah cinta? Yuk yang kepo dibaca!!', 2),
(16, 'The Vampire Flower', 'Hwang Mi Ree', 'Haru', '2017-12-08', 'Agama & Psikologi', 'CInta dan Vampire, apa ini nyata? dsini lah imam mu diuji', 1),
(17, 'Dog & Me', 'Hamid', 'PT. Cahaya', '2018-10-09', 'Pengembangan Diri', 'Persahabatan kucing dan manusia sebagai sahabat yang akankah berujung menjadi cinta?', 2),
(18, 'Even Though I’m Told I Know Have Wings', 'Yonezawa Honobu', 'Haru', '2018-10-09', 'Pengembangan Diri', 'Anak-anak Klub Sastra Klasik sudah naik ke kelas 2 SMA. Selain kasus Ohinata yang tiba-tiba tidak jadi bergabung dengan klub kecil tersebut, mereka juga menghadapi kasus-kasus kecil lainnya, seperti: ', 1),
(19, ' Absolute Justice', 'Wibu', 'Haru', '2019-10-09', 'Komik', 'Seharusnya monster itu sudah mati ....', 1),
(20, ' Bone', 'Mijing Jung', 'Haru', '2019-09-09', 'Komik', 'ua tahun sudah Hajin menghilang tanpa kabar, meninggalkan luka yang nyaris tak bisa disembuhkan dalam diri Junwon.\r\nAkan tetapi, saat Junwon mulai melupakan Hajin dan melanjutkan hidupnya, dia menerim', 1),
(21, ' Cheer Boy!!', 'Mijing Jung', 'Haru', '2019-09-09', 'Gaya hidup', 'Cheerleader.... Biasanya cewek yang melakukannya, kan?”\r\n\r\nHaruki cedera. Cowok itu menggunakan cederanya sebagai alasan untuk berhenti dari Judo karena menyadari batas kemampuannya. Padahal Haruki la', 1),
(22, 'Giselle', 'arikiyoshi', 'Haru', '2016-09-13', 'Gaya hidup', 'Lima belas tahun yang lalu, prima balerina Himemiya Mayumi tak sengaja menusuk dirinya sendiri hingga mati dalam usahanya menyerang Karebayashi Reina, saat balet \"Giselle\" ditampilkan. \"Giselle\" pun m', 1),
(23, 'Holy Mother ', 'Akiyoshi Rikako', 'Haru', '2020-06-03', 'Komik', 'Terjadi pembunuhan mengerikan terhadap seorang anak laki-laki di kota tempat Honami tinggal. Korban bahkan diperkosa setelah dibunuh.\r\nBerita itu membuat Honami mengkhawatirkan keselamatan putri satu ', 1),
(24, 'Selena', 'Tere Liye', 'Gramedia', '2019-08-02', 'Seni & Desain', '\"Selena\" dan \"Nebula\" adalah buku ke-8 dan ke-9 yang menceritakan siapa orangtua Raib dalam serial petualangan dunia paralel. Dua buku ini sebaiknya dibaca berurutan. Kedua buku ini juga bercerita ten', 1),
(25, 'MetroPop: Ganjil Genap', 'Almira Bastari', 'Gramedia', '2019-08-17', 'Sains', 'Gimana rasanya diputusin setelah berpacaran selama tiga belas tahun? Hidup Gala yang mendadak jomblo semakin runyam ketika adiknya kebelet nikah! Gala bertekad pantang lajang menjelang umur kepala tig', 1),
(26, 'The Silver Linings Playbook', ' Matthew Quick', 'Gramedia', '2019-08-17', 'Sains', '\"Kehidupan memang berat, Pat, dan anak-anak mesti diajari betapa beratnya kehidupan ituf\r\n\"Kenapa?\"\r\n\r\n\"Agar mereka mau bersimpati kepada orang lain. Agar mereka memahami bahwa sebagian orang mengalam', 1),
(27, 'Matematika Diskrit Revisi Ketujuh ', 'Rinaldi Munir', 'Gramedia', '2019-02-01', 'Komputer & Teknologi', 'Matematika Diskrit Revisi Ketujuh', 1),
(28, 'Love Story of Walden Brother Author:', ' Kim Rang', 'Haru', '2017-06-03', 'Romantis', 'Seyoung yang mengetahui pacarnya tidur dengan wanita lain, salah sasaran saat berusaha merusak sebuah mobil yang ternyata milik kakak lelaki pacarnya!\r\n\r\nJinwoo, pemilik mobil itu, marah besar dan mem', 1),
(29, 'Imitation 04', 'Park Kyung Ran', 'Haru', '2019-06-03', 'Romantis', 'ku ingin sekali memamerkan Kak Gwon Ryoc sebagai kekasihku kepada orang-orang.\r\nTapi mau bagaimana lagi, kami tidak boleh ketahuan sedang berkencan.\r\n\r\nGwon Ryoc\r\nSebaiknya kita memberi tahu anggota g', 1),
(30, ' Secretly Married ', ' Forgottenglimmer', 'Haru', '2015-06-03', 'Romantis', 'Phoebe Bernal mempunyai sebuah rahasia dengan salah satu bintang terkenal, Kent Fuentabella.\r\n\r\nApa rahasia mereka? Di usia ke 17 ini, mereka telah satu tahun menikah. Tentu saja tak ada seorang pun t', 1),
(31, 'Firebase Membangun Aplikasi Berbasis Android R', 'osyana Fitria Purnomo, Onno W. Purbo Dan Rz. Abd. ', 'Gramedia', '2018-02-01', 'Komputer & Teknologi', 'Buku ini ditujukan untuk pembaca dari kalangan mahasiswa, dosen, maupun masyarakat umum. Buku ini dapat membantu pembaca dalam mempelajari konsep dan proses membangun sebuah aplikasi mobile yang mengg', 1),
(32, 'Data Mining Dan Machine Learning Menggunakan Matla', 'Rahmadya Trias Handayanto', 'Gramedia', '2016-06-01', 'Komputer & Teknologi', 'Buku ini merupakan kelanjutan dari buku sebelumnya tentang soft computing. banyaknya pembaca yang berminat membuat sistem berbasis mesin pembelajaran (machine learning) untuk menggali data (data minin', 1),
(33, 'Kenapa Sih Kita Harus Nabung? : 50 Cara Menabung Y', 'Hasna Wijayati', 'Gramedia', '2016-06-01', 'Bisnis & Ekonomi', 'Banyak orang berpikir kalau menabung adalah hal yang rumit dan menyusahkan. Tak sedikit pula yang beranggapan bahwa kegiatan menabung dapat mengurangi kesenangan yang kita alami. Padahal, asumsi seper', 1),
(34, 'Day Trading', ' Amathevs .', 'Gramedia', '2014-06-01', 'Bisnis & Ekonomi', 'Biasanya trader aktif yang sudah cukup lama berkecimpung di forex, kerap mengalami disorientasi dalam market dan kerap melakukan tindakan-tindakan yang tanpa disadari atau memang disadarinya bertentan', 1),
(35, 'Pintar Merencanakan Pensiun: Setelah Pensiun Mau A', 'Asti Musman', 'Gramedia', '2010-06-11', 'Bisnis & Ekonomi', 'Apakah hasil dari karier Anda sekarang sudah benar-benar cukup untuk menopang kehidupan masa pensiun nanti. Pikirkanlah, pada saat kawan-kawan Anda enak menikmati masa pensiun sembari momong cucu atau', 1),
(36, 'Jiwa-Jiwa Yang Lelah ', 'Rahma Kusharjanti', 'Gramedia', '2009-09-01', 'Pengembangan Diri', 'Depresi bukan masalah sepele.\r\n\r\nBanyak stigma melekat pada pengidapnya. Depresi sering disama-artikan dengan gila. Ada pula yang menganggap depresi sebagai “kutukan” akibat lemahnya iman dan tidak de', 1),
(37, 'Batik Latar Ringkel, Pengenalan Dan Pembuatan ', 'Suryawati Ristiani, S.Pd ; Tika Sulistyaningsih, S', 'Gramedia', '2012-12-01', 'Seni & Desain', 'Batik latar ringkel merupakan teknik pewarnaan kain yang memadukan teknik batik dengan teknik ringkel. Ringkel adalah teknik mewarnai kain yang mengunakan teknik jahit cubit (smock) untuk membantu pro', 1),
(45, 'jhadsjag', 'jagdsaj', 'jagjdas', '2012-12-12', 'Pendidikan', 'lasdjasldsal', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `borrow_book`
--

CREATE TABLE `borrow_book` (
  `id` int(5) NOT NULL,
  `borrow_date` date NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `borrow_book`
--

INSERT INTO `borrow_book` (`id`, `borrow_date`, `user_id`) VALUES
(40, '2020-12-31', 9),
(41, '2020-12-23', 9),
(42, '2020-12-28', 9),
(44, '2021-01-06', 9),
(46, '2012-12-12', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_borrow`
--

CREATE TABLE `detail_borrow` (
  `id` int(5) NOT NULL,
  `borrow_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_borrow`
--

INSERT INTO `detail_borrow` (`id`, `borrow_id`, `book_id`, `status`) VALUES
(13, 40, 16, 1),
(14, 40, 17, 1),
(15, 41, 19, 1),
(16, 41, 24, 1),
(18, 42, 25, 1),
(19, 44, 29, 1),
(22, 46, 23, 1),
(23, 46, 20, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `narasumber` varchar(50) NOT NULL,
  `moderator` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `helper`
--

CREATE TABLE `helper` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_user`
--

CREATE TABLE `level_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `level_user`
--

INSERT INTO `level_user` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Guest');

-- --------------------------------------------------------

--
-- Struktur dari tabel `register_event`
--

CREATE TABLE `register_event` (
  `id` int(5) NOT NULL,
  `event_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `request_book`
--

CREATE TABLE `request_book` (
  `id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `book_id` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `request_book`
--

INSERT INTO `request_book` (`id`, `user_id`, `book_id`, `status`) VALUES
(11, 7, 14, 3),
(12, 7, 15, 1),
(13, 7, 45, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_book`
--

CREATE TABLE `status_book` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_book`
--

INSERT INTO `status_book` (`id`, `nama`) VALUES
(1, 'Available'),
(2, 'Inactive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_borrow`
--

CREATE TABLE `status_borrow` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_borrow`
--

INSERT INTO `status_borrow` (`id`, `nama`) VALUES
(1, 'Scheduled'),
(2, 'Picked'),
(3, 'Canceled');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_event`
--

CREATE TABLE `status_event` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_request_book`
--

CREATE TABLE `status_request_book` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_request_book`
--

INSERT INTO `status_request_book` (`id`, `nama`) VALUES
(1, 'Accepted'),
(2, 'Pending'),
(3, 'Denied');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_user`
--

CREATE TABLE `status_user` (
  `id` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_user`
--

INSERT INTO `status_user` (`id`, `nama`) VALUES
(1, 'Verified'),
(2, 'Pending'),
(3, 'Inactive');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `card_id` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `level` int(5) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `card_id`, `password`, `email`, `fullname`, `address`, `level`, `status`) VALUES
(6, '1808561059', '$2y$10$7eHrb5dD65mMEDXUzs7yQuxHVXJA1FVVssusc4CuApvY8ne8cgBfO', 'admin@mail.com', 'Yuma Gunawan', 'Jalan Ninjaku Adalah Bersamamu', 1, 1),
(7, '1808561057', '$2y$10$rqHbuPTagf6mHaqQFyc9ue2gaeW5oBbGM2ltvpCQnVBGF5wOfDteG', 'poke@wibu.com', 'Gek Mirah', 'Jalan Konoha', 2, 1),
(8, '1808561064', '$2y$10$Z2HAln4ANnRzBzgnTg6ZweNZzrxrE1GLunGKRzfEXwj0/7L.k0Pgm', 'hamid@wibu.com', 'Akbar Hamid', 'Jalan Istana Merdeka', 2, 1),
(9, '12345', '$2y$10$tKCitiq1FnKb88K4YKrkyONIGl8EbGuoCOGWmhTNVNrWP4zbzHZRC', 'mail@mail.com', 'Beta Tester', 'Mars', 2, 1),
(10, '144545', '$2y$10$ZuCe.nWuUA0yMRJA.qmY8uPqOxkh3kslnX9UnjDgI4OvCTBxpNna2', 'aksdajk@kajsda.com', 'jkahdska', 'jkhdaksd', 2, 3),
(11, '12678', '$2y$10$GY1XCQ5C7ZCOHEEIimhoBe2yl3jFUx8ZWcaetV6nTAMom4fSgGLIq', 'mail@mail.com', 'Yjash', 'jkadsha', 2, 1),
(12, '1267', '$2y$10$CH2zMTyDw3V3vQNNQrWH6ekCv/WnrbxLZThOkTn7ETBQWaS48blyq', 'yuasdha@jhkjhsa.com', 'jhakdha', 'jha', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_status` (`status`);

--
-- Indeks untuk tabel `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_borrow` (`user_id`);

--
-- Indeks untuk tabel `detail_borrow`
--
ALTER TABLE `detail_borrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `det_borrow` (`borrow_id`),
  ADD KEY `det_book` (`book_id`),
  ADD KEY `status_borrow` (`status`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_event` (`status`);

--
-- Indeks untuk tabel `helper`
--
ALTER TABLE `helper`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `register_event`
--
ALTER TABLE `register_event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_regis` (`user_id`),
  ADD KEY `event_regis` (`event_id`);

--
-- Indeks untuk tabel `request_book`
--
ALTER TABLE `request_book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_request` (`user_id`),
  ADD KEY `book_request` (`book_id`),
  ADD KEY `status_req` (`status`);

--
-- Indeks untuk tabel `status_book`
--
ALTER TABLE `status_book`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_borrow`
--
ALTER TABLE `status_borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_event`
--
ALTER TABLE `status_event`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_request_book`
--
ALTER TABLE `status_request_book`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `status_user`
--
ALTER TABLE `status_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_status` (`status`),
  ADD KEY `user_level` (`level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `book`
--
ALTER TABLE `book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `borrow_book`
--
ALTER TABLE `borrow_book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `detail_borrow`
--
ALTER TABLE `detail_borrow`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `helper`
--
ALTER TABLE `helper`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `register_event`
--
ALTER TABLE `register_event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `request_book`
--
ALTER TABLE `request_book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `status_book`
--
ALTER TABLE `status_book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_borrow`
--
ALTER TABLE `status_borrow`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_event`
--
ALTER TABLE `status_event`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `status_request_book`
--
ALTER TABLE `status_request_book`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `status_user`
--
ALTER TABLE `status_user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_status` FOREIGN KEY (`status`) REFERENCES `status_book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `borrow_book`
--
ALTER TABLE `borrow_book`
  ADD CONSTRAINT `user_borrow` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_borrow`
--
ALTER TABLE `detail_borrow`
  ADD CONSTRAINT `det_book` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `det_borrow` FOREIGN KEY (`borrow_id`) REFERENCES `borrow_book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_borrow` FOREIGN KEY (`status`) REFERENCES `status_borrow` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `status_event` FOREIGN KEY (`status`) REFERENCES `status_event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `register_event`
--
ALTER TABLE `register_event`
  ADD CONSTRAINT `event_regis` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_regis` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `request_book`
--
ALTER TABLE `request_book`
  ADD CONSTRAINT `book_request` FOREIGN KEY (`book_id`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status_req` FOREIGN KEY (`status`) REFERENCES `status_request_book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_request` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_level` FOREIGN KEY (`level`) REFERENCES `level_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_status` FOREIGN KEY (`status`) REFERENCES `status_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
