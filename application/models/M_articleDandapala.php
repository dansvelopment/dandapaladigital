<?php if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class M_articleDandapala extends CI_Model
{

  private $articles = "articles";
  private $majalah = "majalahdandapala";


  function __construct()
  {
    parent::__construct();
  }




  function show_all_data_article()
  {
    $this->db->where("publish_status", "Y");
    $this->db->limit(6);
    $this->db->order_by("published_at", "desc");
    return $this->db->get($this->articles)->result();
  }

  function show_all_data_majalah()
  {
    $this->db->where("publish_status", "Y");
    $this->db->limit(6);
    $this->db->order_by("created_at", "desc");
    return $this->db->get($this->majalah)->result();
  }

  function show_article_by_slug($slug)
  {
    $this->db->where("slug", $slug);
    return $this->db->get($this->articles)->row();
  }

  function show_majalah_by_slug($slug)
  {
    $this->db->where("slugMajalah", $slug);
    return $this->db->get($this->majalah)->row();
  }

  function show_data_by_slug($slug)
  {
    $this->db->where("slugDimensi", $slug);
    return $this->db->get($this->trans_dimensi)->row();
  }
  function get_article_by_category($category)
  {

  }

  function add_view($slug, $tipe)
  {
    if ($tipe == 'article') {

      $db = $this->articles;
      $nameslug = 'slug';
    } else if ($tipe == 'majalah') {
      $db = $this->majalah;
      $nameslug = 'slugMajalah';

    }

    $this->db->set('views', 'IFNULL(views,0)+1', FALSE);
    $this->db->where($nameslug, $slug);
    $this->db->update($db);
    return $this->db->affected_rows();
  }



  function add_download_count($filename)
  {
    $this->db->set('download_counter', 'IFNULL(download_counter,0)+1', FALSE);
    $this->db->where('dimensiFile', $filename);
    $this->db->update($this->trans_dimensi);
    return $this->db->affected_rows();

  }

}


