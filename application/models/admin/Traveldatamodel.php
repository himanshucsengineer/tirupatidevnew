<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class TraveldataModel extends CI_Model{
    function __construct() {
    }


      
  /*  public function fetchinventory_api(){

        return $getSlider = $this->db->select('*')->from('car_insurance')->get()->result();
    
    }*/
    /*public function fetchinventory_api() {
        //$deleteid='1';
        //$this->db->where('delete_status',$deleteid);
        $this->db->select('*');
        $this->db->from('car_insurance');
        $query = $this->db->get();
        return $query->result();


        //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
    }*/
    public function fetchinventory_api() {
    return $this->db->get('travel_insurance')->result_array();
 

      //return $getuser = $this->db->select('*')->from('tbl_subject')->get()->result();
  }

    public function deletetraveldata($data)
    {
        $explodData = explode(',',$data);
        $this->db->where_in('id',$explodData);
        $getDeleteStatus = $this->db->delete('travel_insurance');
        if($getDeleteStatus == 1)
        {
            return array('message'=>'yes');
      }else{
        return array('message'=>'no');
      }
      }
}
?>