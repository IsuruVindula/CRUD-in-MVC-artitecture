<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Member_registration extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('encryption');
    }

    public function index(){
        $this->load->view('Register');
    }

    // public function validation(){
    //     $data['title'] = "Create Posts";

    //     $this->form_validation->set_rules('username', 'Title', 'required');
    //     $this->form_validation->set_rules('useremail', 'Body', 'required');
    //     $this->form_validation->set_rules('userpwd', 'Body', 'required');

    //     if($this->form_validation->run() === FALSE){
    //         $this->load->view('Register');
    //     }else{
    //         $this->Posts_model->create_post();
    //         redirect('posts');
    //     }

    public function validation(){

        $this->form_validation->set_rules('username', 'Name', 'required');
        $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('userpwd', 'Password', 'trim|required');

        if($this->form_validation->run() === true){

            $verification_key = md5(rand());//generate alpha numeric key which use for email verification
            $encrypted_pwd = $this->encryption->encrypt($this->input->post('userpwd'));


            $data = array(
                'Name'=> $this->input->post('username'),
                'email'=> $this->input->post('useremail'),
                'password'=> $encrypted_pwd,
                'verification_key'=> $verification_key
            );

           //$register_id = $this->Register_model->insert($data);

            // if($register_id > 0){
            //     $subject = "please verify email for login";
            //     $message = "
            //     <p>HI ".$this->input->post('username')."</p>
            //     <p><a href='".base_url()."register/verify_email/".$verification_key."'>link</a>.</p>
            //     <p>Click here to verify your email</p>
            //     ";

            //     $config = array(
            //         'protocol' => 'smtp',
            //         'smtp_host' => 'smtpout.secureserver.net',
            //         'smtp_port' => 80,
            //         'smtp_user' => 'Isuru Vindula',
            //         'smtp_password' => '12345',
            //         'mailtype' =>'html',
            //         'charset' => 'iso-8859-1',
            //         'wordwrap' => TRUE
            //     );

            //     $this->load->library('email', $config);
            //     $this->email->set_newline("\r\n");
            //     $this->email->from('isuruvindula927@gmail.com');
            //     $this->email->to($this->input->post('useremail'));
            //     $this->email->subject($subject);
            //     $this->email->message($message);

            //     if($this->email->send()){
            //         $this->session->set_userdata('message', 'check email for verification');
            //         redirect(base_url().'Member_registration/index');
            //     }

            // }else{
            //     redirect('Register');
            // }

            if ($this->Register_model->insert($data)){

                // send email
                if ($this->Register_model->sendEmail($this->input->post('useremail')))
                {
                    // successfully sent mail
                    $this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please confirm the mail sent to your Email-ID!!!</div>');
                    redirect('Member_registration/index');
                } else{
                    // error
                    $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                    redirect('Member_registration/index');
                }
            }else{
                // error
                $this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
                redirect('Member_registration/index');
            }
        }else{
            $this->load->view('Register');
        }
    }

    function verify($hash=NULL)
    {
        if ($this->Register_model->verifyEmailID($hash))
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-success text-center">Your Email Address is successfully verified! Please login to access your account!</div>');
            redirect('user/register');
        }
        else
        {
            $this->session->set_flashdata('verify_msg','<div class="alert alert-danger text-center">Sorry! There is error verifying your Email Address!</div>');
            redirect('user/register');
        }
    }
}

?>