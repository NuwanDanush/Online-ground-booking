<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class create extends CI_Controller
{
    public function index()
	{
        $this->load->view('header');
        $this->load->view('create');
        $this->load->view('footer');
    
    } 
    public function savedata()
    {

        $this->load->model('insert');
        $result=$this->insert->save();
        //Check submit button 
        if($result)
        {
            $this->load->view('create');
        } 
        redirect("create/index");  
    }
} 