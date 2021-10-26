<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_bill extends CI_Controller {

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
		$data=$this->Bai2_model->getbill();
		$data=array('dulieu'=>$data);
		$this->load->view('Quan_Ly_don',$data,FALSE);
	}
	
	public function delete()
	{
		$id=$this->uri->segment(3);
		$this->load->model('Bai2_model');
		$this->Bai2_model->deletebill($id);
		$this->hienthi();
	}
}

/* End of file Delete_bill.php */
/* Location: ./application/controllers/Delete_bill.php */