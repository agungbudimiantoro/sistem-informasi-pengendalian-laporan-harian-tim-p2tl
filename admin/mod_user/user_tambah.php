<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(id_user) as id FROM user");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "USR";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>
<h3 class="text-uppercase mb-3">input Data User</h3>
<div class="row">
    <form action="?p=user_proses" method="POST" enctype="multipart/form-data">
        <div class="col-md-6">
            <table width="100%">
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="id_user" class="form-label">id user</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="id" readonly value="<?php echo $id_hitung ?>" class="form-control" id="id_user" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="nm_user" class="form-label">nama user</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="nm_user" class="form-control" id="nm_user" aria-describedby="emailHelp" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="username" class="form-label">username</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="password" class="form-label">password</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="level" class="form-label">level</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <select class="form-select" aria-label="Default select example" name="level" required>

                                <option value="admin">Admin</option>
                                <option value="tim p2tl">Tim P2TL</option>
                                <option value="pimpinan">Pimpinan</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <button type="submit" name="add" class="btn btn-primary">Simpan</button>
                        <a href="?p=user_data" class="btn btn-success">Batal</a>
                    </td>
                </tr>
            </table>
        </div>

    </form>
</div>
</div>