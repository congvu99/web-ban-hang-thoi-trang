<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_product extends CI_Controller {

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
		$data=$this->Bai2_model->getproduct();
		$data=array('dulieu'=>$data);
		$this->load->view('Quan_Ly_San_Pham',$data,FALSE);
	}
	
	public function deletesp()
	{
		$id=$this->uri->segment(3);
		$this->load->model('Bai2_model');
		$this->Bai2_model->deletepro($id);
		$this->hienthi();
	}

}

/* End of file Delete_product.php */
/* Location: ./application/controllers/Delete_product.php */