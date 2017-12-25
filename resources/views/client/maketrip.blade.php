<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Lên lịch trình</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('client/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('client/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('client/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('client/dist/css/AdminLTE.css')}}">
  <link rel="stylesheet" href="{{url('client/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('client/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{url('client/css/myCSS/myCSS-maketrips.css')}}">
</head>
<body class="hold-transition skin-blue sidebar-mini" onload="hidden()">
<div class="wrapper">
  <header class="main-header">
    <a class="logo">
      <span class="logo-mini"><img class="logo-img" src="{{url('client/images/logo.png')}}"></span>
      <span class="logo-lg"><b><img class="logo-img" src="{{url('client/images/logo.png')}}"> Dựng tiến trình</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"></a>
      <input class="form-control" type="text" name="" id="pac-input" placeholder="Nhập đia điểm">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
	        <li class="dropdown notifications-menu">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
	              <i class="fa fa-bell-o"></i>
	              <span>Gợi ý cho bạn</span>
	            </a>
	            <ul class="dropdown-menu">
		            <li class="header"><i class="fa fa-home text-aqua"></i><b> Nghỉ ngơi</b></li>
		            <li>
		                <ul class="menu">
		                	<li><a><input type="checkbox" name="helpOption" value="hotel" onchange="getHelpOption()"> Khách sạn</a></li>
		                 	<li><a><input type="checkbox" name="helpOption" value="lodging" onchange="getHelpOption()"> Nhà nghỉ</a></li>
		                </ul>
		            </li>
                <li class="header"><i class="fa fa-coffee text-aqua"></i><b> Ăn uống</b></li>
                <li>
                    <ul class="menu">
                      <li><a><input type="checkbox" name="helpOption" value="cafe" onchange="getHelpOption()"> Quán cafe</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="restaurant" onchange="getHelpOption()"> Nhà hàng</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="bakery" onchange="getHelpOption()"> Tiệm bánh</a></li>
                    </ul>
                </li>
		            <li class="header"><i class="fa fa-futbol-o text-blue"></i><b> Vui chơi, giải chí</b></li>
		            <li>
		                <ul class="menu">
		                	<li><a><input type="checkbox" name="helpOption" value="zoo" onchange="getHelpOption()"> Sở thú</a></li>
		                 	<li><a><input type="checkbox" name="helpOption" value="park" onchange="getHelpOption()"> Công viên</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="bar" onchange="getHelpOption()"> Quán bar</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="bowling_alley" onchange="getHelpOption()"> Sân bowling</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="campground" onchange="getHelpOption()"> Cắm trại</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="casino" onchange="getHelpOption()"> Casino</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="library" onchange="getHelpOption()"> Thư viện</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="movie_theater" onchange="getHelpOption()"> Giạp chiếu phim</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="museum" onchange="getHelpOption()"> Viện bảo tàng</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="night_club" onchange="getHelpOption()"> Câu lạc bộ đêm</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="spa" onchange="getHelpOption()"> SPA</a></li>
		                </ul>
		            </li>
		            <li class="header"><i class="fa fa-shopping-bag text-yellow"></i><b> Mua sắm</b></li>
		            <li>
		                <ul class="menu">
		                 	<li><a><input type="checkbox" name="helpOption" value="book_store" onchange="getHelpOption()"> Cửa hàng sách</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="clothing_store" onchange="getHelpOption()"> Cửa hàng quần áo</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="convenience_store" onchange="getHelpOption()"> Cửa hàng tiện dụng</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="department_store" onchange="getHelpOption()"> Cửa hàng bách hóa</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="electronics_store" onchange="getHelpOption()"> Cửa hàng điện tử</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="grocery or supermarket" onchange="getHelpOption()"> Cửa hàng tạp hóa hoặc siêu thị</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="jewelry_store" onchange="getHelpOption()"> Cửa hàng nữ trang</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="pet_store" onchange="getHelpOption()"> Cửa hàng thú cưng</a></li>
		                </ul>
		            </li>
		            <li class="header"><i class="fa fa-money text-green"></i> <b> Ngân hàng</b></li>
		            <li>
		                <ul class="menu">
		                	<li><a><input type="checkbox" name="helpOption" value="bank" onchange="getHelpOption()"> Ngân hàng</a></li>
		                 	<li><a><input type="checkbox" name="helpOption" value="atm" onchange="getHelpOption()"> Cây rút tiền (ATM)</a></li>
		                </ul>
		            </li>
		            <li class="header"><i class="fa fa-bicycle	 text-aqua"></i> <b> Phương tiện</b></li>
		            <li>
		                <ul class="menu">
                      <li><a><input type="checkbox" name="helpOption" value="bus_station" onchange="getHelpOption()"> Bến xe buýt</a></li>
		                	<li><a><input type="checkbox" name="helpOption" value="bicycle_store" onchange="getHelpOption()"> Cửa hàng xe đạp</a></li>
		                 	<li><a><input type="checkbox" name="helpOption" value="car_rental" onchange="getHelpOption()"> Thuê ô tô</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="car_repair" onchange="getHelpOption()"> Sửa xe</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="parking" onchange="getHelpOption()"> Chỗ đậu xe</a></li>
                      <li><a><input type="checkbox" name="helpOption" value="taxi_stand" onchange="getHelpOption()"> Đón Taxi</a></li>
		                </ul>
		            </li>
	            </ul>
	        </li>
          <!-- Tasks: style can be found in dropdown.less -->
	      	<li class="dropdown user user-menu">
		        <a href="#">
		        	<i></i>
		         	<span class="hidden-xs">Về trang tìm kiếm</span>
		        </a>
		    </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Phuong</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->

      <div id="iamhere" onclick="FindMe()" title="Vị trí hiện tại của bạn"><i class="fa fa-bullseye fa-lg"></i></div>


      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">QUẢN LÝ TIẾN TRÌNH</li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-gears"></i> <span>Xây dựng lịch trình</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu sortable list" id="myListLocation">
            <li class="disabled"><label>Bắt đầu</label><input class="form-control" type="date" name="startDate"></li>
            <li class="disabled"><label>Kết thúc</label><input class="form-control" type="date" name="endDate"></li><br>
            <div id="headListLocation"></div>
            <br>
            <li class="disabled">
                <input class="btn btn-success" type="button" name="" value="Sắp xếp" onclick="SortTime()">
            </li>
            <br>
            <li class="disabled">
                <input class="btn btn-danger" type="button" name="" value="Tạo tuyến đường" onclick="FindStreet()">
            </li>
            <br>
            <li class="disabled">
                <input class="btn btn-primary" type="button" name="" value="Lưu lịch trình của bạn" onclick="saveToDB()">
            </li>
            <br>
          </ul>
         
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i> <span>Lịch trình của bạn</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Lịch trình 1</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lịch trình 2</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Lịch trình 3</a></li>
          </ul>
        </li>
      </ul>
    </section>
  </aside>
  <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
  </div>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <div class="content-wrapper" id="map"></div>
</div>
</body>
<script src="{{url('client/js/jquery-1.11.0.min.js')}}"></script>
<script src="{{url('client/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('client/js/jquery.sortable.min.js')}}"></script>
<script src="{{url('client/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('client/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('client/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript" src="{{url('client/js/myJS/myJS-maketrip.js')}}"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEn8DqcOIU6VdZit9-RPhWrjyGoaFWksc&language=vi&libraries=places&callback=initMap"></script>
</html>
