


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/product_cart.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/fontawesome-free-5.12.1-web/css/all.css">
  <title></title>
</head>
<body>
  
<?php require "Menu_top.php" ?>
 <?php require "Menu_Main.php" ?> 

<div class="container">
   <hr>
  <div class="alert alert-success">Product cart</div>
   <div class="all">
    <?php foreach ($dulieu as $key => $giatri): ?>
    	
    	<table class="table table-striped table-dark text-sm-center">
  <thead>
    <tr>
      <th scope="col">Num</th>
      <th scope="col">Images</th>
      <th scope="col">Product name</th>
      <th scope="col">Unit price</th>
      <th scope="col">Amount</th>
      <th scope="col">Into money</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>
      	<img src="<?= $giatri['anhmot'] ?>" alt="" class="image_product">
      </td>
      <td>
      	<p><?= $giatri['tensp'] ?></p>
      </td>
      <td>
      	<p><?= $giatri['gia'] ?>$</p>
      </td>
      <td>
      	<input type="number" placeholder="1" value="1" name="sl" id="sl"><br>
      	<button class="btn btn-info m-4" onclick="myFunction()" >Update Cart</button>
      </td>
      <td>

      	<p id="demo"></p>
		<script>
		function myFunction()
		{
			var x = <?= $giatri['gia']?> ;
			var y = document.getElementById("sl").value;
			document.getElementById("demo").innerHTML = x * y+"$";
		}
		
		</script>
      </td>
      
    </tr>
    
  </tbody>
</table>
      <a class="btn btn-info mb-5" href="<?php echo base_url()?>index.php/Bill/paythebill/<?= $giatri['id'] ?>">Thanh Toán</a>  
    <?php endforeach ?>
    
</div>
</body>
</html>
