<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Motor extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'List Motor';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['motor'] = $this -> M_Motor->getAll ();
		$data['jenismotor'] = $this->M_Jenismotor->getAll();
		// echo "<pre>";
		// var_dump($data['jenismotor']);
		// var_dump($data['motor']);
		// echo "</pre>";
		// die;
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/motor', $data);
		$this->load->view('admin/layouts/footer', $data);
	}

	public function tambahData()
	{
		$data = [
			"jenis_id" => ($this->input->post('nama_jenis')),
			"nama_motor" => ($this->input->post('nama_motor'))
		];
		$this->M_Motor->insertMotor($data);
		redirect('Motor');
	}

	public function deleteData($id)
	{
		$this->M_Motor->deleteMotor($id);
		redirect('Motor');
	}

	public function editData()
	{
		// $data['jenis_service'] = $this->M_Jenisservice->getService($id);
		$this->M_Motor->editMotor();
		redirect('Motor');
	}
}