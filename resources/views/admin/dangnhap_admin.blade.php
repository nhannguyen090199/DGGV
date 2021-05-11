<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<title>Forms</title>

<script type="text/javascript">
  @if (session('mess'))
          alert('{{ session('mess') }}','Thông báo');
  @endif
</script>
<style type="text/css">
        .limiter {
  width: 100%;
  margin: 0 auto;
}
.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding-top:  20px;
  position: relative;
  top: 0px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
  position: relative;

}
.container-login100::before { 
  width: 100%;
  height: 100%;
  top: 100px;
  left: 0;
  background-color: blue;
}
    .input99{
  font-family: Poppins-Regular;
    font-size: 16px;
    color: #fff;
    line-height: 1.2;
    display: block;
    width: 100%;
    height: 45px;
    background: blue;
    padding-left: 5px;
    }
    .wrap-login101 {
    width: 720px;
    height: 500px;
    border-radius: 50px;
    overflow: hidden;
    padding: 55px 55px 37px 55px;
    background: blue;
        background: rgb(29, 113, 171);
}
.login101-form-btn {
    font-family: arial;
    font-size: 16px;
    color: white;
    line-height: 1.2;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 0 20px;
    min-width: 120px;
    height: 50px;
    border-radius: 25px;
    background: blue;
    /* background: -webkit-linear-gradient(bottom, rgba(0,0,0,.15), #f8f9fa); */
    background: -o-linear-gradient(bottom, #7579ff, #b224ef);
    background: -moz-linear-gradient(bottom, #7579ff, #b224ef);
    background: linear-gradient(bottom, #7579ff, #b224ef);
    position: relative;
    z-index: 1;
    -webkit-transition: all 0.4s;
    -o-transition: all 0.4s;
    -moz-transition: all 0.4s;
    transition: all 0.4s;
    text-align: center;
}
h4{
  text-align: center;
  color: white
}
a{
  color: white;
}
  </style>

</head>

<body >
<form role="form" method="post">
  {{csrf_field()}}
<div class="limiter">
    <div class="container-login100" >
      <div class="wrap-login101">
        <form class="" action="" method="POST">
          <span class="">
            <div align="center">  <span class="" >
            <h2 style="color: white">ADMIN</h2>
          <div style="color: white; margin: 2px;margin-right:520px">Tài khoản:</div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">

            <input required style="border-radius: 6px;" class="input99" type="text" name="acc" placeholder="Nhập tài khoản ..." autofocus="">
            <span class="" data-placeholder="&#xf207;"></span>
          </div>
          <div style="color: white; margin: 2px;margin-right:520px">Mật khẩu:</div>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input required class="input99" style="border-radius: 6px; " type="password" name="password" placeholder="Nhập mật khẩu ..." value= "">
            <span class="" data-placeholder="&#xf191;"></span>
          </div>
          <div class="container-login100-form-btn" align="center">
          <br><br>
            <input type="submit"  class="login101-form-btn" name="submit" value="Đăng nhập">
          </div>                
        </form>
           


      </div>
    </div>
  </div>
</body>

</html>
