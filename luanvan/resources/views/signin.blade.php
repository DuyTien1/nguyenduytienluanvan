<!DOCTYPE html>
<head>
<title>TRANG QUẢN LÝ ĐIỂM DANH SINH VIÊN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="20">
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{URL::asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{URL::asset('css/font.css')}}" type="text/css"/>
<link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{URL::asset('css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{URL::asset('css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{URL::asset('js/jquery2.0.3.min.js')}}"></script>
<script src="{{URL::asset('js/raphael-min.js')}}"></script>
<script src="{{URL::asset('js/morris.js')}}"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{ URL::to('/dashboard') }}" class="logo">
    ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="{{ URL::to('/dashboard') }}">
                <span class="username">{{ Session::get('admin_name') }}</span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="{{ URL::to('toeditadmin/'.Session::get('account_id')) }}"><i class="fa fa-cog"></i> Tùy Chỉnh</a></li>
                <li><a href="{{ URL::to('toresetpass/'.Session::get('account_id')) }}"><i class="fa fa-key"></i> Đổi Mật Khẩu</a></li>
                <li><a href="{{ URL::to('/logout') }}"><i class="fa fa-sign-out"></i> Đăng Xuất</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ URL::to('/dashboard') }}">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang Chủ</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="{{ URL::to('/tolistonline') }}">
                        <i class="fa fa-calendar-check-o"></i>
                        <span>Danh Sách Lớp Trong Giờ Học</span>
                    </a>
                </li>

                <li>
                    <a class="active" href="{{ URL::to('/signin') }}">
                        <i class="fa fa-pencil-square-o"></i>
                        <span>Trang Đăng Ký</span>
                    </a>
                </li>   
                <li>
                    <a class="active" href="{{ URL::to('/toliststudent') }}">
                        <i class="fa fa-user"></i>
                        <span>Danh Sách Sinh Viên</span>
                    </a>
                </li>               
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-graduation-cap"></i>
                        <span>Lớp Học</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/tolistclass') }}">Danh Sách Lớp Học</a></li>
						<li><a href="{{ URL::to('/toaddclass') }}">Đăng Ký Lớp Học</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-university"></i>
                        <span>Phòng Học</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/tolistclassroom') }}">Danh Sách Phòng Học</a></li>
						<li><a href="{{ URL::to('/toaddclassroom') }}">Thêm Phòng Học</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Môn Học</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/tolistsubject') }}">Danh Sách Môn Học</a></li>
						<li><a href="{{ URL::to('/toaddsubject') }}">Thêm Môn Học</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-rocket"></i>
                        <span>Tiết Học</span>
                    </a>
                    <ul class="sub">
						<li><a href="{{ URL::to('/tolistshift') }}">Danh Sách Tiết Học</a></li>
						<li><a href="{{ URL::to('/toaddshift') }}">Thêm Tiết Học</a></li>
                    </ul>
                </li>
                <li>
                    <a class="active" href="{{ URL::to('/tolistanonymous') }}">
                        <i class="fa fa-spinner"></i>
                        <span>Danh Sách Điểm Danh Sai</span>
                    </a>
                </li>   
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <?php
            $message = Session::get('message');
            if ($message) {
                echo '<p style="color: #009900; margin-top: 10px; margin-bottom: 10px; font-size: 20px; display: flex; align-item: center; justify-content: center;" class="text-alert">'.$message.'</p>';
                Session::put('message', null);
            }
            $message = null;
        ?>
        <?php
            $message2 = Session::get('message2');
            if ($message2) {
                echo '<p style="color: #800000; margin-top: 10px; margin-bottom: 10px; font-size: 20px; display: flex; align-item: center; justify-content: center;" class="text-alert">'.$message2.'</p>';
                Session::put('message2', null);
            }
            $message2 = null;
        ?>

        <?php
        $signins = DB::table('temps')->orderBy('temp_id', 'desc')->paginate(10);
        ?>

        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                Bảng Đăng Ký
                </div>
                <div>
                    <table class="table" ui-jq="footable" ui-options='{
                    "paging": {
                    "enabled": true
                    },
                    "filtering": {
                    "enabled": true
                    },
                    "sorting": {
                    "enabled": true
                    }}'>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>RFID</th>
                            <th>Thời Gian</th>
                            <th style="width: 100px;">Thao Tác</th>
                        </tr>
                    </thead>
                    @foreach($signins as $key)
                    <tbody>
                        <tr data-expanded="true">
                            <td>{{ $key->temp_id }}</td>
                            <td>{{ $key->rfid }}</td>  
                            <td>{{ $key->created_at }}</td>  
                            <td>  
                                <div style="display: flex; align-items: center; justify-content: space-around;">
                                    <a href="{{ URL::to('/sendupdate/'.$key->temp_id) }}" class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-pencil text-success text-active"></i>
                                    </a>
                                    <a onclick="return confirm('Bạn có chắc chắn muốn xóa?')" href="{{ URL::to('/deletesignin/'.$key->temp_id) }}" class="active styling-edit" ui-toggle-class="">
                                        <i class="fa fa-trash text-danger text-active"></i>
                                    </a>
                                </div>          
                                
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div style="display: flex; justify-content: center; align-item: center;">
            <span>{!! $signins->links() !!}</span>
        </div>
        </div>
	</section>	
<!--main content end-->
</section>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{URL::asset('js/scripts.js')}}"></script>
<script src="{{URL::asset('js/jquery.slimscroll.js')}}"></script>
<script src="{{URL::asset('js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{URL::asset('js/jquery.scrollTo.js')}}"></script>
<!-- morris JavaScript -->	
</body>
</html>
