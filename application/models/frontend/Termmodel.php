<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Termmodel extends CI_Model {
    
    function term_data($data){
        $this->db->insert('term_insurance',$data);
        return true;
    }

}?>