-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 01:14 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`) VALUES
(11, 'pubg', '20241216084807.jpg'),
(12, 'fornite', '20241216084836.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(13, 'Action'),
(14, 'Puzzle'),
(15, 'Moba');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `judul_website` varchar(200) NOT NULL,
  `profil_website` text NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_wa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `email`, `alamat`, `no_wa`) VALUES
(1, 'auragame', 'Dengan mendownload game di AuraGame, Anda akan merasakan pengalaman bermain yang berbeda, seru, dan tak terlupakan. Nikmati visual yang memukau dengan detail grafis yang tajam dan animasi halus, memberikan sensasi bermain yang lebih nyata dan mendalam.Dari game petualangan, teka-teki, aksi, hingga game kasual, temukan berbagai genre yang sesuai dengan selera Anda. Bergabunglah dengan komunitas pemain kami, berbagi tips, berkompetisi, atau sekadar menikmati permainan bersama teman-teman Anda di seluruh dunia.Dapatkan hadiah harian, achievement spesial, dan event menarik yang membuat Anda selalu termotivasi untuk terus bermain.\r\n\r\n', 'https://instagram.com/auraangellll', 'ygyugd', 'enjelaura60@gmail.com', 'blumbang', '6281225879597');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(50) NOT NULL,
  `slug` varchar(200) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `link`) VALUES
(17, 'GTA 5', 'Grand Theft Auto V (GTA 5) adalah game aksi-petualangan open-world yang dikembangkan oleh Rockstar Games. Berlatar di kota fiksi Los Santos, yang terinspirasi dari Los Angeles, game ini menghadirkan tiga karakter utama: Michael De Santa, mantan perampok bank; Franklin Clinton, seorang pemuda ambisius dari jalanan; dan Trevor Philips, seorang kriminal tak terduga dengan sifat yang brutal.  \r\n\r\nPemain dapat menjelajahi dunia yang luas dengan kebebasan penuh, menyelesaikan misi utama yang berpusat pada kejahatan dan perampokan besar, serta menikmati aktivitas sampingan seperti balapan, olahraga, atau eksplorasi alam. GTA 5 juga menghadirkan GTA Online, mode multiplayer yang memungkinkan pemain berinteraksi dan bersaing secara daring.  \r\n\r\nGame ini menggabungkan aksi intens, alur cerita mendalam, dan kritik sosial yang tajam, menjadikannya salah satu karya terpopuler dalam industri game. Dengan grafis ciamik, gameplay variatif, dan kebebasan pemain, GTA 5 menjadi pengalaman gaming yang tak terlupakan.  ', '20241216084252.jpg', 'GTA-5', '13', '2024-12-16', 'aura', 'https://gta-v.en.softonic.com/downloading'),
(19, 'Subway Surfers', 'Subway Surfers adalah game endless runner yang mengajak pemain berlari di jalur kereta untuk menghindari kejaran seorang inspektur keamanan dan anjingnya. Dikembangkan oleh Kiloo dan SYBO Games, game ini menampilkan aksi seru di mana pemain harus melompat, bergeser, dan berpindah jalur untuk menghindari rintangan seperti kereta yang melaju atau penghalang.\r\n\r\nSepanjang permainan, pemain dapat mengumpulkan koin, menggunakan power-up seperti jetpack atau magnet koin, serta membuka berbagai karakter dan kostum. Dengan grafis penuh warna, lokasi yang terus diperbarui melalui tema World Tour, dan tantangan kompetitif, Subway Surfers menjadi salah satu game mobile yang paling populer dan menghibur di dunia.', '20241216085941.jpg', 'Subway-Surfers', '13', '2024-12-16', 'aura', 'https://apkpure.com/subway-surfers-1/com.kiloo.subwaysurf#google_vignette/downloading'),
(20, 'PUBG', 'PlayerUnknown’s Battlegrounds (PUBG) adalah game battle royale yang menantang pemain untuk bertahan hidup hingga menjadi yang terakhir di antara 100 pemain lainnya. Pemain mulai dengan melompat dari pesawat, mengumpulkan senjata dan perlengkapan, serta menghadapi pertempuran di medan yang luas dengan zona permainan yang terus menyusut.\r\n\r\nGame ini menawarkan berbagai mode permainan seperti solo, duo, dan squad, serta peta yang beragam seperti Erangel, Miramar, dan Sanhok. Dengan grafis realistis, senjata yang bervariasi, dan mekanisme permainan yang mendalam, PUBG menghadirkan pengalaman bertarung yang penuh strategi dan aksi.\r\n\r\nSebagai salah satu game battle royale terpopuler, PUBG menjadi pilihan favorit bagi pemain yang mencari adrenalin dan tantangan kompetitif.', '20241216091702.jpg', 'PUBG', '13', '2024-12-16', 'aura', 'https://apkpure.com/pubg-mobile-for-android/com.tencent.ig/'),
(21, 'Free Fire', 'Free Fire adalah game battle royale yang dikembangkan oleh Garena, di mana 50 pemain bertarung untuk menjadi yang terakhir bertahan hidup di sebuah pulau terpencil. Dengan durasi permainan sekitar 10 menit, game ini menawarkan aksi cepat dan strategi intens, menjadikannya pilihan favorit bagi para pemain mobile.\r\n\r\nPemain dapat memilih karakter dengan kemampuan unik, mengumpulkan senjata dan perlengkapan, serta bekerja sama dalam mode solo, duo, atau squad. Beragam peta seperti Bermuda dan Kalahari memberikan pengalaman bertarung yang seru dengan medan yang bervariasi.\r\n\r\nDengan grafis ringan dan kompatibilitas untuk berbagai perangkat, Free Fire cocok dimainkan oleh semua kalangan. Ditambah fitur kompetitif seperti Ranked Mode dan turnamen global, Free Fire telah menjadi salah satu game mobile paling populer di dunia.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '20241216092425.jpg', 'Free-Fire', '13', '2024-12-16', 'aura', 'https://apkpure.com/garena-free-fire-android-2024/com.dts.freefireth'),
(22, 'Battlefield', 'Battlefield adalah seri game first-person shooter (FPS) yang menawarkan pengalaman perang skala besar dengan pertempuran epik antara puluhan pemain. Dikenal dengan pertempuran darat, udara, dan laut yang intens, game ini memungkinkan pemain untuk mengendalikan berbagai kendaraan militer, seperti tank, pesawat, dan helikopter.\r\n\r\nDengan berbagai kelas karakter seperti Assault, Medic, Engineer, dan Support, pemain dapat berperan dalam tim dengan kemampuan unik untuk saling mendukung. Sistem destruksi lingkungan yang realistis memungkinkan pemain menghancurkan bangunan dan objek di medan perang, menciptakan dinamika yang terus berubah.\r\n\r\nGrafis yang luar biasa dan suara yang mendalam menambah keseruan Battlefield, menjadikannya sebagai salah satu seri game FPS terbaik yang menawarkan pengalaman perang yang mendalam dan tak terlupakan.', '20241216092730.jpg', 'Battlefield', '13', '2024-12-16', 'aura', 'https://apkpure.com/battlefield-mobile/com.ea.gp.odessa/download'),
(23, 'Candy Crush Saga', 'Candy Crush Saga adalah game puzzle yang seru dan adiktif, di mana pemain harus mencocokkan tiga atau lebih permen sejenis untuk menghapusnya dari papan dan menyelesaikan level. Dengan berbagai level yang semakin menantang, pemain dihadapkan pada berbagai rintangan dan objek yang harus dipecahkan.\r\n\r\nGame ini menawarkan power-up dan booster yang membantu pemain mengatasi level sulit, serta papan peringkat untuk bersaing dengan teman. Pembaruan berkala dan event spesial memberikan tantangan baru, menjadikan Candy Crush Saga sebagai game yang menyenangkan dan tidak pernah membosankan.\r\n\r\nDengan desain yang cerah dan gameplay yang mudah diakses, Candy Crush Saga menjadi salah satu game puzzle paling populer di dunia.', '20241216093153.jpg', 'Candy-Crush-Saga', '14', '2024-12-16', 'aura', 'https://apkpure.com/candy-crush-saga/com.king.candycrushsaga/downloading'),
(24, 'Tetris', 'Tetris adalah game puzzle ikonik di mana pemain harus menyusun blok berbentuk geometri yang jatuh, yang disebut tetrominoes, untuk membentuk garis horizontal yang lengkap. Setiap kali garis terbentuk, garis tersebut akan hilang, memberi ruang untuk blok-blok baru yang jatuh.\r\n\r\nGame ini menantang pemain untuk memutar dan memposisikan blok dengan cermat, sementara kecepatan jatuhnya semakin cepat seiring waktu. Dengan desain sederhana namun adiktif, Tetris menawarkan pengalaman bermain yang menantang dan menyenangkan, membuatnya menjadi salah satu game paling legendaris dan populer sepanjang masa.', '20241216093405.jpg', 'Tetris', '14', '2024-12-16', 'aura', 'https://apkpure.com/tetris%C2%AE/com.n3twork.tetris'),
(26, 'Mobile Legends', 'Mobile Legends Bang Bang adalah game MOBA (Multiplayer Online Battle Arena) yang dirancang untuk perangkat mobile. Dalam game ini, pemain bertarung dalam tim 5v5 untuk menghancurkan base lawan di medan perang yang terdiri dari tiga jalur utama (top, middle, bottom). Pemain dapat memilih berbagai hero dengan kemampuan unik yang terbagi dalam role seperti Tank, Marksman, Mage, Fighter, Assassin, dan Support.\r\n\r\nGame ini menawarkan kontrol sederhana dengan joystick virtual dan tombol aksi, menjadikannya mudah dimainkan di perangkat mobile. Setiap pertandingan berlangsung sekitar 10–20 menit, cocok untuk permainan cepat kapan saja. Mobile Legends juga terkenal dengan komunitas globalnya yang besar dan kompetisi esports seperti MPL dan World Championship.\r\n\r\nDengan hero yang terus diperbarui, skin menarik, dan berbagai mode permainan, Mobile Legends: Bang Bang menjadi salah satu game MOBA paling populer di dunia, khususnya di Asia Tenggara.', '20241216142539.jpg', 'Mobile-Legends', '15', '2024-12-16', 'aura', 'https://apkpure.com/mobile-legends/com.mobile.legends'),
(27, 'League of Legends', 'League of Legends (LoL) adalah game MOBA (Multiplayer Online Battle Arena) yang dikembangkan oleh Riot Games. Dalam game ini, dua tim yang masing-masing terdiri dari lima pemain bertarung untuk menghancurkan Nexus, yaitu markas utama tim lawan, sambil mempertahankan Nexus milik sendiri.\r\n\r\nSetiap pemain memilih Champion, karakter unik dengan kemampuan dan gaya bermain berbeda, yang terbagi dalam peran seperti Top Lane, Mid Lane, Jungle, ADC, dan Support. Pertandingan berlangsung di peta Summoner’s Rift, yang memiliki tiga jalur utama, jungle, dan struktur seperti turret, inhibitor, serta monster kuat seperti Baron dan Dragon.\r\n\r\nLeague of Legends menawarkan gameplay yang strategis, komunitas global yang aktif, dan pembaruan rutin yang menghadirkan champion baru serta skin menarik. Game ini juga menjadi ikon di dunia esports dengan turnamen besar seperti World Championship yang diikuti oleh pemain profesional dari seluruh dunia.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '20241216143207.jpg', 'League-of-Legends', '15', '2024-12-16', 'aura', 'https://apkpure.com/league-of-legends-wild-rift/com.riotgames.league.wildrift/'),
(28, 'Block Blast', 'Block Blast adalah game puzzle yang mengasyikkan di mana pemain harus menghancurkan blok dengan mencocokkan tiga atau lebih blok dengan warna atau bentuk yang sama. Tujuan dari game ini adalah untuk membersihkan papan permainan dengan cara menciptakan kombinasi blok yang serupa, baik secara horizontal atau vertikal. Setiap kali kombinasi yang valid terbentuk, blok-blok tersebut akan hilang, memberikan poin dan membuka lebih banyak ruang di papan.\r\n\r\nGame ini menawarkan berbagai level dengan tingkat kesulitan yang meningkat, di mana pemain harus berpikir strategis untuk mengatur blok dengan tepat. Selain itu, ada berbagai power-up yang membantu pemain menghapus lebih banyak blok sekaligus, seperti bom atau kemampuan khusus. Desain visual yang cerah dan berwarna-warni membuat permainan ini sangat menyenangkan dan mudah dimainkan, menjadikannya pilihan tepat untuk mengisi waktu luang.', '20241216143600.jpg', 'Block-Blast', '14', '2024-12-16', 'aura', 'https://apkpure.com/block-blast/com.block.juggle'),
(29, 'Honor of Kings', 'Honor of Kings adalah game MOBA (Multiplayer Online Battle Arena) yang sangat populer, dikembangkan oleh Tencent Games dan dirilis pada 2015. Dalam game ini, pemain membentuk tim yang terdiri dari lima orang untuk bertarung melawan tim lawan dengan tujuan utama menghancurkan markas mereka, yaitu Nexus. Permainan berlangsung di peta yang terbagi menjadi tiga jalur utama dan hutan, di mana pemain memilih karakter atau hero dengan kemampuan unik.\r\n\r\nSetiap hero memiliki peran tertentu, seperti Fighter, Mage, Marksman, Tank, atau Support, dan pemain harus bekerja sama dengan tim untuk meraih kemenangan. Selain itu, permainan ini juga menyediakan berbagai mode, termasuk mode 5v5 yang paling populer, serta mode yang lebih singkat dan kasual.\r\n\r\nHonor of Kings memiliki grafis yang indah dan desain karakter yang terinspirasi dari sejarah dan mitologi Tiongkok. Dengan mode permainan yang dinamis, kustomisasi hero, dan komunitas esports yang aktif, game ini terus menjadi pilihan utama di kalangan penggemar game MOBA, terutama di Asia.', '20241216144326.jpg', 'Honor-of-Kings', '15', '2024-12-16', 'aura', 'https://apkpure.com/honor-of-kings/com.levelinfinite.sgameGlobal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`) VALUES
(1, 'aura', 'aura', 'c11807299e8ba167645c32f333dddbfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
