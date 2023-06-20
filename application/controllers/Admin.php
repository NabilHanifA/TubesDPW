<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {
	
	public function index()
	{
		$data['title'] = 'Admin Page';
		$data['active'] = 'active';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/layouts/footer');
	}
	
}