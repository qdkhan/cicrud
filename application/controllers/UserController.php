<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function store() {
		$user_data = [
			'name' => 'Qutbuddin Khan',
			'email' => 'qutbuddin.khan@xipetech.com',
			'phone' => '(+91) 961-627-9623',
		];
		// $this->load->view('welcome_message');
		echo $this->UserModel->insertData($user_data);
	}
}
