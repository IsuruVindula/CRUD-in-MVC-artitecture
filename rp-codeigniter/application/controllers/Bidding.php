<?php

class Bidding extends CI_Controller
{
    public function get_details()
    {
        $this->load->model('Model_bidding');
        $data["img_details"] = $this->Model_bidding->get_img_details();
        $data["max_bid"] = $this->Model_bidding->get_max_bid();
        $this->load->view('customer/add_price_to_bid',$data);
    }

    public function enter_cus_bid()
    {
        $this->load->model('Model_bidding');
        $response=$this->Model_bidding->cus_bid();
        if($response)
        {
            if($response == 2)
            {
                $this->session->set_flashdata('msg','You Bid Successfully!.');
                redirect('Customer');
            }
            else if($response == 1)
            {
                $this->session->set_flashdata('msg','You Bid was Successfully UPDATED!.');
                redirect('Customer');
            }
        }
        else
        {
            $this->session->set_flashdata('msg','something went wrong');
            redirect('Customer');
        }
    }

}
?>