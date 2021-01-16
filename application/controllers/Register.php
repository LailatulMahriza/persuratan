<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function index()
	{
		$this->load->view('register/index');
	}

	public function _construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('register_model'); //call model

		// if ($this->session->userdata('level') != 1) {
		// 	redirect('login', 'refresh');
		// }
	}

	public function proses_register()
	{
		$this->load->library('form_validation');
		$data['title'] = 'Register';
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
			// $this->load->view('template/header_login', $data);
			$this->load->view('register/index', $data);
			// $this->load->view('template/footer_login');


		} else {
			$this->load->model('register_model');
			$this->register_model->register();
			echo "<script>alert('Register berhasil, silahkan login terlebih dahulu');</script>";
			redirect('login', 'refresh');
		}
	}
}
