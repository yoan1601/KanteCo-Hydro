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
    $nom = "mirija";
    $telephone = "3456666";
    $email = "Marc@gmail.com";

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
    // $this->user->insert("mirija","3456666","Marc@gmail.com");
  }

  public function index()
  {
    var_dump($this->user->check_login("root@root.com"));
  }

}


/* End of file Utilisateur.php */
/* Location: ./application/controllers/Utilisateur.php */