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
          'answer' => 'Your expert partner for sustainable development',
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
          'detail_env'=>'Protecting and preserving: We provide environmental impact studies, geosciences, and risk management to preserve natural resources resources and promote a sustainable future.',
          'propos' => 'About us',
          'caroussel1_titre' => 'Building the Green Future',
          'caroussel1_p' => 'Find out how Hydrocamp Group is positioning itself as a major player in sustainable development and green engineering.',
          'caroussel2_titre' => 'Pioneers of Ecological Progress',
          'caroussel2_p' => 'Find out how Hydrocamp Group is leading the way towards significant ecological progress.',
          'caroussel3_titre' => 'Sustainable Engineering',
          'caroussel3_p' => 'Explore the world of sustainable engineering with Hydrocamp Group, the essential partner for the future.'
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
          'detail_env'=>'Protéger et préserver :Nous assurons des études d\'impact environnemental,géosciences, et gestion des risques pour préserver les ressources naturelles et promouvoir un avenir durable.',
          'propos' => 'A propos de nous',
          'caroussel1_titre' => 'Construire l\'Avenir Vert',
          'caroussel1_p' => 'Découvrez comment Hydrocamp Group se positionne en tant qu\'acteur majeur du développement durable et de l\'ingénierie verte.',
          'caroussel2_titre' => 'Pionniers du Progrès Écologique',
          'caroussel2_p' => 'Découvrez comment Hydrocamp Group a pris la tête du mouvement pour un progrès écologique significatif.',
          'caroussel3_titre' => 'Ingénierie Durable',
          'caroussel3_p' => 'Explorez le monde de l\'ingénierie durable avec Hydrocamp Group, le partenaire incontournable pour l\'avenir.'
      ),
      'header_en' => array(
        'item1' => 'Home',
        'item2' => 'Our references',
        'item3' => 'Our achievements',
        'item4' => 'Blog',
        'item5' => 'Contact Us',
        'item6' => 'Customer Area',
        'item7' => 'Log In',
        'item8' => 'Log Out'
      ),
      'header_fr' => array(
          'item1' => 'Accueil',
          'item2' => 'Nos Références',
          'item3' => 'Nos Réalisations',
          'item4' => 'Blog',
          'item5' => 'Nous Contacter',
          'item6' => 'Espace Client',
          'item7' => 'Se connecter',
          'item8' => 'Se déconnecter'
      ),
      'footer_en' => array(
          'item1'=> 'For your ambitious water, infrastructure and environmental projects, HYDROCAMP GROUP is your trusted partner. Together, towards a sustainable future.',
          'button_devis' => 'Ask for a quote',
          'item2' => 'HYDROCAMP GROUP is a company specializing in sustainable development and engineering.',
          'item3'=> 'Pages',
          'item4' => 'Subscribe to our newsletter to keep up to date with all our news!',
          'address' => 'Address',
          'mail' => 'Your e-mail',
          'inscription' => 'Sign up'
      ),
      'footer_fr' => array(
          'item1'=> 'Pour vos projets ambitieux en eau,infrastructure et environnement, HYDROCAMP GROUP est votre partenaire de confiance. Ensemble, vers un avenir durable.',
          'button_devis' => 'Demander un devis',
          'item2' => 'HYDROCAMP GROUP est une société spécialisée dans le développement durable et l\'ingénierie',
          'item3'=> 'Pages',
          'item4' => 'Inscrivez-vous à notre newsletter pour rester informé de toutes nos actualités !',
          'address' => 'Adresse',
          'mail' => 'Votre e-mail',
          'inscription' => "S'inscrire"
      ),
      'reference_en' => array(
          'item1' =>'Our references',
          'item2' => 'Discover our references. Sustainable projects that have made a difference.'
      ),
      'reference_fr' => array(
          'item1' =>'Nos références',
          'item2' => 'Découvrez nos références. Des projets durables qui ont fait la différence'
      ),
      'contact_fr' => array(
          'item1' =>'Contact',
          'item2' =>'Message',
          'item3' => 'Votre Email',
          'item4' => 'Envoyer',
          'item5' => "Nos services étudient et interviennent à la réalisation, en intégrant les normes liées au respect de l'environnement, dans les domaines liés à",
          'item6' => "Eau, Assainissement et Hygiène (EAH)",
          'item7' => "Aménagement hydraulique (Hydro-agricole, bassin versant, barrage, aménagement du territoire …)",
          'item8' => "Adduction en eau potable (FPMH, AEPS, AEPG)",
          'item9' => "Forage deau et puits moderne",
          'item10' => "Energie renouvelable",
          'item11' => "Bâtiment et travaux public",
          'item12' => "Géosciences (Hydrogéologie, Géophysique, géotechnique, mines, environnement, SIG et télédétection)",
          'item13' => "Etude d' impact environnemental",
          'item14' => "Gestion des risques et catastrophes naturelles",
          'item15' => "Ainsi, toutes activités pouvant rattachés directement ou indirectement à lobjet social.",
          'item16' => "Laissez-nous prendre en charge votre projet, nous nous occupons de tout le reste."
      ),
      'contact_en' => array(
        'item1' =>'Contact',
        'item2' =>'Message',
        'item3' => 'Your Email',
        'item4' => 'Send',
        'item5' => "Our services include design and implementation of environmentally-friendly solutions in the fields of",
        'item6' => "Water, Sanitation and Hygiene (WASH)",
        'item7' => "Hydraulic engineering (Hydro-agricultural, watershed, dam, land use development ...)",
        'item8' => "Drinking water supplies (FPMH, AEPS, AEPG)",
        'item9' => "Water drilling and modern wells",
        'item10' => "Renewable energy",
        'item11' => "Building and civil engineering",
        'item12' => "Geosciences (hydrogeology, geophysics, geotechnics, mining, environment, GIS and remote sensing)",
        'item13' => "Environmental impact study",
        'item14' => "Risk and disaster management",
        'item15' => "All activities directly or indirectly related to the corporate purpose.",
        'item16' => "Let us take care of your project, and we'll take care of the rest."
      ),
      'realisation_fr' => array(
        'item1' =>'Explorez nos réalisations . Des projets durables qui font la différence.',
        'item2' => 'Mot clé',
        'item3' => 'année',
        'item4' => 'Résultats',
        'item5' => 'Nom de la mission',
        'item6' => 'Pays',
        'item7' => 'Année'
      ),
      'realisation_en' => array(
        'item1' =>'Explore our achievements . Sustainable projects that make a difference.',
        'item2' => 'KeyWord',
        'item3' => 'year',
        'item4' => 'Results',
        'item5' => 'Mission name',
        'item6' => 'Country',
        'item7' => 'Year'
      ),
      'sign_in_fr' => array(
        'item1' => 'Connexion',
        'item2' => 'Votre email',
        'item3' => 'Se connecter',
        'item4' => "J'ai pas encore de compte. ",
        'item5' => "S'inscrire?",
        'item6' => 'Mot de passe'
      ),
      'sign_in_en' => array(
        'item1' => 'Login',
        'item2' => 'Your e-mail',
        'item3' => 'Connect',
        'item4' => "I don't have an account yet. ",
        'item5' => "Join us?",
        'item6' => 'Password'
      ),
      'sign_up_fr' => array(
        'item1' => 'Inscription',
        'item2' => 'Nom',
        'item3' => 'Email',
        'item4' => "Numéro de téléphone",
        'item5' => "S'inscrire gratuitement",
        'item6' => "J'ai déjà un compte. ",
        'item7' => "Se connecter"
      ),
      'sign_up_en' => array(
        'item1' => 'Register',
        'item2' => 'Name',
        'item3' => 'E-mail',
        'item4' => "Phone number",
        'item5' => "Register for free",
        'item6' => "I already have an account. ",
        'item7' => "Log in"
      ),
      'detail_achievements_fr' => array(
        'item1' =>'Publié le:',
        'item2' => '#équipe #environnement #approche',
        'item3' => 'Par'
      ),
      'detail_achievements_en' => array(
        'item1'=> 'Released on:',
        'item2' => '#team #environment #approach',
        'item3' => 'By'
      ),
      'blog_en' => array (
        'item1' => "Explore our news blogs. Keep up to date with the latest developments and discover our articles.",
        'item2' => "Category"
      ),
      'blog_fr' => array(
        'item1' => "Explorez nos blogs d'actualités. Restez informé des dernières avancées et découvrez nos articles.",
        'item2' => "catégorie"
      ),
      'devis_fr' => array(
        'item1'=> 'Laissez-nous prendre en charge votre projet, nous nous occupons de tout le reste.',
        'item2' => ' Ensemble, vers un avenir durable !',
        'item3' => 'Contactez-nous et Demandez votre devis sur-mesure !',
        'item4' => 'Présentez-nous votre projet et vos besoins, nous vous répondrons avec un devis personnalisé',
        'item5' => 'Devis sur-mesure - À vous de jouer !',
        'item6' => 'Recevez notre proposition détaillée, adaptée spécialement à vos exigences et à votre budget.',
        'item7' => 'Laissez-nous réaliser votre projet',
        'item8' => 'Une fois le devis validé, notre équipe d\' experts se mettra en action pour concrétiser votre projet avec passion et professionnalisme.',
        'item9' => 'Type de projet (*)',
        'item10' => 'Description brève du projet (*)',
        'item11' => 'Montant estimé',
        'item12' => 'Valider'
      ),
      'devis_en' => array(
        'item1'=> "Let us take care of your project, and we'll take care of the rest.",
        'item2' => 'Together, towards a sustainable future!',
        'item3' => 'Contact us and ask for your customized quote!',
        'item4' => "Tell us about your project and your needs, and we'll give you a personalized quote.",
        'item5' => "Customized quotations - It's up to you!",
        'item6' => 'Receive our detailed proposal, specially tailored to your requirements and budget.',
        'item7' => 'Let us take care of your project',
        'item8' => 'Once the estimate has been validated, our team of experts will set to work to bring your project to fruition with passion and professionalism.',
        'item9' => 'Type of project (*)',
        'item10' => 'Brief description of the project (*)',
        'item11' => 'Estimated value',
        'item12' => 'Validate'
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