<?php

class Contacts extends CI_Controller {

  public function __construct() {
    parent::__construct();
    $this->load->model('contacts_model');
  }

  public function index() {
    $data['title'] = 'Lists Contacts';
    $data['contacts'] = $this->contacts_model->get_contacts();

    $this->load->view('templates/header_custom');
    $this->load->view('contacts/index', $data);
    $this->load->view('templates/footer');
  }

  public function create() {
    $this->contacts_model->set_contacts();
    $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('message' => "Successfully sending the contact. Thanks")));
  }

}

?>
