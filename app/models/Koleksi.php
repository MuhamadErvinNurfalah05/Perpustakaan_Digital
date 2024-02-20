<?php 
class Koleksi extends BaseModel
{
  public $table_name    = "koleksipribadi";
  public $table_id      = "koleksi_id";

  public function get()
  {
    $id = $_SESSION['user_id'];
    $query = "SELECT * FROM koleksipribadi
    INNER JOIN buku ON koleksipribadi.buku_id = buku.buku_id
    INNER JOIN users ON koleksipribadi.user_id = users.user_id
    WHERE users.user_id = $id
    ORDER BY koleksipribadi.koleksi_id DESC
    ";
    
    $result = $this->mysqli->query($query);

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;
  }
}
