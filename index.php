<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel");

$aktif = 'home';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home - SMK Negeri 1 Wanareja</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SMK Negeri 1 Wanareja</span><br>
					<span class="visi">Mewujudkan SMK Berkarakter, Berkompeten dan Unggul.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- hero image -->
		<div class="hero">
			<img src="resources/images/banner_1.jpg" alt="">
		</div>
		<div class="sambutan bg-white p-4 mb-4">
    <div class="title mb-3">
        Selayang Pandang Kepala Sekolah
    </div>
    <div class="row">
        <div class="col-md-3 text-center">
            <img src="resources/images/kepala_sekolah.jpg" alt="Foto Kepala Sekolah" class="img-fluid rounded-circle mb-3" width="150px">
        </div>
        <div class="col-md-9">
            <p>
                Assalamu'alaikum Warahmatullahi Wabarakatuh,  
            </p>
            <p style="text-align: justify;">
                Selamat datang di website resmi SMK Negeri 1 Wanareja. Kami berkomitmen untuk memberikan layanan pendidikan terbaik dengan mengedepankan nilai-nilai karakter, kompetensi, dan keunggulan. Website ini diharapkan dapat menjadi sarana informasi yang bermanfaat bagi siswa, guru, dan masyarakat umum. Mari bersama-sama kita wujudkan generasi yang berakhlak mulia, cerdas, dan kompeten.
            </p>
            <p>
                Wassalamu'alaikum Warahmatullahi Wabarakatuh,  
                <br><strong>- Kepala Sekolah SMK Negeri 1 Wanareja</strong>
            </p>
        </div>
    </div>
</div>


		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Informasi Terbaru
				</div>
				<?php while($artikel = mysqli_fetch_assoc($query)) : ?>
				<div class="artikel">
					<div class="info">
						<div class="post mb-2">
							<span class="tgl"><?= date('d M y', strtotime($artikel['tanggal'])) ?></span>
							<span class="judul"><a href="detail_artikel.php?id=<?= $artikel['id'] ?>"><?= $artikel['judul'] ?></a></span>
						</div>
					</div>
					<div class="detail">
						<div class="clearfix" style="text-align: justify;">
							<img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="200px" class="float-left mr-2">
							<?= substr($artikel['isi'], 0, 150) . '...' ?>
						</div>
					</div>
					<hr>
				</div>
				<?php endwhile; ?>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>

	</div>

	<footer class="footer bg-gradient-dark text-white py-5">
    <div class="container">
        <!-- Logo dan Nama Sekolah -->
        <div class="row text-center mb-4">
            <div class="col-12">
                <img src="resources/images/logo.png" alt="Logo Sekolah" width="80" class="mb-3">
                <h5 class="text-uppercase font-weight-bold">SMK Negeri 1 Wanareja</h5>
                <p class="mb-0">Mewujudkan SMK Berkarakter, Berkompeten, dan Unggul</p>
            </div>
        </div>

        <!-- Konten Footer -->
        <div class="row">
            <!-- Tentang Sekolah -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase font-weight-bold mb-3">Tentang Kami</h5>
                <p style="text-align: justify;">
                    SMK Negeri 1 Wanareja berkomitmen mencetak generasi yang siap kerja, berkarakter, dan unggul. Kami hadir untuk memberikan pendidikan berkualitas kepada siswa-siswi.
                </p>
            </div>

            <!-- Navigasi Cepat -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase font-weight-bold mb-3">Navigasi Cepat</h5>
                <ul class="list-unstyled">
                    <li><a href="index.php" class="text-white text-decoration-none d-block mb-2">Beranda</a></li>
                    <li><a href="tentang.php" class="text-white text-decoration-none d-block mb-2">Tentang Kami</a></li>
                    <li><a href="kontak.php" class="text-white text-decoration-none d-block mb-2">Kontak</a></li>
                    <li><a href="artikel.php" class="text-white text-decoration-none d-block mb-2">Artikel</a></li>
                </ul>
            </div>

            <!-- Hubungi Kami -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase font-weight-bold mb-3">Hubungi Kami</h5>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Wanareja No. 123, Cilacap</p>
                <p><i class="fas fa-phone"></i> (0280) 123-456</p>
                <p><i class="fas fa-envelope"></i> info@smk1wanareja.sch.id</p>
                <div>
                    <a href="#" class="text-white me-2 social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-2 social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2 social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white social-icon"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-4">
            <p class="mb-0">2019 - <?= date('Y') ?> © SMK Negeri 1 Wanareja. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<!-- Tambahkan Font Awesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Tambahkan CSS untuk efek hover dan responsif -->
<style>
    .footer {
        background: linear-gradient(135deg, #0a0a0a, #333);
        color: #fff;
    }

    .footer img {
        border-radius: 50%;
    }

    .footer a {
        transition: all 0.3s ease;
    }

    .footer a:hover {
        color: #f39c12;
        text-decoration: underline;
    }

    .footer .social-icon {
        font-size: 20px;
        transition: transform 0.3s ease;
    }

    .footer .social-icon:hover {
        transform: scale(1.2);
    }

    .footer h5 {
        font-weight: 600;
    }

    .footer p {
        font-size: 14px;
    }

    @media (max-width: 767px) {
        .footer .social-icon {
            font-size: 18px;
        }
    }
</style>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>