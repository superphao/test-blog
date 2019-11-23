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
    'bootstrap.min', 'jquery-3.3.1.slim.min', 'popper.min','sb-admin-2.min', 'metisMenu.min', 'sb-admin-2' )); 
    ?>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
      <div class="container">
        
        <?php echo $this->Html->link('<img src="/test-blog/img/images/cooky-black.png" style="width: 150px; height:auto;">', array('controller'=>'pages'),array('escape'=>false, 'class'=>'sidebar-brand d-flex align-items-center justify-content-center')) ?>

        <div class="collapse navbar-collapse" style="margin: 0px 30px" id="navbarCollapse" >
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="recommend.html">Giới thiệu<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.html">Trợ giúp</a>
            </li>
          </ul>
         <form id="search" class="form-inline my-2 my-lg-0 " style="padding: 0px">
            <input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm món ăn..." aria-label="Search">
            <button class="btn btn-outline-secondary my-2 my-sm-0 " type="submit">Tìm</button>
          </form>
          <!-- <button type="button" class="btn btn-light" onclick="window.location.href='signin.html'">Đăng nhập</button> -->
          
          <!-- Button trigger modal -->
           
          <!-- <?php echo $this->Html->link('Đăng nhập',array('controller'=>'users','action'=>'login'),array('escape'=>false, 'class'=>'btn btn-light'))?> -->
          <ul class="navbar-nav ml-auto" >
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"> <?= h($current_user_name) ?> </span>
                  <img class="img-profile rounded-circle" style="width: 35px; height: 35px"  src="http://www.clker.com/cliparts/n/l/p/q/K/L/blue-user-icon.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <?php echo $this->Html->link('<img src="https://cdn2.iconfinder.com/data/icons/customer-relationship-management-6/50/47-512.png" style="height="20" width="20""/> Manager',array('controller'=>'users','action'=>'index'),array('escape'=>false, 'class'=>'dropdown-item'))?>
                  <div class="dropdown-item" onclick="profile_user()">
                    <img src="https://library.kissclipart.com/20180904/ese/kissclipart-user-icon-png-clipart-computer-icons-user-66fe7db07b02eb73.jpg" style="height="20" width="20">
                    Profile
                  </div>
                  <div class="dropdown-divider"></div>
                  <?php echo $this->Html->link('<img src="https://cdn1.iconfinder.com/data/icons/materia-arrows-symbols-vol-3/24/018_128_arrow_exit_logout-512.png" style="height="20" width="20""/> Logout',array('controller'=>'users','action'=>'logout'),array('escape'=>false, 'class'=>'dropdown-item'))?>
                </div>
              </li>
            </ul>

          </div>
      </div>
    </nav>
<?php echo $this->fetch('content');?>