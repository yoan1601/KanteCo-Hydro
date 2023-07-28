<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Data_model
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

class Data_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }


  public function getData(){
    $data= array(
      'accueil_en' =>array(
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
        ),
      'accueil_fr' => array(
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
      ),
      'header_en' => array(
        'item1' => 'Home',
        'item2' => 'Our references',
        'item3' => 'Our achievements',
        'item3' => 'Blog',
        'item4' => 'Contact Us',
        'item5' => 'Customer Area'
      ),
      'header_fr' => array(
          'item1' => 'Accueil',
          'item2' => 'Nos Références',
          'item3' => 'Nos Réalisations',
          'item3' => 'Blog',
          'item4' => 'Nous Contacter',
          'item5' => 'Espace Client'
      ),
      'footer_en' => array(
          'item1'=> 'For your ambitious water, infrastructure and environmental projects, HYDROCAMP GROUP is your trusted partner. Together, towards a sustainable future.',
          'button_devis' => 'Ask for a quote',
          'item2' => 'HYDROCAMP GROUP is a company specializing in sustainable development and engineering.',
          'item3'=> 'Pages',
          'item4' => 'Subscribe to our newsletter to keep up to date with all our news!'
      ),
      'footer_fr' => array(
          'item1'=> 'Pour vos projets ambitieux en eau,infrastructure et environnement, HYDROCAMP GROUP est votre partenaire de confiance. Ensemble, vers un avenir durable.',
          'button_devis' => 'Demander un devis',
          'item2' => 'HYDROCAMP GROUP est une société spécialisée dans le développement durable et l\'ingénierie',
          'item3'=> 'Pages',
          'item4' => 'Inscrivez-vous à notre newsletter pour rester informé de toutes nos actualités !'
      )
    );
      return $data;
  }

  // ------------------------------------------------------------------------


  // ------------------------------------------------------------------------
  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Data_model.php */
/* Location: ./application/models/Data_model.php */