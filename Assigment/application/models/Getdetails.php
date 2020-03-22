<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Getdetails extends CI_Model{

    public function fetch_data(){
        $result = $this->db->get('register');
        return $result;
    }
}

?>
