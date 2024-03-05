<?php include '../app/views/templates/header.php'; $no = 1; ?>
<h2>Peminjam</h2>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Peminjam</th>
                    <th>Alamat Peminjam</th>
                    <th>Buku Yang di Pinjam</th>
                    <th>Tanggal di Dipinjam</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $k): ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $k['nama_lengkap']; ?></td>
                      <td><?= $k['alamat']; ?></td>
                      <td><?= $k['judul']; ?></td>
                      <td><?= $k['tanggal_pinjam']; ?></td>
                      <td><?= $k['tanggal_kembali']; ?></td>
                      <td><?= $k['status_pinjam']; ?></td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama Peminjam</th>
                    <th>Alamat Peminjam</th>
                    <th>Buku Yang di Pinjam</th>
                    <th>Tanggal di Dipinjam</th>
                    <th>Tanggal di Kembalikan</th>
                    <th>Status</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<?php include '../app/views/templates/footer.php'; ?>