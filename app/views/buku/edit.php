<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/buku/'.$data['buku_id'].'/update'); ?>" method="post">

        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" id="judul" name="judul" class="form-control"
          value="<?= $data['judul']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="penulis">Penulis</label>
          <input type="text" id="penulis" name="penulis" class="form-control"
          value="<?= $data['penulis']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" id="penerbit" name="penerbit" class="form-control"
          value="<?= $data['penerbit']; ?>" required>
        </div>
        
        <div class="form-group">
          <label for="tahun_terbit">Tahun Terbit</label>
          <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control"
          value="<?= $data['tahun_terbit']; ?>" required>
        </div>
      
        <div class="form-group">
          <a href="<?= urlTo('/buku'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>