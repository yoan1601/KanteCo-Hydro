<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AdministrationHydroGroup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('AdministrationHydroGroup/login');
    }

    public function login($error = 0)
    {
        if ($error != 0) {
			$data['error'] = 'email error';
		}
        $this->load->view('admin/login');
    }

    public function check_login(){
        $email = $this->input->post("email");
        $mot_de_passe= $this->input->post("password");
        $object = $this->admin->check_login($email, $mot_de_passe);
        if ($object != false){
            $this->session->set_userdata('user', $object);
            var_dump($object);
            // redirect('front/home');
        }
        redirect('AdministrationHydroGroup/login/1');
    }

    
    public function achievements()
    {
        $this->load->view("admin/achievements");
    }

    public function devis()
    {
        $this->load->view("admin/devis");
    }
}
