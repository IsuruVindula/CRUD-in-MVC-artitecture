<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Delete_model extends CI_Model{
    
    public function delete($data){
        $this->db->delete('register',array('user_id' => $data));
        return;
    }
}

?>
