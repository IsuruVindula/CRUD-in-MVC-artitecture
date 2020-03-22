<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model{
    
    public function insert($data){
        $this->db->insert('register', $data);
        return $this->db->insert_id();//return last inserted id
    }

    public function fetch_data(){
        $result = $this->db->get('register');
        return $result;
    }
}

?>
