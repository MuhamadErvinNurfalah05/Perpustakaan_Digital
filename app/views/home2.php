<?php include '../app/views/templates/header.php'; ?>
<h1 class="h3 mb-4 text-gray-800" style="text-align: center;">Selamat Datang Di Halaman <?php echo $_SESSION['username']; ?></h1>
  <h2 style="text-align: center;">Perpustakaan Digital | SMKN 1 Banjar</h2>
  <br>
<div class="container-fluid">
<div class="row justify-content-center"> <!-- Add justify-content-center class here -->

          
          <!-- ./col -->
        </div>
        <!-- Begin Page Content -->
                <div class="container-fluid">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="content mt-3">
                            <div class="row">
                               
                            </div>
                            <!-- kartu -->
                            <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">

                                    <tr>
                                        <td width="200">Nama</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['username']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Hak akses</td>
                                        <td width="1">:</td>
                                        <td><?php echo $_SESSION['level']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="200">Tanggal Login</td>
                                        <td width="1">:</td>
                                        <td><?php echo date('l, d m Y'); ?></td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                        </div>
                        <!-- /.container-fluid -->

                    </div>
                    <!-- End of Main Content -->
</div>
<?php include '../app/views/templates/footer.php'; ?>