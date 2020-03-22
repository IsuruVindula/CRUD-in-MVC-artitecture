<?php

    class Posts extends CI_Controller{
        
        public function index(){

            $this->load->model('Nikan');
            $data["fetch_data"] = $this->Nikan->get();
            $this->load->view('Nikan_view', $data);
        }
    }
?>