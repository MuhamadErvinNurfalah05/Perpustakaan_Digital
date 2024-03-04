<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UKK PERPUS 2024 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/css/adminlte.min.css'); ?>">
  
  <style>
    body {
      background-image: url('https://img.freepik.com/free-vector/cartoon-library-interior-with-bookshelf-background_107791-19699.jpg?t=st=1708913792~exp=1708917392~hmac=f5162125bb5f06f126506e1beb92d31d3546a05fc7db1be9cec26a8b18527dba&w=826');
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="card">
    <img src="https://img.freepik.com/premium-vector/flat-style-circle-template-book-education-vector_951778-34612.jpg?w=740" alt=""  height="80px" width="80px" style="display: block; margin-left: auto; margin-right: auto; margin-top: 12px; margin-bottom: auto;">
    <div class="card-body login-card-body">
      <p class="login-box-msg" style="font-size: 20px;">Selamat Datang Kembali</p>
      <form action="<?= urlTo('/login/login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a href="<?= urlTo('/login/register'); ?>" class="text-center">Belum punya akun ?</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- sweetalert2 -->
<script src="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<!-- jQuery -->
<script src="<?= urlTo('/public/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= urlTo('/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= urlTo('/public/adminlte/js/adminlte.min.js'); ?>"></script>
<?php if (isset($_COOKIE['alert'])): ?>
  <?php $data = unserialize($_COOKIE['alert']); ?>
  <script>
    Swal.fire({
      title: "<?= $data[1]; ?>",
      icon: "<?= $data[0]; ?>",
      showConfirmButton: false,
      timer:2000
    });
  </script>
<?php endif ?>
</body>
</html>
