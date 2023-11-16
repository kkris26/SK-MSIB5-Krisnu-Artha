<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Create Data Kelas</title>
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
                    <h1 class="mt-4">Input Data Kelas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Create Data</li>
                    </ol>
                    <?php
                    include "../koneksi.php";
                    // pengajar
                    $queryPengajar = "select * from pengajar";
                    $sqlPengajar = mysqli_query($conn, $queryPengajar);
                    // pengajar
                    // level
                    $queryLevel = "select * from level";
                    $sqlLevel = mysqli_query($conn, $queryLevel);
                    // level
                    // kategori
                    $queryKategori = "select * from kategori";
                    $sqlKategori = mysqli_query($conn, $queryKategori);
                    // kategori
                    ?>
                    <div class="container-fluid">
                        <form action="proses_create.php" class="row" method="post" enctype="multipart/form-data">
                            <div class="mb-3 col-4">
                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" />
                            </div>
                            <div class="mb-3 col-4">
                                <label for="total_pertemuan" class="form-label">Total Pertemuan</label>
                                <input type="text" class="form-control" id="total_pertemuan" name="total_pertemuan" />
                            </div>
                            <div class="mb-3 col-4">
                                <label for="level" class="form-label">Pilih Level</label>
                                <select class="form-select" id="level" name="jenis_level">
                                    <option value="">Pilih Level</option>
                                    <?php
                                    while ($result = mysqli_fetch_array($sqlLevel)) {
                                        $id_level = $result['id_level'];
                                        $jenis_level = $result['jenis_level'];
                                    ?>
                                        <option value="<?php echo $id_level ?>"><?php echo $jenis_level ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="harga_kelas" class="form-label">Harga Kelas</label>
                                <input type="number" class="form-control" id="harga_kelas" name="harga_kelas" />
                            </div>
                            <div class="mb-3 col-4">
                                <label for="pengajar" class="form-label">Pilih Pengajar</label>
                                <select class="form-select" id="pengajar" name="nama_pengajar">
                                    <option value="">Pilih Pengajar</option>
                                    <?php
                                    while ($result = mysqli_fetch_array($sqlPengajar)) {
                                        $id_pengajar = $result['id_pengajar'];
                                        $nama_pengajar = $result['nama_pengajar'];
                                        $pengalaman = $result['pengalaman'];
                                    ?>
                                        <option value="<?php echo $id_pengajar ?>"><?php echo $nama_pengajar, ",    " . $pengalaman ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-4">
                                <label for="kategori" class="form-label">Pilih Kategori</label>
                                <select class="form-select" id="kategori" name="nama_kategori">
                                    <option value="">Pilih Kategori</option>
                                    <?php
                                    while ($result = mysqli_fetch_array($sqlKategori)) {
                                        $id_kategori = $result['id_kategori'];
                                        $nama_kategori = $result['nama_kategori'];
                                    ?>
                                        <option value="<?php echo $id_kategori ?>"><?php echo $nama_kategori ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="mb-3 col-12">
                                <label for="deskripsi" class="form-label">Deskripsi Kelas</label>
                                <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Featured Image</label>
                                <input type="file" class="form-control" id="image" name="featured_image" accept="image/*" />
                            </div>
                            <button type="submit" id="create" class="btn btn-primary mt-4 col-1"  name="create" disabled>
                                Create Data
                            </button>
                        </form>
                    </div>
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
    <script>
        $(document).ready(function() {
            $('input, select, textarea').on('input', function() {
                const namaKelas = $('#nama_kelas').val();
                const deskripsi = $('#deskripsi').val();
                const totalPertemuan = $('#total_pertemuan').val();
                const level = $('#level').val();
                const hargaKelas = $('#harga_kelas').val();
                const pengajar = $('#pengajar').val();
                const kategori = $('#kategori').val();
                const featuredImage = $('#image').val();
                const createButton = $('#create');

                if (
                    namaKelas !== '' &&
                    deskripsi !== '' &&
                    totalPertemuan !== '' &&
                    level !== '' &&
                    hargaKelas !== '' &&
                    pengajar !== '' &&
                    kategori !== '' &&
                    featuredImage !== ''
                ) {
                    createButton.prop('disabled', false);
                } else {
                    createButton.prop('disabled', true);
                }
            });
        });
    </script>
</body>

</html>