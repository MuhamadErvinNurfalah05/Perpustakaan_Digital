<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/user/'.$data['user_id'].'/update'); ?>" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username" class="form-control" value="<?= $data['username']; ?>" readonly>
        </div>
        
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" value="<?= $data['email']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="nama_lengkap">NamaLengkap</label>
          <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?= $data['nama_lengkap']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" id="alamat" name="alamat" class="form-control" value="<?= $data['alamat']; ?>" required>
        </div>

        <div class="form-group">
          <label for="Alamat">No HP</label>
          <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $data['no_hp']; ?>" required>
        </div>

        <div class="form-group">
          <a href="<?= urlTo('/user'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>