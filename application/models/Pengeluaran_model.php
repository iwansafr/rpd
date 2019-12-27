<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran_model extends CI_model
{
	private $table = 'pengeluaran';
	public $query;

	public function __construct()
	{
		parent::__construct();
	}

	public function desc()
	{
		$query = $this->order_by('id', 'desc')->get()->result();
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

	public function result()
	{
		return $this->query->result_array();
	}
}