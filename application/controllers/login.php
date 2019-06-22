<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class login extends CI_Controller {  
      
    public function index()  
    {  
        $this->load->view('loginview');  
    }  
    public function process()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('password');  
        if ($user=='juhi' && $pass=='123')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));   -
            $this->load->view('create');  
        }  
        else{  
            $data['error'] = 'Your Account is Invalid';  
            $this->load->view('loginview', $data);  
        }  
    }  
    public function logout()  
    {  
        //removing session  
        $this->session->unset_userdata('user');  
        redirect("login");  
    }  
  
}  
?>  