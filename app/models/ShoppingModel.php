<?php 

class ShoppingModel
{
  use Model;

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

    $data['is_checked'] = isset($data['is_checked']) && $data['is_checked'] === 'on' ? true : false;

    foreach ($data as $key => $value) {
        $updateParams[] = "{$key} = :{$key}";
    }

    $updateStr = implode(', ', $updateParams);

    $query = "UPDATE {$this->table} SET {$updateStr} WHERE id = :id";

    $data['id'] = $id;

    $this->prepare($query);
    return $this->execute($data) !== false;
}

public function validateShoppingItem($data) : int
{
    /**I could validade a bunch of things here, like if the item ID exists in the database
     * or even if the user has permission to edit this item (considering user level permission or authority).
     * This would be better following RoomRaccoon validation standarts
    */

    $this->messages = array();

    if (!isset($data['id']) || !is_numeric($data['id'])) {
        $messages['error'] = "Invalid id";
    }

    if(count($this->messages) == 0)
    {
        return $data['id'];
    }

    return null;
}

public function sanitizeAddItemPost($itemDetails): array
{
    $name = isset($itemDetails['name']) ? htmlspecialchars($itemDetails['name']) : '';
    $price = isset($itemDetails['price']) ? floatval($itemDetails['price']) : 0.0;
    $description = isset($itemDetails['description']) ? htmlspecialchars($itemDetails['description']) : '';

    // Update the itemDetails array with filtered values
    $itemDetails['name'] = $name;
    $itemDetails['price'] = $price;
    $itemDetails['description'] = $description;

    return $itemDetails;
}

}