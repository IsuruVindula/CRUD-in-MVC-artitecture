<?php
class Upload extends CI_Controller {


    public function index()
    {
        $this->load->model('Model_user');
        $data["fetch_data"] = $this->Model_user->fetch_data_from_bidding_list();
        $data["error"] = ' ';
        $this->load->view('Admin/add_bidding_image', $data);
    }

    public function do_upload()
    {
        $this->load->model('Model_user');


        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 1000;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);
        $this->load->model('Model_user');
        $data["fetch_data"] = $this->Model_user->fetch_data_from_bidding_list();
        if ( ! $this->upload->do_upload('userfile'))
        {
            $data["error"] = $this->upload->display_errors();
            $this->load->view('Admin/add_bidding_image', $data);
        }
        else
        {

            $data = array('upload_data' => $this->upload->data());
            $result=$this->Model_user->Insertimg($this->upload->data('file_name'));
            if($result)
            {
                $this->load->view('Admin/upload_success', $data);
            }
            else
            {
                $this->session->set_flashdata('err','Image does not add to DATABASE !');
                redirect('Upload/index');
            }
        }
    }
}
?>