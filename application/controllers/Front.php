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

		$data['compagnies'] = $this->compagnie->findAll();

		$data['lang'] = $lang;
		$data['page'] = 'reference';

		$this->load->view('pages/reference', ['data' => $data]);
	}

	public function achievements($is_search = 0, $num_page = 1) {
		if($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'achievements'; 


		$nbAffiche = 3;
		$data['page_en_cours'] = $num_page;

		$data['nb_resultat'] = count($this->realisation->findAll());
		$data['achievements'] = $this->realisation->findAllPagination($numero_page = $num_page,$nombre_resultat_affiche = $nbAffiche);
		// objet -> tableau
		$data['achievements'] = json_decode(json_encode($data['achievements']), true);
		
		if($is_search == 1) {
			$keyword = $this->form->get('keyword');
			$year = $this->form->get('year');
			$data['nb_resultat'] = count($this->realisation->all_resultat_search($keyword, $year));
			$data['achievements'] = $this->realisation->search($numero_page = $num_page,$nombre_resultat_affiche = $nbAffiche, $keyword = $keyword, $year = $year);
			// objet -> tableau
			$data['achievements'] = json_decode(json_encode($data['achievements']), true);
		}
		
		$data['is_search'] = $is_search;
		$data['allYears'] = $this->realisation->getAllYears();
		$data['nbPages'] = $this->realisation->getNombrePage($nombre_resultat_affiche = $nbAffiche);

		$this->load->view('pages/achievements', ['data' => $data]);
	}

	public function contact() {
		if($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'contact'; 
		$this->load->view('pages/contact', ['data' => $data]);
	}

}
