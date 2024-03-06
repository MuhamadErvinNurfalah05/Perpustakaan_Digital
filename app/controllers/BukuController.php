<?php 
use Dompdf\Dompdf;
class BukuController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk Administrator dan Petugas
      * Selain Administrator dan Petugas akan langsung diarahkan kembali ke halaman home
    */
    if ($_SESSION['level'] !== 'Administrator' && $_SESSION['level'] !== 'Petugas') {
      redirectTo('error', 'Mohon maaf, Anda tidak berhak mengakses halaman ini', '/home2');
    }
  }

  public function index()
  {
    $data = $this->model('KBRelasi')->get();
    $this->view('buku/home', $data);
  }

  public function create()
  {
    $data = $this->model('KategoriBuku')->getAll();
    $this->view('buku/create', $data);
  }

  public function store()
  {
    $buku_id = $this->model('Buku')->create([
      'judul'       => $_POST['judul'],
      'penulis'     => $_POST['penulis'],
      'penerbit'    => $_POST['penerbit'],
      'tahun_terbit' => $_POST['tahun_terbit']
    ]);

    $kategori_id = $_POST['kategori_id'];

    if ($this->model('KBRelasi')->create([
      'buku_id'      => $buku_id,
      'kategori_id'  => $kategori_id
    ]) > 0) {
      redirectTo('success', 'Selamat, Buku berhasil di tambahkan', '/buku');
    } else {
      redirectTo('error', 'Maaf, Buku gagal di tambahkan', '/buku/create');
    }
  }

  public function edit($id)
  {
    $data = $this->model('Buku')->getById($id);
    $this->view('buku/edit', $data);
  }

  public function update($id)
  {
    if ($this->model('Buku')->update($id) > 0) {
      redirectTo('success', 'Selamat, Data Buku Berhasil di Update', '/buku');
    } else {
      redirectTo('danger', 'Maaf, Data Buku gagal di Update', '/buku');
    }
  }

  public function delete($id)
	{
		if ($this->model('Buku')->delete($id) > 0) {
			redirectTo('success', 'Selamat, Data Buku berhasil di hapus!', '/buku');
		}
	}

  public function ulasan($id)
  {
    $this->view('buku/ulasan', [
      'buku'    => $this->model('Buku')->getById($id),
      'ulasan'  => $this->model('Ulasanbuku')->getByBookId($id)
    ]);
  }

  public function cetakbuku()
  {
    $data = $this->model('KBRelasi')->get();
    $html 	= "<center>";
		$html 	.= "<h1>SMK NEGERI 1 BANJAR</h1>";
		$html 	.= "<h2>PERPUSTAKAAN DIGITAL</h2>";
		$html 	.= "<h3>DAFTAR BUKU</h3>";
		$html 	.= "<hr>";
    $html   .= "<table align='center' border='1' cellpadding='10' cellspacing='0'>";
		$html   .= "<tr><th>#</th><th>Kategori</th><th>Judul Buku</th><th>Penulis</th><th>Penerbit</th><th>Tahun Terbit</th></tr>";
    $no = 1;
    foreach ($data as $buku) {
      $html .= "<tr>";
      $html .= "<td>".$no."</td>";
      $html .= "<td>".$buku['nama_kategori']."</td>";
      $html .= "<td>".$buku['judul']."</td>";
      $html .= "<td>".$buku['penulis']."</td>";
      $html .= "<td>".$buku['penerbit']."</td>";
      $html .= "<td>".$buku['tahun_terbit']."</td>";
      $html .= "</tr>";
      $no++;
    }
    $html   .= "</table>";
    $html 	.= "</center>";
    $dompdf = new Dompdf();
		$dompdf->loadHtml($html);
		$dompdf->setPaper('4A', 'potrait');
		$dompdf->render();
		$dompdf->stream('Data Buku', ['Attachment' => 0]);
  }
}
