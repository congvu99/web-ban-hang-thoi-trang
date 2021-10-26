
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/bill.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/fontawesome-free-5.12.1-web/css/all.css">
  <title></title>
</head>
<body>
  
<?php require "Menu_top.php" ?>
 <?php require "Menu_Main.php" ?>
 <hr> 
 <div class="container mt-3">
 	<div class="row">
 		<div class="col-sm-8">
 			<h5>BILLING DETAILS</h5>
 			<form action="<?php echo base_url()?>index.php/Add_bill/" method="post">
 				<div class="input-group mb-3 mt-5">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Your name</span>
				  </div>
				  <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="ten">
				</div>
				<div class="input-group mb-3 mt-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
				  </div>
				  <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="diachi">
				</div>
				<div class="input-group mb-3 mt-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="inputGroup-sizing-default">Phone number or Email</span>
				  </div>
				  <input type="text" class="form-control"  aria-describedby="inputGroup-sizing-default" name="phone">
				</div>
				<h5 class="mt-5">ADDITIONAL INFORMATION</h5>
				<div class="input-group mb-3 mt-3">
				  <div class="input-group-prepend">
				    <span class="input-group-text"  id="inputGroup-sizing-default"></span>
				  </div>
				  <input type="text" class="form-control"style="height: 15rem"  aria-describedby="inputGroup-sizing-default" name="thongtinthem">
				</div>
				
 			
 		</div>

 		<div class="col-sm-4">
 			<div class="alert alert-danger">YOUR ORDER!</div>
 			<?php foreach ($dulieu as $key => $giatri): ?>
 				
 			
 			<div class="card" style="width: 20rem;">
              <img class="card-img-top"  src="<?= $giatri['anhmot'] ?>" alt="Card image cap">
			  <div class="card-body">
			    <h5 name="tensp" class="card-title">Product Name:<input type="text" name="tensp" value=" <?= $giatri['tensp'] ?>"></h5>

			    <p class="card-text">Unit price: <input type="text" name="gia" value="<?= $giatri['gia'] ?>$"></p>
			    <button class="btn btn-primary" type="submit">Place Order</button>
			   
			  </div>
			</div>

			<?php endforeach ?>
 		</div>
 	</div></form>
 </div>
</body>
</html>