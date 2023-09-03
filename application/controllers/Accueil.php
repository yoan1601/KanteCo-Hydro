<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Code
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

class Accueil extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }


  public function index($language = 'fr')
  {
    $data = $this->accueil->getVariableAccueil($language);
    echo json_encode($data);
  }


  public function pagination(){
    echo json_encode($this->realisation->findAllPagination(2,3));
  }

}
