<?php

    class Pages extends CI_Controller{
        
        public function view(){
            echo "hiiiiiii";
            $this->load->model('Nikan');
            $data['fetch_data'] = $this->Nikan->get();
            $this->load->view('Nikan_view', $data);
     
        }
    }

?>