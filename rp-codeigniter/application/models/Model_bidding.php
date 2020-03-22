<?php

class Model_bidding extends CI_Model{
    function get_img()
    {
        $result = $this->db->get('bidding_list');
        return $result;
    }

    function get_max_bid()
    {
        $id = $this->input->post('img_id');
        $this->db->select_max('price');
        $this->db->where('art_id',$id);
        $max = $this->db->get('customer_bid_tb')->row();
        return $max->price;
    }
    function get_img_details()
    {
        $id = $this->input->post('img_id');
        $this->db->where('id',$id);
        $respond=$this->db->get("bidding_list");
        if($respond)
        {
            return $respond->row(0);
        }else{
            return false;
        }
    }
    function cus_bid()
    {
        $imageid = $this->input->post('img_id',TRUE);
        $customerid = $this->input->post('cus_id',TRUE);
        $this->db->where('art_id',$imageid);
        $this->db->where('customer_id',$customerid);
        $respond=$this->db->get('customer_bid_tb');
        $data = array (
            'art_id' => $this->input->post('img_id',TRUE),
            'art_name' => $this->input->post('img_name',TRUE),
            'customer_id' => $this->input->post('cus_id',TRUE),
            'price' => $this->input->post('cus_bid',TRUE)
        );
        if($respond->num_rows()==1)
        {
            $this->db->where('art_id',$imageid);
            $this->db->where('customer_id',$customerid);
            $this->db->update('customer_bid_tb',$data);
            return 1;
        }
        else
        {
            $this->db->insert('customer_bid_tb',$data);
            return 2;
        }
    }
}
?>