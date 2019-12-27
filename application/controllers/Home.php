<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		if (!$this->session->has_userdata('user_id')) {
			redirect('login');
		}
		$this->load->model(['Anggaran', 'Kategori_model', 'Pemasukan_model']);
	}

	public function index() {
		$saldo = $this->Pemasukan_model->saldo();
		$pemasukan = $this->Pemasukan_model->pemasukan();
		$kategori = $this->Kategori_model->total();

		$this->load->view('templates/header', ['title' => 'Welcome user!']);
		$this->load->view('home/index', ['kategori' => $kategori, 'saldo' => $saldo, 'pemasukan' => $pemasukan]);
		$this->load->view('templates/footer');
	}

	public function detail_jenis_kegiatan($id) {
		$jenis_kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();
		if ($jenis_kegiatan) {
			$this->load->view('templates/header', ['title' => $jenis_kegiatan['title']]);
			$this->load->view('home/detail', ['jenis_kegiatan' => $jenis_kegiatan]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function export_detail_kegiatan($id) {
		$list_kegiatan = $this->db->get_where('list_kegiatan', ['jenis_kegiatan_id' => $id])->result_array();
		$jenis_kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();

		if ($jenis_kegiatan) {
			$this->load->view('home/export', [
				'list_kegiatan'  => $list_kegiatan,
				'jenis_kegiatan' => $jenis_kegiatan
			]);
		} else {
			show_404();
		}
	}

	public function export() {
		$this->db->order_by('id', 'desc');
		$jenis_kegiatan = $this->db->get('jenis_kegiatan')->result_array();

		$this->load->view('home/export_all', [
			'jenis_kegiatan' => $jenis_kegiatan
		]);
	}
}
