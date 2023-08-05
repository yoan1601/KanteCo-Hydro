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