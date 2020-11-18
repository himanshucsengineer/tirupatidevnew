<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Travelmodel extends CI_Model {
    
    function travel_insert($datas){
        $this->db->insert('travel_insurance',$datas);
        return true;
    }

}?>