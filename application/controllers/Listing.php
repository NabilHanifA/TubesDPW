<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends MY_Controller {
	
	public function index()
	{
		$this->load->view('admin/index');
	}
	
}