<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 * Model Blog_model
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

class Blog_model extends CI_Model {

  // ------------------------------------------------------------------------

  public function __construct()
  {
    parent::__construct();
  }

  public function format_to_full_date($data){
    for ($i=0; $i < count($data) ; $i++) { 
      // Date au format '2023-07-01' depuis MySQL
      $mysql_date = $data[$i]['date_publication'];

      // Créer un objet DateTime à partir de la date MySQL
      $date = new DateTime($mysql_date);

      // Formater la date dans le format '01 juillet 2023'
      $formatted_date = $date->format('d F Y');

      $data[$i]['date_publication_en'] = $formatted_date;

      // Définir la locale en français
      $locale = 'fr_FR';

      // Créer un objet IntlDateFormatter pour formater la date en français
      $dateFormatter = new IntlDateFormatter($locale, IntlDateFormatter::LONG, IntlDateFormatter::NONE);

      // Formater la date
      $formatted_date_FR = $dateFormatter->format($date);

      $data[$i]['date_publication_fr'] = $formatted_date_FR;
    }
    return $data;
  }

  public function setAllImages($blogs) {
    foreach ($blogs as $key => $a) {
      $this->db->where('idBlog', $a['id']);
      $a['images'] = json_decode(json_encode($this->db->get("blogs_images")), true);
    }
  }  

  public function search($numero_page = 1,$nombre_resultat_affiche = 3, $keyword = '', $year = ''){
    $year = trim($year);
    $keyword = trim($keyword);
    $calcul_limite = ($numero_page-1)*$nombre_resultat_affiche;
    $this->db->limit($nombre_resultat_affiche,$calcul_limite);
    // if ($year != ''){
    //   $this->db->where("annee_demarrage", $year);
    // }
    $columns = $this->get_all_column_text();
    $i = 0;
    if ($keyword != ''){
      foreach($columns as $column){
        if ($i == 0){
          $this->db->like($column->Field, $keyword, 'both');
        }
        else{
          $this->db->or_like($column->Field, $keyword, 'both');
        }
        $i+=1;
      }
    }
    
    $query = $this->db->get('v_blogs');
    return $query->result();
}

  public function all_resultat_search($keyword = '', $year = ''){
    $year = trim($year);
    $keyword = trim($keyword);
    // if ($year != ''){
    //   $this->db->where("annee_demarrage", $year);
    // }
    $columns = $this->get_all_column_text();
    $i = 0;
    if ($keyword != ''){
      foreach($columns as $column){
        if ($i == 0){
          $this->db->like($column->Field, $keyword, 'both');
        }
        else{
          $this->db->or_like($column->Field, $keyword, 'both');
        }
        $i+=1;
      }
    }
    $query = $this->db->get('v_blogs');
    return $query->result();
  }

  public function get_all_column_text(){
    $query = $this->db->query("SHOW COLUMNS FROM v_blogs WHERE Type = 'text'");
    return $query->result();
  }

  public function findAllPagination($numero_page,$nombre_resultat_affiche){
    $calcul_limite = ($numero_page-1)*$nombre_resultat_affiche;
    $this->db->limit($nombre_resultat_affiche,$calcul_limite);
    // $this->db->order_by("id");
    $query = $this->db->get("v_blogs");
    return $query->result();
  }

  public function getNombrePage($nombre_resultat_affiche = 2){
    $query = $this->db->get('v_blogs');
    $rows = count(($query->result()));
    return ceil($rows/$nombre_resultat_affiche);
  }

  public function getNombrePageSearch($nbResultat_total, $nombre_resultat_affiche = 2){
    $rows = $nbResultat_total;
    return ceil($rows/$nombre_resultat_affiche);
  }

  public function findAll(){
    $query = $this->db->get("v_blogs");
    return $query->result();
  }

  public function getAllYears() {
    $query = $this->db->get("v_blogs_all_year");
    return $query->result();
  }



  public function index()
  {
    // 
  }

  // ------------------------------------------------------------------------

}

/* End of file Blog_model.php */
/* Location: ./application/models/Blog_model.php */