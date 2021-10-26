<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DangNhap extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Form_Dang_Nhap_view');
	}
	public function login_data()
	{
		$user=$this->input->post('ten');
		$pass=$this->input->post('mk');
		$this->load->model('Bai2_model');
		$result=$this->Bai2_model->login($user,$pass);

		if($result==1)
		{
			$this->load->view('DangNhapThanhCong');
			
		// $this->load->model('Bai2_model');
		// $data=$this->Bai2_model->getdata();
		// $data=array('dulieu'=>$data);
		// $this->load->view('Home_view', $data, FALSE);
		}
		else
			$this->load->view('DangNhapThatbai');
	}
}

/* End of file DangNhap.php */
/* Location: ./application/controllers/DangNhap.php */