<?php

session_start();
if (!$_SESSION['id_user']) {
  header("location:../index.php?pesan=gagal10");
}


$id_user = $_SESSION['id_user'];
$username = $_SESSION['username'];
$nm_user = $_SESSION['nm_user'];
$level = $_SESSION['level'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../assets/DataTables/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="../assets/DataTables/datatables.min.css">
  <link rel="stylesheet" href="../assets/chart.js/Chart.min.css">
  <script src="../assets/jquery/jquery-3.6.0.min.js"></script>
  <style>

  </style>
  <title>PLN</title>
</head>

<body>
  <?php include "../koneksi.php"; ?>
  <!-- navbar -->
  <?php include "navbar.php"; ?>
  <!-- end of navbar -->
  <div class="container mt-5 mb-5" style="min-height: 405px;">
    <?php include "go.php"; ?>
    <?php include $ambil; ?>
  </div>


  <script src="../assets/DataTables/datatables.min.js"></script>
  <script src="../assets/DataTables/js/dataTables.bootstrap5.min.js"></script>
  <script src="../assets/chart.js/Chart.bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#table_id').DataTable();
    });
    $('.dropdown-toggle').dropdown();
  </script>
  <?php include '../assets/chart.js/path.php';
  ?>
</body>

</html>