<?php  
class display extends CI_Controller 
{
	
	public function displaydata()
	{
		$this->load->view('header');
        $this->load->model('displaymodel');
        $result['data']=$this->displaymodel->displaydata();
		$this->load->view('display',$result);
	}
	
	
}
?>