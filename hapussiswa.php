<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    header('Location: datasiswa.php');
}
$id = $_GET['id_siswa']; 

$sql    = "DELETE FROM siswa WHERE id_siswa='$id'";
$query  = mysqli_query($conn, $sql);

if ($query) {
    header('Location: datasiswa.php');

}else {
    header('Location: hapussiswa.php?status=gagal');
}
?>
