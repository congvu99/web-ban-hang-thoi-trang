<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bill extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->view('Bill_view');
	}
	public function paythebill()
	{
		$id=$this->uri->segment(3);
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getdataproduct($id);
		$data=array('dulieu'=>$data);
		$this->load->view('Bill_view', $data, FALSE);
	}

}

/* End of file Bill.php */
/* Location: ./application/controllers/Bill.php */