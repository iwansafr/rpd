<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('user_id')) {
			redirect('login');
		}
		$this->load->library('form_validation');
	}

	public function store() {
		$this->db->insert('jenis_kegiatan', [
				'title'       => htmlspecialchars($this->input->post('title')),
				'description' => htmlspecialchars($this->input->post('description'))
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambah!</div>');
		redirect('list/create');
	}

	public function edit($id) {
		$kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();

		if ($kegiatan) {
			$this->load->view('templates/header', ['title' => 'Edit : '.$kegiatan['title']]);
			$this->load->view('home/edit', ['jenis_kegiatan' => $kegiatan]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function destroy($id) {
		$jenis_kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();
		$list_kegiatan  = $this->db->get_where('list_kegiatan', ['jenis_kegiatan_id' => $jenis_kegiatan['id']])->result_array();

		foreach($list_kegiatan as $item) {
			$this->db->delete('list_kegiatan', ['id' => $item['id']]);
		}

		$this->db->delete('jenis_kegiatan', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
		redirect();
	}

	public function update($id) {
		$this->form_validation->set_rules('title', '<strong>Jenis kegiatan</strong>', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->edit_jenis_kegiatan($id);
		} else {
			$this->db->where('id', $id);
			$this->db->update('jenis_kegiatan', [
				'title'       => htmlspecialchars($this->input->post('title')),
				'description' => htmlspecialchars($this->input->post('description'))
			]);

			$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diubah!</div>');
			redirect();
		}
	}

	public function detail($id) {
		$jenis_kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();
		if ($jenis_kegiatan) {
			$this->load->view('templates/header', ['title' => $jenis_kegiatan['title']]);
			$this->load->view('home/detail', ['jenis_kegiatan' => $jenis_kegiatan]);
			$this->load->view('templates/footer');
		} else {	
			show_404();
		}
	}
}


