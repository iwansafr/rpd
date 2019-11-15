<?php

class Auth extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() {
		$this->load->view('auth/login');
	}

	public function login() {
		$this->form_validation->set_rules('username', '<strong>username</strong>', 'required');
		$this->form_validation->set_rules('password', '<strong>password</strong>', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->index();
		} else {
			$user = $this->db->get_where('users', ['username' => $this->input->post('username')])->row_array();
			if ($user) {
				if (password_verify($this->input->post('password'), $user['password'])) {
					$this->session->set_userdata([
						'user_id' => $user['id']
					]);
					redirect();
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf password salah!</div>');
					redirect('login');	
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf username tidak ditemukan!</div>');
				redirect('login');
			}
		}
	}

	public function logout() {
		if ($this->session->has_userdata('user_id')) {
			$this->session->unset_userdata('user_id');
			redirect('login');
		} else {
			redirect('login');
		}
	}
}