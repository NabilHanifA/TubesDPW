<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // Periksa apakah pengguna sudah login
        if (!$this->session->userdata('logged_in')) {
            // Jika belum login, redirect ke halaman login
            redirect('Auth'); // Sesuaikan dengan URL login Anda
        }
    }
}