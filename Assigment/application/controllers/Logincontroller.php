<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logincontroller extends CI_Controller{

    function __construct(){
        parent::__construct();
    }

    public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
        $data['msg'] = $msg;
        $this->load->view('Loginview', $data);
    }

    public function process(){
        // Load the model
        $this->load->model('Loginmodel');
        // Validate the user can login
        $result = $this->Loginmodel->validate();
        // Now we verify the result
        if(! $result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
            // If user did validate,
            // Send them to members area
            redirect('home');
        }

    }
}
?>