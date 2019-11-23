<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php  echo $this->Html->css(['signin', 'bootstrap.min', 'index&content']); ?>

  <title>Đăng nhập</title>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php
    echo $this->Html->script(array(
    'bootstrap.min', 'jquery-3.3.1.slim.min', 'popper.min')); 
    ?>

  
</head>
<?php echo $this->fetch('content');?>