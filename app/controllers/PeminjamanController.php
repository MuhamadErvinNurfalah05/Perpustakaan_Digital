<?php 
class PeminjamanController extends Controller
{
  public function index()
  {
    $data = $this->model('Peminjaman')->getPinjam();
    $this->view('peminjaman/home', $data);
  }

  public function pinjam($id)
  {
    $data = $this->model('Buku')->getById($id);
    $this->view('peminjaman/pinjam', $data);
  }

  public function store()
  {
    if ($this->model('Peminjaman')->create([
      'user_id'              => $_SESSION['user_id'],
      'buku_id'              => $_POST['buku_id'],
      'tanggal_pinjam'   => date('Y-m-d'),
      'status_pinjam'    => 'Belum di Kembalikan'
    ]) > 0) {
      redirectTo('success', 'Selamat, Buku berhasil di pinjam', '/peminjaman');
    } else {
      redirectTo('error', 'Maaf, Buku gagal di pinjam', '/peminjaman');
    }
  }

  public function kembalikan($id)
  {
    if ($this->model('Peminjaman')->update($id) > 0) {
			redirectTo('success', 'Selamat, Buku berhasil di kembalikan!', '/peminjaman');
		} else {
			redirectTo('error', 'Maaf, Buku gagal di kembalikan!', '/peminjaman');
		}
  }
}
