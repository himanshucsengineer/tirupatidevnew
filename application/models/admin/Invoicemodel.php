<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Invoicemodel extends CI_Model {

    public function fetch_referId(){
       
      return $this->db->get('invoice')->result_array();
        
    }
    public function fetch_user($id){
     return  $this->db->where('referid', $id)->get('admin_refer')->result_array();
        
    }
    function insert($data){
      return  $this->db->insert('invoice',$data);
  }

}

/* End of file Refermodel.php */
