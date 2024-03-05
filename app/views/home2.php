<?php include '../app/views/templates/header.php'; ?>
<h1 class="h3 mb-4 text-gray-800" style="text-align: center;">Selamat Datang Di Halaman <?php echo $_SESSION['username']; ?></h1>
  <h2 style="text-align: center;">Perpustakaan Digital | SMKN 1 Banjar</h2>
  <br>
<div class="container-fluid">
<div class="row justify-content-center"> <!-- Add justify-content-center class here -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
           <div class="small-box bg-info">
              <div class="inner">
              <p>Buku</p>
              <h3><?= hitung('buku'); ?></h3>
              <?php
            // Assuming you have access to user role information, replace 'userRole' with the actual variable containing the user's role
            if ($_SESSION['level'] === 'Administrator' || $_SESSION['level'] === 'Petugas'): ?>
                <a href="../ukk_perpus_ervin/buku" class="btn btn-dark btn-sm">Lihat Data</a>
            <?php else: ?>
                <a href="../ukk_perpus_ervin/perpustakaan" class="btn btn-dark btn-sm">Lihat Data</a>
            <?php endif; ?>
           </div>
           <div class="icon">
            <i class="ion ion-bag"></i>
        </div>
    </div>
 </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <p>Kategori Buku</p>
                <h3><?= hitung('buku_kategori'); ?></h3>
                <a href="../ukk_perpus_ervin/koleksi" class="btn btn-dark btn-sm">Lihat Data</a>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="background-color: orange;">
                <p style="color: white;">Buku Yang Dipinjam</p>
                <h3 style="color: white;"><?= hitung('peminjaman'); ?></h3>
                <a href="../ukk_perpus_ervin/peminjaman" class="btn btn-dark btn-sm">Lihat Data</a>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

          
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