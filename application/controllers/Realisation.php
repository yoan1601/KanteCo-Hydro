<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Realisation
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

class Realisation extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    
  }

  public function search() {
      // echo json_encode($this->realisation->get_all_column_text());
      echo json_encode($this->realisation->all_resultat_search("","2023"));
  }

}


/* End of file Realisation.php */
/* Location: ./application/controllers/Realisation.php */