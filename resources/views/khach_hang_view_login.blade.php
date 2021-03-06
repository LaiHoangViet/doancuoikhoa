<!DOCTYPE html>
<html>
<head>
  <title>Đăng nhập</title>
  <link href="{{asset('css/login.css')}}" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
</head>
<body>
  <center>
    <form method="post" action="{{route('khach_hang_process_login')}}" class="dang-nhap1">
      {{csrf_field()}}
      <div class="sign-in">
        <h2 class="dang-nhap">Đăng nhập</h2>
      </div>
      <div class="form-dang-nhap">
        <div class="form-dang-nhap1">
          <span class="material-icons email1">
            person
          </span>
          <input type="text" name="Email" v-model="login.login" placeholder="Email" class="email"/>
        </div>
        <div class="form-dang-nhap1">
          <span class="material-icons email1">
            https
          </span>
          <input type="password" name="Mat_khau" v-model="login.password" placeholder="Mật khẩu" class="email"/>
        </div>
      </div>
      <div class="trang-dang-ky1">
        <a href="{{route('sign_up')}}" class="trang-dang-ky">Đăng ký</a>
      </div>    
      <div class="log-in">
        <button v-on:click="onSubmit" class="log-in1">Đăng nhập</button>
      </div>
    </form>
  </center>
</body>
</html>