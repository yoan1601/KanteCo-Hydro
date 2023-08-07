<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Realisation_model
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

class Realisation_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function all_resultat_search($keyword, $year){
    
  }

  public function findAllPagination($numero_page,$nombre_resultat_affiche){
    $calcul_limite = ($numero_page-1)*$nombre_resultat_affiche;
    $this->db->limit($nombre_resultat_affiche,$calcul_limite);
    // $this->db->order_by("id");
    $query = $this->db->get("achievements");
    return $query->result();
  }

  public function getNombrePage($nombre_resultat_affiche){
    $query = $this->db->get('achievements');
    $rows = count(($query->result()));
    return ceil($rows/$nombre_resultat_affiche);
  }

  public function findAll(){
    $query = $this->db->get("achievements");
    return $query->result();
  }

  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Realisation_model.php */
/* Location: ./application/models/Realisation_model.php */