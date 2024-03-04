<?php 
class Koleksi extends BaseModel
{
  public $table_name    = "koleksi_pribadi";
  public $table_id      = "koleksi_id";

  public function get()
  {
    $id = $_SESSION['user_id'];
    $query = "SELECT * FROM koleksi_pribadi
    INNER JOIN buku ON koleksi_pribadi.buku_id = buku.buku_id
    INNER JOIN users ON koleksi_pribadi.user_id = users.user_id
    WHERE users.user_id = $id
    ORDER BY koleksi_pribadi.koleksi_id DESC
    ";
    
    $result = $this->mysqli->query($query);

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
