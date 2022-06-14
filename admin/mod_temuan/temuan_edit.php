<?php
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM temuan where id_temuan='$id'");
$data = mysqli_fetch_assoc($query);
?>
<h3 class="text-uppercase mb-3">edit Data temuan</h3>
<form action="?p=temuan_proses" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <table width="100%">
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="id_temuan" class="form-label">id temuan</label>
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
                            <label style="text-transform:capitalize;" for="id_pelanggan" class="form-label">id_pelanggan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">

                            <select class="form-select" onchange="isi_otomatis()" aria-label="Default select example" name="id_pelanggan" id="id_pelanggan" required>
                                <option value="" selected> -- id pelanggan --</option>
                                <?php
                                $query1 = mysqli_query($conn, "SELECT * FROM pemeriksaan");
                                while ($data1 = mysqli_fetch_assoc($query1)) {;
                                ?>
                                    <option value="<?php echo $data1['id_pelanggan']; ?>" <?php if ($data1['id_pelanggan'] == $data['id_pelanggan']) {
                                                                                                echo "selected";
                                                                                            } ?>><?php echo $data1['id_pelanggan']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="nm_pelanggan" class="form-label">Nama</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="nm_pelanggan" readonly class="form-control" id="nm_pelanggan" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="alamat" class="form-label">Alamat</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="alamat" readonly class="form-control" id="alamat" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="No Ba" class="form-label">No Ba</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="No Ba" readonly class="form-control" id="noBa" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="tarif" class="form-label">tarif</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="tarif" readonly class="form-control" id="tarif" aria-describedby="emailHelp" required>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="daya" class="form-label">daya</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="daya" readonly class="form-control" id="daya" aria-describedby="emailHelp" required>
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
        <div class="col-md-6">
            <table width="100%">
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="tgl_periksa" class="form-label">tanggal periksa</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="tgl_periksa" readonly class="form-control" id="tgl_periksa" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="gol" class="form-label">gol</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="gol" value="<?php echo $data['gol'] ?>" class="form-control" id="gol" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="energy" class="form-label">energy (KWh)</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="energy" value="<?php echo $data['energy'] ?>" class="form-control" id="energy" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="latitude" class="form-label">latitude</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="latitude" value="<?php echo $data['latitude'] ?>" class="form-control" id="latitude" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="longtitude" class="form-label">longtitude</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="longtitude" value="<?php echo $data['longtitude'] ?>" class="form-control" id="longtitude" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="per_tag_susulan" class="form-label">perkiraan tagihan susulan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="per_tag_susulan" value="<?php echo $data['per_tag_susulan'] ?>" class="form-control" id="per_tag_susulan" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="keterangan" class="form-label">keterangan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="keterangan" value="<?php echo $data['keterangan'] ?>" class="form-control" id="keterangan" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
            </table>
        </div>
    </div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
    window.addEventListener("load", function() {
        isi_otomatis();
    }, false);

    function isi_otomatis() {
        var id = $("#id_pelanggan").val();
        $.ajax({
            url: 'mod_temuan/temuan_cari.php',
            data: "id=" + id,
        }).success(function(data) {
            var json = data,
                obj = JSON.parse(json);
            console.log(obj);
            $('#nm_pelanggan').val(obj.nm_pelanggan);
            $('#alamat').val(obj.alamat);
            $('#tarif').val(obj.tarif);
            $('#daya').val(obj.daya);
            $('#noBa').val(obj.no_ba);
            $('#tgl_periksa').val(obj.tgl_periksa);
        });
    }
</script>