<?php defined('BASEPATH') OR exit('No direct script access allowed');
require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Write\Xlsx;

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index() {
		$this->db->order_by('id', 'desc');
		$jenis_kegiatan = $this->db->get('jenis_kegiatan')->result_array();
		$this->load->view('templates/header', ['title' => 'Welcome user!']);
		$this->load->view('home/index', ['jenis_kegiatan' => $jenis_kegiatan]);
		$this->load->view('templates/footer');
	}

	public function add_jenis_kegiatan() {
		$this->form_validation->set_rules('title', '<strong>jenis kegiatan</strong>', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->index();
		} else {
			$this->db->insert('jenis_kegiatan', [
				'title' => htmlspecialchars($this->input->post('title')),
				'description' => htmlspecialchars($this->input->post('description'))
			]);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Judul jenis kegiatan telah ditambahkan. Sekarang masukkan beberapa list detail dari jenis kegiatan!</div>');
			redirect('create_detail_kegiatan');
		}
	}

	public function create_detail_kegiatan() {
		$data = $this->db->get('jenis_kegiatan')->result_array();
		if (count($data) < 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf anda belum mengisi jenis kegiatan!</div>');
			redirect();
			die;
		}

		$this->db->order_by('id', 'desc');
		$jenis_kegiatan = $this->db->get('jenis_kegiatan')->result_array();
		$this->load->view('templates/header', ['title' => 'List detail kegiatan']);
		$this->load->view('kegiatan/add_list_detail', ['jenis_kegiatan' => $jenis_kegiatan]);
		$this->load->view('templates/footer');
	}

	public function add_detail_kegiatan() {
		$this->form_validation->set_rules('title', '<strong>jenis kegiatan</strong>', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->create_detail_kegiatan();
		} else {
			$this->db->insert('detail_kegiatan', [
				'title' => htmlspecialchars($this->input->post('title')),
				'jenis_kegiatan_id' => htmlspecialchars($this->input->post('jenis_kegiatan_id'))
			]);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Judul detail sudah ditambah sekarang bisa menambah list bahan.</div>');
			redirect('create_list_kegiatan');
		}
	}

	public function create_list_kegiatan() {
		$data = $this->db->get('jenis_kegiatan')->result_array();
		if (count($data) < 1) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Maaf anda belum mengisi jenis kegiatan!</div>');
			redirect();
			die;
		}

		$this->db->order_by('id', 'desc');
		$jenis_kegiatan = $this->db->get('jenis_kegiatan')->result_array();
		$this->db->order_by('id', 'desc');
		$detail_kegiatan = $this->db->get('detail_kegiatan')->result_array();
		$this->load->view('templates/header', ['title' => 'List detail kegiatan']);
		$this->load->view('kegiatan/add_list', ['jenis_kegiatan' => $jenis_kegiatan, 'detail_kegiatan' => $detail_kegiatan]);
		$this->load->view('templates/footer');
	}

	public function add_list_kegiatan() {
		$this->form_validation->set_rules('title', '<strong>title</strong>', 'required');
		$this->form_validation->set_rules('volume', '<strong>volume</strong>', 'required');
		$this->form_validation->set_rules('satuan', '<strong>satuan</strong>', 'required');
		$this->form_validation->set_rules('harga_satuan', '<strong>jumlah_satuan</strong>', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->create_list_kegiatan();
		} else {
			$this->db->insert('list_kegiatan', [
				'title' => htmlspecialchars($this->input->post('title')),
				'jenis_kegiatan_id' => $this->input->post('jenis_kegiatan_id'),
				'detail_kegiatan_id' => $this->input->post('detail_kegiatan_id'),
				'volume' => htmlspecialchars($this->input->post('volume')),
				'satuan' => htmlspecialchars($this->input->post('satuan')),
				'harga_satuan' => htmlspecialchars($this->input->post('harga_satuan')),
				'jumlah_biaya' => $this->input->post('volume') * $this->input->post('harga_satuan')
			]);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil disimpan!. Jika ingin menambah list bahan tinggal tambah dengan menyesuaikan judul dan detail judul.</div>');
			redirect('create_list_kegiatan');
		}
	}

	public function delete_jenis_kegiatan($id) {
		$jenis_kegiatan = $this->db->get_where('jenis_kegiatan', ['id' => $id])->row_array();
		$detail_kegiatan = $this->db->get_where('detail_kegiatan', ['jenis_kegiatan_id' => $id])->result_array();
		foreach($detail_kegiatan as $item) {
			$list_kegiatan = $this->db->get_where('list_kegiatan', ['jenis_kegiatan_id' => $id, 'detail_kegiatan_id' => $item['id']])->result_array();
			foreach ($list_kegiatan as $key) {
				$this->db->delete('list_kegiatan', ['id' => $key['id']]);
			}
			$this->db->delete('detail_kegiatan', ['id' => $item['id']]);
		}
		$this->db->delete('jenis_kegiatan', ['id' => $id]);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
		redirect();
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
