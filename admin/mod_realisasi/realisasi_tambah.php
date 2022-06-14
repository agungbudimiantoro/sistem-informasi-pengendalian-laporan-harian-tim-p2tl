<?php
$query_hitung = mysqli_query($conn, "SELECT MAX(id_realisasi) as id FROM realisasi");
$data_hitung = mysqli_fetch_array($query_hitung);
$id_hitung = $data_hitung['id'];
$urt = (int) substr($id_hitung, 3, 4);
$urt++;
$hrf = "RLS";
$id_hitung = $hrf . sprintf("%03s", $urt);
?>
<h3 class="text-uppercase mb-3">input Data realisasi</h3>
<form action="?p=realisasi_proses" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-6">
            <table width="100%">
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="id_realisasi" class="form-label">id temuan</label>
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
                            <label style="text-transform:capitalize;" for="id_pelanggan" class="form-label">id_pelanggan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">

                            <select class="form-select" onchange="isi_otomatis()" aria-label="Default select example" name="id_pelanggan" id="id_pelanggan" required>
                                <option value="" selected> -- id pelanggan --</option>
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM pemeriksaan");
                                while ($data = mysqli_fetch_assoc($query)) {;
                                ?>
                                    <option value="<?php echo $data['id_pelanggan']; ?>"><?php echo $data['id_pelanggan']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="id_temuan" class="form-label">id temuan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="id_temuan" readonly class="form-control" id="id_temuan" aria-describedby="emailHelp" required>
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
                            <label style="text-transform:capitalize;" for="daya" class="form-label">daya (VA)</label>
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
                            <label style="text-transform:capitalize;" for="tgl_realisasi" class="form-label">tanggal realisasi</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="date" name="tgl_realisasi" class="form-control" id="tgl_realisasi" aria-describedby="emailHelp" required>
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
                            <input type="text" name="gol" readonly class="form-control" id="gol" aria-describedby="emailHelp" required>
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
                            <input type="text" name="energy" readonly class="form-control" id="energy" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="jlh_tag_susulan" class="form-label">jumlah tagihan susulan</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="number" name="jlh_tag_susulan" class="form-control" id="jlh_tag_susulan" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="uang_muka" class="form-label">uang muka</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="number" name="uang_muka" class="form-control" id="uang_muka" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="sph" class="form-label">SPH (Rp.)</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="number" name="sph" class="form-control" id="sph" aria-describedby="emailHelp" required>
                        </div>
                    </td>

                </tr>
                <tr>
                    <td>
                        <div class="mb-3">
                            <label style="text-transform:capitalize;" for="ket" class="form-label">ket</label>
                        </div>
                    </td>
                    <td>
                        <div class="mb-3">
                            <input type="text" name="ket" class="form-control" id="ket" aria-describedby="emailHelp" required>
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
            url: 'mod_realisasi/realisasi_cari.php',
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
            $('#id_temuan').val(obj.id_temuan);
            $('#gol').val(obj.gol);
            $('#energy').val(obj.energy);
        });
    }
</script>