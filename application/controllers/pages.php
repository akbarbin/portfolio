<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Pages extends CI_Controller {

  public function view() {
    $this->load->view('templates/header');
    $this->load->view('pages/home');
    $this->load->view('pages/about');
    $this->load->view('pages/portfolio');
    $this->load->view('pages/contact');
    $this->load->view('templates/footer');
  }

}
