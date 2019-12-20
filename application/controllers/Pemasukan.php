<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukan extends CI_Controller
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
		$this->load->view('pemasukan/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$kategori = $this->Kategori_model->desc();
		$this->load->view('templates/header', ['title' => 'Tambah data pemasukan']);
		$this->load->view('pemasukan/create', ['kategori' => $kategori]);
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$title = htmlspecialchars($this->input->post('title'));
		$description = htmlspecialchars($this->input->post('description'));
		$kategori = $this->input->post('kategori');
		$tanggal = $this->tanggal($this->input->post('tanggal'));
		$jumlah = implode('', explode('.', $this->input->post('jumlah')));

		$this->Pemasukan_model->store([
			'title' => $title,
			'description' => $description,
			'kategori' => $kategori,
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
			$this->load->view('pemasukan/edit', ['data' => $data, 'kategori' => $kategori]);
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

		$this->Pemasukan_model->where('id', $id)->update([
			'title' => $title,
			'description' => $description,
			'kategori' => $kategori,
			'tanggal' => $tanggal,
			'jumlah' => $jumlah
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diedit!</div>');
		redirect('pemasukan');
	}
}