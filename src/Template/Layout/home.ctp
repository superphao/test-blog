<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php  echo $this->Html->css(['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min', 'bootstrap.min', 'index&content']); ?>

  <title>Trang chủ</title>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php
    echo $this->Html->script(array(
    'bootstrap.min', 'jquery-3.3.1.slim.min', 'popper.min')); 
    ?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
        
        <a href="index.html">
        <img src="/test-blog/img/images/cooky-black.png" style="width: 150px; height:auto;">
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" style="margin: 0px 30px" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="recommend.html">Giới thiệu<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.html">Trợ giúp</a>
            </li>
          </ul>
         <form id="search" class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm món ăn..." aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0 " type="submit">Tìm</button>
          </form>
          <!-- <button type="button" class="btn btn-light" onclick="window.location.href='signin.html'">Đăng nhập</button> -->
          
          <!-- Button trigger modal -->
           
          <?php echo $this->Html->link('Đăng nhập',array('controller'=>'users','action'=>'login'),array('escape'=>false, 'class'=>'btn btn-light'))?>
          
          <!--<button type="button" class="btn btn-light" data-toggle="modal" data-target="#LoginModal"> 
            Đăng nhập
          </button>-->

        </div>
      </div>
    </nav>
<?php echo $this->fetch('content');?>