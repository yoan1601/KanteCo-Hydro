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

class Language extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }


  public function index($language = 'fr', $page = 'home')
  {
    
    $this->session->set_userdata('lang', $language);
    $page = str_replace('-', '/', $page);
    redirect('front/'.$page);
  }

}
