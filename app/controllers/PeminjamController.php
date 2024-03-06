<?php 
use Dompdf\Dompdf;
class PeminjamController extends Controller
{
  public function __construct()
  {
    /**
      * Batasi hak akses hanya untuk Administrator dan Petugas
      * Selain Administrator dan Petugas akan langsung diarahkan kembali ke halaman home
    */
    if ($_SESSION['level'] !== 'Administrator' && $_SESSION['level'] !== 'Petugas') {
      redirectTo('error', 'Mohon maaf, Anda tidak berhak mengakses halaman ini', '/');
    }
  }

  public function index()
  {
    $data = $this->model('Peminjaman')->get();
    $this->view('peminjam/home', $data);
  }

  public function cetakpeminjam()
  {
    $data = $this->model('Peminjaman')->get();
    $html 	= "<center>";
		$html 	.= "<h1>SMK NEGERI 1 BANJAR</h1>";
		$html 	.= "<h2>PERPUSTAKAAN DIGITAL</h2>";
		$html 	.= "<h3>DAFTAR BUKU</h3>";
		$html 	.= "<hr>";
    $html   .= "<table align='center' border='1' cellpadding='10' cellspacing='0'>";
		$html   .= "<tr><th>#</th><th>Nama Peminjam</th><th>Alamat</th><th>Buku Yang Dipinjam</th><th>Tanggal Dipinjam</th><th>Tanggal Dikembalikan</th><th>Status</th></tr>";
    $no = 1;
    foreach ($data as $k) {
      $html .= "<tr>";
      $html .= "<td>".$no."</td>";
      $html .= "<td>".$k['nama_lengkap']."</td>";
      $html .= "<td>".$k['alamat']."</td>";
      $html .= "<td>".$k['judul']."</td>";
      $html .= "<td>".$k['tanggal_pinjam']."</td>";
      $html .= "<td>".$k['tanggal_kembali']."</td>";
      $html .= "<td>".$k['status_pinjam']."</td>";
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
