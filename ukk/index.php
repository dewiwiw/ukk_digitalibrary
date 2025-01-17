<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Login</title>
    <link rel="shortcut icon" href="asset/img/logo smk mts.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <img src="asset/img/logo smk mts.png" style="width: 70px;">
    <img src="asset/img/t.png" style="width: 120px;" align="right">
  <div class="container" style="width: 650px;">
    <div class="content">
        <div class="card" style="margin-top: 3rem;">
            <div class="row">
                <div class="col m-5">
                    <h2 align="center">Sign In</h2>
                    <?php
                      if(isset($_GET['pesan'])) {
                        if ($_GET['pesan']=="gagal") {
                          echo '<div class="alert alert-danger">Username atau Password Anda Salah</div>';
                        }
                      }
                    ?>
                    
                <form action="aksi/cek_login.php" method="post" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                    </div>
                    
                    <center><button type="submit" class="btn btn-primary" style="width: 200px;">Login</button>
                </form>
                <p class="mt-3">Don't have an account? <a href="registrasi.php" class="">sign up</a></p></center>
                </div> 
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <div>
<p align="center">&copy; SMK Management Training System</p>
</div>
  </body>
</html>
