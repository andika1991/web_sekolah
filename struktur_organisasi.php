<?php 

require_once 'koneksi.php';
$aktif = 'struktur_organisasi'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Struktur Organisasi SD N 2 Sumber Bahagia</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Menambahkan Google Font -->
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
	<style>
		/* Menambahkan beberapa style CSS untuk mempercantik tampilan */
		.struktur-content {
			background-color: #f8f9fa;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}
		.struktur-content h2 {
			color: #007bff;
			font-size: 32px;
			font-weight: 700;
		}
		
		/* Struktur Garis */
		.struktur-garis {
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.struktur-node {
			text-align: center;
			background-color: #007bff;
			color: white;
			border-radius: 8px;
			padding: 10px;
			margin: 10px;
			width: 200px;
		}

		.struktur-line {
			width: 2px;
			height: 30px;
			background-color: #007bff;
			margin: 0 0 10px 0;
		}

		.struktur-node-container {
			display: flex;
			justify-content: center;
		}

		.struktur-node-container > .struktur-node {
			margin: 0 30px;
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
					Struktur Organisasi SD N 2 Sumber Bahagia
				</div>
				
				<div class="struktur-content">
					<h2>Struktur Organisasi Sekolah</h2>
					
					<div class="struktur-garis">
						<!-- Kepala Sekolah -->
						<div class="struktur-node">
							Kepala Sekolah<br>Fakhrul Fanani Nugroho
						</div>
						<div class="struktur-line"></div>
						
						<!-- Wakil Kepala Sekolah -->
						<div class="struktur-node-container">
							<div class="struktur-node">
								Wakil Kepala Sekolah<br>Joko Santoso
							</div>
						</div>
						<div class="struktur-line"></div>
						
						<!-- Guru dan Staff -->
						<div class="struktur-node-container">
							<div class="struktur-node">
								Guru Kelas 1<br>Rina Widya
							</div>
							<div class="struktur-node">
								Guru Kelas 2<br>Ahmad Subakti
							</div>
							<div class="struktur-node">
								Guru Kelas 3<br>Jeni Prasasti
							</div>
						</div>
						<div class="struktur-line"></div>
						
						<!-- Staff Administrasi -->
						<div class="struktur-node-container">
							<div class="struktur-node">
								Staff Administrasi<br>Susan Melati
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- sidebar -->
			<?php require_once 'sidebar.php'; ?>
		</div>
		
        <?php require_once 'footer.php'; ?>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
