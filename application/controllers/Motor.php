<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Motor extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('M_Motor');
	}

	public function index()
	{
		$data['title'] = 'List Motor';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['motor'] = $this -> M_Motor->getAll ();
		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/motor', $data);
		$this->load->view('admin/layouts/footer', $data);
        

	}

}