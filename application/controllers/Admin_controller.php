<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getaccount();
		$data=array('dulieu'=>$data);
		$this->load->view('Form_admin_view',$data,FALSE);
	}
	public function QuanLyDon()
	{
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getbill();
		$data=array('dulieu'=>$data);
		$this->load->view('Quan_Ly_Don',$data,FALSE);
	}
	public function QuanLySP()
	{
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getproduct();
		$data=array('dulieu'=>$data);
		$this->load->view('Quan_Ly_San_Pham',$data,FALSE);
	}

}

/* End of file Admin_controller.php */
/* Location: ./application/controllers/Admin_controller.php */