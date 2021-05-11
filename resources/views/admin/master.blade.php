<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('tile')</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script src="js/lumino.glyphs.js"></script>
<style type="text/css">
	li{
		list-style: none;
	}
	a{
		word-wrap: break-word;

	}
	.@yield('back'){
		background-color: #ecff99;
	}
</style>
<script type="text/javascript">
              function load(ma_gv)
              { 
              if(document.getElementById("gv").value !="")
                {
                  $.get(
                    '{{asset('/test')}}',
                    {ma_gv:ma_gv},
                    function(ok){
                      document.getElementById("mon-hoc").innerHTML = ok;
                    }
                    )
                }
              else { location.reload(); }
              };
  </script>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#a1cbff">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="{{asset('/admin')}}"><b>HNUE | ADMIN</b></a>
				<ul class="user-menu">
					<li class="dropdown pull-right">	
						<ul >
							<li><a href="{{asset('/admin/dangxuat')}}">Đăng xuất</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	<div class="row">
		<div class="col-sm-3 col-xs-3 col-lg-3 shadow p-3 mr-5 bg-white rounded" style="background-color: white;min-height: 800px;">
			<ul class="nav flex-column">
				  <li class="nav-item tab1" >
				    <a class="nav-link " href="{{asset('/admin')}}" >Thống kê theo giảng viên</a>
				  </li>
				  <li class="nav-item tab2">
				    <a class="nav-link " href="{{asset('/monhoc')}}">Thống kê theo môn học</a>
				  </li>
				  <li class="nav-item tab3">
				    <a class="nav-link" href="{{asset('/tieuchi')}}">Thống kê theo tiêu chí</a>
				  </li>
				  <li class="nav-item tab4">
				    <a class="nav-link " href="{{asset('/vande')}}">Thống kê theo vấn đề</a>
				  </li>
				  <li class="nav-item tab5">
				    <a class="nav-link" href="{{asset('/quanlysinhvien')}}">Quản lý sinh viên</a>
				  </li>
				  <li class="nav-item tab6">
				    <a class="nav-link " href="{{asset('/quanlygiangvien')}}">Quản lý giảng viên</a>
				  </li>
				  <li class="nav-item tab7">
				    <a class="nav-link " href="{{asset('/quanlyvande')}}">Quản lý vấn đề</a>
				  </li>
				  <li class="nav-item tab8">
				    <a class="nav-link " href="{{asset('/quanlytieuchi')}}">Quản lý tiêu chí</a>
				  </li>
			</ul>
		</div>
		<div class="col-sm-9 col-xs-9 col-lg-9">
			@yield('admin')
		</div>
	</div>
    


	<script src="js/jquery-1.11.1.min.js"></script>
	
	<!-- <script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	 -->
</body>

</html>
