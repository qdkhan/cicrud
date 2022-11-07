<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelperController extends CI_Controller {

	public function __construct() {
        parent::__construct();

        $this->load->model('HelperModel');
    }

    public function formHelper() {
        echo 'Base URL => '.base_url();
        echo '<br/>';
        echo 'Site URL => '.site_url();
        $this->load->view('User/form');
    }

    public function saveData() {

        $data = $this->input->post();
        $id = $this->HelperModel->saveData($data);
        if($id) echo 'Data Inserted With Id No '.$id;
    }
}
