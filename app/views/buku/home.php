<?php include '../app/views/templates/header.php'; $no = 1; ?>
<h2>Buku</h2>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= urlTo('/buku/cetakbuku'); ?>" class="btn btn-success float-left">Cetak Laporan</a>
                <a href="<?= urlTo('/buku/create'); ?>" class="btn btn-primary float-right">Tambah Data</a>
              </div>
              <!-- /.card-header -->
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
                          href="<?= urlTo('/buku/'.$buku['buku_id'].'/edit') ?>"
                          class="btn btn-warning
                          ">
                          Edit
                        </a>
                        
                        <a 
                          href="<?= urlTo('/buku/'.$buku['buku_id'].'/delete') ?>"
                          class="btn btn-danger
                          ">
                          Delete
                        </a>
                        
                        <a 
                          href="<?= urlTo('/buku/'.$buku['buku_id'].'/ulasan') ?>"
                          class="btn btn-info
                          ">
                          Lihat Ulasan
                        </a>
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