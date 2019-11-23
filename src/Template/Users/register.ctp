<body class="hero-image">
  <header>
    <div class="pt-0 text-center">
    <img src="images/cooky-black.png" style="width: 200px; height:auto;"></div>
  </header>
  <main>
    <div class="container my-3">  
    <div id="white" class="border" style="border-radius: 10px;">
    <div id="orange" class="panel-heading p-4 white-text text-center" style="color: "><h3>Đăng ký tài khoản</h3></div><br><br>

    
    <form>
      <div class="form-group">
        <div class="form-group now">  
        
        <div class="row" >
          <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
          <div class="row">
          <div class="col-5 col-sm-4 col-md-4 col-xl-4 col-lg-4 text-right">
          <label for="InputName" class="col-form-label">Họ tên:</label></div>
          <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
          <input type="text" name="username" class="form-control" id="InputName" placeholder="Nhập họ tên..." onblur="JavaScript:chuanHoa(this);" required>
          <span id = "loi_hoten" style="position: relative; color: red; display: none; top: 5px; ">Bạn chưa nhập họ tên!</span>
          </div>
          </div><br>

          <div class="row">
          <div class="col-5 col-sm-4 col-md-4 col-xl-4 col-lg-4 text-right">

          <label for="InputDate" class="col-form-label d-inline">Ngày sinh:</label></div>
          <div class="col-6 col-sm-6 col-md-6 col-xl- col-lg-6">
          <input type="date" name="date"  class="form-control" id="InputDate" placeholder="Nhập ngày sinh...."  required>
          </div>
          </div><br>

          <div class="row">
          <div class="col-5 col-sm-4 col-md-4 col-xl-4 col-lg-4 text-right">
          <label for="InputEmail" class="col-form-label">Địa chỉ email:</label></div>
          <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
          <input type="email" name="useremail" class="form-control" id="InputEmail" onblur="checkEmail()" placeholder="Nhập email..." required>
          <span id="loi_email" style="position: relative; color: red; display: none; top: 5px;">Bạn chưa nhập E-mail!</span>
          </div>
          </div><br>
          </div>

          <div class="col-12 col-sm-12 col-md-6 col-xl-6 col-lg-6">
          <div class="row">
          <div class="col-5 col-sm-4 col-md-4 col-xl-4 col-lg-4 text-right">
          <label for="InputName" class="col-form-label">Tên đăng nhập:</label></div>
          <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
          <input type="text" name="usernickname" class="form-control" id="InputNName" placeholder="Nhập tên đăng nhập..."  required>
          <span id="loi_NName" style="position: relative; color: red; display: none; top: 5px;">Bạn chưa nhập tên đăng nhập!</span>
          </div>
          </div><br>

          <div class="row">
          <div class="col-5 col-sm-4 col-md-4 col-xl-4 col-lg-4 text-right">
          <label for="InputPassword" class="col-form-label d-inline">Mật khẩu:</label></div>
          <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
          <input type="password" name="userpassword" class="form-control" id="InputPassword" placeholder="Nhập mật khẩu..." required>
          <span id="loi_pass" style="position: relative; color: red; display: none; top: 5px;">Bạn chưa nhập mật khẩu!</span>
          </div>
          </div><br>

          <div class="row">
          <div class="col-5 col-sm-4 col-md-4 col-xl-4 col-lg-4 text-right">
          <label for="InputRePassW" class="col-form-label d-inline">Nhập lại mật khẩu:</label></div>
          <div class="col-6 col-sm-6 col-md-6 col-xl-6 col-lg-6">
          <input type="password" class="form-control" id="InputRePassW" placeholder="Nhập lại mật khẩu...." onblur="javascript: checkPass(this)" required>
            <span id="loi_pass1" style="position: relative; color: red; display: none; top: 5px;">Bạn chưa nhập lại mật khẩu!</span>
          	<span id="loi_pass2" style="position: relative; color: red; display: none; top: 5px;">Mật khẩu bạn nhập không đúng!</span>
          </div>
          </div>
          </div>
        </div> 
        <div class="row pt-3">
          <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
          <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <div class="form-check">
            
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" >
            <label class="form-check-label d-inline" for="exampleRadios1">
              Tôi đồng ý với <a class="orange" href="rules.html">các điều khoản</a> của Cooky.
            </label>
            </div>
          </div>
        </div>
       

        </div>
      </div>
      <!-- Hàng 6 -->  
      <div class="row py-3  justify-content-center">
        <!-- <a href="" class="btn btn-success px-5 round-button" onclick="chapNhan()">Đăng ký</a> -->
        <input type="button" class="btn btn-success px-5 round-button" value="Đăng ký" onclick="chapNhan()"/>
      </div>
    </form>
      
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
  	document.getElementById('InputName').focus();

  	document.getElementById('InputName').onkeyup = function(e) {
		doKeyUp(e,'InputDate');
	};

	 document.getElementById('InputDate').onkeyup = function(e) {
		doKeyUp(e,'InputEmail');
	};

	 document.getElementById('InputEmail').onkeyup = function(e) {
		doKeyUp(e,'InputNName');
	};

	 document.getElementById('InputNName').onkeyup = function(e) {
		doKeyUp(e,'InputPassword');
	};	

	 document.getElementById('InputPassword').onkeyup = function(e) {
		doKeyUp(e,'InputRePassW');
	};

    document.getElementById('InputName').onfocus = function(){
      document.getElementById('loi_hoten').style.display = 'none';
    };
    document.getElementById('InputEmail').onfocus = function(){
      document.getElementById('loi_email').style.display = 'none';
    };
    document.getElementById('InputNName').onfocus = function(){
      document.getElementById('loi_NName').style.display = 'none';
    };
    document.getElementById('InputPassword').onfocus = function(){
      document.getElementById('loi_pass').style.display = 'none';
    };
    document.getElementById('InputRePassW').onfocus = function(){
      document.getElementById('loi_pass1').style.display = 'none';
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
		if(document.getElementById('InputName').value === ""){
			document.getElementById('loi_hoten').style.display = 'inline';
			temp = false;
		}
		else{
			document.getElementById('loi_hoten').style.display = 'none';

		}
		if(document.getElementById('InputEmail').value === ""){
			document.getElementById('loi_email').style.display = 'inline';
			temp = false;
		}
		else{
			document.getElementById('loi_email').style.display = 'none';

		}
		if(document.getElementById('InputNName').value === ""){
			document.getElementById('loi_NName').style.display = 'inline';
			temp = false;
		}
		else{
			document.getElementById('loi_NName').style.display = 'none';
		}

		if(document.getElementById('InputPassword').value === ""){
			document.getElementById('loi_pass').style.display = 'inline';
			temp = false;
		}
		else{
			document.getElementById('loi_pass').style.display = 'none';
		}

		if(document.getElementById('InputRePassW').value === ""){
			document.getElementById('loi_pass1').style.display = 'inline';
			temp = false;
		}
		else{
			document.getElementById('loi_pass1').style.display = 'none';
		}
    
		if(document.getElementById('InputPassword').value !== document.getElementById('InputRePassW').value)
			temp = false;

		if(!document.getElementById('exampleRadios1').checked){
			temp = false;
		}

		if(temp == true) {
			alert('Bạn đã đăng ký thành công!')
			window.location.href='signin.html';
		}
    else{
      alert('Đăng ký không thành công!');
    }

	};
  function checkEmail() { 
    var email = document.getElementById('InputEmail'); 
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/; 
    if (!filter.test(email.value)) { 
             email.value="";
             email.focus; 
             return false; 
    }
}

	function checkPass(e){
		if(document.getElementById('InputPassword').value !== e.value){
			document.getElementById('loi_pass2').style.display = 'inline';
			document.getElementById('loi_pass1').style.display = 'none';
			temp = false;
		}

		else
			document.getElementById('loi_pass2').style.display = 'none';
			temp = true;
		}

  </script>
</body>
</html>