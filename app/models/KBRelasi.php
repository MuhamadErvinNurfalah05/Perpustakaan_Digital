<?php 
class KBRelasi extends BaseModel
{
  public $table_name    = "kategoribuku_relasi";
  public $table_id      = "KategoriBukuID";

  public function get()
  {
    $query = "SELECT * FROM kategoribuku_relasi
    INNER JOIN buku ON kategoribuku_relasi.buku_id = buku.buku_id
    INNER JOIN buku_kategori ON kategoribuku_relasi.kategori_id = buku_kategori.kategori_id
    ORDER BY buku.buku_id DESC
    ";
    
    $result = $this->mysqli->query($query);

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
