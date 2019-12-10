<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contents extends CI_Model
{
	private $table = 'Content';

	public function store($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function where($key, $value)
	{
		$this->db->where($key, $value);
		return $this;
	}

	public function single()
	{
		$query = $this->db->get($this->table);
		return $query->row_array();
	}

	public function update($data)
	{
		$this->db->update($this->table, $data);
	}
}