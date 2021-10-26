<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->hienthi();
	}
	public function hienthi()
	{
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getaccount();
		$data=array('dulieu'=>$data);
		$this->load->view('Form_admin_view',$data,FALSE);
	}
	
	public function deleteData($idnhanduoc)
	{
		$id=$this->input->post('id');
		$this->load->model('Bai2_model');
		$this->Bai2_model->delete($id);
		$this->Bai2_model->delete($idnhanduoc);
		$this->hienthi();
	}

}

/* End of file Delete.php */
/* Location: ./application/controllers/Delete.php */