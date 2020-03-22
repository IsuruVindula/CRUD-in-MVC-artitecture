<?php


class Delete extends CI_Controller
{

    public function delete_img(){
        $this->load->model('Model_user');
        $result=$this->Model_user->delete();
        if($result)
        {
            $this->session->set_flashdata('delete_success','Image removed from the DATABASE !');
            $data["fetch_data"] = $this->Model_user->fetch_data_from_bidding_list();
            $this->load->view('Admin/delete_image',$data);
        }
        else
        {
            $this->session->set_flashdata('delete_failed','Image dosen\'t deleted from database !');
            $data["fetch_data"] = $this->Model_user->fetch_data_from_bidding_list();
            $this->load->view('Admin/delete_image',$data);
        }
    }
}

?>