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

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function achievements()
    {
        $this->load->view("admin/achievements");
    }

    public function devis()
    {
        $this->load->view("admin/devis");
    }

    public function contact()
    {
        $this->load->view("admin/contact");
    }
}
