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

    public function get_pays(){
        if ($this->input->get('search') != null){
            $pays = $this->realisation->find_all_pays($this->input->get('search'));
        }else{
            $pays = $this->realisation->find_all_pays('');
        }
        // $pays = $this->realisation->findAllPays();
        echo json_encode($pays);
    }

    public function sendmail(){
        $this->email->envoyer_email_devis2();
        // redirect('AdministrationHydroGroup/mails');
    }

    public function log_out()
    {
        $this->session->unset_userdata('user_admin');
        redirect('AdministrationHydroGroup');
    }

    public function login($error = 0)
    {
        if ($error != 0) {
            $data['error'] = 'email error';
        }
        $this->load->view('admin/login', ['data' => $data]);
    }

    public function check_login()
    {
        $email = $this->input->post("email");
        $mot_de_passe = $this->input->post("password");
        $object = $this->admin->check_login($email, $mot_de_passe);
        if ($object != false) {
            $this->session->set_userdata('user_admin', $object);
            var_dump($object);
            redirect('AdministrationHydroGroup/devis');
        }
        redirect('AdministrationHydroGroup/login/1');
    }

    //reference
    public function reference($is_search = 0, $num_page = 1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "reference";
        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->reference->findAll());
        $data['reference'] = $this->reference->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['reference'] = json_decode(json_encode($data['reference']), true);
        $data['nbPages'] = $this->reference->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword']= "";

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword']= $keyword;
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->reference->all_resultat_search($keyword));
            $data['reference'] = $this->reference->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['reference'] = json_decode(json_encode($data['reference']), true);
            $data['nbPages'] = $this->reference->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;
        $this->load->view("admin/reference", ['data' => $data]);
    }

    public function new_reference()
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "reference";
        $this->load->view("admin/new_reference", ['data' => $data]);
    }

    public function creer_reference()
    {
        $imgs_pub= array();
        $nom = $this->input->post('nom');
        
        $this->load->helper('upload');
        $logo = upload_file('logo');


        $user = $this->session->user_admin;

        $data = [
            'nom'=>$nom ,
            'logo'=> $logo,
            'etat' => 1
        ];
        if ($logo[0] === 1){
            $data['logo'] = $logo[1]['file_name'];
            array_push($imgs_pub, $logo[1]['file_name']);
        }

        $this->reference->inserer($data, $imgs_pub);

        redirect('AdministrationHydroGroup/reference');
    }

    public function reference_delete($id)
    {
        $this->reference->delete($id);
        redirect('AdministrationHydroGroup/reference');
    }

    public function modif_reference($id = 1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "reference";
        $data['one_reference']= $this->reference->getById($id);
        $this->load->view("admin/modif_reference", ['data' => $data]);
    }

    public function update_reference(){
        $id = $this->input->post('id');
        $nom = $this->input->post('nom');

        $this->load->helper('upload');
        $logo = upload_file('logo');

        $user = $this->session->user_admin;

        $data = [
            'nom'=> $nom,
            'etat' => 1
        ];

        if ($logo[0] === 1){
            $data['logo'] = $logo[1]['file_name'];
        }

        $this->db->where('id', $id);
        $this->db->update('compagnies',$data);
        redirect('AdministrationHydroGroup/reference');
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

    public function realisation_delete($id)
    {
        $this->realisation->delete($id);
        redirect('AdministrationHydroGroup/achievements');
    }

    public function devis_delete($id)
    {
        $this->devis->delete($id);
        redirect('AdministrationHydroGroup/devis');
    }

    public function blog_delete($id)
    {
        $this->blog->delete($id);
        redirect('AdministrationHydroGroup/blog');
    }

    public function devis($is_search = 0, $num_page = 1)
    {

        $data['active'] = 'devis';

        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }


        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->devis->findAll());
        $data['devis'] = $this->devis->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['devis'] = json_decode(json_encode($data['devis']), true);
        $data['nbPages'] = $this->devis->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword'] ='';

        $data['keyword'] = '';
        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword'] =$keyword;
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
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }


        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->contact->findAll());
        $data['contact'] = $this->contact->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['contact'] = json_decode(json_encode($data['contact']), true);
        $data['nbPages'] = $this->contact->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword'] ='';

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword'] =$keyword;
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
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }


        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->email->findAll());
        $data['email'] = $this->email->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['email'] = json_decode(json_encode($data['email']), true);
        $data['nbPages'] = $this->email->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword'] = '';

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword'] = $keyword;
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

    public function list_admin($is_search = 0, $num_page = 1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }

        if ($this->session->flashdata('errors') != null) {
            $data['errors'] = $this->session->flashdata('errors');
        } else {
            $data['errors'] = false;
        }

        $data["active"] = "admin";

        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->admin->find_all_admin());
        $data['admin'] = $this->admin->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['admin'] = json_decode(json_encode($data['admin']), true);
        $data['nbPages'] = $this->admin->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword']= '';

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword'] = $keyword;
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->admin->all_resultat_search($keyword));
            $data['admin'] = $this->admin->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['admin'] = json_decode(json_encode($data['admin']), true);
            $data['nbPages'] = $this->admin->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;
        $this->load->view("admin/list_admin", ['data' => $data]);
    }

    public function new_admin()
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }

        if ($this->session->flashdata('errors') != null) {
            $data['errors'] = $this->session->flashdata('errors');
        } else {
            $data['errors'] = false;
        }

        $data["active"] = "admin";
        $this->load->view("admin/new_admin", ['data' => $data]);
    }

    public function inserer_admin()
    {
        $nom = $this->input->post('Nom');
        $telephone = $this->input->post('Telephone');
        $mail = $this->input->post('Mail');
        $mdp = $this->input->post('mdp');
        require APPPATH . 'constant/validation_msg.php';
        $this->validation->set_rules(
            "Nom",
            "nom de l'administrateur",
            'trim|required',
            $error_msg
        );
        $this->validation->set_rules(
            "Telephone",
            "telephone de l'administrateur",
            'trim|required|alpha_numeric',
            $error_msg
        );
        $this->validation->set_rules(
            "Mail",
            "email de l'administrateur",
            'required|trim',
            $error_msg
        );
        $this->validation->set_rules(
            "mdp",
            "mot de passe",
            'required|min_length[6]',
            $error_msg
        );

        if ($this->validation->run() == false) {
            $errors = array();
            foreach ($this->input->post() as $key => $value) {
                $errors[$key] = form_error($key);
            }
            $this->session->set_flashdata('errors', $this->validation->error_array());
            redirect('administrationhydrogroup/new_admin');
        } else {
            $this->admin->insert($nom, $telephone, $mail, $mdp);
            redirect('administrationhydrogroup/list_admin');
        }
    }

    public function modifier_admin()
    {
        $nom = $this->input->post('Nom');
        $id = $this->input->post('id');
        $telephone = $this->input->post('Telephone');
        $mail = $this->input->post('Mail');
        $mdp = $this->input->post('mdp');
        require APPPATH . 'constant/validation_msg.php';
        $this->validation->set_rules(
            "Nom",
            "nom de l'administrateur",
            'trim|required',
            $error_msg
        );
        $this->validation->set_rules(
            "Telephone",
            "telephone de l'administrateur",
            'trim|required|alpha_numeric',
            $error_msg
        );
        $this->validation->set_rules(
            "Mail",
            "email de l'administrateur",
            'required|trim',
            $error_msg
        );
        $this->validation->set_rules(
            "mdp",
            "mot de passe",
            'required|min_length[6]',
            $error_msg
        );

        if ($this->validation->run() == false) {
            $errors = array();
            foreach ($this->input->post() as $key => $value) {
                $errors[$key] = form_error($key);
            }
            $this->session->set_flashdata('errors', $this->validation->error_array());
            redirect('administrationhydrogroup/list_admin');
        } else {
            $this->admin->update_admin($id, $nom, $telephone, $mail, $mdp);
            redirect('administrationhydrogroup/list_admin');
        }
    }

    public function admin_delete($id)
    {
        $this->admin->delete($id);
        redirect('AdministrationHydroGroup/list_admin');
    }

    public function blog($is_search = 0, $num_page = 1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "blog";
        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->blog->findAll());
        $data['blog'] = $this->blog->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['blog'] = json_decode(json_encode($data['blog']), true);
        $data['nbPages'] = $this->blog->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword']= "";

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword']= $keyword;
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->blog->all_resultat_search($keyword));
            $data['blog'] = $this->blog->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['blog'] = json_decode(json_encode($data['blog']), true);
            $data['nbPages'] = $this->blog->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;
        $this->load->view("admin/blog", ['data' => $data]);
    }

    public function new_blog()
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "blog";
        $this->load->view("admin/new_blog", ['data' => $data]);
    }


    public function achievements($is_search = 0, $num_page = 1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "achievements";
        $nbAffiche = 3;
        $data['page_en_cours'] = $num_page;

        $data['nb_resultat'] = count($this->realisation->findAll());
        $data['realisation'] = $this->realisation->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
        // objet -> tableau
        $data['realisation'] = json_decode(json_encode($data['realisation']), true);
        $data['nbPages'] = $this->realisation->getNombrePage($nombre_resultat_affiche = $nbAffiche);
        $data['keyword']= "";

        if ($is_search == 1) {
            $keyword = $this->input->get('keyword');
            if ($keyword == NULL) {
                $keyword = $this->session->keyword;
            }
            $data['keyword']= $keyword;
            $this->session->set_userdata('keyword', $keyword);
            $data['nb_resultat'] = count($this->realisation->all_resultat_search($keyword));
            $data['realisation'] = $this->realisation->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword);
            // objet -> tableau
            $data['realisation'] = json_decode(json_encode($data['realisation']), true);
            $data['nbPages'] = $this->realisation->getNombrePageSearch($data['nb_resultat'], $nombre_resultat_affiche = $nbAffiche);
        } else {
            $this->session->unset_userdata('keyword');
        }

        //set all images 
        $data['is_search'] = $is_search;
        $this->load->view("admin/achievements", ['data' => $data]);
    }

    public function new_achievements()
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["pays"] = $this->realisation->findAllPays();
        $data["active"] = "achievements";
        $this->load->view("admin/new_achievements", ['data' => $data]);
    }

    public function creer_achievement()
    {
        $imgs_pub= array();
        $auteur = $this->input->post('auteur');
        $pays = $this->input->post('pays');
        $nom_mission_fr = $this->input->post('nom_mission_fr');
        $nom_mission_en = $this->input->post('nom_mission_en');
        $lieu = $this->input->post('lieu');
        $autorite = $this->input->post('autorite');
        $reference = $this->input->post('reference');
        $adresse = $this->input->post('adresse');
        $demarrage = $this->input->post('demarrage');
        $achevement = $this->input->post('achevement');
        $duree = $this->input->post('duree');
        $publication = $this->input->post('publication');
        $numero_reference = $this->input->post('numero_reference');
        $email_reference = $this->input->post('email_reference');
        $commentaire_fr = $this->input->post('commentaire_fr');
        $commentaire_en = $this->input->post('commentaire_en');
        $descri_fr = $this->input->post('descri_fr');
        $descri_en = $this->input->post('descri_en');

        $this->load->helper('upload');
        $logo_autorite = upload_file('logo_autorite');
        $image_couverture = upload_file('image_couverture');
        $image_publication1 = upload_file('image_publication1');
        $image_publication2 = upload_file('image_publication2');
        $image_publication3 = upload_file('image_publication3');


        $user = $this->session->user_admin;

        $data = [
            'idUser' => $user->id,
            'idPays' => $pays,
            'auteur' => $auteur,
            'nom_mission_FR' => $nom_mission_fr,
            'nom_mission_EN' => $nom_mission_en,
            'lieu' => $lieu,
            'autorite_contractante' => $autorite,
            'reference' => $reference,
            'adresse' => $adresse,
            'date_demarrage' => $demarrage,
            'date_achevement' => $achevement,
            'duree' => $duree,
            'date_publication' => $publication,
            'numero_reference' => $numero_reference,
            'email_reference' => $email_reference,
            'commentaire_FR' => $commentaire_fr,
            'commentaire_EN' => $commentaire_en,
            'description_FR' => $descri_fr,
            'description_EN' => $descri_en,
            'etat' => 1
        ];
        if ($logo_autorite[0] === 1){
            $data['logo_autorite_contractante'] = $logo_autorite[1]['file_name'];
        }
        if ($image_couverture[0] === 1){
            $data['image_couverture'] = $image_couverture[1]['file_name'];
            array_push($imgs_pub, $image_couverture[1]['file_name']);
        }

        if ($image_publication1[0] == 1){
            array_push($imgs_pub,  $image_publication1[1]['file_name']);
        }
        if ($image_publication2[0] == 1){
            array_push($imgs_pub,  $image_publication2[1]['file_name']);
            
        }
        if ($image_publication3[0] == 1){
            array_push($imgs_pub,  $image_publication3[1]['file_name']);
            
        }

        $this->realisation->inserer($data, $imgs_pub);

        redirect('AdministrationHydroGroup/achievements');
    }

    public function modif_achievements($id=1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data['one_realisation_images']=  $this->realisation->get_all_images($id);
        $data['one_realisation']= $this->realisation->getById($id);
        $data["pays"] = $this->realisation->findAllPays();
        $data["active"] = "achievements";
        $this->load->view("admin/modif_achievements", ['data' => $data]);
    }

    public function update_achievements(){
        $id = $this->input->post('id');
        $auteur = $this->input->post('auteur');
        $pays = $this->input->post('pays');
        $nom_mission_fr = $this->input->post('nom_mission_fr');
        $nom_mission_en = $this->input->post('nom_mission_en');
        $lieu = $this->input->post('lieu');
        $autorite = $this->input->post('autorite');
        $reference = $this->input->post('reference');
        $adresse = $this->input->post('adresse');
        $demarrage = $this->input->post('demarrage');
        $achevement = $this->input->post('achevement');
        $duree = $this->input->post('duree');
        $publication = $this->input->post('publication');
        $numero_reference = $this->input->post('numero_reference');
        $email_reference = $this->input->post('email_reference');
        $commentaire_fr = $this->input->post('commentaire_fr');
        $commentaire_en = $this->input->post('commentaire_en');
        $descri_fr = $this->input->post('descri_fr');
        $descri_en = $this->input->post('descri_en');

        $this->load->helper('upload');
        $logo_autorite = upload_file('logo_autorite');
        $image_couverture = upload_file('image_couverture');
        $image_publication1 = upload_file('image_publication0');
        $image_publication2 = upload_file('image_publication1');
        $image_publication3 = upload_file('image_publication2');


        $image_0= $this->input->post('image_0');
        $image_1= $this->input->post('image_1'); 
        $image_2= $this->input->post('image_2'); 

        $image_couverture_supp= $this->input->post('image_couverture_supp'); 
        $image_1_supp= $this->input->post('image_0_supp');
        $image_2_supp= $this->input->post('image_1_supp'); 
        $image_3_supp= $this->input->post('image_2_supp'); 
         
        

        $user = $this->session->user_admin;

        $data = [
            'idUser' => $user->id,
            'auteur' => $auteur,
            'idPays' => $pays,
            'nom_mission_FR' => $nom_mission_fr,
            'nom_mission_EN' => $nom_mission_en,
            'lieu' => $lieu,
            'autorite_contractante' => $autorite,
            'reference' => $reference,
            'adresse' => $adresse,
            'date_achevement' => $demarrage,
            'date_achevement' => $achevement,
            'duree' => $duree,
            'date_publication' => $publication,
            'numero_reference' => $numero_reference,
            'email_reference' => $email_reference,
            'commentaire_FR' => $commentaire_fr,
            'commentaire_EN' => $commentaire_en,
            'description_FR' => $descri_fr,
            'description_EN' => $descri_en,
            'etat' => 1
        ];

        if ($image_couverture_supp != ""){
            echo 'miditra0';

            $this->db->where('id', $id);
            $this->db->update('achievements',['image_couverture' => null]);
        }
        if ($image_1_supp != ""){
            echo 'miditra1';

            $this->db->where('id', $image_1_supp);
            $this->db->delete('achievements_images');
        }
        if ($image_2_supp != ""){
            echo 'miditra2';

            $this->db->where('id', $image_2_supp);
            $this->db->delete('achievements_images');
        }
        if ($image_3_supp != ""){
            echo 'miditra3';
            $this->db->where('id', $image_3_supp);
            $this->db->delete('achievements_images');
        }
        

        if ($logo_autorite[0] === 1){
            $data['logo_autorite_contractante'] = $logo_autorite[1]['file_name'];
        }
        if ($image_couverture[0] === 1){
            echo 'miditra';
            $data['image_couverture'] = $image_couverture[1]['file_name'];
        }

        if ($image_publication1[0] == 1){
            $this->db->where('id', $image_0);
            $this->db->update('achievements_images',['image' => $image_publication1[1]['file_name']]);
        }
        if ($image_publication2[0] == 1){
            $this->db->where('id', $image_1);
            $this->db->update('achievements_images',['image' => $image_publication2[1]['file_name']]);
        }
        if ($image_publication3[0] == 1){
            $this->db->where('id', $image_1);
            $this->db->update('achievements_images',['image' => $image_publication3[1]['file_name']]);
        }
        $this->db->where('id', $id);
        $this->db->update('achievements',$data);
        redirect('AdministrationHydroGroup/achievements');
       
        

        // var_dump($data);

    }

    public function update_blog(){
        $id = $this->input->post('id');
        $auteur = $this->input->post('auteur');
        $date_publication = $this->input->post('date_publication');
        $titre_fr = $this->input->post('titre_fr');
        $titre_en = $this->input->post('titre_en');
        $detail_en = $this->input->post('detail_en');
        $detail_fr = $this->input->post('detail_fr');
        

        $this->load->helper('upload');
        $image_couverture = upload_file('image_couverture');
        $image_publication1 = upload_file('image_publication0');
        $image_publication2 = upload_file('image_publication1');
        $image_publication3 = upload_file('image_publication2');

        $image_0= $this->input->post('image_0'); 
        $image_1= $this->input->post('image_1');
        $image_2= $this->input->post('image_2'); 

        $image_couverture_supp= $this->input->post('image_couverture_supp'); 
        $image_0_supp= $this->input->post('image_0_supp');
        $image_1_supp= $this->input->post('image_1_supp'); 
        $image_2_supp= $this->input->post('image_2_supp'); 


        $user = $this->session->user_admin;

        $data = [
            'idUser'=> $user->id,
            'titre_FR'=>$titre_fr ,
            'titre_EN'=> $titre_en,
            'detail_FR'=> $detail_fr,
            'detail_EN'=> $detail_en,
            'date_publication'=> $date_publication,
            'auteur'=> $auteur,
            'etat' => 1
        ];

        if ($image_couverture_supp != ""){

            $this->db->where('id', $id);
            $this->db->update('blogs',['image_couverture' => null]);
        }
        if ($image_0_supp != ""){
            echo 'miditra1';

            $this->db->where('id', $image_0_supp);
            $this->db->delete('blogs_images');
        }
        if ($image_1_supp != ""){
            echo 'miditra2';

            $this->db->where('id', $image_1_supp);
            $this->db->delete('blogs_images');
        }
        if ($image_2_supp != ""){
            echo 'miditra3';
            $this->db->where('id', $image_2_supp);
            $this->db->delete('blogs_images');
        }

        if ($image_couverture[0] === 1){
            $data['image_couverture'] = $image_couverture[1]['file_name'];
        }

        if ($image_publication1[0] == 1){
            $this->db->where('id', $image_0);
            $this->db->update('blogs_images',['image' => $image_publication1[1]['file_name']]);
        }
        if ($image_publication2[0] == 1){
            $this->db->where('id', $image_1);
            $this->db->update('blogs_images',['image' => $image_publication2[1]['file_name']]);
        }
        if ($image_publication3[0] == 1){
            $this->db->where('id', $image_2);
            $this->db->update('blogs_images',['image' => $image_publication3[1]['file_name']]);
        }
        $this->db->where('id', $id);
        $this->db->update('blogs',$data);
        redirect('AdministrationHydroGroup/blog');
    }

    public function modif_blog($id = 1)
    {
        if ($this->session->has_userdata('user_admin') == false) {
            $data['session'] = false;
        } else {
            $data['session'] = $this->session->user_admin;
        }
        $data["active"] = "blog";
        $data['one_blog_images']=  $this->blog->get_all_images($id);
        $data['one_blog']= $this->blog->getById($id);
        $this->load->view("admin/modif_blog", ['data' => $data]);
    }

    public function creer_blog()
    {
        $imgs_pub= array();
        $auteur = $this->input->post('auteur');
        $date_publication = $this->input->post('date_publication');
        $titre_fr = $this->input->post('titre_fr');
        $titre_en = $this->input->post('titre_en');
        $detail_en = $this->input->post('detail_en');
        $detail_fr = $this->input->post('detail_fr');
        

        $this->load->helper('upload');
        $image_couverture = upload_file('image_couverture');
        $image_publication1 = upload_file('image_publication1');
        $image_publication2 = upload_file('image_publication2');
        $image_publication3 = upload_file('image_publication3');


        $user = $this->session->user_admin;

        $data = [
            'idUser'=> $user->id,
            'titre_FR'=>$titre_fr ,
            'titre_EN'=> $titre_en,
            'detail_FR'=> $detail_fr,
            'detail_EN'=> $detail_en,
            'date_publication'=> $date_publication,
            'auteur'=> $auteur,
            'etat' => 1
        ];
        if ($image_couverture[0] === 1){
            $data['image_couverture'] = $image_couverture[1]['file_name'];
            array_push($imgs_pub, $image_couverture[1]['file_name']);
        }

        if ($image_publication1[0] == 1){
            array_push($imgs_pub,  $image_publication1[1]['file_name']);
        }
        if ($image_publication2[0] == 1){
            array_push($imgs_pub,  $image_publication2[1]['file_name']);
            
        }
        if ($image_publication3[0] == 1){
            array_push($imgs_pub,  $image_publication3[1]['file_name']);
            
        }

        $this->blog->inserer($data, $imgs_pub);
        $this->email->envoyer_email($titre_fr, $titre_en);
        redirect('AdministrationHydroGroup/blog');
    }
}
