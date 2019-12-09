<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('user_id')) {
			redirect('login');
		}
		$this->load->library('form_validation');
	}

	public function index() {
		$this->db->order_by('id', 'desc');
		$data = $this->db->get('anggaran')->result_array();

		$this->load->view('templates/header', ['title' => 'List data kegiatan']);
		$this->load->view('kegiatan/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function create() {
		$this->load->view('templates/header', ['title' => 'Tambah kegiatan']);
		$this->load->view('kegiatan/create');
		$this->load->view('templates/footer');
	}

	public function store() {
		$this->db->insert('anggaran', [
				'title'       => htmlspecialchars($this->input->post('title'))
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function edit($id) {
		$kegiatan = $this->db->get_where('anggaran', ['id' => $id])->row_array();

		if ($kegiatan) {
			$this->load->view('templates/header', ['title' => 'Edit : '.$kegiatan['title']]);
			$this->load->view('kegiatan/edit', ['data' => $kegiatan]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function destroy($id) {
		$jenis_kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();

		$this->db->delete('jenis_kegiatan', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
		redirect($this->agent->referrer());
	}

	public function update($id) {
		$this->db->where('id', $id);
		$this->db->update('anggaran', [
			'title'       => htmlspecialchars($this->input->post('title'))
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diubah!</div>');
		redirect('kegiatan');
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


