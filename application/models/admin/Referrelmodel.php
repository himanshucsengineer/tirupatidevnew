<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Referelrmodel extends CI_Model {

    public function fetch_refer(){
      return $this->db->get('invoice')->result_array();
        
    }
    

}