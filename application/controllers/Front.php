<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

	public function index() {
		redirect('front/home');
	}

	public function home() {
		if($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'home'; 

		$this->load->view('pages/home', ['data' => $data]);
	}

	public function reference() {
		if($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'reference'; 
		$this->load->view('pages/reference', ['data' => $data]);
	}

	public function achievements() {
		if($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'achievements'; 
		$this->load->view('pages/achievements', ['data' => $data]);
	}

}
