<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="assets/Bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <style></style>
  <title>Login</title>
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <div class="collapse navbar-collapse  justify-content-center" id="navbarNav">
        <h1 class="text-light">HEADER</h1>
      </div>
    </div>
  </nav>
  <!-- end of navbar -->
  <div class="container mt-5 mb-5" style="min-height: 480px;">
    <div class="row  p-2">
      <!-- <h3 class="text-center">Login</h3> -->
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <p class=""> <?php
                      // var_dump($_GET);
                      if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                          echo "Username dan Password tidak sesuai !";
                        }
                        if ($_GET['pesan'] == "gagal1") {
                          echo "Akun tidak ditemukan !";
                        }
                        if ($_GET['pesan'] == "belum_login") {
                          echo "Anda Harus Login Terlebih Dahulu !";
                        }
                        if ($_GET['pesan'] == "gagal10") {
                          echo "masukan username dan password !";
                        }
                      } else {
                        echo "";
                      }
                      ?> </p>
        <form action="validasi_login.php" method="POST">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <div class="d-grid gap-2 col-2 mx-auto">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="assets/Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>