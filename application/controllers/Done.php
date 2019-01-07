<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of Login-controll
 *
 * @author buresova_michaela
 */
class Done extends Admin_Controller {
  
   public function __construct() 
   { 
       parent::__construct();       //vytváří instance - potomky
       $this->layout->setLayout('layout/layout_logged');
       $this->load->model('Tabulka_model');
      

   }   
    public function done(){
       
       $data['title'] = "Příhlášen";
       $data['main'] = "logged";
       $data['user'] = $this->user;
       $this->layout->generate($data);
   }
   public function tabulka($sloupec,$razeni){
       
       $data['seznam'] = $this->Tabulka_model->getSeznamPostav($sloupec,$razeni);
        $data['title'] = "Postavy";
        $data['main'] = "tabulka";
        
        $this->layout->generate($data);
   }
   
     public function addPostavu(){     
       $data['title'] = "Přidat postavu";
       $data['main'] = "addPostava";
       
       $this->layout->generate($data);
                
    }
    function addPostavuDone(){
        $jmeno_eng = $this->input->post('jmeno_eng');
        $house_name = $this->input->post('house_name');
        $nickname = $this->input->post('nickname');
        $jmeno_cz = $this->input->post('jmeno_cz');
        $first_episode = $this->input->post('first_episode');  
        $last_episode = $this->input->post('last_episode');
        $id = $this->Tabulka_model->getMaxID()+1;

        $return = $this->Tabulka_model->setPostava($jmeno_eng, $house_name,$nickname,$jmeno_cz,$first_episode, $last_episode, $id);
        redirect('tabulka');//přesměrování
    }
   function editovatPostavu($id)
    {
        
        $data['stav'] = $this->Tabulka_model->getEditovatPostavy($id); 
        $data['id'] = $id;
        
      
        $data['title'] = "Editace Postavu";
        $data['main'] = "editovatPostavu";
        $this->layout->generate($data);
      
    }
    function hotovoEditPostavy($id)
    {
        $jmeno_eng = $this->input->post('jmeno_eng');
        $house_name = $this->input->post('house_name');
        $nickname = $this->input->post('nickname');
        $jmeno_cz = $this->input->post('jmeno_cz');
        $first_episode = $this->input->post('first_episode');  
        $last_episode = $this->input->post('last_episode');
        $return = $this->Tabulka_model->setEditPostavy($jmeno_eng, $house_name,$nickname,$jmeno_cz,$first_episode, $last_episode, $id);
        redirect('tabulka');
        
    }
     function smazatPostavu($id)
    {
        $this->Tabulka_model->setSmazatPostavu($id);        
        redirect('tabulka');
    }
    
   }
