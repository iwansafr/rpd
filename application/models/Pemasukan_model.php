<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan_model extends CI_model
{
	private $table = 'pemasukan';
	public $query;

	public function __construct()
	{
		parent::__construct();
	}

	public function desc()
	{
		$this->order_by('id', 'desc');
		return $this->db->get($this->table)->result_array();
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

	public function where($key, $value)
	{
		$this->db->order_by($key, $value);
		return $this;
	}

	public function result()
	{
		return $this->query->result_array();
	}

	public function row()
	{
		return $this->query->row_array();
	}

	public function find($id)
	{
		$query = $this->db->get_where($this->table, ['id' => $id])->row_array();
		return $query;
	}

	public function store($data)
	{
		$this->db->insert($this->table, $data);
	}

	public function delete($id)
	{
		$this->db->delete($this->table, ['id' => $id]);
	}

	public function saldo()
	{
		$data = $this->get()->result();
		$amount = 0;

		foreach($data as $key) {
			if ($key['saldo'] == 1) {
				$amount += $key['jumlah'];
			}
		}

		return $amount;
	}

	public function pemasukan()
	{
		$data = $this->get()->result();
		$amount = 0;

		foreach($data as $key) {
			$amount += $key['jumlah'];
		}

		return $amount;
	}

	public function update($data)
	{
		$this->db->update($this->table, $data);
	}
}