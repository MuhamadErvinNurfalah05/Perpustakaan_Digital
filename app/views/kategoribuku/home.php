<?php include '../app/views/templates/header.php'; $no = 1; ?>
<h2>Kategori Buku</h2>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= urlTo('/kategoribuku/create'); ?>" class="btn btn-primary float-right">
                  Tambah Kategori
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $k): ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $k['nama_kategori']; ?></td>
                      <td>
                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['kategori_id'].'/edit') ?>"
                        class="btn btn-warning
                        ">
                          Edit
                        </a>

                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['kategori_id'].'/delete') ?>"
                        class="btn btn-danger
                        ">
                          Delete
                        </a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>#</th>
                    <th>Nama Kategori</th>
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