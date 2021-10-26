<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bai2_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function login($user,$pass)
	{
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		return $this->db->get('dangnhap')->num_rows();

	}
	public function getData($vitri)
	{
		$this->db->select('*');
		$data=$this->db->get('sanpham',4,$vitri);
		$data=$data->result_array();
		return $data;

	}
	public function insert($anh1,$anh2,$ten,$gia)
	{
		
		$dulieu=array('anhmot'=>$anh1,'anhhai'=>$anh2,'tensp'=>$ten,'gia'=>$gia);
		$this->db->insert('sanpham', $dulieu);
		return $this->db->insert_id();
	}
	public function insert_bill($ten,$diachi,$sodt,$tt,$tsp,$g)
	{
		
		$dulieu=array('name'=>$ten,'address'=>$diachi,'phoneandemail'=>$sodt,'information'=>$tt,'productname'=>$tsp,'pice'=>$g);
		$this->db->insert('donhang', $dulieu);
		return $this->db->insert_id();
	}
	public function delete($id)
	{
		$this->db->where('id', $id);
		
		$this->db->delete('dangnhap');
	}
	public function update($id,$name,$pass,$level)
	{
		$this->db->where('id', $id);
		$dulieu=array('username'=>$name,'password'=>$pass,'level'=>$level);
		$this->db->update('dangnhap', $dulieu);
	}
	public function sotrang()
	{
		$sotinhienthitren1trang=4;
		$this->db->select('*');
		$data=$this->db->get('sanpham');
		$data=$data->result_array();
		$tongsotin=count($data);
		$sotrang=ceil($tongsotin/$sotinhienthitren1trang);
		return $sotrang;

	}
	public function tim($n)
	{
		
		$this->db->where('tensp', $n);
		$data=$this->db->get('sanpham');
		$data=$data->result_array();
		return $data;

	}
	public function getdataproduct($id)
	{
		
		$this->db->where('id', $id);
		$data=$this->db->get('sanpham');
		$data=$data->result_array();

		return $data;

	}
	public function getaccount()
	{
		$this->db->select('*');
		$data=$this->db->get('dangnhap');
		$data=$data->result_array();
		return $data;
	}
	public function insertUser($name,$pass,$level)
	{
		
		$dulieu=array('username'=>$name,'password'=>$pass,'level'=>$level);
		$this->db->insert('dangnhap', $dulieu);
		return $this->db->insert_id();
	}
	public function getbill()
	{
		$this->db->select('*');
		$data=$this->db->get('donhang');
		$data=$data->result_array();
		return $data;
	}
	public function deletebill($id)
	{
		$this->db->where('id', $id);
		
		$this->db->delete('donhang');
	}
	public function exportData()
	{
		$this->db->where('id', $id);
		$data=$this->db->get('donhang');
		$data=$data->result_array();

		return $data;
	}
	public function getproduct()
	{
		$this->db->select('*');
		$data=$this->db->get('sanpham');
		$data=$data->result_array();
		return $data;
	}
	public function deletepro($id)
	{
		$this->db->where('id', $id);
		
		$this->db->delete('sanpham');
	}

}

/* End of file Bai2_model.php */
/* Location: ./application/models/Bai2_model.php */