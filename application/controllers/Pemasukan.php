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
		$this->load->model('Anggaran');
	}

	public function index()
	{
		$this->load->view('templates/header', ['title' => 'Total pemasukan']);
		$this->load->view('pemasukan/index');
		$this->load->view('templates/footer');
	}

	public function create()
	{
		$anggaran = $this->Anggaran->order_by('id', 'desc')->all();
		$this->load->view('templates/header', ['title' => 'Tambah data pemasukan']);
		$this->load->view('pemasukan/create', ['anggaran' => $anggaran]);
		$this->load->view('templates/footer');
	}
}