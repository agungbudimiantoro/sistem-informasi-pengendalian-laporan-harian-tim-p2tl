<?php date_default_timezone_set("Asia/jakarta"); ?>
<?php
$db = "pln";
$conn = mysqli_connect("localhost", "root", "", "$db");

// cek koneksi
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}
