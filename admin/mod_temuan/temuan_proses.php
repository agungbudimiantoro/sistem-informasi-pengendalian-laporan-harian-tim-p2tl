<?php include '../../koneksi.php';


?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $id       = htmlspecialchars($_POST['id']);
  $id_pelanggan       = htmlspecialchars($_POST['id_pelanggan']);
  $gol       = htmlspecialchars($_POST['gol']);
  $energy       = htmlspecialchars($_POST['energy']);
  $latitude       = htmlspecialchars($_POST['latitude']);
  $longtitude       = htmlspecialchars($_POST['longtitude']);
  $per_tag_susulan       = htmlspecialchars($_POST['per_tag_susulan']);
  $keterangan       = htmlspecialchars($_POST['keterangan']);


  $query = ("INSERT into temuan values('$id','$id_pelanggan','$gol','$energy','$latitude','$longtitude','$per_tag_susulan','$keterangan')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=temuan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=temuan_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {


  $id       = htmlspecialchars($_POST['id']);
  $id_pelanggan       = htmlspecialchars($_POST['id_pelanggan']);
  $gol       = htmlspecialchars($_POST['gol']);
  $energy       = htmlspecialchars($_POST['energy']);
  $latitude       = htmlspecialchars($_POST['latitude']);
  $longtitude       = htmlspecialchars($_POST['longtitude']);
  $per_tag_susulan       = htmlspecialchars($_POST['per_tag_susulan']);
  $keterangan       = htmlspecialchars($_POST['keterangan']);


  $query = ("UPDATE temuan SET id_pelanggan='" . $id_pelanggan . "'
   ,gol='" . $gol . "'
   ,energy='" . $energy . "'
   ,latitude='" . $latitude . "'
   ,longtitude='" . $longtitude . "'
   ,per_tag_susulan='" . $per_tag_susulan . "'
   ,keterangan='" . $keterangan . "'
   WHERE id_temuan='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=temuan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=temuan_data';
      </script>";
  }
}
?>


<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from temuan where id_temuan='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=temuan_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=temuan_data';
        </script>";
  //}
} ?>
