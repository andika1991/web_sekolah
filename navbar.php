<style>
/* Warna latar belakang navbar */
.bg-green {
    background-color: #2E7D32; /* Hijau tua untuk kesan profesional */
}

/* Warna teks dan efek hover pada link navbar */
.navbar-nav .nav-link {
    color: #ffffff; /* Putih untuk kontras */
    transition: color 0.3s ease, font-weight 0.3s ease;
}

.navbar-nav .nav-link:hover, 
.navbar-nav .nav-link.active {
    color: #A5D6A7; /* Hijau muda untuk hover */
    font-weight: bold;
}

/* Warna dropdown menu */
.dropdown-menu {
    background-color: #388E3C; /* Hijau menengah */
    border-radius: 8px; /* Membuat dropdown lebih modern */
}

/* Warna item dropdown */
.dropdown-menu .dropdown-item {
    color: #ffffff;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Efek hover pada dropdown */
.dropdown-menu .dropdown-item:hover {
    background-color: #A5D6A7; /* Hijau lebih terang */
    color: #004d40; /* Hijau tua untuk teks hover */
}

/* Tombol toggle di mode mobile */
.navbar-toggler {
    border: none;
    outline: none;
}

.navbar-toggler-icon {
    filter: invert(1); /* Warna putih untuk ikon toggler */
}
</style>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-green">
    <a class="navbar-brand font-weight-bold" href="index.php">SD N 2 SUMBER BAHAGIA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php">HOME</a>
            </li>
            <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle <?= $aktif == 'sambutan_kepala_sekolah' || $aktif == 'sejarah' || $aktif == 'visi_misi' || $aktif == 'struktur_organisasi' || $aktif == 'sarana_prasarana' || $aktif == 'tentang_website' || $aktif == 'bukutamu' ? 'active' : '' ?>" href="#" id="dropdownInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Profil Sekolah
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownInfo">
        <a class="dropdown-item <?= $aktif == 'sambutan_kepala_sekolah' ? 'active' : '' ?>" href="sambutan_kepala_sekolah.php">SAMBUTAN KEPALA SEKOLAH</a>
        <a class="dropdown-item <?= $aktif == 'sejarah' ? 'active' : '' ?>" href="sejarah.php">SEJARAH</a>
        <a class="dropdown-item <?= $aktif == 'visi_misi' ? 'active' : '' ?>" href="visi_misi.php">VISI & MISI</a>
        <a class="dropdown-item <?= $aktif == 'struktur_organisasi' ? 'active' : '' ?>" href="struktur_organisasi.php">STRUKTUR ORGANISASI</a>
        <a class="dropdown-item <?= $aktif == 'sarana_prasarana' ? 'active' : '' ?>" href="sarana_prasarana.php">SARANA & PRASARANA</a>
        <a class="dropdown-item <?= $aktif == 'tentang_website' ? 'active' : '' ?>" href="tentang_website.php">TENTANG WEBSITE</a>
        <a class="dropdown-item <?= $aktif == 'bukutamu' ? 'active' : '' ?>" href="bukutamu.php">BUKU TAMU</a>
    </div>
</li>

            <li class="nav-item">
                <a class="nav-link <?= $aktif == 'artikel' ? 'active' : '' ?>" href="artikel.php">ARTIKEL</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?= $aktif == 'siswa' || $aktif == 'guru' || $aktif == 'jurusan' ? 'active' : '' ?>" href="#" id="dropdownProfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    PROFIL
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownProfil">
                    <a class="dropdown-item <?= $aktif == 'siswa' ? 'active' : '' ?>" href="siswa.php">SISWA</a>
                    <a class="dropdown-item <?= $aktif == 'guru' ? 'active' : '' ?>" href="guru.php">GURU</a>
                    <a class="dropdown-item <?= $aktif == 'jurusan' ? 'active' : '' ?>" href="jurusan.php">JURUSAN</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= $aktif == 'ekskul' ? 'active' : '' ?>" href="ekskul.php">EKSKUL</a>
            </li>
            
        </ul>
    </div>
</nav>
