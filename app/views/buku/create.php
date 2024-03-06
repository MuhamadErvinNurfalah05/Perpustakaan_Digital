<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/buku/store'); ?>" method="post">
        <div class="form-group">
          <label for="kategori_id">Kategori</label>
          <select id="kategori_id" name="kategori_id" class="form-control custom-select">
          <?php foreach ($data as $k): ?>
          <option value="<?= $k['kategori_id']; ?>"><?= $k['nama_kategori']; ?></option>
          <?php endforeach ?>
          </select>
        </div>

        <div class="form-group">
          <label for="judul">Judul</label>
          <input type="text" id="judul" name="judul" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="penulis">Penulis</label>
          <input type="text" id="penulis" name="penulis" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="penerbit">Penerbit</label>
          <input type="text" id="penerbit" name="penerbit" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="tahun_terbit">Tahun Terbit</label>
          <input type="number" id="tahun_terbit" name="tahun_terbit" class="form-control" required>
        </div>

        <div class="form-group">
          <a href="<?= urlTo('/buku'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Tambah Data</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>