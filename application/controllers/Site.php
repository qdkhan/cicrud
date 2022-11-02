<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

    public function about()
	{
		$this->load->view('Site/about');
	}

    public function home()
	{
		$this->load->view('Site/home');
	}

    public function site()
	{
		$this->load->view('Site/site');
	}

    public function service()
	{
		echo '<h1>Welcome !!!</h1> ';
	}
}
