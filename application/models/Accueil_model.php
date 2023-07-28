<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Accueil_model
 *
 * This Model for ...
 * 
 * @package		CodeIgniter
 * @category	Model
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Accueil_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function getVariableAccueil($language){
    if (strcasecmp($language,'en') == 0){
      $data = array(
        'button' => 'Find out more about us',
        'who' => 'Who are we ?',
        'answer' => 'Your expert partner for development development',
        'accueil_droite1' =>'HYDROCAMP GROUP is a company specializing in sustainable development and engineering.',
        'accueil_droite2' =>'Experts in engineering and the environment, designing sustainable infrastructures to meet people\'s needs and a better future.',
        'accueil_droite3' => 'At HYDROCAMP GROUP, we expertise, a passion for sustainability sustainable development and skills engineering and environmental skills.',
        'button2' => 'Find out more',
        'combien1' => '15+',
        'combien2' => '40+',
        'expert_permanent' => 'Ongoing experts',
        'consultant' => 'Consultants',
        'titre' => 'Our services',
        'apres titre' => 'Your sustainable future, our expertise. Innovative solutions for a prosperous future.',
        'eau' => 'Water',
        'infrastructure' => 'Infrastructure',
        'env' => 'Environmental',
        'detail_eau'=>'Solutions for access to drinking water: We offer Water, Sanitation and Hygiene (WASH) projects,water boreholes and water wells and sustainable sustainable solutions to guarantee reliable access to drinking water.',
        'detail_infrastructure'=>'Building a solid future: We design and realize developments hydraulic engineering and infrastructure,for harmonious development.',
        'detail_env'=>'Protecting and preserving: We provide environmental impact studies, geosciences, and risk management to preserve natural resources resources and promote a sustainable future.'
      );
      return $data;
    }else{
      $data = array(
        'button' => 'Découvrez-nous',
        'who' => 'Qui sommes-nous ?',
        'answer' => 'Votre partenaire expert pour un développement durable',
        'accueil_droite1' =>'HYDROCAMP GROUP est une société spécialisée dans le développement durable et l\'ingénierie ',
        'accueil_droite2' =>'Experts en ingénierie et environnement, concevant des infrastructures durables pour répondre aux besoins des populations et favoriser un avenir meilleur.',
        'accueil_droite3' => 'À HYDROCAMP GROUP, nous réunissons expertise, passion pour le développement durable et compétences en ingénierie et environnement.',
        'button2' => 'En savoir plus',
        'combien1' => '15+',
        'combien2' => '40+',
        'expert_permanent' => 'Experts permanents',
        'consultant' => 'Consultants',
        'titre' => 'Nos services',
        'apres titre' => 'Votre avenir durable, notre expertise. Solutions novatrices pour un futur prospère',
        'eau' => 'Eau',
        'infrastructure' => 'Infrastructure',
        'env' => 'Environnement',
        'detail_eau'=>'Des solutions pour l\'accès à l\'eau potable : Nous proposons des projets d\'Eau, Assainissement et Hygiène (EAH), des forages d\'eau et des solutions durables pour garantir un accès fiable à l\'eau potable.',
        'detail_infrastructure'=>'Bâtir un avenir solide : Nous concevons et réalisons des aménagements hydrauliques, des travaux publics et des infrastructures adaptées, pour un développement harmonieux des territoires.',
        'detail_env'=>'Protéger et préserver :Nous assurons des études d\'impact environnemental,géosciences, et gestion des risques pour préserver les ressources naturelles et promouvoir un avenir durable.'
      );
      return $data;
    }
  }

  public function index()
  {
    // 
  }


}

/* End of file Accueil_model.php */
/* Location: ./application/models/Accueil_model.php */