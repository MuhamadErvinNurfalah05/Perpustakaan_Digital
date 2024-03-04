<?php 
class Peminjaman extends BaseModel
{
  public $table_name    = "peminjaman";
  public $table_id      = "Peminjaman_id";

  public function getPinjam()
  {
    $id = $_SESSION['user_id'];
    $result = $this->mysqli->query("
      SELECT * FROM peminjaman
      INNER JOIN users ON peminjaman.user_id = users.user_id
      INNER JOIN buku ON peminjaman.buku_id = buku.buku_id
      WHERE peminjaman.user_id = $id
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }

  public function get()
  {
    $id = $_SESSION['user_id'];
    $result = $this->mysqli->query("
      SELECT * FROM peminjaman
      INNER JOIN users ON peminjaman.user_id = users.user_id
      INNER JOIN buku ON peminjaman.buku_id = buku.buku_id
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
