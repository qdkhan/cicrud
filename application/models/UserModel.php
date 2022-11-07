<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

	public function insertData($user_data) {
		// $this->load->view('welcome_message');
        $this->db->insert('users', $user_data);
        return $this->db->insert_id();
	}

	public function createMessage($data) {
		$this->db->insert('messages', $data);
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
		// ->where([
		// 	'id' => 3,
		// 	'name' => 'Rafiuddin Khan'
		// ])
		->get();
		#return $query->result();// This will return Array Of Object
		#return $query->result_array(); //This Will return Array of array
		#return $query->row(); //This will return Single object
		return $query->row_array(); //Single Data in array Format
	}

	public function joinsData() {
		#->join('messages', "messages.user_id = users.id");
		#->join('messages', "messages.user_id = users.id", "left");
		#->join('messages', "messages.user_id = users.id", "right");
		$query = $this->db->select('users.*, messages.message')
							->from('users')
							->join('messages', "messages.user_id = users.id", "right")
							->get();
		return $query->result_array();

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

	public function deleteRecord($id) {
		return $this->db->delete('users', $id);
	}

	//Like Keywords

	public function selectLike () {
		$query = $this->db->like('email', 'in', 'both')->from('users')->get();
		return $query->result_array();
	}
}
