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
class Login extends CI_Controller {
  
   public function __construct() 
   { 
       parent::__construct();       //vytváří instance - potomky
       $this->load->library('validation_pomocne');
       $this->load->model('Tabulka_model');
        $this->load->library('objectclass');
        

   }   
   
  
   
    public function test(){
       var_dump($this->session->flashdata("message"));
       $data['title'] = "Login";
       $data['main'] = "login";
       $this->layout->generate($data);
   }
   
    function register() {
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');
        $omezeni = array($password_min, $password_max);
        $inputs = array('name', 'surname', 'username', 'password', 'confirm');
        
        if(!isset($this->session->data)) {
            $data = $this->validation_pomocne->createFreeArray($inputs);
            $this->session->set_flashdata('data', $data);
        }
        
        $data["omezeni"] = $omezeni;
        $data["title"] = "Registrace";
        $data["main"] = "register";
        $this->layout->generate($data);
    }

    function registraceFinish() {
        //načtení konfiguračních proměnných
        $tables = $this->config->item('tables', 'ion_auth');
        $password_min = $this->config->item('min_password_length', 'ion_auth');
        $password_max = $this->config->item('max_password_length', 'ion_auth');
        //pole z formuláře
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $name = $this->input->post('name');
        $surname = $this->input->post('surname');       
        $confirm = $this->input->post('confirm');
        //podmínky polí
        $this->form_validation->set_rules('name', 'jméno', 'required');
        $this->form_validation->set_rules('surname', 'příjmení', 'required');

        $this->form_validation->set_rules('username', 'uživatelské jméno', 'required|is_unique[' . $tables['users'] . '.username]');
        $this->form_validation->set_rules('password', 'heslo', 'required|min_length[' . $password_min . ']|max_length[' . $password_max . ']|matches[confirm]');
        $this->form_validation->set_rules('confirm', 'potvrzení hesla', 'required');
        $return = $this->form_validation->run();
        if ($return) {
            $additional_data = array(
                'first_name' => $name,
                'last_name' => $surname
            );
            $this->ion_auth->register($username, $password, $additional_data);
            $this->session->set_flashdata('message', 'Účet vytvořen. Přihlaste se prosím.');
            redirect('admin/login');
        } else {           
            $inputs = array('name', 'surname',  'username', 'password', 'confirm');
            $values = array($name, $surname, $username, '', '');
            $data = $this->validation_pomocne->createData($inputs, $this->form_validation->error_array(), $values);            
            $this->session->set_flashdata('data', $data);            
            redirect('register');
        }
    }
   
   public function logout(){
       	$this->ion_auth->logout();
         $data = array(
                'message' => 'Úspěšně odhlášen'
            );
            $this->session->set_flashdata($data);        
      redirect('admin/login');
   }
   
    
    function loginFinish(){
        $name = $this->input->post('name'); //informace z inputu "name"
        $password = $this->input->post('password');  //informace z inputu "password"
       
        $return = $this->ion_auth->login($name, $password);

        if($return){
            redirect('administrace/dashboard');
                     
        }else {
            $data = array(
                'message' => 'Špatné uživatelské jméno a heslo'
            );
            $this->session->set_flashdata($data);
            redirect('admin/login');
            
        }
    }
    function seznamPostav()
    {
        
        $data['seznam'] = $this->Tabulka_model->getSeznamPostav();
        $data['title'] = "Postavy";
        $data['main'] = "tabulka2";
        
        $this->layout->generate($data);
        

        
    }
    
}