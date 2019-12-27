<?php

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model(['User']);
	}

	public function index() {
		$data['data'] = $this->User->order_by('id', 'desc')->get()->result();
		$this->load->view('templates/header', ['title' => 'List users']);
		$this->load->view('users/index', $data);
		$this->load->view('templates/footer');
	}

	public function store() {
		$username = htmlspecialchars($this->input->post('username'));
		$role_id  = $this->input->post('role_id');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

		$this->User->store([
			'username' => $username,
			'role_id'  => $role_id,
			'password' => $password
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">User berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function delete($id) {
		$data = $this->User->find($id);
		$all = count($this->User->get()->result());

		if ($all > 1) {
			if ($data) {
				$this->User->delete($id);
				$this->session->set_flashdata('message', '<div class="alert alert-success">User berhasil dihapus!</div>');
				redirect($this->agent->referrer());
			} else {
				show_404();
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf harus ada satu user yang tersisa!</div>');
			redirect($this->agent->referrer());
		}
	}

	public function edit($id) {
		$data = $this->User->find($id);
		if($data) {
			$this->load->view('templates/header', ['title' => 'Edit user']);
			$this->load->view('users/edit', ['data' => $data]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function update($id) {
		$username = htmlspecialchars($this->input->post('username'));
		$role_id = $this->input->post('role_id');
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

		if ($this->input->post('password') != '') {
			$data = [
				'username' => $username,
				'role_id' => $role_id,
				'password' => $password
			];
		} else {
			$data = [
				'username' => $username,
				'role_id' => $role_id
			];
		}

		$this->User->where('id', $id)->update($data);
		$this->session->set_flashdata('message', '<div class="alert alert-success">User berhasil diedit!</div>');
		redirect('users');
	}
}