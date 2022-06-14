<h3 class="text-uppercase mb-3">input Data pemeriksaan</h3>
<form action="?p=pemeriksaan_proses" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <table width="100%">
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="id_pelanggan" class="form-label">id pelanggan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="id" class="form-control" id="id_user" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="nm_pelanggan" class="form-label">Nama Pelanggan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="nm_pelanggan" class="form-control" id="nm_pelanggan" aria-describedby="emailHelp" required>
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
                            <input type="text" name="alamat" class="form-control" id="alamat" aria-describedby="emailHelp" required>
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
                            <input type="text" name="no_ba" class="form-control" id="noBa" aria-describedby="emailHelp" required>
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
                            <input type="text" name="tarif" class="form-control" id="tarif" aria-describedby="emailHelp" required>
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
        <div class="col-md-6">
            <table width="100%">
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="daya" class="form-label">daya</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="daya" class="form-control" id="daya" aria-describedby="emailHelp" required>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="tgl_periksa" class="form-label">tanggal periksa</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="date" name="tgl_periksa" class="form-control" id="tgl_periksa" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>

                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="hasil" class="form-label">hasil</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="hasil" class="form-control" id="hasil" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="tindakan" class="form-label">tindakan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="tindakan" class="form-control" id="tindakan" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="nm_petugas" class="form-label">nama petugas</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="nm_petugas" value="<?php echo $nm_user ?>" readonly class="form-control" id="nm_petugas" aria-describedby="emailHelp" required>
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