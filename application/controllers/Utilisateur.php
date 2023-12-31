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

  public function send_news_letter()
  {
    $email = $this->input->post('email');
    require APPPATH . 'constant/validation_msg.php';
    $this->validation->set_rules(
      "email",
      "adresse email",
      'trim|valid_email|required',
      $error_msg
    );
    if ($this->validation->run() == false) {
      $errors = array();
      foreach ($this->input->post() as $key => $value) {
        $errors[$key] = form_error($key);
      }
      // var_dump(validation_errors());
      $resp = array(
        "state" => "error",
      );
      echo json_encode($resp);
    } else {
      $this->user->insert_email($email);
      $resp = array(
        "state" => "success",
      );
      echo json_encode($resp);
      // redirect('front');
    }
  }

  public function inscription()
  {
    $nom = $this->input->post("nom");
    $telephone = $this->input->post("telephone");
    $email = $this->input->post("email");
    $mot_de_passe = $this->input->post("password");

    require APPPATH . 'constant/validation_msg.php';
    $this->validation->set_rules(
      "nom",
      "nom de l'utilisateur",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "telephone",
      "telephone",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "email",
      "adresse email",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "password",
      "mot de passe",
      'required',
      $error_msg
    );
    if ($this->validation->run() == false) {
      $errors = array();
      foreach ($this->input->post() as $key => $value) {
        $errors[$key] = form_error($key);
      }
      var_dump(validation_errors());
    } else {
      $id = $this->user->insert($nom, $telephone, $email, $mot_de_passe);
      $object = array(
        "id" => $id,
        "nom" =>$telephone,
        "mail" =>$email,
        "mot_de_passe" =>md5($mot_de_passe),
        "is_admin" =>1
      );
      $this->session->set_userdata('user', $object);
      redirect('front');
    }
  }

  public function login()
  {
    $email = $this->input->post("email");
    $mot_de_passe = $this->input->post("password");
    $object = $this->user->check_login($email, $mot_de_passe);
    if ($object != false) {
      $this->session->set_userdata('user', $object);
      redirect('front/devis');
    }
    $data['error'] = 'email error';
    redirect('front/sign_in/1');
  }

  public function log_out()
  {
    $this->session->unset_userdata('user');
    redirect('front/home');
  }

  public function index()
  {
  }
}


/* End of file Utilisateur.php */
/* Location: ./application/controllers/Utilisateur.php */