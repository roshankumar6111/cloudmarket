<?php 
   class Cloudmarketlogin extends CI_Controller{
       public function login(){
          $this->form_validation->set_rules('email','Email','required|valid_email');
          $this->form_validation->set_rules('password','Password','required|trim');
          $this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");
          if($this->form_validation->run()==TRUE){
              $email=$this->input->post('email');
              $password=$this->input->post('password');
              $this->load->model('Cloudmarketloginmodel');
              $log_id=$this->Cloudmarketloginmodel->login($email,$password);
              if($log_id){
                  $this->session->set_userdata('id',$log_id);
                  return redirect('Seller');                 
              }
              else{                
    		      $this->session->set_flashdata('login_failed','Invalid Username or Password');
                  return redirect('Seller');
              }
          }
           else 
               {
                  $this->load->view('seller');
//                  echo validation_errors();
             }
       }   
       public function logout()
          {
             $this->session->unset_userdata('id');
             return redirect('Seller');
         }
     
   }