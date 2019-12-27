<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(['Pemasukan_model']);
	}

	public function index()
	{
		$total = $this->Pemasukan_model->saldo();
		$pemasukan = $this->Pemasukan_model->desc();
		$this->load->view('templates/header', ['title' => 'Saldo management']);
		$this->load->view('saldo/index', ['saldo_total' => $total, 'pemasukan' => $pemasukan]);
		$this->load->view('templates/footer');
	}
}