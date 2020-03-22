<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_model extends CI_Model{
    
    public function updatepage($data){
        $d = $this->db->get_where('register', array('user_id' => $data))->row();
        return $d; 
    }

    public function update($id,$data){
        $this->db->where('user_id', $id);
        $this->db->update('register', $data);
    }
}

?>
