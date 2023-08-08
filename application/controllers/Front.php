<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	public function index()
	{
		redirect('front/home');
	}

	public function home()
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'home';
		if ($this->session->has_userdata('user') == false){
			$data['session']= false;
		}
		else{
			$data['session'] = $this->session->user;
		}

		$this->load->view('pages/home', ['data' => $data]);
	}

	public function reference()
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		

		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['compagnies'] = $this->compagnie->findAll();

		$data['lang'] = $lang;
		$data['page'] = 'reference';

		if ($this->session->has_userdata('user') == false){
			$data['session']= false;
		}
		else{
			$data['session'] = $this->session->user;
		}

		$this->load->view('pages/reference', ['data' => $data]);
	}

	public function achievements($is_search = 0, $num_page = 1)
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		

		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'achievements';

		if ($this->session->has_userdata('user') == false){
			$data['session']= false;
		}
		else{
			$data['session'] = $this->session->user;
		}


		$nbAffiche = 3;
		$data['page_en_cours'] = $num_page;

		$data['nb_resultat'] = count($this->realisation->findAll());
		$data['achievements'] = $this->realisation->findAllPagination($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche);
		// objet -> tableau
		$data['achievements'] = json_decode(json_encode($data['achievements']), true);
		$data['nbPages'] = $this->realisation->getNombrePage($nombre_resultat_affiche = $nbAffiche);

		if($is_search == 1) {
			$keyword = $this->input->get('keyword');
			$year = $this->input->get('year');
			$data['nb_resultat'] = count($this->realisation->all_resultat_search($keyword, $year));
			$data['achievements'] = $this->realisation->search($numero_page = $num_page, $nombre_resultat_affiche = $nbAffiche, $keyword = $keyword, $year = $year);
			// objet -> tableau
			$data['achievements'] = json_decode(json_encode($data['achievements']), true);
			$data['nbPages'] = $this->realisation->getNombrePageSearch($data['nb_resultat'] ,$nombre_resultat_affiche = $nbAffiche);
		}

		//set all images 
		$this->realisation->setAllImages($data['achievements']);
		$data['is_search'] = $is_search;
		$data['allYears'] = $this->realisation->getAllYears();
		

		$this->load->view('pages/achievements', ['data' => $data]);
	}

	public function contact()
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'contact';

		if ($this->session->has_userdata('user') == false){
			$data['session']= false;
		}
		else{
			$data['session'] = $this->session->user;
		}
		$this->load->view('pages/contact', ['data' => $data]);
	}

	public function sign_in($error = 0)
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}
		
		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'sign_in';
		if ($this->session->has_userdata('user') == false){
			$data['session']= false;
		}
		else{
			$data['session'] = $this->session->user;
		}

		if($error != 0) {
			$data['error'] = 'email error';
		}
		$this->load->view('pages/sign_in', ['data' => $data]);
	}

	public function sign_up()
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}

		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'sign_up';
		$this->load->view('pages/sign_up', ['data' => $data]);
	}

	public function detail_achievements($id = 1)
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}

		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'detail_achievements';
		if ($this->session->has_userdata('user') == false){
			$data['session']= false;
		}
		else{
			$data['session'] = $this->session->user;
		}
		$this->load->view('pages/detail_achievements', ['data' => $data]);
	}

	public function devis()
	{
		if ($this->session->has_userdata('lang') == false) {
			$this->session->set_userdata('lang', 'fr');
		}

		$lang = $this->session->lang;

		$data = $this->data->getData();

		$data['lang'] = $lang;
		$data['page'] = 'devis';
		$this->load->view('pages/devis', ['data' => $data]);
	}
}
