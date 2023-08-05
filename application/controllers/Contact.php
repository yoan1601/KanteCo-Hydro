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

  public function send_contact(){
    $contact= "0341040539";
    $message = "Voici un message";
    $mail = "mirija@gmai.com";

    require APPPATH.'constant\validation_msg.php';
    $this->validation->set_rules(
      "contact", "contact",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "message", "message",
      'trim|required',
      $error_msg
    );
    $this->validation->set_rules(
      "email", "adresse email",
      'trim|required',
      $error_msg
    );
    // $this->contact->insert($contact, $message, $mail);
  }

  public function index()
  {
    // 
  }

}


/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */