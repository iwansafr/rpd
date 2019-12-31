<?php

class Saldo_model extends CI_Model {
	private $table = 'saldo';
	public $query;

	public function __construct() {
		parent::__construct();
	}

	public function get() {
		$this->query = $this->db->get($this->table);
		return $this;
	}

	public function row() {
		return $this->query->row_array();
	}

	public function result() {
		return $this->query->result_array();
	}

	public function order_by($key, $value) {
		$this->db->order_by($key, $value);
		return $this;
	}

	public function where($key, $value) {
		$this->db->where($key, $value);
		return $this;
	}

	public function like($key, $value) {
		$this->db->like($key, $value);
		return $this;
	}

	public function insert($data) {
		$this->db->insert($this->table, $data);
	}

	public function find($id) {
		return $this->where('id', $id)->get()->row();
	}

	public function delete($id) {
		$this->db->delete($this->table, ['id' => $id]);
	}

	public function update($data) {
		$this->db->update($this->table, $data);
	}
}