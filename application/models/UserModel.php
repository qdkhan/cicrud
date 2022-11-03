<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function insertData($user_data)
	{
		// $this->load->view('welcome_message');
        $this->db->insert('users', $user_data);
        return $this->db->insert_id();
	}
}
