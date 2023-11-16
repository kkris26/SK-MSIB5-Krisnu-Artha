<?php
include "../koneksi.php";


if (isset($_POST['edit'])) {
    $id_kelas = $_POST['id_kelas'];

    $nama_kelas = $_POST['nama_kelas'];
    $deskripsi = $_POST['deskripsi'];
    $total_pertemuan = $_POST['total_pertemuan'];
    $level = $_POST['jenis_level'];
    $harga_kelas = $_POST['harga_kelas'];
    $pengajar = $_POST['nama_pengajar'];
    $kategori = $_POST['nama_kategori'];
    $image = $_FILES['featured_image']['name'];

    $queryDeleteImg = "select * from kelas where kelas.id_kelas = $id_kelas";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    //     var_dump ($result);
    // die();    
    if($image == ""){
        $image_edit = $result['featured_image'];
    }else {
        $image_edit = $image;
        unlink("../imgKelas/".$result['featured_image']);
        $dir = "../imgKelas/";
        $tmpFile = $_FILES['featured_image']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$image);
    }

    $query = "UPDATE kelas SET 
              nama_kelas = '$nama_kelas', 
              deskripsi = '$deskripsi', 
              total_pertemuan = '$total_pertemuan', 
              id_level = '$level', 
              harga_kelas = '$harga_kelas', 
              id_pengajar = '$pengajar', 
              id_kategori = '$kategori', 
              featured_image = '$image_edit' 
              WHERE id_kelas = $id_kelas";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo $sql;
    }
}
if (isset($_POST['edit_pengajar'])) {
    $id_pengajar = $_POST['id_pengajar'];
    
    $nama_pengajar = $_POST['nama_pengajar'];
    $email_pengajar = $_POST['email'];
    $pengalaman_pengajar = $_POST['pengalaman'];
    $foto_profile = $_FILES['foto_profile']['name'];

    $queryDeleteImg = "select * from pengajar where pengajar.id_pengajar = $id_pengajar";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    //     var_dump ($result);
    // die();    
    if($foto_profile == ""){
        $foto_profile_edit = $result['foto_profile'];
    }else {
        $foto_profile_edit = $foto_profile;
        unlink("../profilePengajar/".$result['foto_profile']);
        $dir = "../profilePengajar/";
        $tmpFile = $_FILES['foto_profile']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$foto_profile);
    }

    $query = "UPDATE pengajar SET 
              nama_pengajar = '$nama_pengajar', 
              email = '$email_pengajar', 
              pengalaman = '$pengalaman_pengajar', 
              foto_profile = '$foto_profile_edit' 
              WHERE id_pengajar = $id_pengajar";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo $sql;
    }
}
if (isset($_POST['edit_kategori'])) {
    $id_kategori = $_POST['id_kategori'];
    
    $nama_kategori = $_POST['nama_kategori'];
    $bg_kategori = $_FILES['bg_kategori']['name'];

    $queryDeleteImg = "select * from kategori where kategori.id_kategori = $id_kategori";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    //     var_dump ($result);
    // die();    
    if($bg_kategori == ""){
        $bg_kategori_edit = $result['bg_kategori'];
    }else {
        $bg_kategori_edit = $bg_kategori;
        unlink("../bgKategori/".$result['bg_kategori']);
        $dir = "../bgKategori/";
        $tmpFile = $_FILES['bg_kategori']['tmp_name'];
        move_uploaded_file($tmpFile, $dir.$bg_kategori);
    }

    $query = "UPDATE kategori SET 
              nama_kategori = '$nama_kategori', 
              bg_kategori = '$bg_kategori_edit' 
              WHERE id_kategori = $id_kategori";

    $sql = mysqli_query($conn, $query);

    if ($sql) {
        header("location: index.php");
    } else {
        echo $sql;
    }
}

?>