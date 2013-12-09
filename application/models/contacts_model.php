<?php

class Contacts_model extends CI_Model {

  function __construct() {
    // Call the Model constructor
    parent::__construct();
    $this->load->database();
  }

  public function get_contacts($id = FALSE) {
    if ($id === FALSE) {
      $query = $this->db->get('contacts');
      return $query->result_array();
    }

    $query = $this->db->get_where('contacts', array('id' => $id));
    return $query->row_array();
  }

  public function set_contacts() {
    $data = array(
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'phone_number' => $_POST['phone_number'],
        'content' => $_POST['content']
    );

    return $this->db->insert('contacts', $data);
  }

}

?>
