<!DOCTYPE html>
<html>
<head>
	<title>@yield('tile')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript">
              function load(ma_gv)
              { 
              if(document.getElementById("gv").value !="")
                {
                  $.get(
                    '{{asset('/load')}}',
                    {ma_gv:ma_gv},
                    function(ok){
                      document.getElementById("mon-hoc").innerHTML = ok;
                    }
                    )
                }
              else { location.reload(); }
              };
  </script>

  <script type="text/javascript">
  @if (session('mess'))
          alert('{{ session('mess') }}','Thông báo');
  @endif
</script>

	<style type="text/css">
		.banner{
			width: 100%;
      margin-bottom: 20px;
      margin-top:10px;
		}
		.table{
			margin-top: 20px;
			text-align: center;
			border: 3px solid blue;
			vertical-align: middle;
		}
    .vande:hover {
      background-color: lightgrey;
    }
    .logo{
      width: 70px;
    }
    .navbar{
      background-color: #a1cbff;
    }
    b{
      color: black;
    }
    .dang_xuat{
      text-align: center;
    }
    .submit{
      float: left;
    }
    h2{
      font-family: time new romen;
    }
    h1{
      color: blue;
      margin: 10px 0px 10px 0px;
    }
	</style>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{asset('/')}}"><img class="logo" src="{{asset('img/logo.png')}}"></a>
      <h2 class="m-auto"><b>PHẦN MỀM ĐÁNH GIÁ GIẢNG VIÊN HNUE</b></h2>   
      <a href="{{asset('/dangxuat')}}" class="dang_xuat"><b>Đăng xuất</b><br><span>({{$masv}})</span></a> 
    </div>
 
</nav>

<div class="container-fluid">
	<img class="banner" src="{{asset('img/banner.png')}}">
</div>

@yield('main')

<footer class="bg-light text-center text-lg-start mt-3">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">HNUE</a>
  </div>
  <!-- Copyright -->
</footer>
</body>

</html>