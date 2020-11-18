<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Transfermodel extends CI_Model {
    
    public function account_insert($data){
            $this->db->insert('transfer',$data);
            if($this->db->insert_id()){
                return true;
            }else{
                return false;
            }
            
            
        }
       

}?>