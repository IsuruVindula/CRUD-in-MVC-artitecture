<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_details_controller extends CI_Controller
{

    public function papa()
    {
        $this->load->model('User_details_model', 'user');
        $data['userayy'] = $this->user->return_users();
        $this->load->view('user', $data);

    }
}
