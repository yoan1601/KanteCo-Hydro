<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Devis
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

class Devis extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function send_devis()
  {
    $user = $this->session->user;
    $type_projet = $this->input->post('type_projet');
    $description_projet = $this->input->post('description_projet');
    $montant = $this->input->post('montant');
    require APPPATH . 'constant/validation_msg.php';
    $this->validation->set_rules(
      "type_projet",
      "type de projet",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "description_projet",
      "description du projet",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "montant",
      "montant estimé",
      'required|greater_than[0]',
      $error_msg
    );
    if ($this->validation->run() == false) {
      $errors = array();
      foreach ($this->input->post() as $key => $value) {
        $errors[$key] = form_error($key);
      }
      var_dump(validation_errors());
    } else {
      $this->devis->insert($user->id, $type_projet, $description_projet, $montant);
      $resp = array(
        "state" => "success",
      );
      echo json_encode($resp);
      // redirect('front/devis');
    }
  }

  public function index()
  {
    // 
  }
}


/* End of file Devis.php */
/* Location: ./application/controllers/Devis.php */