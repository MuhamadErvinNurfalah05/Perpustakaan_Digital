<?php include '../app/views/templates/header.php'; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <h3 class="profile-username text-center"><?= $data['buku']['judul']; ?></h3>
                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Penulis</b> 
                    <label class="badge badge-info float-right"><?= $data['buku']['penulis']; ?></label>
                  </li>
                  <li class="list-group-item">
                    <b>Penerbit</b> 
                    <label class="badge badge-info float-right"><?= $data['buku']['penerbit']; ?></label>
                  </li>
                  <li class="list-group-item">
                    <b>Tahun Terbit</b> 
                    <label class="badge badge-info float-right"><?= $data['buku']['tahun_terbit']; ?></label>
                  </li>
                  
                  <a href="<?= urlTo('/perpustakaan'); ?>"
                  class="btn btn-danger btn-block">
                    <b>Kembali</b>
                  </a>
                  <a href="<?= urlTo('/perpustakaan/'.$data['buku']['buku_id'].'/buku_ulasan'); ?>" 
                  class="btn btn-success btn-block">
                    <b>Berikan Ulasan</b>
                  </a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card card-primary card-outline">
            	<div class="card-header">
            		<h4>Ulasan</h4>
            	</div>

            	<div class="card-body">
            		<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Pemberi Ulasan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data['ulasan'] as $ulasan): ?>
                    <tr>
                      <td><?= $ulasan['ulasan']; ?></td>
                      <td><?= $ulasan['rating']; ?></td>
                      <td><?= $ulasan['nama_lengkap']; ?></td>
                    </tr>
                  <?php endforeach ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Ulasan</th>
                    <th>Rating</th>
                    <th>Pemberi Ulasan</th>
                  </tr>
                  </tfoot>
                </table>
            	</div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
<?php include '../app/views/templates/footer.php'; ?>