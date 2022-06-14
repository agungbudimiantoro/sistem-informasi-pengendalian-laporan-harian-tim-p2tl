<?php
$p             = empty($_GET['p']) ? "" : $_GET['p'];
if ($p == "") {
    $nav     = "Dashboard";
    $judul     = "Dashboard";
    $ambil     = "dashboard.php";
} elseif ($p == "pemeriksaan_data") {
    //pemeriksaan 
    $nav     = "pemeriksaan";
    $judul     = "pemeriksaan data";
    $ambil     = "mod_pemeriksaan/$p.php";
} elseif ($p == "pemeriksaan_tambah") {
    $nav     = "pemeriksaan";
    $judul     = "pemeriksaan tambah";
    $ambil     = "mod_pemeriksaan/$p.php";
} elseif ($p == "pemeriksaan_edit") {
    $nav     = "pemeriksaan";
    $judul     = "pemeriksaan edit";
    $ambil     = "mod_pemeriksaan/$p.php";
} elseif ($p == "pemeriksaan_proses") {
    $nav     = "pemeriksaan";
    $judul     = "pemeriksaan proses";
    $ambil     = "mod_pemeriksaan/$p.php";
} else {
    $nav     = "Dashboard";
    $judul     = "dashboard";
    $ambil     = "dashboard.php";
}
