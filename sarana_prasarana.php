<?php 
$aktif = 'sarana_prasarana'; 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sarana dan Prasarana - SD N 2 Sumber Bahagia</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

		<!-- top bar -->
		<div class="logo clearfix">
			<div class="float-left mt-3 mb-3 px-4">
				<img src="resources/images/logo.png" alt="Logo Sekolah" width="70px" class="float-left mr-3">
				<div class="text float-right">
					<span class="smk">SD Negeri 2 Sumber Bahagia</span><br>
					<span class="visi">Mewujudkan Siswa Berkarakter, Berkompeten dan Unggul.</span>
				</div>
			</div>
		</div>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Sarana dan Prasarana SD N 2 SUMBER BAHAGIA</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="resources/images/kelas.jpg" class="card-img-top" alt="Ruang Kelas">
                    <div class="card-body">
                        <h5 class="card-title">Ruang Kelas</h5>
                        <p class="card-text">Ruang kelas yang nyaman dan kondusif untuk belajar.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="resources/images/perpustakaan.jpg" class="card-img-top" alt="Perpustakaan">
                    <div class="card-body">
                        <h5 class="card-title">Perpustakaan</h5>
                        <p class="card-text">Perpustakaan dengan koleksi buku yang lengkap.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="resources/images/lapangan.jpg" class="card-img-top" alt="Lapangan">
                    <div class="card-body">
                        <h5 class="card-title">Lapangan Olahraga</h5>
                        <p class="card-text">Lapangan luas untuk berbagai kegiatan olahraga.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

		<!-- footer -->
        <?php require_once 'footer.php'; ?>
	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>
