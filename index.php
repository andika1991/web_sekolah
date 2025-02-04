<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel ORDER BY tanggal DESC");
$queryPrestasi = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id_kategori = '12' ORDER BY tanggal DESC LIMIT 5");
$aktif = 'home';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home - SD N 2 Sumber Bahagia</title>
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

		<!-- top bar -->
		<?php require_once 'header.php'; ?>
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- hero image -->
		<div class="hero">
			<img src="resources/images/banner_1.jpg" alt="">
		</div>
		<div class="sambutan bg-white p-4 mb-4">
    <div class="title mb-3">
        Sambutan epala Sekolah
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
                <br><strong>- Kepala Sekolah SD N 2 Sumber Bahagia</strong>
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

        <div class="row p-3">
    <div class="col-md-8">
        <div class="title mb-3">
            Prestasi Terbaru
        </div>
        <?php while ($prestasi = mysqli_fetch_assoc($queryPrestasi)) : ?>
        <div class="artikel">
            <div class="info">
                <div class="post mb-2">
                    <span class="tgl"><?= date('d M y', strtotime($prestasi['tanggal'])) ?></span>
                    <span class="judul"><a href="detail_artikel.php?id=<?= $prestasi['id'] ?>"><?= $prestasi['judul'] ?></a></span>
                </div>
            </div>
            <div class="detail">
                <div class="clearfix" style="text-align: justify;">
                    <img src="images/artikel/<?= $prestasi['foto'] ?>" alt="" width="200px" class="float-left mr-2">
                    <?= substr($prestasi['isi'], 0, 150) . '...' ?>
                </div>
            </div>
            <hr>
        </div>
        <?php endwhile; ?>
    </div>


    <div class="ekstrakurikuler bg-white p-4 mb-4">
    <h3 class="mb-4 text-center">Daftar Ekstrakurikuler</h3>
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 text-center ekskul-card">
                <div class="card-body">
                    <i class="fas fa-campground fa-3x mb-3 text-primary"></i>
                    <h5 class="card-title">Pramuka</h5>
                    <p class="card-text">Melatih kedisiplinan, keterampilan, dan kepemimpinan siswa.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 text-center ekskul-card">
                <div class="card-body">
                    <i class="fas fa-flag fa-3x mb-3 text-danger"></i>
                    <h5 class="card-title">Paskibra</h5>
                    <p class="card-text">Ekstrakurikuler pengibar bendera untuk melatih rasa cinta tanah air.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 text-center ekskul-card">
                <div class="card-body">
                    <i class="fas fa-basketball-ball fa-3x mb-3 text-warning"></i>
                    <h5 class="card-title">Basket</h5>
                    <p class="card-text">Meningkatkan kemampuan olahraga basket dan teamwork.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 text-center ekskul-card">
                <div class="card-body">
                    <i class="fas fa-user-ninja fa-3x mb-3 text-dark"></i>
                    <h5 class="card-title">Karate</h5>
                    <p class="card-text">Mengembangkan kemampuan bela diri dan kedisiplinan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 text-center ekskul-card">
                <div class="card-body">
                    <i class="fas fa-flask fa-3x mb-3 text-success"></i>
                    <h5 class="card-title">Karya Ilmiah Remaja (KIR)</h5>
                    <p class="card-text">Mengasah kemampuan siswa dalam penelitian ilmiah.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100 text-center ekskul-card">
                <div class="card-body">
                    <i class="fas fa-music fa-3x mb-3 text-info"></i>
                    <h5 class="card-title">Musik</h5>
                    <p class="card-text">Mengembangkan bakat siswa dalam seni musik.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .ekskul-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .ekskul-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }
    .card-body i {
        transition: transform 0.3s ease;
    }
    .ekskul-card:hover i {
        transform: rotate(10deg);
    }
</style>

<!-- Tambahkan FontAwesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</div>
<div class="infografis bg-light py-5">
    <div class="container text-center">
        <h3 class="mb-4 font-weight-bold">Perbandingan Jumlah Siswa dan Guru Aktif</h3>
        <div class="row justify-content-center">
            <!-- Kartu Siswa Aktif -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm p-4 text-center info-card">
                    <i class="fas fa-user-graduate fa-5x text-primary mb-3"></i>
                    <h2 class="counter display-4" data-target="1000">0</h2>
                    <p class="text-muted">Siswa Aktif</p>
                </div>
            </div>
            <!-- Tanda VS -->
            <div class="col-md-2 mb-4 d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column align-items-center">
                    <span class="h1 text-muted">VS</span>
                </div>
            </div>
            <!-- Kartu Guru Aktif -->
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm p-4 text-center info-card">
                    <i class="fas fa-chalkboard-teacher fa-5x text-success mb-3"></i>
                    <h2 class="counter display-4" data-target="80">0</h2>
                    <p class="text-muted">Guru Aktif</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="chart-container">
                    <canvas id="studentTeacherChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .info-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        padding: 20px;
    }
    .info-card:hover {
        transform: scale(1.05);
        box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
    }
    .counter {
        font-size: 3rem;
        font-weight: bold;
        color: #333;
    }
    .chart-container {
        max-width: 600px;
        margin-top: 30px;
    }
    .font-weight-bold {
        font-weight: 700;
    }
</style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.js"></script>
<script>
    // Animasi Counter Number
    document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".counter");
        counters.forEach(counter => {
            counter.innerText = "0";
            const updateCounter = () => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const increment = target / 100;
                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(updateCounter, 10);
                } else {
                    counter.innerText = target;
                }
            };
            updateCounter();
        });
    });

    // Chart.js untuk Visualisasi Perbandingan
    const ctx = document.getElementById('studentTeacherChart').getContext('2d');
    const studentTeacherChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Siswa Aktif', 'Guru Aktif'],
            datasets: [{
                label: 'Jumlah',
                data: [1200, 80],
                backgroundColor: ['#3498db', '#2ecc71'],
                borderColor: ['#2980b9', '#27ae60'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 1300
                }
            }
        }
    });
</script>

<!-- Tambahkan FontAwesome untuk ikon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<?php require_once 'footer.php'; ?>
  


	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>