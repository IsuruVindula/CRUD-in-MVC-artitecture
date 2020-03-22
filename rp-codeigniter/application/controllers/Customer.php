<?php

class Customer extends CI_Controller
{
    public function index()
    {
        $this->load->view('customer/home');
    }
    public function bid()
    {
        $this->load->model('Model_bidding');
        $data["img_data"] = $this->Model_bidding->get_img();
        $this->load->view('customer/bid',$data);

    }
}
?>