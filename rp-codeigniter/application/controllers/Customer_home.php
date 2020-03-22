<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_home extends CI_Controller {


	public function index()
	{
		$this->load->view('home');
	}
    public function Login()
    {
        $this->load->view('login');
    }
    public function Register()
    {
        $this->load->view('register');
    }
}
