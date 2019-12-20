<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model
{
	private $table = 'kategori';
	public $query;

	public function __construct()
	{
		parent::__construct();
	}

	public function total()
	{
		return count($this->db->get($this->table)->result_array());
	}

	public function desc()
	{
		$this->order_by('id', 'desc');
		$query = $this->db->get($this->table)->result_array();
		return $query;
	}

	public function order_by($key, $value)
	{
		$this->db->order_by($key, $value);
		return $this;
	}

	public function get()
	{
		$this->query = $this->db->get($this->table);
		return $this;
	}

	public function row()
	{
		return $this->query->row_array();
	}

	public function find($id)
	{
		$query = $this->db->get_where($this->table, ['id' => $id]);
		return $query->row_array();
	}

	public function where($key, $value)
	{
		$this->db->where($key, $value);
		return $this;
	}

	public function update($data)
	{
		$this->db->update($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->delete($this->table, ['id' => $id]);
	}

	public function result()
	{
		return $this->query->result_array();
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
	}
}