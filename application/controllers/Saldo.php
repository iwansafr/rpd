<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Saldo_model', 'saldo');
		$this->load->model('Pemasukan_model');
	}

	public function index() {
		$total = $this->Pemasukan_model->saldo();
		$pemasukan = $this->Pemasukan_model->desc();
		$data = $this->saldo->order_by('id', 'desc')->get()->result();
		$this->load->view('templates/header', ['title' => 'Saldo management']);
		$this->load->view('saldo/index', ['saldo_total' => $total, 'pemasukan' => $pemasukan, 'data' => $data]);
		$this->load->view('templates/footer');
	}

	public function store() {
		$description = htmlspecialchars($this->input->post('description'));
		$tanggal = DateTime::createFromFormat('d/m/Y', $this->input->post('tanggal'));
		$tanggal = $tanggal->format('Y:m:d H:i:s');
		$jumlah = $this->input->post('jumlah');

		$this->saldo->insert([
			'description' => $description,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Saldo berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function edit($id) {
		$data = $this->saldo->find($id);
		if ($data) {
			$this->load->view('templates/header', ['title' => 'Edit saldo']);
			$this->load->view('saldo/edit', ['data' => $data]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function delete($id) {
		$this->saldo->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success">Saldo berhasil dihapus!</div>');
		redirect($this->agent->referrer());
	}

	public function update($id) {
		$description = htmlspecialchars($this->input->post('description'));
		$tanggal = DateTime::createFromFormat('d/m/Y', $this->input->post('tanggal'));
		$tanggal = $tanggal->format('Y:m:d H:i:s');
		$jumlah = $this->input->post('jumlah');

		$this->saldo->where('id', $id)->update([
			'description' => $description,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Saldo berhasil diupdate!</div>');
		redirect('saldo');
	}
}