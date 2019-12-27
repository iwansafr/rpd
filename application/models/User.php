<?php

class User extends CI_Model {
	private $table = 'users';
	public $query;

	public function __construct() {
		parent::__construct();
	}

	public function logged_in() {
		$id = $this->session->userdata('user_id');
		$query = $this->db->get_where($this->table, ['id' => $id]);
		return $query->row_array();
	}

	public function order_by($key, $value) {
		$this->db->order_by($key, $value);
		return $this;
	}

	public function store($data) {
		$this->db->insert($this->table, $data);
	}

	public function find($id) {
		$query = $this->where('id', $id)->get()->row();
		return $query;
	}

	public function delete($id) {
		$this->db->delete($this->table, ['id' => $id]);
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

	public function where($key, $value) {
		$this->db->where($key, $value);
		return $this;
	}

	public function update($data) {
		$this->db->update($this->table, $data);
	}
}