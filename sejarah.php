<?php 

require_once 'koneksi.php';
$aktif = 'sejarah'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sejarah SD N 2 Sumber Bahagia</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Menambahkan Google Font -->
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<style>
		/* Menambahkan beberapa style CSS untuk mempercantik tampilan */
		body {
			font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto */
		}
		.sejarah-content {
			background-color: #f8f9fa;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
		.sejarah-content p {
			line-height: 1.6;
		}
		.sejarah-content h2 {
			color: #007bff;
			font-size: 32px;
			font-weight: 700;
		}
		.sejarah-content img {
			width: 100%;
			height: auto;
			border-radius: 10px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SD Negeri 2 Sumber Bahagia</span><br>
					<span class="visi">Mewujudkan Siswa Berkarakter, Berkompeten dan Unggul.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Sejarah SD N 2 Sumber Bahagia
				</div>
				
				<!-- Gambar Sekolah -->
				<div class="sejarah-content">
					<img src="resources/images/sekolah.jpg" alt="Gambar SD N 2 Sumber Bahagia"> <!-- Gambar Sekolah -->
					
					<p><strong>Sejarah Singkat</strong></p>
					<p>SD Negeri 2 Sumber Bahagia didirikan pada tahun 1980 dengan tujuan untuk menyediakan pendidikan dasar yang berkualitas di wilayah Sumber Bahagia. Pada awalnya, sekolah ini hanya memiliki dua kelas yang dipenuhi dengan siswa-siswa yang bersemangat untuk belajar.</p>
					
					<p>Seiring berjalannya waktu, SD N 2 Sumber Bahagia terus berkembang. Pada tahun 1990, sekolah ini mengalami peningkatan fasilitas dan jumlah siswa yang terus bertambah. Pembangunan gedung sekolah baru, fasilitas olahraga, serta ruang kelas yang lebih baik, memberikan suasana belajar yang nyaman bagi siswa.</p>

					<p>Sekolah ini tidak hanya fokus pada aspek akademik, tetapi juga pengembangan karakter siswa melalui berbagai kegiatan ekstrakurikuler. Visi sekolah yang mencakup pembentukan karakter dan kompetensi siswa telah menjadi landasan untuk berbagai program yang terus ditingkatkan hingga saat ini.</p>

					<p>Hingga sekarang, SD Negeri 2 Sumber Bahagia terus berkomitmen dalam memberikan pendidikan yang berkualitas, menciptakan lingkungan yang kondusif, dan menghasilkan lulusan yang berprestasi di berbagai bidang.</p>
					
					<p><strong>Visi dan Misi Sekolah</strong></p>
					<ul>
						<li>Visi: Mewujudkan Siswa Berkarakter, Berkompeten, dan Unggul.</li>
						<li>Misi: Meningkatkan kualitas pendidikan melalui pembelajaran yang kreatif dan inovatif, serta pengembangan karakter yang berbudi pekerti luhur.</li>
					</ul>
				</div>
			</div>
			
			<!-- sidebar -->
			<?php require_once 'sidebar.php'; ?>
		</div>
		<?php require_once 'footer.php'; ?>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
