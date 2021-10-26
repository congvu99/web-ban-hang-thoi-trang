<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_user extends CI_Controller {

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
		$this->load->view('Update_user_view');
	}
	public function UpdateData()
	{
		
		$this->hienthi();
		$id=$this->uri->segment(3);
		$t=$this->input->post('ten');
		$p=$this->input->post('mk');
		$l=$this->input->post('lv');
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->update($id,$t,$p,$l);
		$this->load->view('Update_user_thanh_cong');
	}
		

}

/* End of file Update_user.php */
/* Location: ./application/controllers/Update_user.php */