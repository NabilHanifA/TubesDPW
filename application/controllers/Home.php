<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Jaya Motor';
		$this->load->view('layouts/header', $data);
		$this->load->view('index');
		$this->load->view('layouts/footer');
	}
	public function order()
	{
		$this->load->view('inner-page');
	}
	
}
