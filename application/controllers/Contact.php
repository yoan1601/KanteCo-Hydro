<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Contact
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

class Contact extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function send_contact()
  {
    $contact = $this->input->post('contact');
    $message = $this->input->post('message');
    $mail = $this->input->post('mail');

    require APPPATH . 'constant/validation_msg.php';
    $this->validation->set_rules(
      "contact",
      "contact",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "message",
      "message",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "mail",
      "adresse email",
      'trim|required',
      $error_msg
    );
    if ($this->validation->run() == false) {
      $errors = array();
      foreach ($this->input->post() as $key => $value) {
        $errors[$key] = form_error($key);
      }
      var_dump(validation_errors());
    } else {
      $this->contact->insert($contact, $message, $mail);
      $state  =  $this->email->envoyer_email_contact($contact, $message, $mail);
      $resp = array(
        "state" =>$state,
      );
      echo json_encode($resp);
      // redirect('front/contact');
    }
  }

  public function index()
  {
    // 
  }
}


/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */