<?php
include 'koneksi.php';
if (isset($_post['simpan'])) {
        $nama = $_post['nama_siswa'];
        $tempat = $_post['tempat_lahir'];
        $tanggal = $_post['tgl_lahir'];
        $jk = $_post['jk'];
        $umur = $_post['umur'];
        $sql = "INSERT INTO siswa (nama_siswa,tempat_lahir,tgl_lahir,jk,umur) 
        VALUES ('$nama','$tempat','$tanggal','$jk','$umur')";
        $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: datasiswa.php');
    } else {
        header('location: simpanedit.php?status=gagal');
    }
}
