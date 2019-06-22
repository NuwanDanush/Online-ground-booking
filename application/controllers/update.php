<?php
class update extends CI_Controller 
{
 public function __construct()
 {
 parent::__construct();
 $this->load->database();
 $this->load->helper('url');
 $this->load->model('updatemodel');
 }
 /*
 public function savedata()
 { 
 $this->load->view('updateview1');
 if($this->input->post('save'))
 {
 $n=$this->input->post('id');
 $e=$this->input->post('name');
 $m=$this->input->post('nic');
 $k=$this->input->post('address');
 $l=$this->input->post('phone');
 $this->updatemodel->saverecords($n,$e,$m,$k,$l); 
 redirect("update/dispdata");  
 }
 }
 */
 public function dispdata()
 {
 $result['data']=$this->updatemodel->displayrecords();
 $this->load->view('header');
 $this->load->view('updateview',$result);
 $this->load->view('footer');
 }
 public function updatedata1(){
    $this->load->model('updatemodel');
    $result=$this->updatemodel->update();
    if($result){
       redirect('update/dispdata');
    }
 }
 

 function updatedata()
 {
    $id=$this->input->get('id');
    $result['data']=$this->updatemodel->displayrecordsById($id);
    $this->load->view('updateview1',$result); 
 }
 
}

