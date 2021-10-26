<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Export_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function exportList() {
        $this->db->select('*');
		$data=$this->db->get('sanpham');
		$data=$data->result_array();
		return $data;
        }

}

/* End of file Export_model.php */
/* Location: ./application/models/Export_model.php */