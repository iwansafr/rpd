<?php

class Supplier extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model', 'supplier');
	}

	public function code() {
		$last = $this->supplier->order_by('id', 'desc')->limit(1)->get()->row();
		$count = strlen($last['id'])+1;
		$id = $last['id'];
		$kode = '';
		if ($count == 1) {
			$kode = 'KJ000'.($id+1);
		} else if ($count == 2) {
			$kode = 'KJ00'.($id+1);
		} else if ($count == 3) {
			$kode = 'KJ0'.($id+1);
		} else if ($count > 3) {
			$kode = 'KJ'.($id+1);
		}
		return $kode;
	}

	public function index()
	{
		$data = $this->supplier->order_by('id', 'desc')->get()->result();
		$this->load->view('templates/header', ['title' => 'Data pemasok']);
		$this->load->view('supplier/index', ['data' => $data, 'kode' => $this->code()]);
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$name = htmlspecialchars($this->input->post('name'));
		$contact_name = htmlspecialchars($this->input->post('contact_name'));
		$address = htmlspecialchars($this->input->post('address'));
		$number_phone = $this->input->post('number_phone');
		$kode = $this->code();

		$this->supplier->insert([
			'name' => $name,
			'contact_name' => $contact_name,
			'address' => $address,
			'number_phone' => $number_phone,
			'kode' => $kode
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">Pemasok berhasil ditambah!</div>');
		redirect($this->agent->referrer());
	}

	public function destroy($id)
	{
		$data = $this->supplier->find($id);
		if ($data)
		{
			$this->supplier->delete($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success">Pemasok dihapus!</div>');
			redirect($this->agent->referrer());
		} else {
			show_404();
		}
	}

	public function search()
	{
		$q = $this->input->get('q');
		$data = $this->supplier->like('name', $q)->get()->result();
		$this->load->view('templates/header', ['title' => 'Data pemasok']);
		$this->load->view('supplier/index', ['data' => $data, 'kode' => $this->code()]);
		$this->load->view('templates/footer');
	}

	public function edit($id)
	{
		$data = $this->supplier->find($id);
		$this->load->view('templates/header', ['title' => 'Data pemasok']);
		$this->load->view('supplier/edit', ['data' => $data]);
		$this->load->view('templates/footer');
	}

	public function update($id)
	{
		$name = htmlspecialchars($this->input->post('name'));
		$contact_name = htmlspecialchars($this->input->post('contact_name'));
		$address = htmlspecialchars($this->input->post('address'));
		$number_phone = $this->input->post('number_phone');
		$kode = $this->code();

		$this->supplier->where('id', $id)->update([
			'name' => $name,
			'contact_name' => $contact_name,
			'address' => $address,
			'number_phone' => $number_phone,
			'kode' => $kode
		]);

		$this->session->set_flashdata('message', '<div class="alert alert-success">1 data edited!</div>');
		redirect('supplier');
	}
}