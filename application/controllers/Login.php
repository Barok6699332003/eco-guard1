<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	public function index()
	{
		return $this->load->view("auth/login");
	}


	public function register()
	{

		return $this->load->view("auth/register");
	}

	public function logout()
	{
		// Destroy the session and redirect to the home page
		$this->session->sess_destroy();
		redirect('home');
	}
	public function store()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->Login_model->cek_user($username, $password);

		if ($user) {

			$this->session->set_userdata('username', $user['username']);
			$this->session->set_userdata('user_id', $user['id']);
			redirect('home');
		} else {
			$this->data['error'] = 'Invalid username or password';
		}
	}
}
