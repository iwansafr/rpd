<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model
{
	private $table = 'users';

	public function logged_in()
	{
		$id = $this->session->userdata('user_id');
		$query = $this->db->get_where($this->table, ['id' => $id]);
		return $query->row_array();
	}
}