 <!-- written by congvu-8h/15am -->
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6SpejhU02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>Vendor/dangnhap.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300&display=swap" rel="stylesheet">
	<title>Login</title>
</head>
<body>
	<div class="login">
		<div class="card border-primary col-sm-4 ml-5 ">
			<form action="login_data" method="post" class="crad">
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
</body>
</html>