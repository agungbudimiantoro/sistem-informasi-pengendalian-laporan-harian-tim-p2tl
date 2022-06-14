<?php

include "../../koneksi.php";

$id = $_GET['id'];

//mengambil data
$query = mysqli_query($conn, "select * from pemeriksaan, temuan where temuan.id_pelanggan=pemeriksaan.id_pelanggan and temuan.id_pelanggan='$id'");
$hasil = mysqli_fetch_array($query);
$data = array(
    'nm_pelanggan'      =>  @$hasil['nm_pelanggan'],
    'alamat'      =>  @$hasil['alamat'],
    'no_ba'   =>  @$hasil['no_ba'],
    'tarif'      =>  @$hasil['tarif'],
    'daya'      =>  @$hasil['daya'],
    'tgl_periksa'    =>  @$hasil['tgl_periksa'],
    'gol'    =>  @$hasil['gol'],
    'energy'    =>  @$hasil['energy'],
    'latitude'    =>  @$hasil['latitude'],
    'longtitude'    =>  @$hasil['longtitude'],
    'per_tag_susulan'    =>  @$hasil['per_tag_susulan'],
    'id_temuan'    =>  @$hasil['id_temuan'],
);

//tampil data
echo json_encode($data);
