<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model'); // Load the Register_model
    }

    public function index()
    {
      
        $this->load->view('register');
    }

    public function process()
    {
        

        // Example: Get the username, email, password, and confirm_password
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');

        // ...

        
        $data = array(
            'username' => $username,
            'email' => $email,
            'password' => $password,
           
        );

        $user_id = $this->register_model->register_user($data);
        if ($user_id) {

            redirect('login');
        } else {

            $this->load->view('register');


        } 

    }
}