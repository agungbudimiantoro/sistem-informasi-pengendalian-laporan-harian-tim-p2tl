<h3 class="text-uppercase" style="text-transform: capitalize;">data user</h3>
<br>
<a href="?p=user_tambah" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<div class="p-2">
    <table class="table align-items-center mb-0 display" id="table_id">
        <thead>
            <tr>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>

                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id user</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama user</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Username</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Password</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">level</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $query = mysqli_query($conn, "SELECT * FROM user");
            while ($data = mysqli_fetch_assoc($query)) {
            ?><tr>
                    <td>
                        <?= $no++ ?>
                    </td>
                    <td>
                        <?= $data['id_user'] ?>
                    </td>
                    <td>
                        <?= $data['nm_user'] ?>
                    </td>

                    <td>
                        <?= $data['username'] ?>
                    </td>
                    <td>
                        <?= $data['password'] ?>
                    </td>
                    <td>
                        <?= $data['level'] ?>
                    </td>
                    <td>
                        <a href="?p=user_edit_pass&id=<?= $data['id_user'] ?>" class="btn btn-primary">Edit Password</a>
                        <a href="?p=user_edit&id=<?= $data['id_user'] ?>" class="btn btn-warning">Ubah</a>
                        <a href="?p=user_proses&id=<?= $data['id_user'] ?>" onclick="return confirm('anda yakin ingin menghapus data?')" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php }; ?>
        </tbody>
    </table>
</div>