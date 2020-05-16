<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/index');
        $this->load->view('templates/auth_footer');
    }

    public function register()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    }

    public function checkdata()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/checkdata');
        $this->load->view('templates/auth_footer'); 
    }

    public function dashboard()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/dashboard');
        $this->load->view('templates/auth_footer');
    }

    public function bb_u()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/bb_u');
        $this->load->view('templates/auth_footer');
    }
    
    public function tb_u()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/tb_u');
        $this->load->view('templates/auth_footer');
    }

    public function bb_tb()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/bb_tb');
        $this->load->view('templates/auth_footer');
    }

    public function imt_u()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/imt_u');
        $this->load->view('templates/auth_footer');
    }
    
}