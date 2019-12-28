<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_id'))
		{
			redirect('login');
		}
		$this->load->model(['Pemasukan_model', 'Kategori_model']);
	}

	public function index()
	{
		$data = $this->Pemasukan_model->desc();
		$this->load->view('templates/header', ['title' => 'Total pemasukan']);
		$this->load->view('transaksi/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function search()
	{
		$q = $this->input->get('q');
		$data = $this->Pemasukan_model->like('title', $q)->get()->result();
		$this->load->view('templates/header', ['title' => 'Total pemasukan']);
		$this->load->view('transaksi/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$kategori = $this->Kategori_model->desc();
		$this->load->view('templates/header', ['title' => 'Tambah data pemasukan']);
		$this->load->view('transaksi/create', ['kategori' => $kategori]);
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$title = htmlspecialchars($this->input->post('title'));
		$description = htmlspecialchars($this->input->post('description'));
		$kategori = $this->input->post('kategori');
		$tanggal = $this->tanggal($this->input->post('tanggal'));
		$jumlah = implode('', explode('.', $this->input->post('jumlah')));
		$type = $this->input->post('type');

		$this->Pemasukan_model->store([
			'title' => $title,
			'description' => $description,
			'kategori' => $kategori,
			'type' => $type,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function tanggal($value)
	{
		return date('Y-m-d H:i:s', strtotime($value));
	}

	public function delete($id)
	{
		$data = $this->Pemasukan_model->find($id);
		if ($data)
		{
			$this->Pemasukan_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
			redirect($this->agent->referrer());
		} else {
			show_404();
		}
	}

	public function edit($id)
	{
		$kategori = $this->Kategori_model->desc();
		$data = $this->Pemasukan_model->find($id);
		if ($data)
		{
			$this->load->view('templates/header', ['title' => 'Edit pemasukan']);
			$this->load->view('transaksi/edit', ['data' => $data, 'kategori' => $kategori]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function update($id)
	{
		$title = htmlspecialchars($this->input->post('title'));
		$description = htmlspecialchars($this->input->post('description'));
		$kategori = $this->input->post('kategori');
		$tanggal = $this->tanggal($this->input->post('tanggal'));
		$jumlah = implode('', explode('.', $this->input->post('jumlah')));
		$type = $this->input->post('type');

		$this->Pemasukan_model->where('id', $id)->update([
			'title' => $title,
			'description' => $description,
			'kategori' => $kategori,
			'type' => $type,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diedit!</div>');
		redirect('transaksi');
	}

	public function add_saldo($params = 0)
	{
		$this->Pemasukan_model->update(['saldo' => 0]);
		foreach(explode('-', $params) as $key => $value) {
			$this->db->where('id', $value);
			$this->db->update('pemasukan', ['saldo' => 1]);
		}
		$this->session->set_flashdata('message', '<div class="alert alert-success">Saldo berhasil ditambah!</div>');
		redirect('transaksi');
	}
}