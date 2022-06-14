<?php
$p             = empty($_GET['p']) ? "" : $_GET['p'];
if ($p == "") {
    $nav     = "Dashboard";
    $judul     = "Dashboard";
    $ambil     = "dashboard.php";
} elseif ($p == "user_data") {
    //user 
    $nav     = "User";
    $judul     = "User data";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_tambah") {
    $nav     = "User";
    $judul     = "User tambah";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_edit") {
    $nav     = "User";
    $judul     = "User edit";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_proses") {
    $nav     = "User";
    $judul     = "User proses";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "user_edit_pass") {
    $nav     = "User";
    $judul     = "User ganti password";
    $ambil     = "mod_user/$p.php";
} elseif ($p == "temuan_data") {
    //temuan 
    $nav     = "temuan";
    $judul     = "temuan data";
    $ambil     = "mod_temuan/$p.php";
} elseif ($p == "temuan_tambah") {
    $nav     = "temuan";
    $judul     = "temuan tambah";
    $ambil     = "mod_temuan/$p.php";
} elseif ($p == "temuan_edit") {
    $nav     = "temuan";
    $judul     = "temuan edit";
    $ambil     = "mod_temuan/$p.php";
} elseif ($p == "temuan_proses") {
    $nav     = "temuan";
    $judul     = "temuan proses";
    $ambil     = "mod_temuan/$p.php";
} elseif ($p == "realisasi_data") {
    //realisasi 
    $nav     = "realisasi";
    $judul     = "realisasi data";
    $ambil     = "mod_realisasi/$p.php";
} elseif ($p == "realisasi_tambah") {
    $nav     = "realisasi";
    $judul     = "realisasi tambah";
    $ambil     = "mod_realisasi/$p.php";
} elseif ($p == "realisasi_edit") {
    $nav     = "realisasi";
    $judul     = "realisasi edit";
    $ambil     = "mod_realisasi/$p.php";
} elseif ($p == "realisasi_proses") {
    $nav     = "realisasi";
    $judul     = "realisasi proses";
    $ambil     = "mod_realisasi/$p.php";
} else {
    $nav     = "Dashboard";
    $judul     = "dashboard";
    $ambil     = "dashboard.php";
}
