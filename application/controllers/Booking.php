<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booking extends MY_Controller {
	
    public function index()
	{
		$data['title'] = 'Booking Service';
		$this->load->view('layouts/header', $data);
		$this->load->view('order');
		$this->load->view('layouts/footer');
	}
}