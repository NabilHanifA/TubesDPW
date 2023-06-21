<?php
defined('BASEPATH') or exit('No direct script access allowed');

class JenisMotor extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Jenis Motor';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['jenismotor'] = $this -> M_Jenismotor -> getAll ();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/jenisMotor', $data);
		$this->load->view('admin/layouts/footer', $data);
	}

	public function tambahData()
	{
		$data = [
			"nama_jenis" => ($this->input->post('nama_jenis'))
		];
		$this->M_Jenismotor->insertJenis($data);
		redirect('jenisMotor');
	}

	public function editData()
	{
		// $data['jenis_service'] = $this->M_Jenisservice->getService($id);
		$this->M_Jenismotor->editJenis();
		redirect('jenisMotor');
	}

	public function deleteData($id)
	{
		$this->M_Jenismotor->deleteJenis($id);
		redirect('jenisMotor');
	}

}