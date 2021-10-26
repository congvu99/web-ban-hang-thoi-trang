<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_user extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Add_user_view');
	}
	public function insertData()
	{
		



		$t=$this->input->post('ten');
		$p=$this->input->post('mk');
		$l=$this->input->post('lv');
		
		$this->load->model('Bai2_model');
		$this->Bai2_model->insertUser($t,$p,$l);
		$this->load->view('Them_tk_thanh_cong');
	}

}

/* End of file Add_user.php */
/* Location: ./application/controllers/Add_user.php */