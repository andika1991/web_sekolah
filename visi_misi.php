<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_visi_misi WHERE id = 1");
$visi_misi = mysqli_fetch_assoc($query);
$aktif = 'visi_misi'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Artikel -  SD N 2 Sumber Bahagia</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

		<!-- top bar -->
		<?php require_once 'header.php'; ?>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Visi dan Misi SD N 2 Sumber Bahagia
				</div>
				<div class="artikel">
					<?= $visi_misi['visi_misi'] ?>
				</div>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<?php require_once 'footer.php'; ?>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>