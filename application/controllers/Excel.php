<meta charset="utf-8">
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// load model
        
	}

	public function index()
	{
		error_reporting(0);
		$this->load->model('Bai2_model');
		$data=$this->Bai2_model->getbill();
		foreach ($data as $item): 

		?> 
		<table width="900" border="1px solid"  style="color:black;margin-left: 150px;font-size:21px;text-align:center" >

		<tr>
			<td>Tên khách hàng</td>
			<td>Địa chỉ</td> 
			<td>Số dt hoặc email</td>
		   	<td>Yêu cầu thêm</td>
		    <td>Tên sản phẩm</td>
		    
		    <td>Tổng tiền</td>

			
		</tr>
		<tr>
			
			<td><?php echo $item['name']; ?></td>
			<td><?php echo $item['address']; ?></td>
		    <td><?php echo $item['phoneandemail'];?></td>
		    <td><?php echo $item['information'];?></td>
		    <td><?php echo $item['productname'];?></td>
		    <td><?php echo $item['pice'];?></td>
		    
		    
		</tr>
		<br>

		</table>

		<?php endforeach;


        header("Content-Type:application/xls");
        header("Content-Disposition: attachment; filename=donhang.xls");
        echo $data;
	}


     

}

/* End of file Excel.php */
/* Location: ./application/controllers/Excel.php */