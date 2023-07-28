<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Reference
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

class Reference extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }


  public function index()
  {
    $data = $this->compagnie->findAll();
    echo json_encode($data);
  }

}


/* End of file Reference.php */
/* Location: ./application/controllers/Reference.php */