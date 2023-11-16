<?php
include "../koneksi.php";

if(isset($_POST['create'])){
    $nama_kelas = $_POST['nama_kelas'];
    $deskripsi = $_POST['deskripsi'];
    $total_pertemuan = $_POST['total_pertemuan'];
    $level = $_POST['jenis_level'];
    $harga_kelas = $_POST['harga_kelas'];
    $pengajar = $_POST['nama_pengajar'];
    $kategori = $_POST['nama_kategori'];
    $image = $_FILES['featured_image']['name'];

    $dir = "../imgKelas/";
    $tmpFile = $_FILES['featured_image']['tmp_name'];
    move_uploaded_file($tmpFile, $dir.$image);

    $query = "insert into kelas (nama_kelas, deskripsi, total_pertemuan, id_level, harga_kelas, id_pengajar, id_kategori, featured_image) values ('$nama_kelas', '$deskripsi', '$total_pertemuan', '$level', '$harga_kelas', '$pengajar', '$kategori', '$image')";

    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: index.php");
    }else{
        echo $sql;
    }
}
if(isset($_POST['create_pengajar'])){
        $nama_pengajar = $_POST['nama_pengajar'];
        $email_pengajar = $_POST['email'];
        $pengalaman_pengajar = $_POST['pengalaman'];
        $foto_profile = $_FILES['foto_profile']['name'];

        $dir = "../profilePengajar/";
        $tmpFile = $_FILES['foto_profile']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$foto_profile);

    $query = "insert into pengajar (nama_pengajar, email, pengalaman, foto_profile) values ('$nama_pengajar', '$email_pengajar', '$pengalaman_pengajar', '$foto_profile')";

    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: index.php");
    }else{
        echo $sql;
    }
}
if(isset($_POST['create_kategori'])){
        $nama_kategori = $_POST['nama_kategori'];
        // $icon_kategori = $_FILES['icon_kategori']['name'];
        $bg_kategori = $_FILES['bg_kategori']['name'];

        // $dirIcon = "../imgKategori/iconKategori/";
        // $tmpIconFile = $_FILES['icon_kategori']['tmp_name'];
        // move_uploaded_file($tmpIconFile, $dirIcon.$icon_kategori);

        $dirBg = "../bgKategori/";
        $tmpBgFile = $_FILES['bg_kategori']['tmp_name'];
        move_uploaded_file($tmpBgFile, $dirBg.$bg_kategori);

    $query = "insert into kategori (nama_kategori, bg_kategori) values ('$nama_kategori', '$bg_kategori')";

    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: index.php");
    }else{
        echo $sql;
    }
}
?>