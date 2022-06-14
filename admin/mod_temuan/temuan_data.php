<h3 class="text-uppercase" style="text-transform: capitalize;">data temuan</h3>
<br>
<a href="?p=temuan_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class=" p-2">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">id temuan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">id pelanggan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">Nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">Alamat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">No Ba</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">Tarif</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">gol</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">energy</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center" colspan="2">Kordinat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">perkiraan tagihan susulan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">keterangan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">latitude</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">longtitude</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM temuan");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $data['id_temuan'] ?>
                    </td>

                    <td>
                        <?= $data['id_pelanggan'] ?>
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
                        <?= $data['gol'] ?>
                    </td>
                    <td>
                        <?= $data['energy'] ?>
                    </td>
                    <td>
                        <?= $data['latitude'] ?>
                    </td>
                    <td>
                        <?= $data['longtitude'] ?>
                    </td>
                    <td>
                        <?= $data['per_tag_susulan'] ?>
                    </td>
                    <td>
                        <?= $data['keterangan'] ?>
                    </td>
                    <td>
                        <a href="?p=temuan_edit&id=<?= $data['id_temuan'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=temuan_proses&id=<?= $data['id_temuan'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>