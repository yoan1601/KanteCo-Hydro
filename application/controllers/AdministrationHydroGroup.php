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

    public function log_out()
    {
        $this->session->unset_userdata('user');
        redirect('AdministrationHydroGroup');
    }

    public function login($error = 0)
    {
        if ($error != 0) {
            $data['error'] = 'email error';
        }
        $this->load->view('admin/login');
    }

    public function check_login()
    {
        $email = $this->input->post("email");
        $mot_de_passe = $this->input->post("password");
        $object = $this->admin->check_login($email, $mot_de_passe);
        if ($object != false) {
            $this->session->set_userdata('user', $object);
            var_dump($object);
            redirect('AdministrationHydroGroup/devis');
        }
        redirect('AdministrationHydroGroup/login/1');
    }


    public function achievements()
    {
        $this->load->view("admin/achievements");
    }

    public function email_delete($id)
    {
        $this->email->delete($id);
        redirect('AdministrationHydroGroup/mails');
    }

    public function contact_delete($id)
    {
        $this->contact->delete($id);
        redirect('AdministrationHydroGroup/contact');
    }

    public function devis_delete($id)
    {
        $this->devis->delete($id);
        redirect('AdministrationHydroGroup/devis');
    }

    public function devis($is_search = 0, $num_page = 1)
    {

        $data['active'] = 'devis';

        if ($this->session->has_userdata('user') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user;
        }


        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->devis->findAll());
        $data['devis'] = $this->devis->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['devis'] = json_decode(json_encode($data['devis']), true);
        $data['nbPages'] = $this->devis->getNombrePage($nombre_resultat_affiche = $nbAffiche);

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->devis->all_resultat_search($keyword));
            $data['devis'] = $this->devis->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['devis'] = json_decode(json_encode($data['devis']), true);
            $data['nbPages'] = $this->devis->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;


        // var_dump($data['deviss']);


        $this->load->view('admin/devis', ['data' => $data]);
    }

    public function contact($is_search = 0, $num_page = 1)
    {
        $data["active"] = "contact";
        if ($this->session->has_userdata('user') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user;
        }


        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->contact->findAll());
        $data['contact'] = $this->contact->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['contact'] = json_decode(json_encode($data['contact']), true);
        $data['nbPages'] = $this->contact->getNombrePage($nombre_resultat_affiche = $nbAffiche);

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->contact->all_resultat_search($keyword));
            $data['contact'] = $this->contact->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['contact'] = json_decode(json_encode($data['contact']), true);
            $data['nbPages'] = $this->contact->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;
        $this->load->view("admin/contact", ['data' => $data]);
    }

    public function mails($is_search = 0, $num_page = 1)
    {
        $data["active"] = "mails";
        if ($this->session->has_userdata('user') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user;
        }


        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->email->findAll());
        $data['email'] = $this->email->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['email'] = json_decode(json_encode($data['email']), true);
        $data['nbPages'] = $this->email->getNombrePage($nombre_resultat_affiche = $nbAffiche);

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->email->all_resultat_search($keyword));
            $data['email'] = $this->email->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['email'] = json_decode(json_encode($data['email']), true);
            $data['nbPages'] = $this->email->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;
        $this->load->view("admin/mails", ['data' => $data]);
    }

    public function list_admin()
    {
        $data["active"] = "admin";
        $this->load->view("admin/list_admin", ['data' => $data]);
    }

    public function new_admin()
    {
        $data["active"] = "admin";
        $this->load->view("admin/new_admin", ['data' => $data]);
    }

    public function blog()
    {
        $data["active"] = "blog";
        $this->load->view("admin/blog", ['data' => $data]);
    }
}
