<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_bill extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$t=$this->input->post('ten');
		$dc=$this->input->post('diachi');
		$p=$this->input->post('phone');
		$tt=$this->input->post('thongtinthem');
		$tsp=$this->input->post('tensp');
		$g=$this->input->post('gia');

		
		$this->load->model('Bai2_model');
		$this->Bai2_model->insert_bill($t,$dc,$p,$tt,$tsp,$g);
		$this->load->view('Mua_thanh_cong');
	}

}

/* End of file Add_bill.php */
/* Location: ./application/controllers/Add_bill.php */