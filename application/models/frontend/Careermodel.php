<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Careermodel extends CI_Model {
    
    function career_insert($datas){
        $this->db->insert('career',$datas);
        return true;
    }


public function updte_profile($vl){      
        
         
         $getInsertData= $this->db->update('career',$vl);   
            if($getInsertData == 1)
            {
                 return true;
            }
            else
            {
                return false;
            } 
        
      } 


public function updte_profile_img($vl){      
        
        
         $getInsertData= $this->db->update('career',$vl);   
            if($getInsertData == 1)
            {
                 return true;
            }
            else
            {
                return false;
            } 
        
      }



}?>