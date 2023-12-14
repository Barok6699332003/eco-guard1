<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        
        $this->load->database();
    }

    public function register_user($data)
    {
        
        $this->db->insert('users', $data);

       
        return $this->db->insert_id();
    }

    
}
