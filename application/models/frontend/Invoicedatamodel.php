<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Invoicedatamodel extends CI_Model {

    public function fetch_referId(){
       
      return $this->db->get('refer_admin')->result_array();
        
    }
    public function fetch_user($id){
     return  $this->db->where('refer_id', $id)->get('admin_refer')->result_array();
        
    }
    
     public function fetch_policy($id){
     return  $this->db->where('email', $id)->get('admin_refer')->result_array();
        
    }
    public function fetch_wmoney($email){
     return  $this->db->where('email', $email)->get('transfer')->result_array();
        
    }
    function insert($data){
      return  $this->db->insert('invoice',$data);
  }

}

/* End of file Refermodel.php */
