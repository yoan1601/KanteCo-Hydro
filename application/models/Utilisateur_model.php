<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Utilisateur_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Utilisateur_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function insert($nom ,$telephone, $email){
    $this->db->insert('users',[
      "nom" => $nom,
      "telephone" => $telephone,
      "mail" => $email,
      "is_admin" => 1,
      "etat"=> 1
    ]);
  }

  public function check_login($email){
    $this->db->where(["mail" => trim($email)]);
    $query = $this->db->get("users");
    if (count($query->result()) <= 0) return false;
    else return $query->result()[0];
  }

  public function findAll(){
    $query = $this->db->get("utilisateurs");
    return $query->result();
  }

  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Utilisateur_model.php */
/* Location: ./application/models/Utilisateur_model.php */