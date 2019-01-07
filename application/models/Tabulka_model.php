<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tabulka_model
 *
 * @author Michaela
 */
class Tabulka_model extends CI_Model {
    //put your code here
      public function __construct() {
        parent::__construct();
       
    }
    
    function getSeznamPostav($sloupec,$razeni)
    {
       $this->db->select('ID, jmeno_eng, house_name, nickname, jmeno_cz, first_episode, last_episode');
        $this->db->from('postavy');
        $this->db->order_by($sloupec, $razeni); //od největšího po nejmenší
        $this->db->where('zobrazit', 1);
        $data = $this->db->get()->result();
        return $data;   
    }
    
    function  getMaxID(){
        $this->db->select('Max(ID) as max', FALSE);    
        $this->db->from('postavy');
        
        $result = $this->db->get()->result();
        return $result[0]->max;
    }
     public function setPostava($jmeno_eng, $house_name,$nickname,$jmeno_cz,$first_episode, $last_episode, $id)
    {
        $data = array(
            'ID' => $id,
            'jmeno_eng' => $jmeno_eng,
            'house_name' => $house_name,
            'nickname' => $nickname,
            'jmeno_cz' =>$jmeno_cz,
            'first_episode' => $first_episode,
            'last_episode' => $last_episode,
            );
            $return = $this->db->insert('postavy', $data);
            return $return;
        
    }
     function getEditovatPostavy($id)
    {
         $this->db->select('ID, jmeno_eng, house_name, nickname, jmeno_cz, first_episode, last_episode');
        $this->db->from('postavy');    
        $this->db->where('ID', $id);
        $data = $this->db->get()->result();
        return $data[0];  
        
        
    }
     public function setEditPostavy(  $jmeno_eng, $house_name,$nickname,$jmeno_cz,$first_episode, $last_episode, $id)
    {
        $data = array(
            
           'jmeno_eng' => $jmeno_eng,
            'house_name' => $house_name,
            'nickname' => $nickname,
            'jmeno_cz' =>$jmeno_cz,
            'first_episode' => $first_episode,
            'last_episode' => $last_episode,
            );
              $this->db->where('ID', $id);
       return  $this->db->update('postavy', $data);
    
        
    }
    
     function setSmazatPostavu($id){
        $data = array(
            'zobrazit'=> 0,
        );
        
        $this->db->where('ID', $id);
        $this->db->update('postavy', $data);
        
        
    }
    
}