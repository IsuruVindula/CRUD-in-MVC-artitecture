<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mycontroller extends CI_Controller
{

    public function hehe()
    {
        echo "This is my first controller";
        $this->load->view('myindexview');
    }

    public function test()
    {
        $this->load->model('Mymodel');
        $name1 = $this->Mymodel->firstname();
        echo $name1;
    }

    public function no()
    {
        echo "this is the index function of test";
    }

}
