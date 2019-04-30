<?php

class ServiceProduct
{
	private $db;
	private $product;

	public function __construct(IConn $db, Iproduct $product)
	{
		$this->db = $db->connect();
		$this->product = $product;
	}

	public function list()
	{
		$query = "SELECT * FROM `products`";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchAll(\PDO::FETCH_ASSOC);

	}

	public function save()
	{
		$query = "INSERT INTO `products` (`name`, `desc`) VALUES (:name, :description)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":name", $this->product->getName());
		$stmt->bindValue(":description", $this->product->getDesc());
		$stmt->execute();
		return $this->db->lastInsertId();
	}

	public function update()
	{

	}

	public function delete()
	{

	}
}