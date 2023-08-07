<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Utilisateur
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Utilisateur extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function inscription(){
    $nom = $this->input->post("nom");
    $telephone = $this->input->post("telephone");
    $email = $this->input->post("email");

    require APPPATH.'constant\validation_msg.php';
    $this->validation->set_rules(
      "nom", "nom de l'utilisateur",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "telephone", "telephone",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "email", "adresse email",
      'trim|required',
      $error_msg
    );
    $this->db->insert("users",[
      "nom" => $nom,
      "telephone"=> $telephone,
      "mail" => $email,
      "is_admin" => 1,
      "etat" => 1
    ]);
    redirect('front/sign_in');
  }

  public function login(){
    $email = $this->input->post("email");
    $object = $this->user->check_login($email);
    if ($object != false){
      $this->session->set_userdata('user', $object);
      redirect('front/home');
    }
    redirect('front/sign_in');
    
  }

  public function log_out(){
    $this->session->unset_userdata('user');
    redirect('front/home');
  }

  public function index()
  {

    
  }

}


/* End of file Utilisateur.php */
/* Location: ./application/controllers/Utilisateur.php */