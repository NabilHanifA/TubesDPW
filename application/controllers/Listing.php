<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Listing Motor';
		$data['pesanan'] = $this->M_Pesanan->getAll();
		$data['motor'] = $this -> M_Motor->getAll ();
		$data['jenismotor'] = $this->M_Jenismotor->getAll();
		// echo "<pre>";
		// var_dump($data);
		// echo "</pre>";
		// die;
		$this->load->view('layouts/header', $data);
		$this->load->view('listing', $data);
		$this->load->view('layouts/footer');
	}
	
}