<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_registration extends CI_Controller{

    public function go(){
        $data["fetch_data"] = $this->Register_model->fetch_data();
        $this->load->view('Register', $data);
    }
}

?>