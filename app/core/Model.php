<?php 

/**
 * Main Model trait
 */
Trait Model
{
	use Database;

	protected ?PDO $pdo = null;
	public $errors = [];

    public function __construct()
    {
        try {
            $this->pdo = Database::connect();
        } catch (PDOException $e) {
            die('Database connection failed: ' . $e->getMessage());
        }
    }

	public function getLastId(): mixed
	{
		try {
			return $this->pdo->lastInsertId();
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}

	public function execute(array $params = [], int $type = PDO::FETCH_ASSOC): array
	{
		try {
			if ($this->statement && $this->statement->execute($params)) {
				return $this->statement->fetchAll($type);
			}
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	
		return [];
	}

	public function prepare(string $sql): void
	{
		try {
			$this->statement = $this->pdo->prepare($sql);
		} catch (PDOException $e) {
			throw new Exception($e->getMessage());
		}
	}
	
}