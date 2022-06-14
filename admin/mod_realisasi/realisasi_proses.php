<?php include '../../koneksi.php';


?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $id       = htmlspecialchars($_POST['id']);
  $id_pelanggan       = htmlspecialchars($_POST['id_pelanggan']);
  $id_temuan       = htmlspecialchars($_POST['id_temuan']);
  $tgl_realisasi       = htmlspecialchars($_POST['tgl_realisasi']);
  $jlh_tag_susulan       = htmlspecialchars($_POST['jlh_tag_susulan']);
  $uang_muka       = htmlspecialchars($_POST['uang_muka']);
  $sph       = htmlspecialchars($_POST['sph']);
  $ket       = htmlspecialchars($_POST['ket']);

  $query = ("INSERT into realisasi values('$id','$id_pelanggan','$id_temuan','$tgl_realisasi','$jlh_tag_susulan','$uang_muka','$sph','$ket')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=realisasi_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=realisasi_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {


  $id       = htmlspecialchars($_POST['id']);
  $id_pelanggan       = htmlspecialchars($_POST['id_pelanggan']);
  $id_temuan       = htmlspecialchars($_POST['id_temuan']);
  $tgl_realisasi       = htmlspecialchars($_POST['tgl_realisasi']);
  $jlh_tag_susulan       = htmlspecialchars($_POST['jlh_tag_susulan']);
  $uang_muka       = htmlspecialchars($_POST['uang_muka']);
  $sph       = htmlspecialchars($_POST['sph']);
  $ket       = htmlspecialchars($_POST['ket']);


  $query = ("UPDATE realisasi SET id_pelanggan='" . $id_pelanggan . "'
   ,id_temuan='" . $id_temuan . "'
   ,tgl_realisasi='" . $tgl_realisasi . "'
   ,jlh_tag_susulan='" . $jlh_tag_susulan . "'
   ,uang_muka='" . $uang_muka . "'
   ,ket='" . $ket . "'
   ,sph='" . $sph . "'
   WHERE id_realisasi='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=realisasi_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=realisasi_data';
      </script>";
  }
}
?>


<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from realisasi where id_realisasi='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=realisasi_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=realisasi_data';
        </script>";
  //}
} ?>
