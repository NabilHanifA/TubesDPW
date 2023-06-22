<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends CI_Controller {
	
    public function index()
	{
		$data['title'] = 'Booking Service';
		$data['pesanan'] = $this->M_Pesanan->getAll();
		$data['motor'] = $this -> M_Motor->getAll ();
		$data['jenismotor'] = $this->M_Jenismotor->getAll();
		$data['jenis_service'] = $this -> M_Jenisservice->getAll ();
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die;
		$this->load->view('layouts/header', $data);
		$this->load->view('order', $data);
		$this->load->view('layouts/footer');
	}

	public function tambahData()
	{
		$data1 = [
			'nama_customer' => ($this->input->post('nama_lengkap')),
			'email_customer' => ($this->input->post('email')),
			'nomor_telepon_customer' => ($this->input->post('nomor_telepon')),
			'alamat_customer' => ($this->input->post('alamat'))
		];
		$idpengguna = $this->M_Pesanan->insertPesanan('customer', $data1) ;
		$data = [
			'customer_id' =>$idpengguna,
			'motor_id' => ($this->input->post('nama_motor')),
			'jenis_service_id' => ($this->input->post('nama_jenis')),
			// 'nama_service' => ($this->input->post('nama_service')),
			// 'harga' => '100000',
			'status_id' => '1'
		];
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die;
		$this->M_Pesanan->insertPesanan('pesanan', $data);
		redirect('Listing/#pesanan');
	}
}