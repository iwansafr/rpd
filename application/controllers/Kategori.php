<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_id'))
		{
			redirect('login');
		}
		$this->load->model('Kategori_model');
	}

	public function index()
	{
		$data = $this->Kategori_model->desc();
		$this->load->view('templates/header', ['title' => 'Kategori']);
		$this->load->view('kategori/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$this->load->view('templates/header', ['title' => 'Tambah tategori']);
		$this->load->view('kategori/create');
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$name = $this->input->post('title');
		$type = $this->input->post('type');

		$this->Kategori_model->insert([
			'title' => $name,
			'type' => $type
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Kategori berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function edit($id)
	{
		$data = $this->Kategori_model->find($id);
		if ($data)
		{
			$this->load->view('templates/header', ['title' => 'Tambah tategori']);
			$this->load->view('kategori/edit', ['data' => $data]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function update($id)
	{
		$title = $this->input->post('title');
		$type = $this->input->post('type');

		$this->Kategori_model->where('id', $id)->update([
			'title' => $title,
			'type' => $type
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Kategori berhasil diedit!</div>');
		redirect('kategori');
	}

	public function delete($id)
	{
		$data = $this->Kategori_model->find($id);
		if ($data)
		{
			$this->Kategori_model->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Kategori berhasil dihapus!</div>');
			redirect($this->agent->referrer());
		} else {
			show_404();
		}
	}
}