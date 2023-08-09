<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Devis_model
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

class Devis_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function insert($idUser,$type_projet, $description_projet, $montant){
    $this->db->insert('devis',[
      "idUser" => $idUser,
      "type_projet" => $type_projet,
      "description_projet" => $description_projet,
      "montant_estime" => $montant
    ]);
  }


  public function findAll(){
    $query = $this->db->get('devis');
    return $query->result();
  }

  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Devis_model.php */
/* Location: ./application/models/Devis_model.php */