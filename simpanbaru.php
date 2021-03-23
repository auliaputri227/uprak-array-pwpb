<?php
include 'koneksi.php';
if (isset($_post['simpan'])) {
    $id = $_POST['id_siswa'];
        $nama = $_POST['nama_siswa'];
        $tempat = $_POST['tempat_lahir'];
        $tanggal = $_POST['tgl_lahir'];
        $jk = $_POST['jk'];
        $umur = $_POST['umur'];
        $foto = $_POST['foto'];
        $sql = "INSERT INTO siswa (id_siswa,nama_siswa,tempat_lahir,tgl_lahir,jk,umur,foto) 
        VALUES ('$id','$nama','$tempat','$tanggal','$jk','$umur','$foto')";
        $query = mysqli_query($conn, $sql);

    if ($query) {
        header('location: datasiswa.php');
        echo "<script>alert('Data ditambahkan')</script>";
    } else {
        header('location: simpanbaru.php?status=gagal');
    }
}


