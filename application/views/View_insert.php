<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>Vendor/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<title>Quản trị tài khoản</title>
</head>
<body>
	
<div class="container">
	<h3 class=" alert alert-primary text-sm-center mt-2">NHẬP THÔNG TIN SẢN PHẨM</h3>
</div>

	<!-- insert data  -->
	<div id="insert">
		
			<div class="col-sm-5 mt-2">
					<form action="<?php echo base_url()?>index.php/Add_data/insertData" method="post" enctype="multipart/form-data">
  					
			      		<h5 class="card-title text-sm-center"></h5>
			      		<input type="text" class="form-control " placeholder="Product Name" aria-label="Username" aria-describedby="addon-wrapping" name="ten">
						<h5 class="card-title text-sm-center mt-1"></h5>
			      		
						<input type="text" class="form-control" placeholder="Product price" aria-label="Username" aria-describedby="addon-wrapping" name="gia">
						<hr>
						<h5 class="card-title text-sm-center mt-1">Main photo</h5>
						<input type="file" class="form-control" placeholder="Level" aria-label="Username" aria-describedby="addon-wrapping" name="av1">
						<h5 class="card-title text-sm-center mt-1">secondary photo</h5>
						<input type="file" class="form-control" placeholder="Level" aria-label="Username" aria-describedby="addon-wrapping" name="av2">
						<hr>
						<input type="submit" class="btn btn-success btn btn-block mb-2" value="Gửi dữ liệu lên">

					</form>
			</div>
		
		</div>
	</div>
</body>
</html>