<?php include '../../koneksi.php';


?>

<?php
// tambah data
if (isset($_POST['add'])) {


  $id       = htmlspecialchars($_POST['id']);
  $nm_pelanggan       = htmlspecialchars($_POST['nm_pelanggan']);
  $alamat       = htmlspecialchars($_POST['alamat']);
  $no_ba       = htmlspecialchars($_POST['no_ba']);
  $tarif       = htmlspecialchars($_POST['tarif']);
  $daya       = htmlspecialchars($_POST['daya']);
  $tgl_periksa       = htmlspecialchars($_POST['tgl_periksa']);
  $hasil       = htmlspecialchars($_POST['hasil']);
  $tindakan       = htmlspecialchars($_POST['tindakan']);
  $nm_petugas       = htmlspecialchars($_POST['nm_petugas']);


  $query = ("INSERT into pemeriksaan values('$id','$nm_pelanggan','$alamat','$no_ba','$tarif','$daya','$tgl_periksa','$hasil','$tindakan','$nm_petugas')");
  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Baru Berhasil Ditambah');
      document.location.href='?p=pemeriksaan_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Ditambah');
        document.location.href='?p=pemeriksaan_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit'])) {

  $username       = htmlspecialchars($_POST['username']);
  $id       = htmlspecialchars($_POST['id']);
  $nm_user       = htmlspecialchars($_POST['nm_user']);
  $level       = htmlspecialchars($_POST['level']);

  $ssql = mysqli_query($conn, "SELECT * FROM user where username='$username'");
  $daata = mysqli_fetch_assoc($ssql);

  if ($daata) {
    if ($id != $daata['id_user']) {
      echo "
      <script language=javascript>
      alert('Data Sudah ada');
      document.location.href='?p=user_data';
      </script>";
      die;
    }
  }


  $query = ("UPDATE user SET username='" . $username . "'
   ,nm_user='" . $nm_user . "'
   ,level='" . $level . "'
   WHERE id_user='" . $id . "'");

  if (mysqli_query($conn, $query)) {

    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=user_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=user_data';
      </script>";
  }
}
?>

<?php
// edit data
if (isset($_POST['edit_pass'])) {


  $id       = htmlspecialchars($_POST['id']);
  $pass       = htmlspecialchars($_POST['pass']);
  $pass1       = htmlspecialchars($_POST['pass1']);

  $query = ("UPDATE user SET password='" . $pass . "' WHERE id_user='" . $id . "'");

  if (mysqli_query($conn, $query)) {
    echo "
    <script language=javascript>
      alert('Data Berhasil Dirubah');
      document.location.href='?p=user_data';
    </script>";
  } else {
    echo "
      <script language=javascript>
        alert('Data Gagal Dirubah');
        document.location.href='?p=user_data';
      </script>";
  }
}
?>



<?php
//if (isset($_POST['del'])) {
// hapus data
$id    = htmlspecialchars($_GET['id']);
$query = ("DELETE from user where id_user='" . $id . "'");
if (mysqli_query($conn, $query)) {
  echo "
        <script language=javascript>
          alert('Data Berhasil Dihapus');
          document.location.href='?p=user_data';
        </script>";
} else {
  echo "
        <script language=javascript>
          alert('Data Gagal Dihapus');
          document.location.href='?p=user_data';
        </script>";
  //}
} ?>
