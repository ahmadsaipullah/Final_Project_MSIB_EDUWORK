-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2023 at 02:45 PM
-- Server version: 8.0.30
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfilm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `resettoken` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `resettokenexp` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `nama`, `email`, `resettoken`, `resettokenexp`, `password`) VALUES
(1, 'admin', 'ahmadsaipullah140@gmail.com', 'NULL', NULL, '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `director_id` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`director_id`, `nama`, `email`) VALUES
(2, 'James Wan', 'jameswan15@gmail.com'),
(3, 'Peyton Reed', 'Peyton1@gmail.com'),
(4, 'Christopher McQuarrie', 'christopher@gmail.com'),
(5, 'Andres Muschietti', 'andreas@gmail.com'),
(6, 'Aaron Horvath ', ''),
(7, 'James Gunn', ''),
(8, 'Marc Forster', ''),
(9, 'Steven Caple Jr.', ''),
(10, 'Ayako Kōno', 'ayakooo@gmail.c0m'),
(11, 'Greta Gerwig', 'greta@gmail.com'),
(12, 'Christopher Nolan', '');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int NOT NULL,
  `genre_name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'drama'),
(2, 'action'),
(3, 'fantasy'),
(4, 'komedi aksi'),
(5, 'advanture'),
(10, 'horror'),
(11, 'horror comedy');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci,
  `director_id` int DEFAULT NULL,
  `genre_id` int DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `movie_link` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `actor` text COLLATE utf8mb4_general_ci,
  `durasi` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `judul`, `deskripsi`, `director_id`, `genre_id`, `cover_image`, `movie_link`, `actor`, `durasi`) VALUES
(3, 'Aquaman & The Lost Kingdom', 'Aquaman and the Lost Kingdom adalah bagian dari DCEU. Cerita Aquaman and the Lost Kingdom yakni tentang Arthur Curry yang harus bekerja sama dengan saudaranya, yaitu King Orm (Patrick Wilson untuk menghentikan Black Manta yang menjadi ancaman besar bagi kehidupan Atlantis.\r\nBlack Manta di sekuel ini jauh lebih berbahaya pada Lost Kingdom ketimbang film pertamanya. Soalnya, dalam film keduanya nanti Black Manta akan memiliki teknologi lebih canggih serta menguasai energi gelap yang bikin kekuatannya melesat.\"\"\"\"\"', 2, 3, 'aquaman.jpeg', 'youtube ', 'Jason Momoa, Ben Affleck, Patrick Wilson, Nicole Kidman, Amber Heard\"\"\"\"', '1j 50m'),
(4, 'Ant-Man and the Wasp: Quantumania', 'Scott Lang (Paul Rudd) dan Hope Van Dyne (Evangeline Lilly) kembali untuk melanjutkan petualangan mereka sebagai Ant-Man and the Wasp. Bersama-sama, dengan orang tua Hope Hank Pym (Michael Douglas) dan Janet Van Dyne (Michelle Pfeiffer), dan putri Scott Cassie Lang (Kathryn Newton), mereka menemukan diri mereka menjelajahi Quantum Realm.', 3, 3, 'antman.jpeg', NULL, 'Tom Cruise, Ving Rhames, Simon Pegg, Rebecca Ferguson, Vanessa Kirby, Hayley Atwell, Pom Klementieff, Shea Whigham, Esai Morales, Henry Czerny, Rob Delaney dan Cary Elwes.', '2j 4m'),
(5, 'Mission: Impossible - Dead Reckoning - Part One', 'Mission: Impossible - Dead Reckoning Part One adalah film mata-mata Amerika Serikat, sekuel ketujuh dari serial film Mission: Impossible', 4, 2, 'mission.jpg', NULL, 'Ezra Miller, Ben Affleck, Michael Keaton, Sasha Calle, Kiersey Clemons, Maribel Verdú, Ron Livingston', '2j 43m'),
(6, 'The Flash', 'The Flash adalah film superhero Amerika Serikat yang diangkat dari karakter DC Comics dengan judul yang sama. Film ini menjadi film ke-12 DC Extended Universe (DCEU).\r\nDi The Flash, Allen melakukan perjalanan ke masa lalu untuk mencegah pembunuhan ibunya, yang membawa konsekuensi yang tidak diinginkan.', NULL, 3, 'flash.jpg', NULL, 'Ezra Miller, Ben Affleck, Michael Keaton, Sasha Calle, Kiersey Clemons, Maribel Verdu, Ron Livingston', '2j 24m'),
(7, 'The Super Mario Bros Movie', 'The Super Mario Bros. Movie adalah film komedi petualangan animasi komputer yang diadaptasi dari permainan video Mario Nintendo.', NULL, 5, 'mario.jpg', NULL, 'Chris Pratt, Anya Taylor-Joy, Charlie Day, Jack Black, Keegan-Michael Key, Seth Rogen, Fred Armisen, Sebastian Maniscalco, Charles Martinet, Kevin Michael Richardson', '1j 32m'),
(8, 'A Man Call Otto', 'A Man Call Otto, film bioskop yang tayang di tahun 2023.Ketika sebuah keluarga muda yang bersemangat pindah ke rumah sebelah, Otto Anderson, duda pemarah, bertemu pasangannya dalam diri seorang wanita hamil yang cerdas bernama Marisol, yang mengarah ke persahabatan yang tidak terduga yang mengubah dunianya menjadi terbalik.\r\n', NULL, 4, 'otto.jpg', NULL, 'Tom Hanks, Mariana Treviño, Rachel Keller, Manuel Garcia-Rulfo', '2j 6m'),
(9, 'Transformers: Rise of the Beasts', 'Ini merupakan film ketujuh untuk semesta Transformers. Prime dipertemukan dengan Optimus Primal (disuarakan Ron Perlman), autobot berbentuk gorila yang dalam semesta waralaba Transformers adalah autobot yang telah diasingkan, menjadi bagian dari kelompok yang dikenal sebagai Maksimals. Pertemuan dua kekuatan penting ini terjadi di sebuah tempat dengan lanskap hutan belantara.\r\nPrimal mencoba mengingatkan Prime, bahwa akan datang suatu ancaman dari sesuatu yang sangat besar. Sesuatu yang tak pernah dilihat para autobots sebelumnya, yang akan menghancurkan kehidupan.\r\n', NULL, 3, 'transformers.jpg', NULL, 'Yoshitsugu Matsuoka, Haruka Tomatsu, Ayana Taketatsu, Kanae Itō, Rina Hidaka, Ayahi Takagaki, Miyuki Sawashiro, Hiroaki Hirata, Hiroki Yasumoto\r\nKōichi Yamadera, Toshiyuki Morikawa, Sayaka Kanda, Yoshio Inoue dan Takeshi Kaga\r\n', '2j 7m'),
(10, 'Barbie', 'Barbie menceritakan sosok Barbie yang tinggal di Barbie Land dan kemudian sebuah cerita terjadi.', NULL, 4, 'barbie.jpg', NULL, 'Margot Robbie, Will Ferrell dan Ryan Gosling', '1j 54m'),
(11, 'Oppenheinmer', 'Oppenheinmer, film bioskop yang tayang di tahun 2023. Oppenheimer adalah film biografi Amerika Serikat tahun 2023 yang disutradarai oleh Christopher Nolan dan diproduseri oleh Christopher Nolan, Emma Thomas dan Charles Roven. Naskah film ini ditulis oleh Christopher Nolan berdasarkan buku American Prometheus karya Kai Bird dan Martin J. Sherwin.\r\n', NULL, 2, 'oppenheimer.jpg', NULL, ': Cillian Murphy, Emily Blunt, Matt Damon, Robert Downey Jr., Florence Pugh', '2j 59m'),
(12, 'Guardians of the Galaxy Vol. 3', 'Guardians of the Galaxy Vol. 3, film bioskop yang tayang di tahun 2023. Masih terhuyung-huyung karena kehilangan Gamora, Peter Quill mengumpulkan timnya untuk mempertahankan alam semesta dan salah satu dari mereka - sebuah misi yang bisa berarti akhir dari Penjaga jika tidak berhasil.', NULL, 3, 'guardian.jpg', NULL, 'Chris Pratt, Zoe Saldana, Dave Bautista, Vin Diesel', '2j 2m'),
(13, 'Sword Art Online The Movie Progressive Scherzo Of Deep Night', 'Sword Art Online The Movie Progressive Scherzo Of Deep Night. Film yang memiliki judul Jepang, Sword Art Online: Progressive Movie - Kuraki Yuuyami no Scherzo ini mengadaptasi serial light novel Sword Art Online volume 5.Sword Art Online, Progressive: Scherzo of Deep Night menceritakan tentang Asuna dan Kirito yang terjebak dalam dunia gim. Selama dua bulan mereka berdua terjebak di sana dan harus mengalahkan para musuh.', NULL, 5, 'sword.jpg', NULL, 'Yoshitsugu Matsuoka, Haruka Tomatsu, Ayana Taketatsu, Kanae Itō, Rina Hidaka, Ayahi Takagaki, Miyuki Sawashiro, Hiroaki Hirata, Hiroki Yasumoto\r\nKōichi Yamadera, Toshiyuki Morikawa, Sayaka Kanda, Yoshio Inoue dan Takeshi Kaga\r\n', '1j 59m'),
(14, 'Virgo and the Sparklings', 'Virgo and the Sparklings adalah film superhero asli Indonesia terbaru yang berbeda, karena menitikberatkan cerita pada karakter remaja. Film ini mengisahkan Riani, seorang gadis remaja berusia 15 tahun dengan kekuatan sinestesia yang memungkinkannya melihat warna dari suara dan kemampuan mengendalikan api.', NULL, 1, 'virgo.jpg', '', 'Adhisty Zara, fergi', '1 j 47 m'),
(15, ' Catatan Si Boy (2023)', 'Catatan Si Boy merupakan film drama romansa yang akan dirilis pada Tanggal 17 Agustus 2023. Cerita ini berpusat pada Boy, seorang idola di sekolah yang menjalin hubungan romantis dengan Nuke, seorang gadis cantik. Namun, hubungan mereka dipersulit oleh ayah Nuke yang tidak memberikan izin. Akibatnya, Nuke memutuskan untuk mengakhiri hubungan mereka, yang menyebabkan Boy merasa frustrasi.', NULL, 1, 'boy.jpg', NULL, 'Angga Yunanda, Syifa Hadju, Alyssa Daguise, Rebecca Klopper, Elmand, Michael Olindo, Arya Vasco', '2 j 6 m'),
(16, 'Gampang Cuan ', 'Mengalami kesulitan finansial, Sultan dan Bilqis harus memutar otak ketika meninggalnya sang ayah justru mewariskan utang sebesar 300 juta rupiah. Memperkeruh suasana, adik mereka datang dan minta dibiayai kuliah karena menurutnya dia adalah satu-satunya yang bisa diharapkan keluarga. Bagaimana mereka menaklukan masalah ini terutama tanpa sepengetahuan sang ibunda yang mudah stres?', NULL, 4, 'cuan.jpg', 'https://www.youtube.com/watch?v=3XpIr4LQ_hc&ab_channel=TemataStudios', 'Vino G Bastian, Anya Geraldine, Alzi Marker, Meriam Bellina, Dimas Danang, Iang Darmawan, Anya Zen', '1 j 40 m'),
(17, 'Budi Pekerti', 'Guru dimaknai sebagai sosok yang digugu dan ditiru. Namun, apa jadinya ketika sikap guru yang cenderung buruk tertangkap kamera dan viral di media sosial?Itulah yang terjadi pada Bu Prani, guru BK yang berselisih dengan pengunjung pasar dan viral hingga semua orang di sekolah tahu. Akibatnya, keluarganya dirundung dan dicari-cari kesalahannya.', NULL, 1, 'budipekerti.jpg', 'https://youtu.be/3VkYiatpTVQ', 'Sha Ine Febriyanti, Angga Yunanda, Prilly Latuconsina, Dwi Sasono, Omara Esteghlal, Ari Lesmana', NULL),
(18, '172 Days', 'Pernikahannya dengan Amer Azzikra menjadi hal yang amat indah dan berharga bagi Zira. Bukan hanya memberikan kenangan manis, pernikahan ini juga membuat Zira menjadi pribadi yang lebih baik. Sayang, semua itu terlalu singkat. Mereka hanya bisa bersama selama 172 hari karena ajal menjemput Amer lebih dahulu.', NULL, 1, '172days.jpg', 'https://youtu.be/IPRBKGxCCZQ', ' Yasmin Napper, Bryan Domani, Yoriko Angeline, Amara Sophie, Abun Sungkar, Adhitya Putri, Ridwan Ghany, Cindy Fatikasari, Tengku Firmansyah, Meisya Siregar, Hamas Syahid, Oki Setiana Dewi', '1 j 33 m'),
(66, 'Perjamuan iblis', ' Perjamuan Iblis', 2, NULL, 'perjamuan_iblis.jpg', '', 'Putry Ayudya, Epy Kusnandar', '1 j 55 m');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int NOT NULL,
  `movie_id` int DEFAULT NULL,
  `reviewer_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `review_date` date DEFAULT NULL,
  `review_text` text COLLATE utf8mb4_general_ci,
  `rating` decimal(3,1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `movie_id`, `reviewer_name`, `review_date`, `review_text`, `rating`) VALUES
(1, 3, 'fergi', '2023-12-10', 'Filmnya Bagus Sekali', 5.0),
(2, 4, 'septi ', '2023-12-13', 'Dukungan visual yang luar biasa dalam setiap adegan menghidupkan dunia fantasi ini, dengan efek khusus yang memukau dan gambar-gambar yang memanjakan mata. Selain itu, akting para pemainnya membawa kedalaman emosional yang luar biasa, membuat penonton terhubung dengan perjalanan yang mereka lalui.', 5.0),
(7, 10, 'AHMAD', '2023-12-12', 'lorem 200', 4.0),
(8, 3, 'Bonbon', '2023-12-21', 'sfsgsgs', 2.0),
(11, 3, 'lorem', '2023-12-14', 'dsdsds', 1.9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`),
  ADD KEY `fk_movies_directors` (`director_id`),
  ADD KEY `fk_movies_genre` (`genre_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `director_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1717;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `fk_movies_directors` FOREIGN KEY (`director_id`) REFERENCES `director` (`director_id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `fk_movies_genre` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
