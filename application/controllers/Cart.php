<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Product_cart_view');
	}

	public function getproduct()
	{
		$id=$this->uri->segment(3);
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getdataproduct($id);
		$data=array('dulieu'=>$data);
		$this->load->view('Product_cart_view', $data, FALSE);

	}

}

/* End of file Cart.php */
/* Location: ./application/controllers/Cart.php */