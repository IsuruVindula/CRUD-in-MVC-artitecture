<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_remove extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('encryption');
    }

    public function deletepage(){
        $u = $this->uri->segment(3);
        $this->Delete_model->delete($u);
        
    }
    
}

?>