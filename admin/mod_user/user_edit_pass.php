<?php
$id = $_GET['id'];
?>
<h3 class="text-center text-capitalize mb-3">edit password User</h3>
<form action="?p=user_proses" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">
        <table width="100%">
            <tr>
                <td>
                    <div class="mb-3">
                        <label style="text-transform:capitalize;" for="password" class="form-label">password</label>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <input type="text" name="id" value="<?php echo $id ?>" hidden class="form-control" id="id_user" aria-describedby="emailHelp" required>
                        <input type="password" name="pass" class="form-control" id="password" aria-describedby="emailHelp" required>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="mb-3">
                        <label style="text-transform:capitalize;" for="password" class="form-label">konfirmasi passowrd</label>
                    </div>
                </td>
                <td>
                    <div class="mb-3">
                        <input type="password" name="pass1" class="form-control" id="password1" aria-describedby="emailHelp" required>
                    </div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td> <button type="submit" name="edit_pass" class="btn btn-primary">edit password</button>
                    <a href="?p=user_data" class="btn btn-success">Batal</a>
                </td>
            </tr>
        </table>
    </div>
    </div>

</form>


<script type="text/javascript">
    window.onload = function() {
        document.getElementById("password").onchange = validatePassword;
        document.getElementById("password1").onchange = validatePassword;
    }

    function validatePassword() {
        var pass1 = document.getElementById("password").value;
        var pass2 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password1").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
        else
            document.getElementById("password1").setCustomValidity('');
    }
</script>