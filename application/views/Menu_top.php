<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/Menu_top.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/fontawesome-free-5.12.1-web/css/all.css">
	<title></title>
</head>
<body>
	<div class="container">

		<div class="Menu_tong">
			<div class="Menu_left">
				<a href="<?php echo base_url() ?>index.php/DangNhap/">
					login/Register
					
				</a>
				<div class="con">
					<div class="card border-primary">
					<form action="<?php echo base_url() ?>index.php/DangNhap/login_data/" method="post" class="crad">
						  <div class="form-group">
						    <label for="exampleInputEmail1">UserName</label>
						    <input type="text" class="form-control" name="ten"  placeholder="Enter Username">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else.</small>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Password</label>
						    <input type="password" class="form-control" name="mk" placeholder="Password">
						  </div>
						  
						  <button type="submit" class="btn btn-primary btn btn-block mb-2">Submit</button>
						  <a href="http://localhost/baitap2/index.php/Add_data/">create account</a>
					</form>
							
					</div>
			</div>
			<div class="Menu_right">
				<form class="form-inline my-2 my-lg-0  " action="<?php echo base_url(); ?>index.php/Homepage/timkiem/" method="post">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="tenn">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form> 

			</div>
		</div>
		
	</div>
	<div class="container">
		<hr>
		<div class="logo" >
			<img src="<?php echo base_url() ?>Vendor/logo.png" alt="">
		</div>
		
	</div>
</body>
</html>