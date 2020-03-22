<?php
class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->encryption->initialize(
            array(
                    'cipher' => 'aes-256',
                    'mode' => 'ctr',
                    'key' => '<a 32-character random string>'
            )
    );
        $this->load->database();
    }


    public function Registeruser(){

        $this->form_validation->set_rules('fname','First name','trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('lname','Last name','trim|required|alpha|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('type','Type','required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('passwordagain', 'Re-enter Password', 'required|matches[password]');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('register');
        }
        else
        {
            $mail = $this->input->post('email');
            $verification_key = md5(rand());//random verification key generator
            //insert the user registration details into database
            $data = array(
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname'),
                'email' => $mail,
                'type' => $this->input->post('type'),
                'password' => $this->encryption->encrypt($this->input->post('password')),//encryption happens here
                'verification_key' => $verification_key
            );

            //$this->load->model('Model_user');
            $response = $this->Model_user->insertuserdata($data);

            if($response)
            {
                $test_mail = "Please verify your email to login";
                //$message = "HI this is email verification.click here to verify".<a href=".base_url()."user/verify/".$verification_key.">link</a>.";
                $message = 'Please click this link to activate your account::http://127.0.0.1/CI-tutorials/rp-codeigniter/index.php/Register/verify/'.$verification_key;
                $config = Array(
                    'protocol' => 'smtp',
                    'smtp_host' => 'smtpout.gmail.com',
                    'smtp_port' => 80,
                    'smtp_user' => 'isuruvindula927@gmail.com',
                    'smtp_pass' => 'cde3CDE#',
                    'mailtype' => 'html',
                    'charset' => 'UTF-8',
                    'starttls' => true,
                    'wordwrap' => TRUE
                );
                $mail = $this->input->post('email');
                 //SEND EMAIL
                mail($mail, $test_mail, $message, 'From: isuruvindula927@gmail.com');

                $this->session->set_flashdata('msg','Check your email');
                redirect('Customer_home/Register');
            }
            else
            {
                $this->session->set_flashdata('msg','something went wrong');
                redirect('Customer_home/Register');
            }
        }
    }

    function verify()
    {
        if($this->uri->segment(3)){

            $verification_key = $this->uri->segment(3);

            if($this->Model_user->verify_email($verification_key)){
                $data['message'] = '<h1 align="center">Your email has been successfully verified. Now you can login from <a href="'.base_url().'login">here</a></h1>';
            }else{

                $data['message'] = '<h1 align="center">Invalid Email</h1>';
            }
        }
        $this->session->set_flashdata('msg','Your email has been verified. Thank You');
        redirect('Customer_home/Register');
    }
}

?>