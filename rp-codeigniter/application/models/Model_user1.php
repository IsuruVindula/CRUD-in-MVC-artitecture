<?php

class Model_user extends CI_Model{

    function insertuserdata($data)
    {
        return $this->db->insert('users',$data);
    }

    function Loginuser($data)
    {
        // $email = $this->input->post('email');
        // $password = $this->encryption->encrypt($this->input->post('password'));//encryption happens here
        $query = $this->db->get_where('users', array('email' => $data['mail']));

        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else
        {
            return FALSE;
        }
    }

    function Insertimg($name)
    {
        $query="insert into bidding_list (name) values('$name')";
        $result=$this->db->query($query);
        if($result)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }

    function delete()
    {
        $id = $this->input->post('img_id');
        $this->db->where('id', $id);
        $result=$this->db->delete('bidding_list');
        if($result)
        {
            return TRUE;
        }
        else
        {
            return FALSE;
        }
    }
    function fetch_data_from_bidding_list()
    {
        $query = $this->db->get("bidding_list");
        return $query;
    }

    function verify_email($key)// verify the email
    {
        $this->db->where('verification_key',$key);
        $this->db->where('is_email_verified','NO');
        $query = $this->db->get('users');

        if($query->num_rows() > 0){
            $data = array('is_email_verified' => 'YES');
            $this->db->where('verification_key',$key);
            $this->db->update('users',$data);
            return true;
        }else{
            return false;
        }
    }

}
?>