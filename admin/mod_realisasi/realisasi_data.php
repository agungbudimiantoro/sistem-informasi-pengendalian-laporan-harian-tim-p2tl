<h3 class="text-uppercase" style="text-transform: capitalize;">data realisasi</h3>
<br>
<a href="?p=realisasi_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class=" p-2">
    <table class="table align-items-center mb-0 display" id="table_id">
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
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">jumlah tagihan susulan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">uang muka</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SPH (Rp.)</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">keterangan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM realisasi");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
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
                    <td>
                        <a href="?p=realisasi_edit&id=<?= $data['id_realisasi'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=realisasi_proses&id=<?= $data['id_realisasi'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>