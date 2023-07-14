<?php 

class ShoppingModel
{
  use \Model;

  protected $table = 'shopping';

  /** allow only data from defined array to be manipulated **/
  protected $allowedColumns = [
    'name',
    'price',
    'description',
    'is_checked'
  ];

  public function insert($data): int
  {
    if (!empty($this->allowedColumns)) {
        foreach ($data as $key => $value) {
            if (!in_array($key, $this->allowedColumns)) {
                unset($data[$key]);
            }
        }
    }

    $keys = array_keys($data);

    $query = "INSERT INTO $this->table (".implode(",", $keys).") VALUES (:".implode(",:", $keys).")";
    $this->prepare($query);
    $this->execute($data);

    return $this->getLastId();
  }

  public function selectAll(): array
  {
      $query = "SELECT * FROM {$this->table}";

      $this->prepare($query);
      return $this->execute();
  }

  public function selectItemById($id): array
  {
      $query = "SELECT id,name,price,description,is_checked,created_at,deleted_at FROM {$this->table} WHERE id = :id";

      $this->prepare($query);
      return $this->execute(['id' => $id], PDO::FETCH_OBJ);
  }
  
  public function delete(int $id): bool
  {
      $query = "DELETE FROM {$this->table} WHERE id = :id";
      $this->prepare($query);
      return $this->execute(['id' => $id]) !== false;
  }

  public function update(array $data, int $id): bool
{
    $updateParams = [];
    $data = array_intersect_key($data, array_flip($this->allowedColumns));
    
    if (empty($data)) return false;

    foreach ($data as $key => $value) {
        $updateParams[] = "{$key} = :{$key}";
    }

    $updateStr = implode(', ', $updateParams);

    $query = "UPDATE {$this->table} SET {$updateStr} WHERE id = :id";

    $data['id'] = $id;

    $this->prepare($query);
    return $this->execute($data) !== false;
}

}