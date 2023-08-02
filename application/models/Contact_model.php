<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Contact_model
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

class Contact_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }


  public function insert($contact, $message, $email){
    $this->db->insert('contacts',[
      "contact" => $contact,
      "message" => $message,
      "email" => $email
    ]);
  }


  public function findAll(){
    $query = $this->db->get('contacts');
    return $query->result();
  }

  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Contact_model.php */
/* Location: ./application/models/Contact_model.php */