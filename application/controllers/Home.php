<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Home";
		$data['content'] = "home/index";
		$data['logged_in'] = $this->session->userdata('logged_in');
		return $this->load->view('layout/main', $data);

	}
	public function logout()
	{
		$data['title'] = "Logout Confirmation";
		$data['content'] = "home/logout_confirmation";

		$this->load->view('layout/main', $data);

		$this->session->sess_destroy();

		redirect('home');
	}

}
