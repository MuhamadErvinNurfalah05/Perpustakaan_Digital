<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/kategoribuku/'.$data['kategori_id'].'/update'); ?>" method="post">
        <div class="form-group">
          <label for="nama_kategori">Nama Kategori</label>
          <input type="text" id="nama_kategori" 
          name="nama_kategori" 
          class="form-control" 
          value="<?= $data['nama_kategori']; ?>"
          required>
        </div>

        <div class="form-group">
          <a href="<?= urlTo('/kategoribuku'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>