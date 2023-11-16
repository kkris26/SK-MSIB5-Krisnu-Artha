<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin - Create Data Pengajar</title>
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
                    <h1 class="mt-4">Input Data Pengajar</h1>
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
                    <div class="container-fluif">
                        <form action="proses_create.php" class="row" method="post" enctype="multipart/form-data">
                            <div class="mb-3 col-4">
                                <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                                <input type="text" class="form-control" id="nama_pengajar" name="nama_pengajar" />
                            </div>
                            <div class="mb-3 col-4">
                                <label for="email_pengajar" class="form-label">Email Pengajar</label>
                                <input type="text" class="form-control" id="email_pengajar" name="email" />
                            </div>
                            <div class="mb-3 col-4">
                                <label for="pengalaman_pengajar" class="form-label">Pengalaman Pengajar</label>
                                <input type="text" class="form-control" id="pengalaman_pengajar" name="pengalaman" />
                            </div>

                            <div class="mb-3">
                                <label for="foto_profile" class="form-label">Foto Profile</label>
                                <input type="file" class="form-control" id="foto_profile" name="foto_profile" accept="image/*" />
                            </div>
                            <button type="submit" id="create_pengajar" class="btn btn-primary col-2 mt-4" name="create_pengajar" disabled>
                                Create Data Pengajar
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
                const namaPengajar = $('#nama_pengajar').val();
                const emailPengajar = $('#email_pengajar').val();
                const pengalamanPengajar = $('#pengalaman_pengajar').val();
                const fotoProfile = $('#foto_profile').val();
                const createPengajarButton = $('#create_pengajar');

                if (
                    namaPengajar !== '' &&
                    emailPengajar !== '' &&
                    pengalamanPengajar !== '' &&
                    fotoProfile !== ''
                ) {
                    createPengajarButton.prop('disabled', false);
                } else {
                    createPengajarButton.prop('disabled', true);
                }
            });
        });
    </script>
</body>

</html>