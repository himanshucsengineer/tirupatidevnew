<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReferandEarnmodel extends CI_Model {
    function refercode_insert($data){
        return  $this->db->insert('referandearn',$data);
    }
    function invite_data($data){
        return $this->db->insert('invite',$data);
         
    }
    function signup($data){
        return  $this->db->insert('referandearn',$data);
    }
    
    function fetchModeldata(){
        $response = array();
        $this->db->select('*');
        $q = $this->db->get('referandearn');
        $response = $q->result_array();
        return $response;
    }

   
    
    function update_bank($bank_acc,$ifsc,$acc_name,$email){
     
       
     $data = array(
                        'bank_acc' =>$bank_acc,
                        'ifsc' => $ifsc,
                        'acc_name' => $acc_name,
                        'email' => $email,
                    );
                    
        $this->db->set($data);
        $this->db->where('email',$email);
         $this->db->update('referandearn',$data);
    }
    
    
    
    
    
    
    
    
    
    function update_pro($name,$number,$email,$addrs){
      
         $data = array(
                        'name' =>$name,
                        'email' => $email,
                        'number' => $number,
                        'addrs' => $addrs,
                    );
                    
        $this->db->set($data);
        $this->db->where('email',$email);
         $this->db->update('referandearn');
    }
}
?>