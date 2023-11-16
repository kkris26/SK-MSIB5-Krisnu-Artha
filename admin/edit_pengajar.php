<!DOCTYPE html>
<?php
if (isset($_GET['edit-pengajar'])) {
  include "../koneksi.php";
  $id_pengajar = $_GET['edit-pengajar'];
  $query = "SELECT * FROM pengajar where pengajar.id_pengajar = $id_pengajar";
  $sql = mysqli_query($conn, $query);

  $resultPengajar = mysqli_fetch_array($sql);
  $nama_pengajar = $resultPengajar['nama_pengajar'];
  $email_pengajar = $resultPengajar['email'];
  $pengalaman_pengajar = $resultPengajar['pengalaman'];
  $foto_pengajar = $resultPengajar['foto_profile'];
}
?>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Admin - Edit Data Pengajar</title>
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
          <h1 class="mt-4">Edit Data Pengajar</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Edit Data</li>
          </ol>
          <div class="container-fluid">
            <form action="proses_edit.php" class="row" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $id_pengajar ?>" name="id_pengajar">

              <div class="mb-3 col-4">
                <label for="nama_pengajar" class="form-label">Nama Pengajar</label>
                <input type="text" class="form-control" id="nama_pengajar" name="nama_pengajar" value="<?php echo $nama_pengajar ?>" />
              </div>
              <div class="mb-3 col-4">
                <label for="email_pengajar" class="form-label">Email Pengajar</label>
                <input type="text" class="form-control" id="email_pengajar" name="email" value="<?php echo $email_pengajar ?>" />
              </div>
              <div class="mb-3 col-4">
                <label for="pengalaman_pengajar" class="form-label">Pengalaman Pengajar</label>
                <input type="text" class="form-control" id="pengalaman_pengajar" name="pengalaman" value="<?php echo $pengalaman_pengajar ?>" />
              </div>

              <div class="mb-3">
                <label for="foto_profile" class="form-label">Foto Profile</label>
                <img src="../profilePengajar/<?php echo $foto_pengajar ?>" width=100px>
                <input type="file" class="form-control mt-3" id="foto_profile" name="foto_profile" accept="image/*" />
              </div>
              <button type="submit" class="btn btn-primary col-2 mt-4" name="edit_pengajar">
                Edit Data Pengajar
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('#dataKelas').DataTable();
      $('#dataPengajar').DataTable();
    })
  </script>
</body>

</html>