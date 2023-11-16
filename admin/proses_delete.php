<?php
include "../koneksi.php";
if(isset($_GET['hapus'])){
    $id_kelas = $_GET['hapus'];

    $queryDeleteImg = "select * from kelas where kelas.id_kelas = $id_kelas";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    unlink("../imgKelas/".$result['featured_image']);

    $query = "delete from kelas where kelas.id_kelas = $id_kelas";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: index.php");
    }else{
        echo $query;
    }
}
if(isset($_GET['hapus-pengajar'])){
    $id_pengajar = $_GET['hapus-pengajar'];

    $queryDeleteImg = "select * from pengajar where pengajar.id_pengajar = $id_pengajar";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    unlink("../profilePengajar/".$result['foto_profile']);

    $query = "delete from pengajar where pengajar.id_pengajar = $id_pengajar";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: index.php");
    }else{
        echo $query;
    }
}
if(isset($_GET['hapus-kategori'])){
    $id_kategori = $_GET['hapus-kategori'];

    $queryDeleteImg = "select * from kategori where kategori.id_kategori = $id_kategori";
    $sqlDeleteImg = mysqli_query($conn, $queryDeleteImg);
    $result = mysqli_fetch_array($sqlDeleteImg);
    unlink("../imgKategori/bgKategori/".$result['bg_kategori']);

    $query = "delete from kategori where kategori.id_kategori = $id_kategori";
    $sql = mysqli_query($conn, $query);
    if($sql){
        header("location: index.php");
    }else{
        echo $query;
    }
}

?>