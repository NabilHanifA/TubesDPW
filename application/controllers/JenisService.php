<?php
defined('BASEPATH') or exit('No direct script access allowed');

class jenisService extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Jenisservice');
	}

	public function index()
	{
		$data['title'] = 'Jenis Service';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jenis_service'] = $this -> M_Jenisservice->getAll ();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/jenisService', $data);
		$this->load->view('admin/layouts/footer', $data);
	}

	public function tambahData()
	{
		$data = [
			"nama_service" => ($this->input->post('nama_service')),
			"harga" => ($this->input->post('harga'))
		];
		$this->M_Jenisservice->insertService($data);
		redirect('jenisService');
	}

	public function deleteData($id)
	{
		$this->M_Jenisservice->deleteService($id);
		redirect('jenisService');
	}
	public function editData()
	{
		// $data['jenis_service'] = $this->M_Jenisservice->getService($id);
		$this->M_Jenisservice->editService();
		redirect('jenisService');
	}

}