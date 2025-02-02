<?php 
session_start();

if (!isset($_POST['tambah'])) header('Location: tambah.php');

require_once '../../koneksi.php';

$judul = mysqli_real_escape_string($koneksi, $_POST['judul'] ?? '');
$id_kategori = mysqli_real_escape_string($koneksi, $_POST['id_kategori'] ?? '');
$isi = mysqli_real_escape_string($koneksi, $_POST['isi'] ?? '');
$tanggal = date('Ymd');

// Persiapan upload foto
$maxSize = 2 * 1024 * 1024; // 2MB
$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
    $ekstensi = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
    $ekstensi = strtolower($ekstensi);

    if (!in_array($ekstensi, $allowedExtensions)) {
        $_SESSION['gagal'] = 'Format file tidak didukung! Hanya JPG, JPEG, PNG, dan GIF yang diperbolehkan.';
        header('Location: index.php');
        exit;
    }

    // Buat nama file baru
    $nama_foto = $tanggal . '-' . strtolower(str_replace(' ', '-', $judul)) . '.' . $ekstensi;
    $asal = $_FILES['foto']['tmp_name'];
    $tujuan = '../../images/artikel/';
    $tujuan_file = $tujuan . $nama_foto;

    if (!is_writable($tujuan)) {
        $_SESSION['gagal'] = 'Direktori tujuan tidak bisa ditulisi!';
        header('Location: index.php');
        exit;
    }

    // Cek dan hapus file lama jika ada
    if (file_exists($tujuan_file)) {
        unlink($tujuan_file);
    }

    // Jika file lebih dari 2MB, lakukan kompresi
    if ($_FILES['foto']['size'] > $maxSize) {
        if (compressImage($asal, $tujuan_file, 70)) { // 70% kualitas
            $uploadSukses = true;
        } else {
            $_SESSION['gagal'] = 'Gagal mengompresi gambar!';
            header('Location: index.php');
            exit;
        }
    } else {
        $uploadSukses = move_uploaded_file($asal, $tujuan_file);
    }

    // Simpan data ke database jika upload berhasil
    if ($uploadSukses) {
        $query = mysqli_query($koneksi, "INSERT INTO tbl_artikel (judul, isi, tanggal, foto, id_kategori) VALUES('$judul', '$isi', '$tanggal', '$nama_foto', $id_kategori)") or die(mysqli_error($koneksi));

        if ($query) {
            $_SESSION['sukses'] = 'Data Berhasil Ditambahkan!';
        } else {
            $_SESSION['gagal'] = 'Gagal menyimpan data ke database!';
        }
    } else {
        $_SESSION['gagal'] = 'Gagal mengunggah foto!';
    }
} else {
    $_SESSION['gagal'] = 'Terjadi kesalahan saat mengunggah file!';
}

header('Location: index.php');
exit;

// Fungsi untuk kompresi gambar JPG/PNG
function compressImage($source, $destination, $quality) {
    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') {
        $image = imagecreatefromjpeg($source);
        return imagejpeg($image, $destination, $quality);
    } elseif ($info['mime'] == 'image/png') {
        $image = imagecreatefrompng($source);
        return imagepng($image, $destination, $quality / 10); // PNG: quality range 0-9
    }

    return false;
}
