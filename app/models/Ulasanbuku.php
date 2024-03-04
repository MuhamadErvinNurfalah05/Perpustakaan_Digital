<?php 
class Ulasanbuku extends BaseModel
{
  public $table_name  = "buku_ulasan";
  public $table_id    = "ulasan_id";

  public function getByBookID($id)
  {
    $result = $this->mysqli->query("
      SELECT * FROM buku_ulasan
      INNER JOIN users ON buku_ulasan.user_id = users.user_id
      WHERE buku_ulasan.buku_id = '$id'
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;

  }
}
