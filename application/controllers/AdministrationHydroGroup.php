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
        $data["page"] = "devis";
        $this->load->view("admin/devis", ['data' => $data]);
    }

    public function contact()
    {
        $data["page"] = "contact";
        $this->load->view("admin/contact", ['data' => $data]);
    }

    public function mails()
    {
        $data["page"] = "mails";
        $this->load->view("admin/mails", ['data' => $data]);
    }
}
