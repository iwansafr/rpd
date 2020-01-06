<?php

class Supplier_model extends CI_Model
{
	// model table
	private $table = 'supplier';
	public $data;

	public function __construct()
	{
		parent::__construct();
	}

	// get method
	public function get()
	{
		$this->data = $this->db->get($this->table);
		return $this;
	}

	public function where($key, $value)
	{
		$this->db->where($key, $value);
		return $this;
	}

	public function order_by($key, $value)
	{
		$this->db->order_by($key, $value);
		return $this;
	}

	public function like($key, $value)
	{
		$this->db->like($key, $value);
		return $this;
	}

	public function row()
	{
		return $this->data->row_array();
	}

	public function result()
	{
		return $this->data->result_array();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function update($data)
	{
		$this->db->update($this->table, $data);
	}

	public function find($id)
	{
		return $this->where('id', $id)->get()->row();
	}

	public function limit($value)
	{
		$this->db->limit($value);
		return $this;
	}

	public function delete($id)
	{
		$this->db->delete($this->table, ['id' => $id]);
	}
}