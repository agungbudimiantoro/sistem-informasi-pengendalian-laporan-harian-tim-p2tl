<?php
include "../../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../../assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <style></style>
    <title>Laporan User</title>
</head>
<script>
    function cetak() {
        setTimeout(() => {
            window.print();
        }, 500)
    }
</script>

<body onload="cetak()">
    <div class="container mt-2 mb-5" style="min-height: 480px;">
        <div class="row p-2">
            <h3 class="text-center">HASIL TEMUAN P2TL PT.DEI</h3>
            <h3 class="text-center">PT.PLN (PERSERO) ULP LUBUKLINGGAU</h3>
            <br>
            <div class="col-md-2"></div>
            <table class="table align-items-center mb-0 display table-bordered " id="table_id">
                <thead>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id realisasi</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id pelanggan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id temuan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Ba</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tarif</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Daya (VA)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Periksa</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tanggal realisasi</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">gol</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">energy (KWh)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jumlah tagihan susulan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">uang muka</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SPH (Rp.)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">keterangan</th>

                    </tr>

                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($conn, "SELECT * FROM realisasi");
                    while ($data = mysqli_fetch_assoc($query)) {
                        $no++;
                    ?><tr>
                            <td>
                                <?= $no ?>
                            </td>
                            <td>
                                <?= $data['id_realisasi'] ?>
                            </td>

                            <td>
                                <?= $data['id_pelanggan'] ?>
                            </td>
                            <td>
                                <?= $data['id_temuan'] ?>
                            </td>
                            <?php
                            $kd = $data['id_pelanggan'];
                            $query1 = mysqli_query($conn, "SELECT * FROM pemeriksaan where id_pelanggan='$kd'");
                            $data1 = mysqli_fetch_assoc($query1);
                            ?>
                            <td>
                                <?= $data1['nm_pelanggan'] ?>
                            </td>
                            <td>
                                <?= $data1['alamat'] ?>
                            </td>
                            <td>
                                <?= $data1['no_ba'] ?>
                            </td>
                            <td>
                                <?= $data1['tarif'] ?>
                            </td>
                            <td>
                                <?= $data1['daya'] ?>
                            </td>
                            <td>
                                <?= $data1['tgl_periksa'] ?>
                            </td>
                            <td>
                                <?= $data['tgl_realisasi'] ?>
                            </td>
                            <?php
                            $kd = $data['id_temuan'];
                            $query1 = mysqli_query($conn, "SELECT * FROM temuan where id_temuan='$kd'");
                            $data1 = mysqli_fetch_assoc($query1);
                            ?>
                            <td>
                                <?= $data1['gol'] ?>
                            </td>
                            <td>
                                <?= $data1['energy'] ?>
                            </td>
                            <td>
                                <?= $data['jlh_tag_susulan'] ?>
                            </td>
                            <td>
                                <?= $data['uang_muka'] ?>
                            </td>
                            <td>
                                <?= $data['sph'] ?>
                            </td>
                            <td>
                                <?= $data['ket'] ?>
                            </td>

                        </tr>
                    <?php }; ?>
                    <tr>
                        <td colspan="15">Total Pelanggan: <?php echo $no ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
    </div>
    <script src="../../assets/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>