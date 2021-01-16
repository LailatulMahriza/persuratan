<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('login_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Login Admin';
		$this->load->view('login/index', $data);
	}

	public function proses_login()
	{
		$username = htmlspecialchars($this->input->post('uname1'));
		$password = htmlspecialchars($this->input->post('pwd1'));

		$cek_login = $this->login_model->login($username, $password);

		if ($cek_login) {
			foreach ($cek_login as $row);
			$this->session->set_userdata('user', $row->username);
			$this->session->set_userdata('id_user', $row->id_user);
			$this->session->set_userdata('level', $row->level);

			if ($this->session->userdata('level') == 1) {
				redirect('admin\index');
			} else if ($this->session->userdata('level') == 2) {
				redirect('user\index');
			}
		} else {
			$data['pesan'] = 'Username dan Password Anda Salah';
			$data['title'] = 'Login Admin';
			$this->load->view('login/index', $data);
		}
	}
}
