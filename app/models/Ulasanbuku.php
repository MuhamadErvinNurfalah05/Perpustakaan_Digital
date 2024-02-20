<?php 
class Ulasanbuku extends BaseModel
{
  public $table_name  = "ulasanbuku";
  public $table_id    = "UlasanID";

  public function getByBookID($id)
  {
    $result = $this->mysqli->query("
      SELECT * FROM ulasanbuku
      INNER JOIN users ON ulasanbuku.user_id = users.user_id
      WHERE ulasanbuku.buku_id = '$id'
    ");

    $data = [];
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}

		return $data;

  }
}
