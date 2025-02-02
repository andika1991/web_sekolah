<footer class="footer bg-gradient-dark text-white py-5">
    <div class="container">
        <!-- Logo dan Nama Sekolah -->
        <div class="row text-center mb-4">
            <div class="col-12">
                <img src="resources/images/logo.png" alt="Logo Sekolah" width="80" class="mb-3">
                <h5 class="text-uppercase font-weight-bold">SD N 2 SUMBER BAHAGIA</h5>
                <p class="mb-0">Mewujudkan Sekolah Dasar yang Berkarakter, Berkompeten, dan Unggul</p>
            </div>
        </div>

        <!-- Konten Footer -->
        <div class="row">
            <!-- Tentang Sekolah -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase font-weight-bold mb-3">Tentang Kami</h5>
                <p style="text-align: justify;">
                    SD N 2 SUMBER BAHAGIA berkomitmen mencetak generasi yang cerdas, berkarakter, dan unggul. Kami hadir untuk memberikan pendidikan berkualitas kepada siswa-siswi.
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

            <!-- Hubungi Kami & Peta Lokasi -->
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-uppercase font-weight-bold mb-3">Hubungi Kami</h5>
                <p><i class="fas fa-map-marker-alt"></i> Jl. Raya Sumber Bahagia No. 45</p>
                <p><i class="fas fa-phone"></i> (021) 987-654</p>
                <p><i class="fas fa-envelope"></i> info@sdsumberbahagia.sch.id</p>
                <div>
                    <a href="#" class="text-white me-2 social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-2 social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-2 social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white social-icon"><i class="fab fa-youtube"></i></a>
                </div>
                <!-- Google Maps Embed -->
                <div class="mt-3">
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3685.564927789799!2d105.42828637461663!3d-4.8655646951101215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3f61c5750c60c5%3A0x2349dfb672b211da!2sSDN%202%20Sumber%20Bahagia!5e1!3m2!1sen!2sid!4v1738125479251!5m2!1sen!2sid"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center mt-4">
            <p class="mb-0">2019 - <?= date('Y') ?> © SD N 2 SUMBER BAHAGIA. All Rights Reserved.</p>
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
