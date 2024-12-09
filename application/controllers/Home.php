<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_articleDandapala', 'article');

    $this->load->helper('download');

  }
  public function index()
  {
    $showArticle = $this->article->show_all_data_article();
    $showMajalah = $this->article->show_all_data_majalah();


    $data = [
      'articles' => $showArticle,
      'allMajalah' => $showMajalah,
      'footerClass' => 'footer-wrapper footer-layout2 bg-transparent'
    ];
    $this->load->vars($data);
    $this->load->view('front/v_home');
  }

  public function showDetailArticle($slug)
  {
    $addViewCounter = $this->article->add_view($slug, 'article');

    $detailArticle = $this->article->show_article_by_slug($slug);

    if ($addViewCounter) {
      $data = [
        'article' => $detailArticle
      ];
      $this->load->vars($data);
      $this->load->view('front/v_article_detail');
    }

  }

  public function showDetailMajalah($slug)
  {
    $addViewCounter = $this->article->add_view($slug, 'majalah');

    $detailMajalah = $this->article->show_majalah_by_slug($slug);

    if ($addViewCounter) {
      $data = [
        'majalah' => $detailMajalah
      ];
      $this->load->vars($data);
      $this->load->view('front/v_majalah_detail');
    }

  }
}
