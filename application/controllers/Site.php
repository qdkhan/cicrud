<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Site_model');
	}

	public function index(){
		$this->load->view('welcome_message');
	}

    public function about() {
		$this->load->view('Site/about');
	}

    public function home() {
		$this->load->view('Site/home');
	}

    public function site() {
		$this->load->view('includes/header');
		$this->load->view('Site/site');
		$this->load->view('includes/footer');
	}

	public function variable() {
		$message = $this->Site_model->first() ;
		//One Way 
		/* $detail = [
			'name' => 'Qutbuddin Khan',
			'email' => 'qutbuddin.khan@xipetech.com',
			'phone' => '(+91) 961-627-9623',
			'message' => $message,
		]; */
		//Second Way
		/* $detail['name'] = 'Qutbuddin Khan';
		$detail['email'] = 'qutbuddin.khan@xipetech.com';
		$detail['phone'] = '(+91) 961-627-9623'; 
		$detail['message'] = 'message' => $message;*/
		
		#$this->load->view('Site/variable', $detail);

		$this->load->view('Site/variable', [
			'name' => 'Qutbuddin Khan',
			'email' => 'qutbuddin.khan@xipetech.com',
			'phone' => '(+91) 961-627-9623',
			'message' => $message,
		]);
	}

    public function service($id = '', $name=''){
		echo '<h1>Welcome !!! ID = </h1> '.$id.' Name = '.$name.'';
	}

	public function loadModel(){
		echo $this->Site_model->first() ;
	}
}
