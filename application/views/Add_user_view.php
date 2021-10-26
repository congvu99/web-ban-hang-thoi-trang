<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>Vendor/Style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<title>Quản trị tài khoản</title>
</head>
<body>
	
<div class="container">
	<h3 class=" alert alert-primary text-sm-center mt-2">THÊM TÀI KHOẢN</h3>
</div>

	<!-- insert data  -->
	<div id="insert">
		<div class="col-sm-10">
			<div class="col-sm-8 mt-5 push-sm-2">
					<form action="<?php echo base_url()?>index.php/Add_user/insertData" method="post" enctype="multipart/form-data">
				<div class="card-deck">
  					<div class="card">
			      		<h5 class="card-title">Input Username</h5>
			      		<input type="text" class="form-control " placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" name="ten">
						<h5 class="card-title">Input Password</h5>
			      		
						<input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="addon-wrapping" name="mk">
						<h5 class="card-title">Input Level</h5>
			      		
						<input type="text" class="form-control" placeholder="Level" aria-label="Username" aria-describedby="addon-wrapping" name="lv">
						<hr>
						
						<input type="submit" class="btn btn-success btn btn-block mb-2" value="Gửi dữ liệu lên">

			    	</div>
			 	 </div>
			</form>
			</div>
		
		</div>
	</div>
</body>
</html>