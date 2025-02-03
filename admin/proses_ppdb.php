<?php 

require_once '../koneksi.php';
require_once 'cek_session.php';
$ppdb = mysqli_real_escape_string($koneksi, isset($_POST['ppdb']) ? $_POST['ppdb'] : '');
$query = mysqli_query($koneksi, "UPDATE tbl_ppdb SET ppdb = '$ppdb' WHERE id = 1");

if($query){
	$_SESSION['sukses'] = 'Informasi PPDB BERHASIL Diperbarui!';
	header('Location: ppdb.php');
} else {
	$_SESSION['gagal'] = 'Informasi PPDB GAGAL Diperbarui!';
	header('Location: ppdb.php');
}