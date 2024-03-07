<?php include '../app/views/templates/header.php'; $no = 1; ?>
<h2>Daftar Buku</h2>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th>Ditambahkan pada</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $buku): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $buku['nama_kategori']; ?></td>
                  		<td><?= $buku['judul']; ?></td>
                  		<td><?= $buku['penulis']; ?></td>
                      <td><?= $buku['stok']; ?></td>
                      <td><?= $buku['created_at']; ?></td>
                      <td>
                        <a 
                          href="<?= urlTo('/perpustakaan/'.$buku['buku_id'].'/detailbuku') ?>"
                          class="btn btn-info
                          ">
                          Detail
                        </a>

                        <form action="<?= urlTo('/peminjaman/store') ?>" method="post" class="d-inline">
                          <input type="hidden" name="buku_id" value="<?= $buku['buku_id']; ?>">
                          <button class="btn btn-primary">
                            Pinjam
                          </button>
                        </form>
                        
                        <form action="<?= urlTo('/koleksi/store') ?>" method="post" class="d-inline">
                          <input type="hidden" name="buku_id" value="<?= $buku['buku_id']; ?>">
                          <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
                          <button class="btn btn-success">
                            Masukan ke koleksi pribadi
                          </button>
                        </form>

                      </td>
                  	</tr>
                  	<?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th>Ditambahkan pada</th>
                    <th>Tindakan</th>
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