<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Anggaran extends CI_Model
{
	private $table = 'anggaran';
	public $data;

	public function __construct()
	{
		parent::__construct();
	}

	public function all()
	{
		$query = $this->db->get($this->table)->result_array();
		return $query;
	}

	public function single()
	{
		$query = $this->db->get($this->table)->row_array();
		return $query;
	}

	public function order_by($key, $value)
	{
		$this->db->order_by($key, $value);
		return $this;
	}

	public function like($key, $opt, $value)
	{
		$this->db->like($key, $opt, $value);
		return $this;
	}

	public function where($key, $value)
	{
		$this->db->where($key, $value);
		return $this;
	}

	public function insert($data)
	{
		$this->db->insert($this->table, $data);
		return $this;
	}

	public function delete($where = null)
	{
		$this->db->delete($this->table, $where);
		return $this;
	}

	public function store($data)
	{
		$this->db->insert($this->table, $data);
		return $this;
	}

	public function update($data)
	{
		$this->db->update($this->table, $data);
		return $this;
	}
}
