	
	
	
	
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getData(0);
		$st=$this->Bai2_model->sotrang();
		$data=array('dulieu'=>$data,'st'=>$st);
		$this->load->view('Home_view', $data, FALSE);
	}
	public function page(){
		$vitri=$this->uri->segment(3);
        $this->load->model('Bai2_model');
		$data=$this->Bai2_model->getData($vitri);
		$st=$this->Bai2_model->sotrang();
		$data=array('dulieu'=>$data,'st'=>$st);
		$this->load->view('Home_view', $data, FALSE);
        
      

    }
    public function back(){
    	$vitri=1;
    	$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getData($vitri-1);
		$st=$this->Bai2_model->sotrang();
		$data=array('dulieu'=>$data,'st'=>$st);
		$this->load->view('Home_view', $data, FALSE);
    }
     public function next(){
    	$vitri=0	;
    	$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getData($vitri+1);
		$st=$this->Bai2_model->sotrang();
		$data=array('dulieu'=>$data,'st'=>$st);
		$this->load->view('Home_view', $data, FALSE);
    }
    public function timkiem()
    {
    	$n=$this->input->post('tenn');
    	$this->load->model('Bai2_model');
    	$data=$this->Bai2_model->tim($n);
    	if($data!=null)
    	{
    		$data=array('dulieu'=>$data);
			$this->load->view('hien_thi', $data, FALSE);
    	}
    	else {
    		echo"không tìm thấy sản phẩm ".$n; 
    	}
    }

}

/* End of file Homepage.php */
/* Location: ./application/controllers/Homepage.php */