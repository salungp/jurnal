<?php
class Database
{
	private $db_host = 'localhost';

	private $db_user = 'root';

	private $db_pass = '';

	private $db_name = 'jurnal';

	public $conn;

	public $stmt;

	public function __construct()
	{
		$dsn = 'mysql:host='.$this->db_host.';dbname='.$this->db_name;

		$this->conn = new PDO($dsn, $this->db_user, $this->db_pass);
	}

	public function query($query = null)
	{
		$this->stmt = $this->conn->prepare($query);
	}

	public function execute()
	{
		$this->stmt->execute();
	}

	public function insert($query, $data = array())
	{
		$this->stmt = $this->conn->prepare($query);
		$this->stmt->execute($data);
	}

	public function get_where($query)
	{
		$this->stmt = $this->conn->query($query);
	}

	public function result_array()
	{
		$this->execute();
		$this->stmt = $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		return $this->stmt;
	}

	public function row_array()
	{
		$this->stmt->execute();
		$this->stmt = $this->stmt->fetch(PDO::FETCH_ASSOC);
		return $this->stmt;
	}
}