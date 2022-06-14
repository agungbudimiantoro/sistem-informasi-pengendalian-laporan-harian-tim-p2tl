<?php

include "../../koneksi.php";

$id = $_GET['id'];

//mengambil data
$query = mysqli_query($conn, "select * from pemeriksaan where id_pelanggan='$id'");
$hasil = mysqli_fetch_array($query);
$data = array(
    'nm_pelanggan'      =>  @$hasil['nm_pelanggan'],
    'alamat'      =>  @$hasil['alamat'],
    'no_ba'   =>  @$hasil['no_ba'],
    'tarif'      =>  @$hasil['tarif'],
    'daya'      =>  @$hasil['daya'],
    'tgl_periksa'    =>  @$hasil['tgl_periksa'],
);

//tampil data
echo json_encode($data);
