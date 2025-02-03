-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sekolahku
CREATE DATABASE IF NOT EXISTS `sekolahku` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sekolahku`;

-- Dumping structure for table sekolahku.tbl_artikel
DROP TABLE IF EXISTS `tbl_artikel`;
CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `id_kategori` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `tbl_artikel_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_artikel` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_artikel: ~5 rows (approximately)
INSERT INTO `tbl_artikel` (`id`, `judul`, `isi`, `tanggal`, `foto`, `id_kategori`) VALUES
	(12, 'Upacara Hari Pahlawan Tahun 2018', '<p>Marilah kita panjatkan puji dan syukur kehadirat Allah SWT-Tuhan Yang Maha Esa, karena atas limpahan rahmat dan karunia-Nya, bangsa Indonesia pada hari ini memperingati Hari Pahlawan Tahun 2018.</p><p>Setiap tahun pada tanggal 10 Nopember, bangsa Indonesia memperingati Hari Pahlawan untuk mengenang peristiwa pertempuran di Surabaya pada 73 tahun silam yang merupakan perang fisik pertama setelah bangsa Indonesia menyatakan kemerdekaannya.</p><p>Di bulan Nopember ingatan kolektif bangsa akan tertuju pada keberanian, semangat pantang menyerah serta pengorbanan tanpa pamrih para pahlawan yang telah gugur mendahului kita. Para syuhada bangsa tersebut telah mewariskan Negara Kesatuan Republik Indonesia yang berdiri kokoh sampai saat ini dan untuk selamanya.</p><p>&nbsp;</p><p><strong>Saudara sebangsa dan setanah air</strong></p><p>Prosesi peringatan Hari Pahlawan khususnya Upacara Pengibaran Bendera Merah Putih serta mengheningkan Cipta Secara Serantak Selama 60 Detik seperti yang saat ini kita lakukan, juga dilaksanakan di seluruh pelosok tanah air, bahkan di Perwakilan Negara Republik Indonesia di luar negeri. Seluruh rangkaian kegiatan peringatan Hari Pahlawan tersebut bertujuan untuk memperkuat nilai-nilai kepahlawanan, mempertebal rasa cinta tanah air dan meneguhkan semangat pengabdian bagi bangsa dan Negara di hati sanubari bangsa Indonesia.</p><p>Peringatan Hari Pahlawan bukan semata sebuah acara namun harus sarat makna, bukan hanya sebagai prosesi namun substansi setiap peringatan Hari Pahlawan harus dapat menggali dan memunculkan semangat baru dalam implementasi nilai-nilai kepahlawanan dalam kehidupan sehari-hari. Hal ini penting karena nilai kepahlawanan bukan bersifat statis namun dinamis, bisa menguat bahkan dapat melemah. Untuk itu, kiranya seluruh rangkaian kegiatan peringatan Hari Pahlawan harus menjadi energi dan semangat baru mewarisi nilai kejuangan dan patriotisme dalam membangun bangsa Indonesia.</p><p>&nbsp;</p><p><strong>Hadirin Sekalian</strong></p><p>Peringatan Hari Pahlawan, menjadi momentum bagi bangsa Indonesia untuk melakukan introspeksi diri. Sampai seberapa jauh setiap komponen bangsa dapat mewarisi nilai-nilai kepahlawanan, melanjutkan perjuangan, mengisi kemerdekaan demi mencapai Negara Kesatuan Republik Indonesia yang sejahtera, adil dan makmur.</p><p>Pada hakekatnya setiap perjuangan pasti ada hasilnya namun tidak ada kata akhir/berhenti untuk berjuang. Setiap etape perjuangan berlanjut pada etape perjuangan berikutnya sesuai tuntutan lingkungan strategis. Oleh karenanya peringatan Hari Pahlawan harus melahirkan ide dan gagasan mentransformasikan semangat pahlawan menjadi keuletan dalam melaksanakan pembangunan. Mentransformasikan keberanian melawan penjajah menjadi inspirasi mengusir musuh bersama bangsa saat ini antara lain kemiskinan. Selanjutnya transformasi kecerdikan para pahlawan dalam mengatur strategi, menjadikan inspirasi rakyat Indonesia untuk melakukan inovasi cerdas memperkuat daya saing bangsa dalam pergaulan dunia.</p><p>&nbsp;</p><p><strong>Hadirin yang berbahagia</strong></p><p>Setiap zaman pasti ada pahlawannya dan setiap pahlawan pasti berkiprah di eranya. Terkait dengan hal tersebut, bangsa Indonesia memerlukan pahlawan baru. Indonesia saat ini membutuhkan sosok yang berdedikasi dan berprestasi pada bidangnya untuk memajukan negeri.</p><p>Terlebih lagi dibutuhkan sosok pemuda Indonesia sebagai generasi penerus yang mempunyai jiwa patriotisme, pantang menyerah, berdisiplin, berkarakter menguasai ilmu pegetahuan dan keterampilandi bidangnya. Sadar bahwa negerinya memiliki beragam agama, suku, adat istiadat namun mampu memanfaatkan keberagaman sebagai modal sosial dipergunakan untuk keunggulan Indonesia dalam pergaulan dunia. Bukan justru untuk memanfaatkan perbedaan demi kepentingan pribadi maupun golongan yang menjadi penghambat bagi kemajuan Indonesia.</p><p>Negeri ini membutuhkan pemuda yang kokoh dengan jati dirinya, mempunyai karakter lokal yang luhur, percaya diri dan peka terhadap permasalahan sosial sehingga mampu terlibat dalam usaha-usaha kesejahteraan sosial, memberikan pelayanan sosial bagi mereka yang membutuhkan pertolongan sosial.</p><p>Negeri ini juga membutuhkan pemuda yang mempunyai pandangan global, mampu berkolaborasi untuk kemajuan bangsa dan mampu memanfaatkan kemajuan teknologi untuk menjadikan Indonesia diperhitungkan dalam bersaing dan bersanding dengan Negara lain khususnya ketika negeri ini memasuki era revolusi industri 4.0.</p><p>Pada akhirnya melalui momentum Peringatan Hari Pahlawan, saya mengajak marilah kita berbuat yang terbaik bagi bangsa ini. Mari berkontribusi bagi kemajuan bangsa. Mulai dari yang dapat kita lakukan, mulai dari lingkungan terdekat yang pada akhirnya memberikan kekuatan dan ketahanan bagi bangsa dan Negara.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2018.jpg', 12),
	(13, 'Seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 Tahun 2019', '<p>UT School bekerjasama dengan SMK Negeri 1 Wanareja akan melaksanakan seleksi Calon Siswa UT School Angkatan 26, 27 dan 28 pada awal tahun 2019 nanti.</p><p>Kesempatan ini terbuka untuk umum baik Alumni SMK Negeri 1 Wanareja maupun dari sekolah lain boleh mengikuti asalkan memenuhi kriteria yang dipersyaratkan.</p><p>Tentang UT School :</p><ul><li><p>Visi</p><p>Menjadi lembaga pendidikan keterampilan mekanik dan operator alat &ndash; alat berat terbaik di dunia.</p></li><li><p>Misi</p><ul><li>Menciptakan sumberdaya manusia yang berkualitas, profesional dan berwawasan internasional.</li><li>Menjadi sumber IPTEK terapan.</li><li>Menciptakan jaringan yang luas dengan industri &ndash; industri didalam dan di luar negeri</li></ul></li><li><p>Tujuan</p><ul><li>Menciptakan tenaga terampil di bidang mekanik, operator dan instruktur alat berat profesional yang siap karya dan siap latih.</li><li>Menjadi lembaga pendidikan keterampilan mekanik terbaik di dunia.</li><li>Turut serta untuk mencerdaskan kehidupan bangsa.</li></ul></li><li><p>Nilai</p><ul><li>Integritas (integrity)</li><li>Santun (Good Manners)</li><li>Berani (Courageous)</li></ul></li></ul><p>============================================</p><ol><li>UT SCHOOL membuka kelas angkatan 26 tahun ajaran 2019/2020&nbsp;<strong>Prodi MEKANIK ALAT BERAT</strong>&nbsp;untuk alumni SMK/SMA tahun 2016/2017/2018 jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><ol><li>UT SCHOOL membuka kelas angkatan 27 dan 28 tahun ajaran 2019/2020/2021 Prodi&nbsp;<strong>MEKANIK DAN OPERATOR ALAT BERAT</strong>&nbsp;untuk siswa SMK/SMA yang masih duduk di kelas 3&nbsp; jurusan TKR/TSM/TAB, Mesin Produksi, Listrik Arus Kuat (TITL) dan IPA.</li></ol><p>Dengan kriteria jenis kelamin laki-laki, tinggi badan minimum 164 CM, Tidak berkacamata, Tidak Bertato, Tidak Butawarna, Tidak Bertindik serta Sehat Jasmani dan Rohani.</p><p>Waktu Pendaftaran mulai Sekarang sampai dengan akhir Desember 2018</p><p>Tempat Pendaftaran di BKK SMK Negeri 1 Wanareja</p><p><strong>Pelaksanaan test adalah:</strong></p><ul><li>Hari, tanggal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : Senin dan Selasa, 14 dan 15 Januari 2019</li><li>Waktu&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 07.30 sampai selesai</li><li>Tempat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp; Aula SMK Negeri 1 Wanareja</li><li>Yang berminat bisa langsung mengisi Formulir disini&nbsp;<a target="_blank" href="https://goo.gl/rsWEUv">https://goo.gl/rsWEUv</a></li></ul><p>Demikian info dari BKK Mandiri SMK Negeri 1 Wanareja. Semoga informasi ini bermanfaat. Jangan lupa share melalui sosial media kepada sahabat, kerabat atau teman yang membutuhkan.</p>', '2020-01-10', '20200110-seleksi-calon-siswa-ut-school-angkatan-26,-27-dan-28-tahun-2019.jpg', 3),
	(14, 'Belajar Sehari Di Luar Kelas', '<p>Menindaklanjuti Surat dari Cabang Dinas Pendidikan Wilayah X Pemerintah Provinsi Jawa Tengah nomor : 427/01520/XI/2019 dan Surat dari Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Keluarga Berencana nomor : 421.7/35551 Tanggal 31 Oktober 2019 hal Pelaksanaan Sehari Belajar di Luar Kelas bahwa merupakan salah satu bentuk pengembangan Sekolah Ramah Anak.</p><p>Pada hari kamis, 7 November 2019 SMK Negeri 1 Wanareja melaksanakan Belajar sehari di luar kelas dengan urutan acara sebagai berikut :</p><ul><li>Menyambut siswa yang datang ke sekolah dengan senyum, sapa, salam. Kegiatan ini bertujuan untuk menanamkan Penguatan Pendidikan Karakter (PPK).</li><li>Apel Pagi bersama tim &amp; siswa Menyanyikan lagu Indonesia Raya (3 stanza).</li><li>Seluruh warga sekolah menyanyikan lagu Indonesia Raya 3 stanza dengan sikap siap sempurna.</li><li>Siswa diajak untuk melaksanakan cuci tangan sebelum makan. Kegiatan ini bertujuan untuk membiasakan Prilaku Hidup Bersih dan Sehat (PHBS).</li><li>Berdoa bersama sebelum makan dilakukan untuk meningkatkan keimanan dan ketakwaan terhadap Tuhan Yang Maha Esa Sarapan bersama, siswa memakan sarapan sehat yang disiapkan oleh orangtua masing-masing.</li><li>Berdoa setelah makan.</li><li>Cuci tangan setelah makan.</li><li>Siswa diajak untuk memeriksa lingkungan sekolah. Tanaman, barang, atau hal-hal yang membahayakan anak agar disingkirkan.</li><li>Memeriksa lampu, peralatan listrik, dan kran air. Jika tidak dipakai, agar dimatikan untuk menghemat energi.</li><li>Melaksanakan kegiatan membaca buku di luar kelas selama 15 menit untuk meningkatkan gerakan literasi sekolah (GLS).</li><li>Melaksanakan simulasi evakuasi bencana melalui lagu dan gerak selama 10 menit. Melaksanakan senam germas selama 5 menit.</li><li>Siswa diajak melaksanakan permainan tradisional selama 45 menit. Permainan ini disesuaikan dengan masing-masing daerah.</li><li>Melakukan tepuk hak anak dan yel-yel sekolah ramah anak selama 7 menit.</li><li>Melakukan deklarasi sekolah ramah anak selama 5 menit Pelantikan Tim Sekolah Ramah Anak selama 5 menit.</li><li>Masing-masing sekolah diharapkan membentuk Tim Sekolah Ramah Anak Kegiatan akhir yaitu penutupan.</li><li>Seluruh siswa diajak menyanyikan lagu Maju Tak Gentar (5 menit).</li></ul>', '2020-01-10', '20200110-belajar-sehari-di-luar-kelas.jpg', 3),
	(15, 'Upacara Hari Pahlawan Tahun 2019', '<p>Wanareja &ndash; SMK Negeri 1 Wanareja pada hari Minggu, 10 November 2019 walaupun bertepatan dengan hari libur tetap melaksanakan Upacara Memperingati Hari Pahlawan tahun ini. Upacara hari ini diikuti oleh semua Guru, Karyawan &amp; Siswa dengan penuh hikmad. Sebagai pembina upacara beliau Bapak Dayatudin, SP menyampaikan amanat dari Menteri Sosial Republik indonesia Juliani P Batubara.</p><p>Berikut amanat yang disampaikan pada Upacara Hari Pahlawan tahun ini :</p><p>Assalamu&rsquo;alaikum WR.Wb.<br />salam sejahtera bagi kita semua<br />Om Swasti Astu<br />Nano Buddhaya<br />Salam Kebajikan</p><p>Bapak/Ibu, sebangsa dan setanah air</p><p>Puji syukur marilah kita panjatkan kehadirat Allah SWT, Tuhan Yang Maha Kuasa, atas limpahan rahmat dan karuniaNya, pada hari ini di seluruh pelosok tanah air dan Perwakilan RI di seluruh Negeri, kita dapat melaksanakan Upacara Bendera dan mengheningkan Cipta serentak selama 60 detik untuk memperingati Hari Pahlawan 10 November 2019 dengan khidmat.</p><p>Setiap Hari Pahlawan, kita diingatkan kembali kepada peristiwa pertempuran 10 November 1945 di Surbaya sebagai salah satu momen paling bersejarah dalam merebut kemerdekaan Indonesia.</p><p>Pada pertempuran tersebut rakyat bersatu padu, berjuang, pantang menyerah melawan penjajah yang ingin menancapkan kembali kekuasaannya di Indonesia.</p><p>Peristiwa Perang mengingatkan kita bahwa kemerdekaan yang kita rasakan saat ini tidaklah datang begitu saja, namun memerlukan perjuangan dan pengorbanan yang luar biasa dari para pendahulu negeri. semangat yang ditunjukkan para pahlawan dan pejuang tersebut hendaknya perlu terus ditumbuhkembangkan di dalam hati sanubari segenap insan Warga Negara Indonesia.</p><p>Dengan Peringatan Hari Pahlwan diharapkan kita akan lebih menghargai jasa dan pengorbanan para pahlawan, sebagaimana ungkapan salah seorang The Founding Fathers kita Bung Karno yang menyatakan bahwa &ldquo;&hellip;.hanya bangsa yang menghargai jasa para pahlawannya dapat menajdi bangsa yang besar&hellip;&rdquo;. Selain itu peringatan Hari Pahlawan kita bangkitkan semangat berinovasi bagi anak &ndash; anak bangsa untuk menjadi pahlawan masa kini, sebagaimana tema peringatan hari pahlawan masa kini.</p><p>Menjadi Pahlawan Masa Kini dapat diakukan oleh siapapun warga negara Indonesia, dalam bentuk aksi &ndash; aksi nyata memperkuat keutuhan NKRI, seperti tolong menolong sesama yang terkena musibah, tidak melakukan provokasi yang dapat menggangu ketertiban umum, tidak menyebarkan berita hoax, tidak melakukan perbuatan anarkis atau merugukan orang lain dan sebagainnya.</p><p>Jika dahulu semangat kepahlawanan ditunjukkan melalui pengorbanan tenaga, harta bahakan nyawa. sekarang, untuk menajdi pahlawa, bukan hanya mereka yang berjuang mengangkat senjata mengusir penjajah, tetapi kita juga bisa, dengan cara menorehkan prestasi di berbagai bidang kehidupan, memberikan kemaslahatan bagi masyarakt, membawa harum nama bangsa di mata Internasional.</p><p>Peringatan Hari Pahlawan kiranya dapat meningkatkan kesadaran kita untuk lebih mencintai tanah air dan menjaganya sampai akhir hayat.</p><p>Jangan biarkan keutuhan NKRI yang telah dibangun para pendahulu negeri dengan tetesan darah dan air mata menjadi sia-sia. jangan biarkan tangan-tangan jahil atau pihak yang tidak bertanggungjawab merusak persatuan dan kesatuan bangsa. jangan biarkan negeri kita terkoyak, tercerai berai, terprovokasi untuk saling menghasut dan berkonflik satu sama lain.</p><p>Mari kita maknai hari pahlawan hari pahlawan ini dengan wujud nyata, bekerja dan bekerja membangun negeri menuju Indonesia maju.</p><p>Saudara sebangsa dan setanah air, hari pahlawan kiranya bukan hanya bersifat seremonial semata tetapi dapat diisi dengan berbagai akifitas yang dapat menyuburkan rasa nasionalisme dan meningkatkan rasa kepedulian untuk menolon sesama yang membutuhkan.</p><p>Dengan menjadikan diri kita sebagai Pahlawan masa kini, maka permasalahan yang melanda bangsa dewasa ini dapat teratasi. untuk itu marilah kita terus menerus berupaya memupuk nilai kepahlawanan agar tumbuh subur dalam hati sanubari segenap insan masyarakat Indonesia.</p><p>Selamat Hari Pahlawan 2019, semoga Allah SWT, Tuhan Yang Maha Kuasa senantiasa memberikan bimbingan dan kekuatan kepada bangsa Indonesia agar dapat menjaga keutuhan NKRI yang telah diperjuangkan oleh para pendahulu negeri. sekali lagi jadilah pahlawan masa kini yang membanggalkan negeri.</p><p>Sekian, Terima Kasih<br />Wassalamu&rsquo;alaikum Wr.Wb.</p>', '2020-01-10', '20200110-upacara-hari-pahlawan-tahun-2019.jpg', 10),
	(18, 'HUT Pramuka Dwi Pantara SD N 2 Sumber Bahagia', '<p><strong>Peringatan HUT ke-1 Pramuka DWI PANTARA SD N 2 Sumber Bahagia Bersama KKN Unila Periode 1 Tahun 2025</strong></p><p>Marilah kita panjatkan puji dan syukur ke hadirat Tuhan Yang Maha Esa, karena atas limpahan rahmat dan karunia-Nya, pada hari ini kita dapat memperingati Hari Ulang Tahun ke-1 Pramuka DWI PANTARA SD N 2 Sumber Bahagia dengan penuh semangat dan kebersamaan, berkolaborasi dengan Mahasiswa KKN Universitas Lampung Periode 1 Tahun 2025.</p><p>Tahun ini menjadi momen yang sangat bersejarah karena untuk pertama kalinya kita merayakan HUT Pramuka DWI PANTARA. Peringatan ini menjadi simbol dari awal perjalanan panjang dalam membangun karakter siswa melalui pendidikan kepramukaan. Dengan dukungan dari berbagai pihak, termasuk Mahasiswa KKN Unila, diharapkan gerakan Pramuka di sekolah ini akan semakin berkembang dan memberikan dampak positif bagi peserta didik.</p><p><strong>Saudara-saudara yang saya banggakan,</strong></p><p>Sebagai bagian dari gerakan kepanduan yang telah lama berperan dalam membentuk generasi muda yang tangguh, Pramuka bukan hanya sekadar organisasi, tetapi juga wadah pendidikan karakter yang menanamkan nilai-nilai disiplin, tanggung jawab, dan kerja sama. Oleh karena itu, peringatan HUT Pramuka yang pertama ini tidak hanya sekadar seremoni, melainkan harus menjadi ajang refleksi bagi kita semua untuk terus mengembangkan nilai-nilai kepramukaan dalam kehidupan sehari-hari.</p><p>Dalam rangkaian peringatan HUT Pramuka tahun ini, berbagai kegiatan telah dilaksanakan, mulai dari upacara pengibaran bendera, lomba keterampilan kepramukaan, hingga bakti sosial yang melibatkan seluruh siswa dan mahasiswa KKN Unila. Kegiatan-kegiatan ini bertujuan untuk memperkuat semangat gotong royong, meningkatkan keterampilan, serta menanamkan kepedulian sosial di kalangan generasi muda.</p><p><strong>Hadirin yang berbahagia,</strong></p><p>Peringatan HUT ke-1 Pramuka DWI PANTARA ini juga menjadi momentum bagi kita untuk merefleksikan sejauh mana kita telah mengamalkan Dasa Dharma Pramuka dalam kehidupan sehari-hari. Setiap anggota Pramuka harus mampu menjadi teladan dalam berperilaku disiplin, jujur, dan bertanggung jawab. Pramuka harus mampu menghadapi tantangan zaman, termasuk dalam memanfaatkan teknologi dengan bijak serta mengembangkan kreativitas dalam berbagai bidang.</p><p>Di era modern ini, Pramuka diharapkan mampu beradaptasi dengan perkembangan zaman tanpa kehilangan jati diri dan nilai-nilai luhur yang telah diwariskan oleh para pendiri gerakan kepanduan. Oleh karena itu, sinergi antara gerakan Pramuka dengan berbagai elemen masyarakat, termasuk perguruan tinggi seperti Universitas Lampung, menjadi hal yang sangat penting dalam membangun karakter generasi muda yang cerdas, berintegritas, dan berdaya saing tinggi.</p><p><strong>Saudara-saudara sekalian,</strong></p><p>Setiap zaman melahirkan tantangannya sendiri, dan setiap tantangan membutuhkan sosok-sosok yang siap menghadapi dengan gagah berani. Oleh karena itu, generasi muda Pramuka harus mampu menjadi agen perubahan, baik dalam lingkungan sekolah, masyarakat, maupun dalam lingkup yang lebih luas. Kegiatan bersama KKN Unila dalam peringatan HUT ke-1 Pramuka ini merupakan salah satu bentuk nyata dari kolaborasi yang dapat memperkuat semangat kepemimpinan, kreativitas, serta kepedulian sosial di kalangan generasi muda.</p><p>Pada akhirnya, melalui peringatan HUT Pramuka yang pertama ini, marilah kita semua semakin termotivasi untuk berbuat yang terbaik bagi bangsa dan negara. Mari kita jadikan momentum ini sebagai awal untuk terus mengabdi, berkarya, dan berkontribusi bagi kemajuan masyarakat. Mulai dari hal kecil di lingkungan sekitar kita, hingga menciptakan perubahan yang lebih besar untuk masa depan yang lebih baik.</p><p>Selamat Hari Ulang Tahun ke-1 Pramuka DWI PANTARA SD N 2 Sumber Bahagia! Semoga semangat kepramukaan terus berkobar dan memberikan manfaat bagi kita semua.</p><p><strong>Jayalah Pramuka Indonesia!</strong></p>', '2025-02-02', '20250202-hut-pramuka-dwi-pantara-sd-n-2-sumber-bahagia.png', 10);

-- Dumping structure for table sekolahku.tbl_bukutamu
DROP TABLE IF EXISTS `tbl_bukutamu`;
CREATE TABLE IF NOT EXISTS `tbl_bukutamu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(80) DEFAULT NULL,
  `email` varchar(90) DEFAULT NULL,
  `isi` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_bukutamu: ~3 rows (approximately)
INSERT INTO `tbl_bukutamu` (`id`, `nama`, `email`, `isi`) VALUES
	(3, 'Fakhrul Fanani Nugroho', 'fakhrulnugroho@gmail.com', 'Websitenya sangat bagus dan menarik!'),
	(5, 'bhbgvgv', 'jhuhuhu@gmail.com', 'hubgyghuuj'),
	(6, 'Andika', 'andika30@gmail.com', 'hgfgegfugeurf');

-- Dumping structure for table sekolahku.tbl_ekskul
DROP TABLE IF EXISTS `tbl_ekskul`;
CREATE TABLE IF NOT EXISTS `tbl_ekskul` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_ekskul` varchar(50) DEFAULT NULL,
  `pembina` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pembina` (`pembina`),
  CONSTRAINT `tbl_ekskul_ibfk_1` FOREIGN KEY (`pembina`) REFERENCES `tbl_guru` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_ekskul: ~0 rows (approximately)

-- Dumping structure for table sekolahku.tbl_guru
DROP TABLE IF EXISTS `tbl_guru`;
CREATE TABLE IF NOT EXISTS `tbl_guru` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `no_hp` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `mata_pelajaran` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_guru: ~1 rows (approximately)
INSERT INTO `tbl_guru` (`id`, `nama`, `nip`, `jenis_kelamin`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `mata_pelajaran`, `alamat`, `foto`) VALUES
	(15, 'Nama Guru', '123456789098765432', 'L', '081234567890', 'Sumber Bahagia', '1980-10-23', 'Mata Pelajaran', 'Sumber Bahagia', 'nama-guru.png');

-- Dumping structure for table sekolahku.tbl_kategori_artikel
DROP TABLE IF EXISTS `tbl_kategori_artikel`;
CREATE TABLE IF NOT EXISTS `tbl_kategori_artikel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_kategori_artikel: ~3 rows (approximately)
INSERT INTO `tbl_kategori_artikel` (`id`, `nama_kategori`) VALUES
	(3, 'Kegiatan Sekolah'),
	(10, 'Event'),
	(12, 'Prestasi');

-- Dumping structure for table sekolahku.tbl_pengguna
DROP TABLE IF EXISTS `tbl_pengguna`;
CREATE TABLE IF NOT EXISTS `tbl_pengguna` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_pengguna: ~1 rows (approximately)
INSERT INTO `tbl_pengguna` (`id`, `nama`, `username`, `password`, `foto`) VALUES
	(3, 'Administrator', 'admin', '$2y$10$9uAKnax9/7HoMVtMFWDUEe6GhtWdq5SIn75AWwHnYboKctXCfybVG', 'administrator.jpg');

-- Dumping structure for table sekolahku.tbl_ppdb
DROP TABLE IF EXISTS `tbl_ppdb`;
CREATE TABLE IF NOT EXISTS `tbl_ppdb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ppdb` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_ppdb: ~1 rows (approximately)
INSERT INTO `tbl_ppdb` (`id`, `ppdb`) VALUES
	(1, '<p>SD Negeri 2 Sumber Bahagia, yang berlokasi di Desa Sumber Bahagia, Kecamatan Seputih Banyak, Kabupaten Lampung Tengah, Provinsi Lampung, telah membuka pendaftaran untuk Siswa Baru Tahun Ajaran 2025/2026. Sekolah ini berstatus negeri dengan akreditasi B dan menerapkan Kurikulum Merdeka.</p><p><strong>Informasi Pendaftaran:</strong></p><ul><li><p><strong>Alamat Sekolah:</strong> Sumber Bahagia, RT 19/RW 3, Dusun 5, Desa Sumber Bahagia, Kecamatan Seputih Banyak, Kabupaten Lampung Tengah, Provinsi Lampung, Kode Pos 34156.</p></li><li><p><strong>Kontak:</strong> Untuk informasi lebih lanjut, calon orang tua siswa dapat menghubungi melalui email di sdn2sumba@gmail.com.</p></li></ul><p><strong>Perubahan Sistem Penerimaan:</strong></p><p>Mulai tahun 2025, Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi telah mengganti istilah Penerimaan Peserta Didik Baru (PPDB) menjadi Seleksi Penerimaan Murid Baru (SPMB). Perubahan ini mencakup empat jalur penerimaan:</p><ol><li><p><strong>Jalur Domisili:</strong> Penyempurnaan dari sistem zonasi sebelumnya, mempertimbangkan jarak tempat tinggal calon siswa ke sekolah.</p></li><li><p><strong>Jalur Prestasi:</strong> Ditujukan bagi calon siswa dengan prestasi akademik maupun non-akademik.</p></li><li><p><strong>Jalur Afirmasi:</strong> Diperuntukkan bagi calon siswa dari keluarga kurang mampu.</p></li><li><p><strong>Jalur Perpindahan Orang Tua/Wali:</strong> Untuk calon siswa yang orang tua/walinya mengalami perpindahan tugas.</p></li></ol><p>Perubahan ini bertujuan untuk meningkatkan pemerataan akses pendidikan dan kualitas penerimaan siswa baru.</p><p><strong>Persyaratan Umum Pendaftaran:</strong></p><ul><li><p><strong>Usia:</strong> Calon siswa berusia minimal 6 tahun pada tanggal 1 Juli 2025.</p></li><li><p><strong>Dokumen yang Diperlukan:</strong></p><ul><li>Fotokopi Akta Kelahiran atau Surat Keterangan Lahir.</li><li>Fotokopi Kartu Keluarga.</li><li>Pas foto terbaru ukuran 3x4 cm sebanyak 2 lembar.</li></ul></li></ul><p><strong>Prosedur Pendaftaran:</strong></p><ol><li><p><strong>Pengambilan Formulir:</strong> Calon orang tua siswa dapat mengambil formulir pendaftaran di SD Negeri 2 Sumber Bahagia pada jam kerja.</p></li><li><p><strong>Pengisian dan Pengumpulan Formulir:</strong> Setelah mengisi formulir dengan lengkap, serahkan kembali ke pihak sekolah beserta dokumen yang diperlukan.</p></li><li><p><strong>Seleksi:</strong> Pihak sekolah akan melakukan seleksi sesuai dengan jalur pendaftaran yang dipilih.</p></li><li><p><strong>Pengumuman:</strong> Hasil seleksi akan diumumkan melalui papan pengumuman sekolah atau melalui kontak yang diberikan.</p></li></ol><p><strong>Catatan Penting:</strong></p><ul><li><p>Pastikan semua dokumen yang diserahkan adalah benar dan valid.</p></li><li><p>Informasi lebih lanjut mengenai jadwal pendaftaran dan tahapan seleksi dapat diperoleh dengan menghubungi pihak sekolah melalui email yang telah disediakan.</p></li></ul><p>Dengan memahami informasi di atas, diharapkan calon orang tua siswa dapat mempersiapkan proses pendaftaran dengan baik dan memastikan kelengkapan persyaratan yang dibutuhkan.<br /><br /><a target="_blank" href="https://lampung.siap-ppdb.com/#/">Daftar PPDB Disini!!</a></p>');

-- Dumping structure for table sekolahku.tbl_siswa
DROP TABLE IF EXISTS `tbl_siswa`;
CREATE TABLE IF NOT EXISTS `tbl_siswa` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `nis` int DEFAULT NULL,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `tempat_lahir` varchar(80) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `foto` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_siswa: ~3 rows (approximately)
INSERT INTO `tbl_siswa` (`id`, `nama`, `nis`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `foto`) VALUES
	(1, 'Fakhrul', 6315, 'L', 'Cilacap', '2002-07-15', 'Sidareja', 'fakhrul-fanani-nugroho.jpg'),
	(3, 'Fanani', 6316, 'L', 'Cilacap', '2002-07-16', 'Sidareja', 'fanani.jpg'),
	(4, 'Nugroho', 6317, 'L', 'Cilacap', '2002-02-18', 'Sidareja', 'nugroho.jpg');

-- Dumping structure for table sekolahku.tbl_tentang_website
DROP TABLE IF EXISTS `tbl_tentang_website`;
CREATE TABLE IF NOT EXISTS `tbl_tentang_website` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tentang_website` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_tentang_website: ~1 rows (approximately)
INSERT INTO `tbl_tentang_website` (`id`, `tentang_website`) VALUES
	(1, '<p>Tentang Website Negeri 2 Sumber Bahagia dan pembaharuan Versinya.</p><p>Website Negeri 2 Sumber Bahagia sebagai media yang dikelola oleh sekolah dan berada di Wilayah Negara Kesatuan Republik Indonesia tentunya Taat dan Patuh sepenuhnya terhadap Hukum dan Perundang Undangan yang berlaku di wilayah Negara Kesatuan Republik Indonesia. Dan mentaati Undang Undang Nomor 19 Tahun 2016 tentang ITE seperti yang tercantum pada tautan berikut&nbsp;<a target="_blank" href="https://www.smkn1wanareja.sch.id/wp-content/uploads/2018/04/UU-19-Tahun-2016-ite.pdf">UU Nomor 19 Tahun 2016</a>.</p>');

-- Dumping structure for table sekolahku.tbl_visi_misi
DROP TABLE IF EXISTS `tbl_visi_misi`;
CREATE TABLE IF NOT EXISTS `tbl_visi_misi` (
  `id` int NOT NULL AUTO_INCREMENT,
  `visi_misi` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sekolahku.tbl_visi_misi: ~1 rows (approximately)
INSERT INTO `tbl_visi_misi` (`id`, `visi_misi`) VALUES
	(1, '<p><strong>Visi SD Negeri 2 Sumber Bahagia</strong></p><p>Terwujudnya sekolah sebagai tempat belajar yang disenangi masyarakat untuk menghasilkan lulusan yang mampu mandiri, berdaya saing dalam kehidupan global.</p><p><strong>Misi SD Negeri 2 Sumber Bahagia</strong></p><ol><li>Meningkatkan proses pembelajaran secara profesional</li><li>Melayani peserta didik sesuai kebutuhan keilmuanya</li><li>Mengembangkan bakat siswa dengan pendekatan school basic center</li><li>Membimbing siswa berprilaku sesuai dengan pengamalan ajaran agama</li><li>Meningkatkan kepedulian warga masyarakat terhadap pendidikan.</li><li>Menanamkan sistem kompetensi yang sehat&nbsp;dan&nbsp;dinamis</li></ol><p><strong>10 Disiplin Kerja &quot;Budaya Malu&quot;</strong></p><ol><li>MALU DATANG TERLAMBAT&nbsp;</li><li>MALU TIDAR IKUT UPACARA HARI SENIN&nbsp;</li><li>MALU PULANG LEBIH AWAL</li><li>MALU TIDAR MASUR KERIA</li><li>MALU TERLALU SERING IZIN</li><li>MALU BERPAKAIAN DINAS TIDAK SESUAI PERATURAN</li><li>MALU BEKERJA TIDAK BERPROGRAM&nbsp;</li><li>MALU PEKERJAAN TERBENGKALAI&nbsp;</li><li>MALU BEKERJA TANPA TANGGUNG JAWAB</li><li>MALU TIDAK BERTATA KRAMA DAN&nbsp;SOPAN&nbsp;SANTUN</li></ol>');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
