<?php
defined('BASEPATH') or exit('No direct script access allowed');
//I'm the user model

class User_details_model extends CI_Model
{
    public function return_users()
    {
        $this->load->database();
        //$query = $this->db->query("SELECT * FROM users"); //$query is an object
        $query = $this->db->get('users');
        // echo "<pre>";
        // print_r($query->result_array());
        // echo "</pre>";
        return $query->result_array();
    }
}
