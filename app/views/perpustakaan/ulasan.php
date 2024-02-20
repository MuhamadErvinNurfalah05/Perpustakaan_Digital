<?php include '../app/views/templates/header.php'; ?>
<div class="col-md-6">
  <div class="card card-primary">
    <div class="card-body">
      <form action="<?= urlTo('/perpustakaan/ulasanstore'); ?>" method="post">
        <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']; ?>">
        <input type="hidden" name="buku_id" value="<?= $data['buku_id']; ?>">
        <div class="form-group">
          <label for="judul">Judul Buku</label>
          <input type="text" id="judul" class="form-control"
          value="<?= $data['judul'] ?>" readonly>
        </div>
        
        <div class="form-group">
          <label for="penulis">Penulis</label>
          <input type="text" id="penulis" class="form-control" 
          value="<?= $data['penulis'] ?>" readonly>
        </div>
        
        <div class="form-group">
          <label for="ulasan">Ulasan</label>
          <input type="text" id="ulasan" name="ulasan" class="form-control" required>
        </div>
        
        <div class="form-group">
          <label for="rating">Rating</label>
          <select name="rating" id="rating" class="form-control">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
          </select>
        </div>
      
        <div class="form-group">
          <a href="<?= urlTo('/buku'); ?>" class="btn btn-danger">Batal</a>
          <button type="submit" class="btn btn-primary float-right">Tambah Ulasan</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php include '../app/views/templates/footer.php'; ?>