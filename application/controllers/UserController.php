<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function store() {
		$user_data = [
			'name' => 'Vishal Soni',
			'email' => 'soni@gmail.com',
			'phone' => '(+91) 456-789-7777',
		];
		// $this->load->view('welcome_message');
		echo $this->UserModel->insertData($user_data);
	}

	public function createMessage() {
		$user_data = [
			'user_id' => 6,
			'message' => 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?',
			'status' => 0
		];

		$result = $this->UserModel->createMessage($user_data);
		echo $result;
	}

	public function userList() {
		$data = $this->UserModel->userList();
		echo '<pre>';
			print_r($data);
		echo '</pre>';
	}

	public function joinsData() {
		$data = $this->UserModel->joinsData();

		echo '<pre>';
			print_r($data);
		echo '</pre>';
	}

	public function updateData() {
		$user_data = [
			// 'id' => 1,
			'name' => 'Xipetech Lucknow Updated',
			'email' => 'shamshi@xipetech.com',
			'phone' => '(+91) 111-999-1111',
		];

		echo $this->UserModel->updateData($user_data);
	}

	public function deleteRecord($id){
		echo $this->UserModel->deleteRecord($id);
	}

	public function selectLike() {
		echo '<pre>';
			$data = $this->UserModel->selectLike();
			print_r($data);
		echo '</pre>';
	}
}
