<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model{

    public function insert($data){
        $this->db->insert('users', $data);
        return $this->db->insert_id();//return last inserted id
    }

    function sendEmail($to_email)
    {
        $from_email = 'vindulaisuru@gmail.com'; //change this to yours
        $subject = 'Verify Your Email Address';
        $message = 'Dear User,<br /><br />Please click on the below activation link to verify your email address.<br /><br /> http://www.mydomain.com/user/verify/' . md5($to_email) . '<br /><br /><br />Thanks<br />Mydomain Team';

        //configure email settings
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.mydomain.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = $from_email;
        $config['smtp_pass'] = '0774927176'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);

        //send mail
        $this->email->from($from_email, 'Mydomain');
        $this->email->to($to_email);
        $this->email->subject($subject);
        $this->email->message($message);
        return $this->email->send();
    }

    function verifyEmailID($key)
    {
        $data = array('is_email_verified' => 1);
        $this->db->where('md5(email)', $key);
        return $this->db->update('user', $data);
    }
}


?>
