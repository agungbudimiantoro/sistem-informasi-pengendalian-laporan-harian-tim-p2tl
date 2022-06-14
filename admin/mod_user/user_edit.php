<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM user where id_user='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3 class="text-center text-capitalize mb-3">edit Data User</h3>
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
                            <input type="text" name="id" readonly value="<?php echo $id ?>" class="form-control" id="id_user" aria-describedby="emailHelp" required>
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
                            <input type="text" name="nm_user" value="<?php echo $data['nm_user'] ?>" class="form-control" id="nm_user" aria-describedby="emailHelp" required>
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
                            <input type="text" name="username" value="<?php echo $data['username'] ?>" class="form-control" id="username" aria-describedby="emailHelp" required>
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

                                <option value="admin" <?php
                                                        if ($data['level'] == 'admin') {
                                                            echo 'selected';
                                                        }
                                                        ?>>Admin</option>
                                <option value="tim p2tl" <?php
                                                            if ($data['level'] == 'tim p2tl') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Tim P2TL</option>
                                <option value="pimpinan" <?php
                                                            if ($data['level'] == 'pimpinan') {
                                                                echo 'selected';
                                                            }
                                                            ?>>Pimpinan</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                        <a href="?p=user_data" class="btn btn-success">Batal</a>
                    </td>
                </tr>
            </table>
        </div>

    </form>
</div>
</div>
</div>