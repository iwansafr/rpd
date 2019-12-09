<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->has_userdata('user_id'))
		{
			redirect('login');
		}
	}
	
	public function index()
	{
		$this->load->view('templates/header', ['title' => 'Total pengeluaran']);
		$this->load->view('pengeluaran/index');
		$this->load->view('templates/footer');
	}
}