<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Admin_model
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

class Admin_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function find_all_mails(){
    $query = $this->db->get('emails');
    return $query->result();
  }

  public function find_all_devis(){
    $query = $this->db->get('devis');
    return $query->result();
  }

  public function find_all_contacts(){
    $query = $this->db->get('contacts');
    return $query->result();
  }

  public function check_login($email, $password){
      $this->db->where(["mail" => trim($email), "mot_de_passe" => md5($password)]);
      $this->db->where("is_admin !=", 11);
      $query = $this->db->get("users");
      if (count($query->result()) <= 0) return false;
      else return $query->result()[0];
  }


  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Admin_model.php */
/* Location: ./application/models/Admin_model.php */