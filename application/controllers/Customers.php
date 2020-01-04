<?php

class Customers extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Customers_model', 'customers');
	}

	public function code() {
		$last = $this->customers->order_by('id', 'desc')->limit(1)->get()->row();
		$count = strlen($last['id'])+1;
		$id = $last['id'];
		$kode = '';
		if ($count == 1) {
			$kode = 'DK000'.($id+1);
		} else if ($count == 2) {
			$kode = 'DK00'.($id+1);
		} else if ($count == 3) {
			$kode = 'DK0'.($id+1);
		} else if ($count > 3) {
			$kode = 'DK'.($id+1);
		}
		return $kode;
	}

	public function index() {
		$data = $this->customers->order_by('id', 'desc')->get()->result();
		$this->load->view('templates/header', ['title' => 'Data pelanggan']);
		$this->load->view('customers/index', ['data' => $data, 'kode' => $this->code()]);
		$this->load->view('templates/footer');
	}

	public function store() {
		$name = htmlspecialchars($this->input->post('name'));
		$nik = $this->input->post('nik');
		$address = htmlspecialchars($this->input->post('address'));
		$number_phone = $this->input->post('number_phone');

		$this->customers->insert([
			'kode' => $this->code(),
			'name' => $name,
			'nik' => $nik,
			'address' => $address,
			'number_phone' => $number_phone
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function update($id) {
		$name = htmlspecialchars($this->input->post('name'));
		$nik = $this->input->post('nik');
		$address = htmlspecialchars($this->input->post('address'));
		$number_phone = $this->input->post('number_phone');

		$this->customers->where('id', $id)->update([
			'name' => $name,
			'nik' => $nik,
			'address' => $address,
			'number_phone' => $number_phone
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil diedit!</div>');
		redirect('customers');
	}

	public function search() {
		$q = $this->input->get('q');
		$data = $this->customers->like('name', $q)->get()->result();
		$this->load->view('templates/header', ['title' => 'Data pelanggan']);
		$this->load->view('customers/index', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function edit($id) {
		$data = $this->customers->find($id);
		if ($data) {
			$this->load->view('templates/header', ['title' => 'Edit pelanggan']);
			$this->load->view('customers/edit', ['data' => $data]);
			$this->load->view('templates/footer');
		} else {
			show_404();
		}
	}

	public function destroy($id) {
		$data = $this->customers->find($id);
		if ($data) {
			$this->customers->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Data berhasil dihapus!</div>');
			redirect('customers');
		} else {
			show_404();
		}
	}
}