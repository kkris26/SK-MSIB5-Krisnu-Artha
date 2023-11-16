<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Dashboard Examin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <!-- datatable -->
    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- bootstrap 5 -->
</head>

<body class="sb-nav-fixed">
    <?php include "sidebar/logo_navbar.php" ?>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <?php include "sidebar/navbar.php" ?>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <?php
                    include "../koneksi.php";
                    // data kelas
                    $queryKelas = "SELECT * FROM `kelas` JOIN LEVEL on kelas.id_level = level.id_level join pengajar on kelas.id_pengajar = pengajar.id_pengajar join kategori on kelas.id_kategori = kategori.id_kategori";
                    $sqlKelas = mysqli_query($conn, $queryKelas);
                    // data kelas
                    // data Pengajar
                    $queryPengajar = "SELECT * FROM `pengajar` ";
                    $sqlPengajar = mysqli_query($conn, $queryPengajar);
                    // data Pengajar
                    // data Pengajar
                    $queryKategori = "SELECT * FROM `kategori` ";
                    $sqlKategori = mysqli_query($conn, $queryKategori);
                    // data Pengajar
                    ?>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Kelas
                        </div>
                        <div class="card-body">
                            <table id="dataKelas" class="table table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Total Pertemuan</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Harga Kelas</th>
                                        <th scope="col">Nama Pengajar</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kelas</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Total Pertemuan</th>
                                        <th scope="col">Level</th>
                                        <th scope="col">Harga Kelas</th>
                                        <th scope="col">Nama Pengajar</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($result = mysqli_fetch_array($sqlKelas)) {
                                        $id_kelas = $result['id_kelas'];
                                        $nama_kelas = $result['nama_kelas'];
                                        $deskripsi = $result['deskripsi'];
                                        $total_pertemuan = $result['total_pertemuan'];
                                        $level = $result['jenis_level'];
                                        $harga_kelas = $result['harga_kelas'];
                                        $pengajar = $result['nama_pengajar'];
                                        $kategori = $result['nama_kategori'];
                                        $image = $result['featured_image'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $nama_kelas ?></td>
                                            <td><?php echo $deskripsi ?></td>
                                            <td><?php echo $total_pertemuan ?></td>
                                            <td><?php echo $level ?></td>
                                            <td><?php echo $harga_kelas ?></td>
                                            <td><?php echo $pengajar ?></td>
                                            <td><?php echo $kategori ?></td>
                                            <td><img src="../imgKelas/<?php echo $image ?>" id="img-table"></td>
                                            <td class="edit-delete"><a href="edit.php?edit=<?php echo $id_kelas ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="proses_delete.php?hapus=<?php echo $id_kelas ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin akan mengahapus data kelas <?php echo $nama_kelas ?>')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- data pengajar -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Pengajar
                        </div>
                        <div class="card-body">
                            <table id="dataPengajar" class="table table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pengajar</th>
                                        <th scope="col">Email Pengajar</th>
                                        <th scope="col">Pegalaman Pengajar</th>
                                        <th scope="col">Foto Profile</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Pengajar</th>
                                        <th scope="col">Email Pengajar</th>
                                        <th scope="col">Pegalaman Pengajar</th>
                                        <th scope="col">Foto Profile</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($resultPengajar = mysqli_fetch_array($sqlPengajar)) {
                                        $id_pengajar = $resultPengajar['id_pengajar'];
                                        $nama_pengajar = $resultPengajar['nama_pengajar'];
                                        $email_pengajar = $resultPengajar['email'];
                                        $pengalaman_pengajar = $resultPengajar['pengalaman'];
                                        $foto_pengajar = $resultPengajar['foto_profile'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $nama_pengajar ?></td>
                                            <td><?php echo $email_pengajar ?></td>
                                            <td><?php echo $pengalaman_pengajar ?></td>
                                            <td><img src="../profilePengajar/<?php echo $foto_pengajar ?>" id="img-table"></td>
                                            <td><a href="edit_pengajar.php?edit-pengajar=<?php echo $id_pengajar ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="proses_delete.php?hapus-pengajar=<?php echo $id_pengajar ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin akan mengahapus data pengajar <?php echo $nama_pengajar ?>')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- data pengajar -->
                    <!-- data kategori -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Kategori
                        </div>
                        <div class="card-body">
                            <table id="dataKategori" class="table table-striped align-middle" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Background Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama Kategori</th>
                                        <th scope="col">Background Kategori</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    while ($resultKategori = mysqli_fetch_array($sqlKategori)) {
                                        $id_kategori = $resultKategori['id_kategori'];
                                        $nama_kategori = $resultKategori['nama_kategori'];
                                        $bg_kategori = $resultKategori['bg_kategori'];
                                    ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $nama_kategori ?></td>
                                            <td><img src="../bgKategori/<?php echo $bg_kategori ?>" id="img-table"></td>
                                            <td><a href="edit_kategori.php?edit-kategori=<?php echo $id_kategori ?>" class="btn btn-success btn-sm">Edit</a>
                                                <a href="proses_delete.php?hapus-kategori=<?php echo $id_kategori ?>" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin akan mengahapus data kategori <?php echo $nama_kategori ?>')">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- data kategori -->
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dataKelas').DataTable();
            $('#dataPengajar').DataTable();
            $('#dataKategori').DataTable();
        })
    </script>
</body>

</html>