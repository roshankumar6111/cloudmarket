<?php 
   class Cloudmarketloginmodel extends CI_Model{
       public function login($email,$password){
           $data = $this->db->where(['email'=>$email,'password'=>$password])
                ->get('user');
               if($data->num_rows())
               {
                     
                   return $data->row();
               }
           else{
               return FALSE;
           }
       }
   }