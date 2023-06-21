<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->load->view('admin/layouts/header', $data);
		$this->load->view('admin/layouts/sidebar', $data);
		$this->load->view('admin/layouts/topbar', $data);
		$this->load->view('admin/index', $data);
		$this->load->view('admin/layouts/footer');
	}

	public function editProfile()
	{
		$data['title'] = 'Edit Profile';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		

		$this->form_validation->set_rules('name', 'Full Name', 'required|trim');

		if($this->form_validation->run() == false){
			$this->load->view('admin/layouts/header', $data);
			$this->load->view('admin/layouts/sidebar', $data);
			$this->load->view('admin/layouts/topbar', $data);
			$this->load->view('admin/profile', $data);
			$this->load->view('admin/layouts/footer');
		} else{
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			
			$upload_image = $_FILES['image']['name'];
			if($upload_image){
				$config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '8192';
				$config['upload_path'] = './assets/img/profile';
				
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image')){
					$old_image = $data['user']['image'];
					if($old_image != 'default.jpg'){
						unlink(FCPATH . 'assets/img/profile/' . $old_image);
					} 

					$new_image = $this->upload->data('file_name');
					$this->db->set('image', $new_image);
				}else{
					echo $this->upload->display_errors();
				}
			}


			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('user');
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Your profile has been updated
		  </div>');
			redirect('admin');
		}
	}
}
