

<body class="hero-image">
<main>
  <div class="container">  
    <div id="white" class="border" style="border-radius: 10px;">
    <div class="row py-4">
    
      <!-- Cột 1 -->
      <div class="col-xl-6 col-lg-6 d-none d-sm-none d-md-none d-lg-block border-right">
        <div class="text-center pt-5">
          <img src="/test-blog/img/cooky.png" style="width: auto; height: 100px;"><br><br>
          <h3 class="orange">Cùng nấu ăn và chia sẻ</h3><br>
          <div class="form-group mt-1">
          <!-- <input type="button" class="btn btn-success round-button mb-1 px-5" value="Đăng ký ngay" onclick="window.location.href='register.html'"/><br> -->
          <?php echo $this->Html->link('Đăng ký ngay',array('controller'=>'users','action'=>'register'),array('escape'=>false, 'class'=>'btn btn-success round-button mb-1 px-5'))?> <br>
          <!--<input type="button" class="btn btn-success round-button px-3" value="Xem với tư cách khách" style="margin-top: 10px;" onclick="window.location.href='index.html'"/> -->
          <?php echo $this->Html->link('Xem với tư cách khách',array('controller'=>'pages'),array('escape'=>false, 'class'=>'btn btn-success round-button px-3', 'style'=>'margin-top: 10px'))?>
          </div>
        </div>
      </div>

     
      <!-- Cột 2-->
      <div class="col-xl-6 col-lg-6">
        <div class="row py-4">
        <div class="col-1 col-sm-1 col-md-3"></div>
        <div class="col-10 col-sm-10 col-md-6">

        <div class="box-container box-middle box-space-around box-row-wrap">
          <div class="box-md-40 box-sm-80 box-xs-100">
            <div class="d-xl-none d-lg-none text-center">
            <img src="/test-blog/img/cooky.png" style="width: auto; height: 100px;">
          </div>
            <div class="text-center d-none d-sm-none d-md-none d-xl-block">
              <h1 class="title orange">
                Đăng nhập
              </h1>
            </div>
          </div>
        </div>

        <div class="box-container box-top box-space-around box-row-wrap">
          <div class="box-md-68 box-sm-80 box-xs-100">
            <div class="box-container box-top box-space-around box-row-wrap box-md-reverse">

              <div class="box-md-44 box-xs-100">
                <div class="panel panel-default box-xs-100">
                  <div class="panel-body panel-body-custom">
                    <div>

                      <!--<form class="new_user" id="new_user" action="/users/sign_in" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token"/>-->
                        <?= $this->Form->create() ?>
                        <div class="form-group margin-bottom-5px">
                          <!--<label for="user_email">Tên đăng nhập</label>:-->
                          <!-- <input class="form-control" placeholder="Username" autofocus="autofocus" required="required" type="email" value="" name="user[email]" id="user_email" /> -->
                          <?= $this->Form->control('email',array('class'=>"form-control", "placeholder"=>"Username", "autofocus", "required", "id"=>"user_email", "label"=>"Tên đăng nhập:"));?>
                            <span id="loi_NName" style="position: relative; color: red; display: none; top: 5px;">Bạn chưa nhập tên đăng nhập!</span>
                        </div>

                        <div class="form-group margin-bottom-5px">
                          <!--<label for="user_password">Mật khẩu</label>:-->
                          <!--<input class="form-control" placeholder="Password" required="required" type="password" name="user[password]" id="user_password" />-->
                          <?= $this->Form->control('password',array('class'=>"form-control", "placeholder"=>"password", "autofocus", "required", "id"=>"user_password", "label"=>"Mật khẩu:"));?>
                          <span id="loi_pass" style="position: relative; color: red; display: none; top: 5px;">Bạn chưa nhập mật khẩu!</span>
                        </div>

                      <div class="margin-bottom-5px">
                        <div class="row">
                          <div class="col-6 col-sm-6 col-md-6">
                          <input name="user[remember_me]" type="hidden" value="0" /><input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me" />
                          <label for="user_remember_me">Nhớ tài khoản</label>
                          </div>

                          <div class="col-6 col-sm-6 col-md-6">
                            <a id="quenmatkhau" href="" style="color: orange;">Quên mật khẩu?</a><br>
                          </div>
                        </div>
                      </div>
                          <div class="form-group">
                            <!--<button type="button" class="btn btn-success btn-block round-button" onclick="chapNhan()">Đăng nhập</button>
                            <button type="button" class="btn btn-success btn-block round-button d-xl-none d-lg-none" onclick="window.location.href='register.html'">Đăng ký ngay</button>
                            <button type="button" class="btn btn-success btn-block round-button d-xl-none d-lg-none" onclick="window.location.href='index.html'">Xem với tư cách khách</button>-->
                            <?= $this->Form->button('Login',array('button', 'class'=>'btn btn-success btn-block round-button')); ?>
                          
                          </div>
                          <?= $this->Form->end() ?>
                        
                        <hr>
                        <div class="text-center margin-bottom-15px">Hoặc đăng nhập bằng</div><br>

                        <div class="box-container box-space-around margin-bottom-20px">
                          
                            <div class="row">
                              <div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-6">
                            <a id="facebook"class="btn btn-block btn-social btn-facebook round-button" >
                              <span class="fa fa-facebook"></span>
                              <font color="white">Facebook</font>
                            </a>  
                              </div>
                              <div class="col-6 col-sm-6 col-md-12 col-lg-12 col-xl-6">
                              <a id="google" class="btn btn-block btn-social btn-google round-button">
                                <span class="fa fa-google"></span>
                                <font color="white">Google</font>
                              </a>  
                            </div>
                            </div>
                          </div>

                          </form>
                        </div>
                      </div>
                    </div>

                  </div>


                </div>
              </div>
            </div>
          </div>
          <div class="col-1 col-sm-1 col-md-3"></div>
        </div>
      </div>

    </div>
    </div>
  </div>
</main>
<footer id="footer">
    <ul style="padding: 15px; margin-bottom: 0px;">
      <h3 style="padding-bottom: 0px;text-decoration: none;">Ăn ngon cùng Cooky</h3>
      <p style="font-size: 14px"> @2019 design by Team 5</p>
    </ul>
  </footer>
  <script type="text/javascript">
    document.getElementById('user_email').focus();

    document.getElementById('user_email').onkeyup = function(e) {
    doKeyUp(e,'user_password');
  };
      document.getElementById('user_email').onfocus = function(){
        document.getElementById('loi_NName').style.display = 'none';
    };
      document.getElementById('user_password').onfocus = function(){
        document.getElementById('loi_pass').style.display = 'none';
    };
      function chuanHoa(e){
    temp = e.value.split(' ');
    var value = "";
    for (var i = 0; i < temp.length; i++) {
      if (temp[i].length > 0) {
        if(value.length > 0) value += " ";
        value += temp[i].substring(0,1).toUpperCase();
        value += temp[i].substring(1).toLowerCase();
      }
    }
    e.value = value;
  };
    function doKeyUp(e,nextId){
    if (e.keyCode == 13) {
      document.getElementById(nextId).focus();
    }
  };
  function chapNhan(){
     var temp = true;
        if(document.getElementById('user_email').value === ""){
      document.getElementById('loi_NName').style.display = 'inline';
      temp = false;
    }
    else{
      document.getElementById('loi_NName').style.display = 'none';
    }
        if(document.getElementById('user_password').value === ""){
      document.getElementById('loi_pass').style.display = 'inline';
      temp = false;
    }
    else{
      document.getElementById('loi_pass').style.display = 'none';
    }
    if(temp == true) {
      alert('Bạn đã đăng nhập thành công!')
      window.location.href='index.html';
    }
    else{
      alert('Đăng nhập không thành công!');
    }
  }
  </script>
</body>
</html>