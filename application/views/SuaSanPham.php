<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/suasanpham.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>/Vendor/fontawesome-free-5.12.1-web/css/all.css">
  <title></title>
</head>
<body>
 <div class="container">
   <hr>
  
   <div class="all">
    <?php foreach ($dulieu as $key => $giatri): ?>
      <a href="">
      <div class="_1khoi">
      <div class="top">
        <img src="<?= $giatri['anhmot'] ?>" alt="" class="layer1">
        <img src="<?= $giatri['anhhai'] ?>" alt="" class="layer2">
        <div class="layer3">
          <i class="icon lop1 far fa-thumbs-up"></i>
          <i class="icon lop2 fas fa-heartbeat"></i>
          
          <a href="<?php echo base_url(); ?>index.php/Cart/getproduct/<?= $giatri['id'] ?>"><i class="icon lop3 fas fa-shopping-cart"></i></a>
        </div> <!-- end div layer3 -->
      </div> <!-- end div top -->
      <div class="bottom">
        <div class="text1">
          <?= $giatri['tensp'] ?>
        </div>
        <div class="text2">
          <?= $giatri['gia'] ?>$
        </div>
      </div> <!-- end div bottom -->
    </div> </a><!-- end div _1khoi -->
    <?php endforeach ?>
    
      

  </div> <!-- end div all --> 
  </div> 

</body>
</html>