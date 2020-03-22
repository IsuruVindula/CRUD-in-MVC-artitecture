<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Update_controller extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encryption');
    }

    public function updatepage(){
        $u = $this->uri->segment(3);

        if($u == null){
            redirect();
        }
        $dt = $this->Update_model->updatepage($u);
        $data['nm'] = $dt->user_name;
        $data['em'] = $dt->user_email;

        $temp = $dt->user_pwd;
        $data['pm'] = $this->encryption->decrypt($temp);

        $data['id'] = $dt->user_id;
        $data['title'] = "Edit";
        $this->load->view('update', $data);

    }

    public function update(){
        $nm = $this->input->post('username');
        $em = $this->input->post('useremail');
        $pm = $this->input->post('userpwd');
        $encryptpwd = $this->encryption->encrypt($pm);

        $data = array(
            'user_name' => $nm,
            'user_email' => $em,
            'user_pwd' => $encryptpwd
        );

        if($this->input->post('edit')){
            $id = $this->input->post('userid');
            $this->Update_model->update($id,$data);
            redirect('Register','refresh');
        }else{
            $id = $this->input->post('userid');
            redirect('Register', 'refresh');
        }
    }
        
       
    
}

?>