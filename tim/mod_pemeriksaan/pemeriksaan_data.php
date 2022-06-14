<h3 class="text-uppercase" style="text-transform: capitalize;">data pemeriksaan</h3>
<br>
<a href="?p=pemeriksaan_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class=" p-2">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id pelanggan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">alamat</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">no ba</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tarif</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">daya (VA)</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tgl_periksa</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hasil</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">tindakan</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama petugas</th>

            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM pemeriksaan");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $data['id_pelanggan'] ?>
                    </td>

                    <td>
                        <?= $data['nm_pelanggan'] ?>
                    </td>
                    <td>
                        <?= $data['alamat'] ?>
                    </td>
                    <td>
                        <?= $data['no_ba'] ?>
                    </td>
                    <td>
                        <?= $data['tarif'] ?>
                    </td>
                    <td>
                        <?= $data['daya'] ?>
                    </td>
                    <td>
                        <?= $data['tgl_periksa'] ?>
                    </td>
                    <td>
                        <?= $data['hasil'] ?>
                    </td>
                    <td>
                        <?= $data['tindakan'] ?>
                    </td>
                    <td>
                        <?= $data['nm_petugas'] ?>
                    </td>

                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>