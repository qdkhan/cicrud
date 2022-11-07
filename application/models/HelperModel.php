<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class HelperModel extends CI_Model {


    public function saveData($data) {
        $this->db->insert('users', $data);
        return $this->db->insert_id();
    }
}