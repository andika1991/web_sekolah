<?php 

require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT * FROM tbl_ppdb WHERE id = 1");
$ppdb = mysqli_fetch_assoc($query);
$aktif = 'ppdb'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Informasi PPDB -  SD N 2 Sumber Bahagia</title>
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
					Informasi PPDB SD N 2 Sumber Bahagia
				</div>
				<div class="artikel">
					<?= $ppdb['ppdb'] ?>
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