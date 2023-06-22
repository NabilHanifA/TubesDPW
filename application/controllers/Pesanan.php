<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Pesanan Motor';
		$data['pesanan'] = $this->M_Pesanan->getAll();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['motor'] = $this -> M_Motor->getAll ();
		$data['jenismotor'] = $this->M_Jenismotor->getAll();
		$data['jenis_service'] = $this -> M_Jenisservice->getAll ();
		$data['status'] = $this->M_Pesanan->getstatus();
		// echo "<pre>";
		// var_dump($data['status']);
		// echo "</pre>";
		// die;
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/pesanan', $data);
		$this->load->view('admin/layouts/footer', $data);
	}
	public function editData()
	{
		// $data['jenis_service'] = $this->M_Jenisservice->getService($id);
		$this->M_Pesanan->editPesanan();
		redirect('Pesanan');
	}
}