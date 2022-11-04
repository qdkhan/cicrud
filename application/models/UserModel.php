<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function insertData($user_data) {
		// $this->load->view('welcome_message');
        $this->db->insert('users', $user_data);
        return $this->db->insert_id();
	}

	public function userList() {
		//One way
		// return $this->db->select('name')->get('users')->result();

		//Another Way
		// $this->db->select('*');
		// $this->db->where('name', 'Rafiuddin Khan');
		// $this->db->from('users');
		// $query = $this->db->get();
		// return $query->result();

		$query = $this->db->select('*')
		->from('users')
		// ->where('name', 'Rafiuddin Khan')
		->where([
			'id' => 3,
			'name' => 'Rafiuddin Khan'
		])
		->get();
		return $query->result();
	}

	public function updateData($data) {
		//One Way
		/* return $this->db->set('name', $data['name'])
					->set('email', $data['email'])
					->set('phone', $data['phone'])
					->where('id', $data['id'])
					->update('users'); */
		/* return $this->db->where('id', 4)
					->update('users', $data); */
		/* return $this->db->set($data)
					->where('id', 2)
					->update('users'); */
		// return $this->db->replace('users', $data);

		//Easiest Way
		return $this->db->update('users', $data, 'id = 1');

	}
}
