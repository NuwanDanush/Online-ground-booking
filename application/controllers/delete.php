<?php  
class delete extends CI_Controller 
{
	public function index()
	{
		$this->load->view('header');
		$this->load->view('deleteview');
		$this->load->view('footer');
	}
	public function displaydata()
	{
		$this->load->view('header');
		$this->load->model('deletemodel');
		$result['data']=$this->deletemodel->displayrecords();
		$this->load->view('deleteview',$result);
		$this->load->view('footer');
	}
	/*Delete Record*/

   public function deletedata()
	{
	$this->load->model('deletemodel');
	$id=$this->input->get('id');
	$this->deletemodel->deleterecords($id);
	echo "Date deleted successfully !";
	redirect("delete/displaydata");  
	}
	 
}
?>