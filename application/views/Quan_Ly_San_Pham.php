<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/showaccount.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/fontawesome-free-5.12.1-web/css/all.css">
  <title></title>
</head>
<body>


	<!-- phần hiển thị  -->
	<div class="container-fluid">
		
		<div class=" alert alert-info mt-3 text-sm-center">THÔNG TIN SẢN PHẨM</div>
			
		<div class="card-deck mt-2">
			<?php foreach ($dulieu as $key => $giatri): ?>
				<div class="col-sm-3 mt-2 ">
				 <div class="card">
				    <img src="<?=$giatri['anhmot']  ?>." class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Product Name: <?=$giatri['tensp']  ?></h5>
				      <p class="card-text">Price: <?=$giatri['gia']  ?></p>
				      
				      
				      <a href="#" class="btn btn-primary "><i class="fas fa-pencil-alt"></i></a>
				      <a href="<?php echo base_url(); ?>index.php/Delete_product/deletesp/<?= $giatri['id'] ?>" class="btn btn-danger fas fa-trash-alt"></a>
				    </div>
				 </div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
  
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-2">
        <a href="<?php echo base_url()?>index.php/Admin_controller/" class="btn btn-info btn btn-block"><i class="fas fa-arrow-left"> Back</i></a>
      </div>
    </div>
  </div>

</body>
</html>